<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/custom.css" />
  <link rel="stylesheet" href="./css/carousel.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link href="ruta/a/bootstrap.min.css" rel="stylesheet">
  <link href="ruta/a/font-awesome.min.css" rel="stylesheet">
  <link href="ruta/a/bootstrap.min.css" rel="stylesheet">
<script src="ruta/a/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

  <script src="./js/pago.js"></script>
</head>

<title>Home</title>
</head>

<body>
  <!-- Nav -->

  <?php
  session_start();

  if (isset($_SESSION["auth"])) {
    echo '  <div class="container">
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
            <li><a href="#generalInfo" class="nav-link px-2 link-dark"> ADMIN </a></li>
            <li><a href="#packages" class="nav-link px-2 link-dark">Packages</a></li>
            <li><a href="#slider" class="nav-link px-2 link-dark">Slider</a></li>
            <li><a href="#gallery" class="nav-link px-2 link-dark">Gallery</a></li>
            <li><button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#modalContact">
                Contact Us
              </button></li>
          </ul>

          <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="logout.php">Sign out from ' . $_SESSION["auth"] . '</a></li>
            <li><a class="dropdown-item" href="Setting.php">Setting</a></li>
          </ul>
        </div>
        </header>
    </div>

    <div class="col-lg-6 mx-auto">
    <form action="createAdmin1.php" id="userSettingsForm" method="post">
      <div class="mb-3">
        <label for="numMesas" class="form-label">Numero de mesas:</label>
        <input type="text" class="form-control" id="numMesas" name="numMesas" required>
      </div>
      <div class="mb-3">
        <label for="numInvitados" class="form-label">Numero de invitados:</label>
        <input type="text" class="form-control" id="numInvitados" name="numInvitados" required>
      </div>

      <div class="mb-3">
      <label for="tipoFiesta" class="form-label">Tipo de fiesta:</label>
      <select class="form-select" id="tipoFiesta" name="tipoFiesta" required>
        <option value="">Selecciona el tipo de fiesta</option>
        <option value="Graduación">Graduación</option>
        <option value="Festival">Festival</option>
        <option value="Reunión">Reunión</option>
        <option value="Conferencia">Conferencia</option>
      </select>
    </div>

      <div class="mb-3">
        <label for="tipoComida" class="form-label">Seleciona tu comida:</label>
        <select class="form-select" id="tipoComida" name="tipoComida" required>
          <option value="">Selecciona una opción</option>
          <option value="Buffet">Buffet</option>
          <option value="Platillos a la carta">Platillos a la carta</option>
          <option value="Cena formal">Cena formal</option>
          <option value="Parrillada">Parrillada</option>
        </select>
      </div>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-3">
        <button type="submit" id="buttonSubmit" class="btn btn-primary btn-lg px-4 me-sm-3">Actualizar cambios</button>
      </div>
    </form>
  </div>
  
  
    
    
    ';
  }else if (isset($_SESSION["authInv"])) {
    echo '  <div class="container">
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
            <li><a href="#generalInfo" class="nav-link px-2 link-dark"> INVITADO </a></li>
            <li><a href="#packages" class="nav-link px-2 link-dark">Packages</a></li>
            <li><a href="#slider" class="nav-link px-2 link-dark">Slider</a></li>
            <li><a href="#gallery" class="nav-link px-2 link-dark">Gallery</a></li>
            <li><button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#modalContact">
                Contact Us
              </button></li>
          </ul>

          <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="logout.php">Sign out from ' . $_SESSION["authInv"] . '</a></li>
          </ul>
        </div>
        </header>
    </div>

    <div class="col-lg-6 mx-auto">
    <form action="updateSettingInv.php" id="userSettingsForm" method="post">
      <div class="mb-3">
        <label for="user" class="form-label">Username:</label>
        <input type="text" class="form-control" id="user" name="user" readonly value"'.$_SESSION["authInv"].'" required>
      </div>
      <div class="mb-3">
        <label for="new_username" class="form-label">New Username:</label>
        <input type="text" class="form-control" id="new_username" name="new_username" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="'.$_SESSION["email"].'" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">New Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm New Password:</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
      </div>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-3">
        <button type="submit" id="buttonSubmit" class="btn btn-primary btn-lg px-4 me-sm-3">Update Changes</button>
      </div>
    </form>
  </div>

    
    ';
  }  else {
    echo ' <div class="container">
      <header class="
            d-flex
            flex-wrap
            align-items-center
            justify-content-center justify-content-md-between
            py-3
            mb-4
            border-bottom
          ">
        <a href="/" class="
              d-flex
              align-items-center
              col-md-3
              mb-2 mb-md-0
              text-dark text-decoration-none
            ">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#generalInfo" class="nav-link px-2 link-dark">General Information</a></li>
          <li><a href="#packages" class="nav-link px-2 link-dark">Packages</a></li>
          <li><a href="#slider" class="nav-link px-2 link-dark">Slider</a></li>
          <li><a href="#gallery" class="nav-link px-2 link-dark">Gallery</a></li>
          <li><button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#modalContact">
              Contact Us
            </button></li>
        </ul>

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#modalSelectOp">
            Login
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSingUpOp">
            Sign up
          </button>
        </div>
      </header>
    </div>';
  }
  ?>

  <!-- Footer -->
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li><a href="#generalInfo" class="nav-link px-2 link-dark">General Information</a></li>
        <li><a href="#packages" class="nav-link px-2 link-dark">Packages</a></li>
        <li><a href="#slider" class="nav-link px-2 link-dark">Slider</a></li>
        <li><a href="#gallery" class="nav-link px-2 link-dark">Gallery</a></li>
        <li><button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#modalContact">
            Contact Us
          </button></li>
      </ul>
      <p class="text-center text-muted">Ever Alejandro Alvarez Quiñones</p>
    </footer>
  </div>

 

  <!-- Modal Contact us -->
  <div class="modal fade" id="modalContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h2 class="fw-bold mb-0">Send us a message!</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-5 pt-0">
          <form action="email.php" method="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="name" placeholder="name@example.com" name="name">
              <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-4" id="email" placeholder="name@example.com" name="email">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-5">
              <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" name="message"></textarea>
              <label for="message">Message</label>
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Send Message!</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="./js/jquery-3.6.0.min.js"></script>
  <script src="./js/bootstrap.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>