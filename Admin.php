<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-csBDmVB5usHTP0XY+RSoSe5wE2/1mn3T7S0bY+s/xnSbgsKSvCCn0XQC6tW4s0Xp" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/custom.css" />
    <link rel="stylesheet" href="./css/carousel.css" />
   <link rel="stylesheet" href="css\styles.css">
  
    <link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="./js/pago.js"></script>


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
         

           
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalToken">
          Watch your Token
        </button>

        
        <div class="modal" id="modalToken" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Your Token is '.$_SESSION["packages"].'</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h5 class="modal-title tokenModal">Your Token:</h5>
            <h5 class="modal-title tokenModal" id="tokenText">'.$_SESSION["token"].'</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="copyToken()">Copy Token</button>
            </div>
          </div>
        </div>
      </div>

      

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

        <div id="wrapper">

        <!-- Main -->
          <div id="main">
            <div class="inner">
        
              <!-- Header -->
                <header id="header">
                  <a href="admin.php" class="logo"><strong>Unipoli</strong> Events</a>
                  <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                  </ul>
                </header>
        
              <!-- Banner -->
                <section id="banner">
                  <div class="content">
                    <header>
                      <h1>Welcome to our graduation event management platform!</h1>
                      <p>A free and fully responsive site template</p>
                    </header>
                    <p>Here, we provide you with everything you need to plan and execute memorable graduation ceremonies. From organizing the ceremony to managing guests and coordinating essential details, our tool streamlines the process, allowing you to focus on delivering an unforgettable experience for graduates and their families. Let start turning those dream graduations into reality together!</p>
                    <ul class="actions">
                      <li><a href="#" class="button big">Learn More</a></li>
                    </ul>
                  </div>
                  <span class="image object">
                    <img src="img/pic10.jpg" alt="" />
                  </span>
                </section>
        
                <!-- Section -->
                <section>
          <header class="major">
            <h2>Gastronomy</h2>
          </header>
          <div class="features">
            <article>
              <img src="img\b1.png" alt="Image 1" class="icon">
              <div class="content">
                <h3>Portitor ullamcorper</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
              </div>
            </article>
            <article>
              <img src="img\b2.png" alt="Image 2" class="icon">
              <div class="content">
                <h3>Sapien veroeros</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
              </div>
            </article>
            <article>
              <img src="img\b3.png" alt="Image 3" class="icon">
              <div class="content">
                <h3>Quam lorem ipsum</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
              </div>
            </article>
            <article>
              <img src="img\b4.png" alt="Image 4" class="icon">
              <div class="content">
                <h3>Sed magna finibus</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
              </div>
            </article>
          </div>
        </section>
        
              
        
              
        
            </div>
          </div>
        
        <!-- Sidebar -->
          <div id="sidebar">
            <div class="inner">
        
              <!-- Search -->
                <section id="search" class="alt">
                  <form method="post" action="#">
                    <input type="text" name="query" id="query" placeholder="Search" />
                  </form>
                </section>
        
              <!-- Menu -->
                <nav id="menu">
                  <header class="major">
                    <h2>Menu</h2>
                  </header>
                  <ul>
                  <li><a href="admin.php">Homepage</a></li>
                  <li><a href="generic.php">Make your Event</a></li>
                  <li><a href="elements.php">Packages</a></li>
                  <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#modalContact">
                    Contact Us
                  </button></li>
                  </li>
                    </ul>
                    
                </nav>
        
              <!-- Section -->
                <section>
                  <header class="major">
                    <h2>CORPORATE AND SOCIAL EVENTS</h2>
                  </header>
                  <div class="mini-posts">
                    <article>
                      <a href="#" class="image"><img src="img/pic07.jpg" alt="" /></a>
                      <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="img/pic08.jpg" alt="" /></a>
                      <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="img/pic09.jpg" alt="" /></a>
                      <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                    </article>
                  </div>
                  <ul class="actions">
                    <li><a href="#" class="button">More</a></li>
                  </ul>
                </section>
        
              <!-- Section -->
                <section>
                  <header class="major">
                    <h2>Get in touch</h2>
                  </header>
                  <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                  <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                    <li class="icon solid fa-phone">(000) 000-0000</li>
                    <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                    Nashville, TN 00000-0000</li>
                  </ul>
                </section>
        
              <!-- Footer -->
              <footer id="footer">
									<p class="copyright">&copy;UNIPOLI<a href="https://unsplash.com"></a> <a href="#">EVENTS</a>.</p>
								</footer>
        
            </div>
          </div>
        
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
              <input type="text" class="form-control rounded-4" id="user" placeholder="name@example.com" name="user" required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
              <label for="user">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="fullname" placeholder="name@example.com" name="fullname" required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
              <label for="fullname">Full name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-4" id="email" placeholder="name@example.com" name="email">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="password" placeholder="Password" name="password" required pattern=".{8,}" title="La contraseña debe de tener 8 caracteres">
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
              <input type="text" class="form-control rounded-4" id="cardNumber" placeholder="1234567890123456" name="cardNumber" required pattern=".{16,}" title="Deben de ser 16 numeros para la targeta">
              <label for="cardNumber">Card Number</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="cardName" placeholder="Mibzar Galarza" name="cardName" required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
              <label for="cardName">Card Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="expiryDate" placeholder="12/27" name="expiryDate" required pattern=".{5,}" title="El formato es 12/25">
              <label for="expiryDate">Expiry Date</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="cvvs" placeholder="122" name="cvv" required pattern=".{3,}" title="Son 3 numeros del numero del CVV">
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
          <form action="singupAdmin.php" method="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="user" placeholder="name@example.com" name="user" required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
              <label for="user">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="fullname" placeholder="name@example.com" name="fullname" required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
              <label for="fullname">Full name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-4" id="email" placeholder="name@example.com" name="email">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="password" placeholder="Password" name="password" required pattern=".{8,}" title="La contraseña debe de tener 8 caracteres">
              <label for="password">Password</label>
            </div>
        
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="token" placeholder="DFTWX5TJ" name="token" required pattern="^.{8,}" title="El token debe de tener 8 caracteres">
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
        
        <!-- Modal pay 1-->
        <div class="modal" id="modalPay" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Enter Token Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form id="tokenForm" action="tokenAdmin.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="user" name="user" required>
            <label for="user">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="token" name="token" required pattern=".{8,}" title="El token debe tener al menos 8 caracteres">
            <label for="token">Token</label>
          </div>
          <button class="btn btn-primary" type="submit">Submit Token</button>
        </form>
        </div>
        </div>
        </div>
        </div>
        
        
        
        
        <!-- Modal pay 2-->
        <div class="modal" id="modalPayPersonal" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Enter Token Admin 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form id="tokenFormFamily" action="tokenAdminPersonal.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="user" name="user" required>
            <label for="user">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="token" name="token" required pattern=".{8,}" title="El token debe tener al menos 8 caracteres">
            <label for="token">Token</label>
          </div>
          <button class="btn btn-primary" type="submit">Submit Token</button>
        </form>
        </div>
        </div>
        </div>
        </div>
        
        
        <!-- Modal pay 3-->
        <div class="modal" id="modalPayFamily" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Enter Token</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form id="tokenForm" action="tokenAdminFamily.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="user" name="user" required>
            <label for="user">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="token" name="token" required pattern=".{8,}" title="El token debe tener al menos 8 caracteres">
            <label for="token">Token</label>
          </div>
          <button class="btn btn-primary" type="submit">Submit Token</button>
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
        
        
        
        
        <!-- Modal pay 2-->
        <div class="modal" id="modalPayPersonal" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Payment Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="payment-form">
            <div class="form-group">
              <label for="card-number" class="form-label">Card Number</label>
              <input type="text" class="form-control" id="card-number" placeholder="1234 5678 9012 3456" required>
            </div>
            <div class="form-group">
              <label for="card-name" class="form-label">Cardholder Name</label>
              <input type="text" class="form-control" id="card-name" placeholder="John Doe" required>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="expiry-date" class="form-label">Expiry Date</label>
                <input type="text" class="form-control" id="expiry-date" placeholder="MM/YY" required>
              </div>
              <div class="col-md-6 form-group">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" placeholder="123" required>
              </div>
            </div>
            <div class="form-group">
              <img src="./img/targeta.jpg" alt="Card Image" class="card-image">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
          <a href="RoomAdmin2.php">
          <button type="button" class="btn btn-primary" id="submit-payment">Submit Payment</button>
          </a>
        
        </div>
        </div>
        </div>
        </div>
        
        <!-- Modal pay 3-->
        <div class="modal" id="modalPayFamily" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Payment Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="payment-form">
            <div class="form-group">
              <label for="card-number" class="form-label">Card Number</label>
              <input type="text" class="form-control" id="card-number" placeholder="1234 5678 9012 3456" required>
            </div>
            <div class="form-group">
              <label for="card-name" class="form-label">Cardholder Name</label>
              <input type="text" class="form-control" id="card-name" placeholder="John Doe" required>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="expiry-date" class="form-label">Expiry Date</label>
                <input type="text" class="form-control" id="expiry-date" placeholder="MM/YY" required>
              </div>
              <div class="col-md-6 form-group">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" placeholder="123" required>
              </div>
            </div>
            <div class="form-group">
              <img src="./img/targeta.jpg" alt="Card Image" class="card-image">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
          <a href="RoomAdmin3.php">
          <button type="button" class="btn btn-primary" id="submit-payment">Submit Payment</button>
          </a>
        
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
        
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        
        </body>
        
        
        
        
        </body>

        


    </div>';
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


          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalToken">
          Watch your Token
        </button>

        
        <div class="modal" id="modalToken" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Your Token is '.$_SESSION["packages"].'</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h5 class="modal-title tokenModal">Your Token:</h5>
            <h5 class="modal-title tokenModal" id="tokenText">'.$_SESSION["token"].'</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="copyToken()">Copy Token</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal pay 1-->
