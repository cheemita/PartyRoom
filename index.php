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
          </ul>
        </div>
        </header>
    </div>';
  } else {
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

  <!-- Hero -->
  <div class="px-4 pt-5 text-center border-bottom" id="generalInfo">
    <h1 class="display-4 fw-bold">Alex Events</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">
        The best in doing any type of event, from weddings, fifteen years, celebrations, parties, concerts, and anything else you can think of.
        We have the best atmosphere, food, music and even better, the best price of all! </br>
        Do not hesitate to contact us if you require our services, where we will assist you in the best way. We are waiting for you at Alex Events!
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3" data-bs-toggle="modal" data-bs-target="#modalContact">
          Contact us!
        </button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh">
      <div class="container px-5">
        <img src="https://hostaljuanchocuba.com/wp-content/uploads/2020/12/2985-192258-edited.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" loading="lazy" width="700" height="500" />
      </div>
    </div>
  </div>

  <!-- General Info -->
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 mb-5">
    <div class="w-auto bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">The best decoration</h2>
        <p class="lead">Just like you dreamed</p>
      </div>
      <div class="overflow-hidden" style="max-height: 30vh">
        <div class="container px-5">
          <img src="https://www.marquid.com/wp-content/uploads/2017/06/6197706_orig.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" loading="lazy" width="700" height="500" />
        </div>
      </div>
    </div>
    <div class="w-auto bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Best party atmosphere</h2>
        <p class="lead">but in real life</p>
      </div>
      <div class="overflow-hidden" style="max-height: 30vh">
        <div class="container px-5">
          <img src="https://img.freepik.com/foto-gratis/salon-bodas-decorado-velas-mesas-redondas-centros-mesa_8353-10057.jpg?size=626&ext=jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" loading="lazy" width="700" height="500" />
        </div>
      </div>
    </div>
  </div>

  <!-- Sliders -->
  <div id="slider" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bg-primary text-white" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#ffc107"></rect>
        </svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>We also do crazy parties, like Project X</h1>
            <p>We just don't allow gnomes</p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#20c997"></rect>
        </svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>The best place for your wedding</h1>
            <p>Thousands of weddings and satisfied clients have had their event here!</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#0d6efd"></rect>
        </svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>The perfect place for your fifteen years</h1>
            <p>We did it to my sister here and it was cool 👍</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Packages -->
  <div class="container py-3 my-5" id="packages">
    <header>
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Packages</h1>
        <p class="fs-5 text-muted">
          Get to know our different packages, where you will find different benefits! Do not stay out of the best place
          for events, with the best atmosphere, food and music. We are waiting for you soon!
        </p>
      </div>
    </header>

    <main>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Basic</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">
                $15
              </h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Access for 1 person</li>
                <li>Lunch included</li>
                <li>Drinks included</li>
                <li>Parking lot</li>
              </ul>

              <button type="button" class="w-100 btn btn-lg btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalSelectOp">
                 Get started
              </button>
             
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Personal</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">
                $20
              </h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Access for 1 person</li>
                <li>Lunch included</li>
                <li>Drinks included</li>
                <li>Parking lot</li>
                <li>Winning surprise</li>
              </ul>
              <a href="partyRoom2.php">
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                 Get started
              </button>
              </a>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal">Family</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">
                $29
              </h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Access for 3 persons</li>
                <li>Lunch included</li>
                <li>Drinks included</li>
                <li>Parking lot</li>
                <li>Winning surprise</li>
                <li>Special gift</li>
              </ul>
              <a href="partyRoom3.php">
              <button type="button" class="w-100 btn btn-lg btn-primary">
                Let's go!
              </button>
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>


  <!-- Gallery -->
  <div class="container" id="gallery">
    <h1 class="display-4 fw-normal text-center">Gallery</h1>
    <hr class="mt-2 mb-5">
    <div class="row text-center text-lg-start">
      <div class="col-lg-3 col-md-4 col-6">
        <a href="https://www.entornoturistico.com/wp-content/uploads/2017/03/Evento-corporativo-1280x720.jpg" data-lightbox="photos" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://www.entornoturistico.com/wp-content/uploads/2017/03/Evento-corporativo-1280x720.jpg">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="https://www.marketingdirecto.com/wp-content/uploads/2019/04/Eventos.jpg" data-lightbox="photos" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://www.marketingdirecto.com/wp-content/uploads/2019/04/Eventos.jpg">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="https://www.masquenegocio.com/wp-content/uploads/2018/03/evento-concierto-874x492.jpg" data-lightbox="photos" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://www.masquenegocio.com/wp-content/uploads/2018/03/evento-concierto-874x492.jpg">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp4e1kYNSR878gvF1BSqAzqHrs_Pk8YikXAdE-QkkR3tCR-RXA1vmirQib184EH6ALDlk&usqp=CAU" data-lightbox="photos" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp4e1kYNSR878gvF1BSqAzqHrs_Pk8YikXAdE-QkkR3tCR-RXA1vmirQib184EH6ALDlk&usqp=CAU">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="https://i.pinimg.com/736x/ba/9c/d2/ba9cd25df01c9e61322089c037528dbf.jpg" data-lightbox="photos" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://i.pinimg.com/736x/ba/9c/d2/ba9cd25df01c9e61322089c037528dbf.jpg">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="http://blog.dasler.es/wp-content/uploads/2016/08/1.jpg" data-lightbox="photos" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="http://blog.dasler.es/wp-content/uploads/2016/08/1.jpg">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="http://www.globalxperience.com.mx/wp-content/uploads/2019/03/Screen-Shot-2019-06-15-at-22.36.01.png" data-lightbox="photos" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="http://www.globalxperience.com.mx/wp-content/uploads/2019/03/Screen-Shot-2019-06-15-at-22.36.01.png">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a href="https://fiestaspremium.com/wp-content/uploads/2011/07/salon-de-eventos-1.jpg" data-lightbox="photos" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://fiestaspremium.com/wp-content/uploads/2011/07/salon-de-eventos-1.jpg">
        </a>
      </div>
    </div>
  </div>

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

  <!-- Modal Signup Admin -->
  <div class="modal fade" id="modalSignupAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h2 class="fw-bold mb-0">Sign up for Admin</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-5 pt-0">
          <form action="singup.php" method="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="user" placeholder="name@example.com" name="user">
              <label for="user">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="fullname" placeholder="name@example.com" name="fullname">
              <label for="fullname">Full name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-4" id="email" placeholder="name@example.com" name="email">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="password" placeholder="Password" name="password">
              <label for="password">Password</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select rounded-4" id="SelectPackages" name="packages">
                  <option value="basico">Básico</option>
                  <option value="personal">Personal</option>
                  <option value="familiar">Familiar</option>
                </select>
                <label for="SelectPackages">Select Packages</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="cardNumber" placeholder="1234567890123456" name="cardNumber">
              <label for="cardNumber">Card Number</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="cardName" placeholder="Mibzar Galarza" name="cardName">
              <label for="cardName">Card Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="expiryDate" placeholder="12/27" name="expiryDate">
              <label for="expiryDate">Expiry Date</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="cvvs" placeholder="122" name="cvv">
              <label for="cvv">CVV</label>
            </div>

            <div class="form-floating mb-3">
            <img src="./img/targeta.jpg" alt="Card Image" class="card-image">
            </div>
            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
            <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
            <hr class="my-4">
            <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#modalLogin">
              Click here to Log In
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Modal Signup Invited -->
  <div class="modal fade" id="modalSignupInvited" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h2 class="fw-bold mb-0">Sign up for Invited</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-5 pt-0">
          <form action="singupInvited.php" method="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="user" placeholder="name@example.com" name="user">
              <label for="user">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="fullname" placeholder="name@example.com" name="fullname">
              <label for="fullname">Full name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-4" id="email" placeholder="name@example.com" name="email">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="password" placeholder="Password" name="password">
              <label for="password">Password</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="token" placeholder="DFTWX5TJ" name="token">
              <label for="token">Token</label>
            </div>

            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
            <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
            <hr class="my-4">
            <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#modalLogin">
              Click here to Log In
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- Modal Login Admin-->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h2 class="fw-bold mb-0">Log In Admin</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form action="auth.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="user" placeholder="PanchoVilla" name="user" required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
            <label for="email">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" id="password" placeholder="Password" name="password" required pattern=".{8,}" title="La contraseña debe tener al menos 8 caracteres">
            <label for="password">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Log In</button>
          <hr class="my-4">
          <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#modalSignup">
            Click here to Sing Up
          </button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal Login Invited-->
<div class="modal fade" id="modalLoginIn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h2 class="fw-bold mb-0">Log In Invited</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form action="authInvited.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="user" placeholder="PanchoVilla" name="user" required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
            <label for="email">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-4" id="password" placeholder="Password" name="password" required pattern=".{8,}" title="La contraseña debe tener al menos 8 caracteres">
            <label for="password">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="token" placeholder="token" name="token" required pattern=".{8,}" title="El token debe tener al menos 8 caracteres">
            <label for="token">Token</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Log In</button>
          <hr class="my-4">
          <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#modalSignup">
            Click here to Sing Up
          </button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal Sing Up Admi or Invited-->

<div class="modal" id="modalSingUpOp" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <button type="button" class="btn btn-primary adminButton" data-bs-toggle="modal" data-bs-target="#modalSignupAdmin">Admin</button>
      
        <button type="button" class="btn btn-secondary invitedButton" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#modalSignupInvited">Invited</button>
      </div>
     
    </div>
  </div>
</div>


<!-- Modal Login Admi or Invited-->

<div class="modal" id="modalSelectOp" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <button type="button" class="btn btn-primary adminButton" data-bs-toggle="modal" data-bs-target="#modalLogin">Admin</button>
      
        <button type="button" class="btn btn-secondary invitedButton" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#modalLoginIn">Invited</button>
      </div>
     
    </div>
  </div>
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