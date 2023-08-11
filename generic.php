<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/custom.css" />
  <link rel="stylesheet" href="./css/carousel.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="css\main.css">
   <script src="./js/pago.js"></script>
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="is-preload">
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
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="admin.php" class="logo"><strong>Make</strong> your Event</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Generic</h1>
									</header>

									<span class="image main"><img src="img/pic11.jpg" alt="" /></span>

									<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
									

									<hr class="major" />

								

									<hr class="major" />

                  <h2 id="elements">Create your table</h2>
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">

												<!-- Text stuff -->
											

												<!-- Lists -->
													<h3>Lists</h3>
													<div class="row">
														<div class="col-6 col-12-small">

															<h4>Unordered</h4>
															<ul>
																<li>Dolor etiam magna etiam.</li>
																<li>Sagittis lorem eleifend.</li>
																<li>Felis dolore viverra.</li>
															</ul>

															<h4>Alternate</h4>
															<ul class="alt">
																<li>Dolor etiam magna etiam.</li>
																<li>Sagittis lorem eleifend.</li>
																<li>Felis feugiat viverra.</li>
															</ul>

														</div>
														<div class="col-6 col-12-small">

															<h4>Ordered</h4>
															<ol>
																<li>Dolor etiam magna etiam.</li>
																<li>Etiam vel lorem sed viverra.</li>
																<li>Felis dolore viverra.</li>
																<li>Dolor etiam magna etiam.</li>
																<li>Etiam vel lorem sed viverra.</li>
																<li>Felis dolore viverra.</li>
															</ol>

															<h4>Icons</h4>
															<ul class="icons">
																<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
																<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
																<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
																<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
																<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
																<li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
															</ul>

														</div>
													</div>
													<h4>Definition</h4>
													<dl>
														<dt>Item1</dt>
														<dd>
															<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor.</p>
														</dd>
														<dt>Item2</dt>
														<dd>
															<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor.</p>
														</dd>
														<dt>Item3</dt>
														<dd>
															<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor.</p>
														</dd>
													</dl>

													

													<h4>Pagination</h4>
													<ul class="pagination">
														<li><span class="button disabled">Prev</span></li>
														<li><a href="#" class="page active">1</a></li>
														<li><a href="#" class="page">2</a></li>
														<li><a href="#" class="page">3</a></li>
														<li><span>&hellip;</span></li>
														<li><a href="#" class="page">8</a></li>
														<li><a href="#" class="page">9</a></li>
														<li><a href="#" class="page">10</a></li>
														<li><a href="#" class="button">Next</a></li>
													</ul>

									
												

												<!-- Table -->
													<h3>Table 1</h3>

													
													<div class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>User</th>
																	<th>Type of package</th>
																	<th>Price</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Item1</td>
																	<td>Basic</td>
																	<td>15.00</td>
																</tr>
																<tr>
																	<td>Item2</td>
																	<td>Family</td>
																	<td>29.00</td>
																</tr>
																<tr>
																	<td>Item3</td>
																	<td>Family</td>
																	<td>29.00</td>
																</tr>
																<tr>
																	<td>Item4</td>
																	<td>Personal</td>
																	<td>20.00</td>
																</tr>
																<tr>
																	<td>Item5</td>
																	<td>Family</td>
																	<td>29.00</td>
																</tr>
															</tbody>
															<tfoot>
																<tr>
																	<td colspan="2"></td>
																	<td>20.00</td>
																</tr>
															</tfoot>
														</table>
													</div>

                          <h3>Table 2</h3>


<div class="table-wrapper">
  <table>
    <thead>
      <tr>
        <th>User</th>
        <th>Type of package</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Item1</td>
        <td>Basic</td>
        <td>15.00</td>
      </tr>
      <tr>
        <td>Item2</td>
        <td>Family</td>
        <td>29.00</td>
      </tr>
      <tr>
        <td>Item3</td>
        <td>Family</td>
        <td>29.00</td>
      </tr>
      <tr>
        <td>Item4</td>
        <td>Personal</td>
        <td>20.00</td>
      </tr>
      <tr>
        <td>Item5</td>
        <td>Family</td>
        <td>29.00</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="2"></td>
        <td>20.00</td>
      </tr>
    </tfoot>
  </table>
