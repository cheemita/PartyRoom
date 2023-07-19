<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/party.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Party Room</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION["auth"])) {
        header("Location: index.php");
        exit;
    } else {
        echo '<div class="container">
        <header class="
              d-flex
              flex-wrap
              align-items-center
              justify-content-center justify-content-md-between
              py-3
              mb-4
              border-bottom
            ">
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php#generalInfo" class="nav-link px-2 link-dark">General Information</a></li>
            <li><a href="index.php#packages" class="nav-link px-2 link-dark">Packages</a></li>
            <li><a href="index.php#slider" class="nav-link px-2 link-dark">Slider</a></li>
            <li><a href="index.php#gallery" class="nav-link px-2 link-dark">Gallery</a></li>
            <li><a href="#partyRoom.php" class="nav-link px-2 link-dark">Party Room</a></li>
          </ul>

          <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="logout.php">Sign out from ' . $_SESSION["auth"] . '</a></li>
          </ul>
        </div>
        </header>
    </div>';
    }
    ?>

  <select class="form-select w-25" id="packagesSelect" aria-label="Select your package!">
    <option value="1">Basic (1 chair)</option>
    <option value="1">Personal (1 chair)</option>
    <option value="3">Family (3 chairs)</option>
  </select>

    <main id="tables-frame"></main>

    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script>
        var modalWrap = null;

        const showModal = (title, description, yesBtnLabel = 'Yes', noBtnLabel = 'Cancel', callback) => {
            if (modalWrap !== null) {
                modalWrap.remove();
            }

            modalWrap = document.createElement('div');
            modalWrap.innerHTML = `
    <div class="modal fade" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-light">
            <h5 class="modal-title">${title}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>${description}</p>
          </div>
          <div class="modal-footer bg-light">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">${noBtnLabel}</button>
            <button type="button" class="btn btn-primary modal-success-btn" data-bs-dismiss="modal">${yesBtnLabel}</button>
          </div>
        </div>
      </div>
    </div>
  `;

            modalWrap.querySelector('.modal-success-btn').onclick = callback;
            document.body.append(modalWrap);
            var modal = new bootstrap.Modal(modalWrap.querySelector('.modal'));
            modal.show();
        }

        // Add table
        const tablesFrame = document.querySelector('#tables-frame');
        for (let i = 0; i < 15; i++) {
            const table = document.createElement('section');
            table.classList.add('table-custom');
            table.setAttribute('data-table-id', i+1);
            table.innerHTML = `<img src="img/table.png" alt="table" class="main">`;
            for (let j = 0; j < 10; j++) {
                const chair = document.createElement('img');
                chair.classList.add('chair');
                chair.classList.add('pos' + (j + 1));
                if (i === 0) {
                  chair.setAttribute('data-chair', `${j+1}`);
                } else {
                  chair.setAttribute('data-chair', `${i}${j+1}`);
                }
                chair.setAttribute('data-bs-toggle', 'popover');
                chair.setAttribute('data-bs-trigger', 'hover focus');
                chair.setAttribute('src', 'img/chair-available.png');
                chair.setAttribute('alt', 'chair');
                table.append(chair);
            }
            tablesFrame.append(table);
        }

        var chairsPerUser = +document.getElementById("packagesSelect").value;
        var chairsSelected = 0;

        document.getElementById("packagesSelect").addEventListener("change", function() {
          chairsPerUser = +document.getElementById("packagesSelect").value;
        });

        $(".chair").on("click", function() {
          var chairDOM = this;

          console.log({chairsPerUser}, {chairsSelected});
            if ($(this).attr("src") === "img/chair-occupied-user.png") {
                showModal('Remove my chair', 'Do you want to remove this chair?', "Yes, remove", "No, don't remove", () => {
                    chairsSelected--;
                    $(this).attr("src", "img/chair-available.png");
                    $.post('updateChairs.php', { action: "delete", chair: $(this).attr("data-chair"), user_id: '<?php echo $_SESSION['id']; ?>'  }, function(result) {
                      console.log("chair deleted", result);
                      $(chairDOM).popover('disable');
                    });
                });
            } else if ($(this).attr("src") === "img/chair-available.png") {
                if (chairsSelected >= chairsPerUser) return;
                showModal('Reserve new chair', 'Do you want to reserve this chair?', "Yes, reserve", "No, don't reserve", () => {
                    $(this).attr("src", "img/chair-occupied-user.png");
                    $.post('updateChairs.php', { action: "update", chair: $(this).attr("data-chair"), user_id: '<?php echo $_SESSION['id']; ?>'  }, function(result)
                    {
                        chairsSelected++;
                        console.log("chair updated");
                        chairDOM.setAttribute("title", "This chair is already occupied");
                        chairDOM.setAttribute("data-bs-content", `This is your new chair!`);
                        new bootstrap.Popover(chairDOM);
                    });
                });
            }
        });

        getChairs();

        async function getChairs() {
            let url = "code/chairs.php";
            await fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    data.forEach(chair => {
                        const chairDOM = document.querySelector(`[data-chair="${chair.id}"]`);
                        if (chair.idUser === '<?php echo $_SESSION['id']; ?>' ) {
                            chairsSelected++;
                            chairDOM.setAttribute("src", "img/chair-occupied-user.png");
                        } else {
                            chairDOM.setAttribute("src", "img/chair-occupied.png");
                        }
                        if (chair.user.length > 0) {
                            chairDOM.setAttribute("title", "This chair is already occupied");
                            chairDOM.setAttribute("data-bs-content", `${chair.user} is sitting here`);
                            new bootstrap.Popover(chairDOM);
                        }
                    });
                });
        }
    </script>
</body>

</html>