<div class="modal" id="modalPay" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Enter Token Invited</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="tokenForm" action="token.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="user" name="user" required>
            <label for="user">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="token" name="token" required pattern=".{8,}" title="El token debe tener al menos 8 caracteres">
            <label for="token">Token</label>
          </div>
          <button class="btn btn-primary" type="submit">Submit Token</button>
        </form>
      </div>
    </div>
  </div>
</div>




    <!-- Modal pay 2-->
   <div class="modal" id="modalPayPersonal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Enter Token Invited pERSONAL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="tokenFormFamily" action="tokenPersonal.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="user" name="user" required>
            <label for="user">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="token" name="token" required pattern=".{8,}" title="El token debe tener al menos 8 caracteres">
            <label for="token">Token</label>
          </div>
          <button class="btn btn-primary" type="submit">Submit Token</button>
        </form>
      </div>
    </div>
  </div>
</div>

  
    <!-- Modal pay 3-->
 <div class="modal" id="modalPayFamily" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Enter Token Invited</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="tokenForm" action="tokenFamily.php" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="user" name="user" required>
            <label for="user">Usernam</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="token" name="token" required pattern=".{8,}" title="El token debe tener al menos 8 caracteres">
            <label for="token">Token</label>
          </div>
          <button class="btn btn-primary" type="submit">Submit Token</button>
        </form>
      </div>
    </div>
  </div>
