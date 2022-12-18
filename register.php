<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">
        <title>Kshemankari College Of Nursing</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/magnific-popup.css" rel="stylesheet">

        <link href="css/tooplate-waso-strategy.css" rel="stylesheet">
        
<!--

Tooplate 2130 Waso Strategy

https://www.tooplate.com/view/2130-waso-strategy

Free Bootstrap 5 HTML Template

-->

    </head>
    
    <body id="section_1">

        <header class="site-header">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-5 col-7">
                        <p class="text-white mb-0">
                            <i class="bi-clock site-header-icon me-2"></i>
                            Mon-Fri 10:00-19:00
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-3 col-5">
                        <p class="text-white mb-0">
                            <a href="tel: 240-480-9600" class="text-white">
                                <i class="bi-telephone site-header-icon me-2"></i>
                                +91 9491110000
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12 ms-auto">
                        <ul class="social-icon">
                            <li><a href="https://facebook.com/tooplate" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="https://pinterest.com/tooplate" class="social-icon-link bi-pinterest"></a></li>

                            <li><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="https://www.youtube.com/tooplate" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">

                <a href="#" class="navbar-brand">Kshemankari College <span class="text-danger"></br>Of Nursing</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
							<a class="nav-link click-scroll" href='' >Register</a>
						</li>
						<li>
							<a class="nav-link click-scroll" href="/CollegeWebsite" >Home</a>
						</li>
                    </ul>
                <div>
                        
            </div>
        </nav>

        <main>

            <section class="hero">
                <div class="container-fluid h-100">
                    <div class="row h-100">
						<div class="col-lg-4 col-md-4 col-12 ms-auto">
						</div>
						<div class="col-lg-4 col-md-4 col-12 ms-auto">
							<form action="register-check.php" method="post">
								<h2>Register</h2>
								
								  <?php if (isset($_GET['success'])) { ?>
									   <p class="success" style="color: green"><?php echo '<script>alert("Registration successful")</script>'; ?></p>
								  <?php } ?>

								  <label>Name</label>
								  <?php if (isset($_GET['name'])) { ?>
									   <input type="text" 
											  name="name"
											  class="form-control"
											  value="<?php echo $_GET['name']; ?>"><br>
								  <?php }else{ ?>
									   <input type="text" 
											  name="name" 
											  class="form-control"<br>
								  <?php }?>

								  <label>Gender</label>
								  <?php if (isset($_GET['gender'])) { ?>
									   <input type="text" 
											  name="gender" 
											  class="form-control"
											  value="<?php echo $_GET['gender']; ?>"><br>
								  <?php }else{ ?>
									   <input type="text" 
											  name="gender" 
											  class="form-control"<br>
								  <?php }?>


								<label>Email</label>
								<input type="text" 
										 name="email" 
										 class="form-control"<br>

								  <label>Mobile</label>
								  <input type="text" 
										 name="mobile" 
										 class="form-control"<br>
								<?php if (isset($_GET['error'])) { ?>
									<p class="error"><?php echo $_GET['error']; ?></p>
								<?php } ?>

								<?php if (isset($_GET['success'])) { ?>
									   <p class="success" style="color: green"><?php echo $_GET['success']; ?></p>
								  <?php } ?>
								<button type="submit" class="custom-btn btn custom-link">Register</button>
							 </form>
						</div>
						<div class="col-lg-4 col-md-4 col-12 ms-auto">
						</div>
                    </div>
                </div>
            </section>


            

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                        
                    <div class="col-lg-6 col-12">
                        <div class="site-footer-wrap d-flex align-items-center">
                            <p class="copyright-text mb-0 me-4">Copyright © 2023 KSNC</p>

                            <ul class="social-icon">
                                <li><a href="https://facebook.com/tooplate" class="social-icon-link bi-facebook"></a></li>

                                <li><a href="https://pinterest.com/tooplate" class="social-icon-link bi-pinterest"></a></li>
    
                                <li><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter"></a></li>
    
                                <li><a href="https://www.youtube.com/tooplate" class="social-icon-link bi-youtube"></a></li>
                            </ul>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-12">
                    	<p class="copyright-text mb-0 me-4">All rights reserved </p>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>