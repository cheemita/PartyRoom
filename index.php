<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/custom.css" />
  <link rel="stylesheet" href="./css/carousel.css" />
  <link rel="stylesheet" href="./css/style.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>

<title>Home</title>
</head>

<body>
  <!-- Navv -->

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
            <li><a href="#generalInfo" class="nav-link px-2 link-dark">General Information</a></li>
            <li><a href="#packages" class="nav-link px-2 link-dark">Packages</a></li>
            <li><a href="#slider" class="nav-link px-2 link-dark">Slider</a></li>
            <li><a href="#gallery" class="nav-link px-2 link-dark">Gallery</a></li>
            <li><a href="partyRoom.php" class="nav-link px-2 link-dark">Party Room</a></li>
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
          <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#modalLogin">
            Login
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSignup">
            Sign up
          </button>
        </div>
      </header>
    </div>';
  }
  ?>

  <!-- Hero -->
  
  <header class="header">


<div class="header-content container">
    <div class="header-txt">
        <h1>Unipoli</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor neque quibusdam quisquam cum, nemo
            voluptatum quis !</p>
        <a href="#" class="btn-1">INFORMACION</a>
    </div>

</div>
</header>

<section class="general container">
<h2>Graduados</h2>
<div class="general-content">


    <div class="general-1 txt">
        <h3>Jane Doe </h3>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ipsam iusto tempora odit
        </p>
    </div>
    <div class="general-2 txt">
        <h3>Ana</h3>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ipsam iusto tempora odit
        </p>
    </div>
    <div class="general-3 txt">
        <h3>Alejandro</h3>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ipsam iusto tempora odit
        </p>
    </div>
</div>
</section>

<section class="info-1">
<div class="info-content container">
    <h2>Informacion</h2>

    <div class="info-circle">

        <div class="circle-txt">
            <div class="circle-1">
                <h3>+100K</h3>
            </div>
            <p>
                Universitary Events
            </p>
        </div>
        <div class="circle-txt">
            <div class="circle-1">
                <h3>12</h3>
            </div>
            <p>
                Years of experience
            </p>
        </div>
        <div class="circle-txt">
            <div class="circle-1">
                <h3>+50k</h3>
            </div>
            <p>
            Scientific articles
            </p>
        </div>
        <div class="circle-txt">
            <div class="circle-1">
                <h3>+1M</h3>
            </div>
            <p>
            Assistants
            </p>
        </div>
    </div>
</div>
</section>

<section class="general g2 container">
<h2>Menciones Honorificas</h2>
<div class="general-content">
    <div class="general-4 txt">
        <h3>Erika</h3>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ipsam iusto tempora odit
        </p>
    </div>
    <div class="general-5 txt">
        <h3>Diana</h3>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ipsam iusto tempora odit
        </p>
    </div>

    <div class="general-6 txt">
        <h3>Juan</h3>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ipsam iusto tempora odit
        </p>
    </div>
</div>
</section>

<!-- Packages -->
<div class="container py-3 my-5" id="packages">
<header>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Packages</h1>
        <p class="fs-5 text-muted">
            Get to know our different packages, where you will find different benefits! Do not stay out of the
            best place
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

                    <button type="button" class="w-100 btn btn-lg btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#modalSelectOp">
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



<section class="info-2">

<div class="info-content container">
    <h2>We are leaders in the promotion of university events</h2> 
    <div class="testi">
        <div class="testi-left">
            <div class="testi-txt">
                <img src="img/t1.png" alt="">
                <h3>Lorem</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque sunt ducimus expedita,
                    itaque
                </p>
            </div>
            <div class="testi-txt">
                <img src="img/t2.png" alt="">
                <h3>Lorem</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque sunt ducimus expedita,
                    itaque
                </p>
            </div>
        </div>
        <div class="testi-right">
            <div class="testi-txt">
                <img src="img/t3.png" alt="">
                <h3>Lorem</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque sunt ducimus expedita,
                    itaque
                </p>
            </div>
        </div>
    </div>
</div>
</section>







<!-- Sliders -->


















<!-- Gallery -->
<div class="container" id="gallery">
<h1 class="display-4 fw-normal text-center">Gallery</h1>
<hr class="mt-2 mb-5">
<div class="row text-center text-lg-start">
    <div class="col-lg-3 col-md-4 col-6">
        <a href="img\g1.jpg"
            data-lightbox="photos" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail"
                src="https://www.entornoturistico.com/wp-content/uploads/2017/03/Evento-corporativo-1280x720.jpg">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
        <a href="img\g2.jpg" data-lightbox="photos"
            class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail"
                src="https://www.marketingdirecto.com/wp-content/uploads/2019/04/Eventos.jpg">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
        <a href="img\g3.jpg"
            data-lightbox="photos" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail"
                src="https://www.masquenegocio.com/wp-content/uploads/2018/03/evento-concierto-874x492.jpg">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
        <a href="img\g4.jpg"
            data-lightbox="photos" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp4e1kYNSR878gvF1BSqAzqHrs_Pk8YikXAdE-QkkR3tCR-RXA1vmirQib184EH6ALDlk&usqp=CAU">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
        <a href="img\g5.jpg" data-lightbox="photos"
            class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail"
                src="https://i.pinimg.com/736x/ba/9c/d2/ba9cd25df01c9e61322089c037528dbf.jpg">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
        <a href="img\g6.jpg" data-lightbox="photos"
            class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://blog.dasler.es/wp-content/uploads/2016/08/1.jpg">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
        <a href="http://www.globalxperience.com.mx/wp-content/uploads/2019/03/Screen-Shot-2019-06-15-at-22.36.01.png"
            data-lightbox="photos" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail"
                src="http://www.globalxperience.com.mx/wp-content/uploads/2019/03/Screen-Shot-2019-06-15-at-22.36.01.png">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
        <a href="https://fiestaspremium.com/wp-content/uploads/2011/07/salon-de-eventos-1.jpg"
            data-lightbox="photos" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail"
                src="https://fiestaspremium.com/wp-content/uploads/2011/07/salon-de-eventos-1.jpg">
        </a>
    </div>
</div>
</div>

<!-- Footer -->











<!--Older footer -->
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
    <p class="text-center text-muted">Eventos UNIPOLI</p>
</footer>
</div>



  <!-- Modal Signup -->
  <div class="modal fade" id="modalSignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h2 class="fw-bold mb-0">Sign up for free</h2>
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

  <!-- Modal Login -->
  <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
          <h2 class="fw-bold mb-0">Log In</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-5 pt-0">
          <form action="auth.php" method="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="user" placeholder="PanchoVilla" name="user">
              <label for="email">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="password" placeholder="Password" name="password">
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