</div>

											</div>
											<div class="col-6 col-12-medium">

												<!-- Buttons -->
													<h3>Buttons</h3>
													<ul class="actions">
														<li><a href="#" class="button primary">Primary</a></li>
														<li><a href="#" class="button">Default</a></li>
													</ul>
													<ul class="actions">
														<li><a href="#" class="button large">Large</a></li>
														<li><a href="#" class="button">Default</a></li>
														<li><a href="#" class="button small">Small</a></li>
													</ul>
													<ul class="actions">
														<li><a href="#" class="button primary large">Large</a></li>
														<li><a href="#" class="button primary">Default</a></li>
														<li><a href="#" class="button primary small">Small</a></li>
													</ul>
													<ul class="actions fit">
														<li><a href="#" class="button primary fit">Fit</a></li>
														<li><a href="#" class="button fit">Fit</a></li>
													</ul>
													<ul class="actions fit small">
														<li><a href="#" class="button primary fit small">Fit + Small</a></li>
														<li><a href="#" class="button fit small">Fit + Small</a></li>
													</ul>
													<ul class="actions">
														<li><a href="#" class="button primary icon solid fa-search">Icon</a></li>
														<li><a href="#" class="button icon solid fa-download">Icon</a></li>
													</ul>
													<ul class="actions">
														<li><span class="button primary disabled">Primary</span></li>
														<li><span class="button disabled">Default</span></li>
													</ul>

												<!-- Form -->
													<h3>Form</h3>

													<form method="post" action="#">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
															</div>
															<!-- Break -->
															<div class="col-12">
																<select name="demo-category" id="demo-category">
																	<option value="">- Category -</option>
																	<option value="1">Graduations</option>
																	<option value="1">Partys</option>
																	<option value="1">Events</option>
																	<option value="1"></option>
																</select>
															</div>
															<!-- Break -->
															<div class="col-4 col-12-small">
																<input type="radio" id="demo-priority-low" name="demo-priority" checked>
																<label for="demo-priority-low">Low</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="radio" id="demo-priority-normal" name="demo-priority">
																<label for="demo-priority-normal">Normal</label>
															</div>
															<div class="col-4 col-12-small">
																<input type="radio" id="demo-priority-high" name="demo-priority">
																<label for="demo-priority-high">High</label>
															</div>
															<!-- Break -->
															<div class="col-6 col-12-small">
																<input type="checkbox" id="demo-copy" name="demo-copy">
																<label for="demo-copy">Email me a copy</label>
															</div>
															<div class="col-6 col-12-small">
																<input type="checkbox" id="demo-human" name="demo-human" checked>
																<label for="demo-human">I am a human</label>
															</div>
															<!-- Break -->
															<div class="col-12">
																<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
															</div>
															<!-- Break -->
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" value="Send Message" class="primary" /></li>
																	<li><input type="reset" value="Reset" /></li>
																</ul>
															</div>
														</div>
													</form>

												<!-- Image -->
													<h3>Event halls</h3>

													<h4></h4>
													<span class="image fit"><img src="images/pic11.jpg" alt="" /></span>
													<div class="box alt">
														<div class="row gtr-50 gtr-uniform">
															<div class="col-4"><span class="image fit"><img src="img\pic01.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img src="img\pic02.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img src="img\pic03.jpg" alt="" /></span></div>
															<!-- Break -->
															<div class="col-4"><span class="image fit"><img src="img\pic03.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img src="img\pic01.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img src="img\pic02.jpg" alt="" /></span></div>
															<!-- Break -->
															<div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
															<div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
														</div>
													</div>

													<h4>Left &amp; Right</h4>
													<p><span class="image left"><img src="images/pic01.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
													<p><span class="image right"><img src="images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>

									<hr class="major" />

									

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
            <ul>
            
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

</html>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>