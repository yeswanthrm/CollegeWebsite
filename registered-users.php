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
                    <?php 
						session_start(); 
						include "db_conn.php";

						$sql = "SELECT name, gender, email, mobile FROM users";
						$result = mysqli_query($conn, $sql);
						echo 'Total number of students registered: '; echo  mysqli_num_rows($result);

						$c=0;
						$myarray = ["name", "gender", "email", "mobile"];


						echo "<table class='table table-striped table-bordered' style='border:1px solid #ccc;'>\n";
						echo "<thead>\n";
						echo "<tr class='btn-primary'>\n";
						foreach($myarray as $columnheading) {
							echo "<th>".$columnheading."</th>\n";
						}
						echo "</tr>\n";
						echo "</thead>\n";
						echo "<tbody>\n";
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>\n";
								foreach($row as $td) {
									echo "<td>".$td."</td>";
								}
								echo "</tr>\n";
							}
						}
						echo "</tbody>\n";
						echo "</table>";
						
						?>
						<a class="m-3 custom-btn btn custom-link">Download to CSV</a>
						<a href="./download-image.php" class="m-3 custom-btn btn custom-link">View Certificates</a>
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