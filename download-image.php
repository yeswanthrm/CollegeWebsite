<!DOCTYPE html>
<html>
	
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
	<title>
		View certificates
	</title>
</head>

<body style="text-align:center;">
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
							<a class="nav-link click-scroll" href='' >View</a>
						</li>
						<li>
							<a class="nav-link click-scroll" href="/CollegeWebsite" >Home</a>
						</li>
                    </ul>
                <div>
                        
            </div>
        </nav>
	<h1 style="color:#DC3545;">
		View certificates
	</h1>
	
	<h4>
		Admin id, admin password and student id are mandatory to view any certificate.
	</h4>
	<form method="post">
		<input type="text" placeholder="Admin id" name="adminid"/>
		<input type="password" placeholder="Admin password" name="password"/>
		<input type="text" placeholder="Student Id" name="studentid"/>
		<select id="certs" name="certs">
		  <option value="ssc">SSC</option>
		  <option value="puc">PUC</option>
		  <option value="caste">Caste</option>
		</select>
		<input type="submit" name="View"
				value="View"/>
		
		
	</form>
	<?php
		require_once __DIR__ . '/db_conn.php';
		if(isset($_POST['View'])) {
			//require_once __DIR__ . '/listImages.php';
			$adminId = $_POST['adminid'];
			$pwd = $_POST['password'];
			$id = $_POST['studentid'];
			$cert = $_POST['certs'];
			if($adminId == 'kcnadmin' && $pwd == 'kcnadminblr0!' && $id && $cert){
				
				if($cert == 'ssc'){
					echo '<img src="imageView.php?id='.$id.'">';
				}
				else if($cert == 'puc'){
					echo '<img src="imageViewPuc.php?id='.$id.'">';
				}	
				else {
					echo '<img src="imageViewCaste.php?id='.$id.'">';
				}
			}			
			
		}
		
	?>	
	
</head>

</html>