</div>

      

          <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="logout.php">Sign out from ' . $_SESSION["authInv"] . '</a></li>
            <li><a class="dropdown-item" href="Setting.php">Setting</a></li>
          </ul>
        </div>
        </header>

        <--body-->

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
                            Let s go!
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
              <input type="text" class="form-control rounded-4" id="user" placeholder="name@example.com" name="user" required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
              <label for="user">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="fullname" placeholder="name@example.com" name="fullname" required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
              <label for="fullname">Full name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-4" id="email" placeholder="name@example.com" name="email">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="password" placeholder="Password" name="password" required pattern=".{8,}" title="La contraseña debe de tener minimo 8 caracteres">
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
              <input type="text" class="form-control rounded-4" id="cardNumber" placeholder="1234567890123456" name="cardNumber" required pattern=".{16,}" title="La targeta debe de tener 16 caracteres">
              <label for="cardNumber">Card Number</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="cardName" placeholder="Mibzar Galarza" name="cardName" required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
              <label for="cardName">Card Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="expiryDate" placeholder="12/27" name="expiryDate" required pattern=".{5,}" title="El formato es: 12/25">
              <label for="expiryDate">Expiry Date</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="cvvs" placeholder="122" name="cvv" required pattern=".{3,}" title="Se require los 3 numeros del CVV">
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
              <input type="text" class="form-control rounded-4" id="user" placeholder="name@example.com" name="user"  required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
              <label for="user">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="fullname" placeholder="name@example.com" name="fullname"  required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del nombre del usuario">
              <label for="fullname">Full name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-4" id="email" placeholder="name@example.com" name="email">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-4" id="password" placeholder="Password" name="password"  required pattern=".{8,}" title="La contraseña debe de tener 8 caracteres">
              <label for="password">Password</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="admin" placeholder="name@example.com" name="admin"  required pattern="^\S(.*\S)?$" title="No se permiten espacios al principio o al final del usuario">
              <label for="admin">Admin Username</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-4" id="token" placeholder="DFTWX5TJ" name="token"   required pattern=".{8,}" title="El token debe de tener 8 caracteres">
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

    <!-- Wrapper -->


</html>