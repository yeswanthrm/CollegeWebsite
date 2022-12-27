<!DOCTYPE html>
<html>
	
<head>
	<title>
		View certificates
	</title>
</head>

<body style="text-align:center;">
	
	<h1 style="color:green;">
		View certificates
	</h1>
	
	<h4>
		Admin Id, admin password and student id are mandatory to view any certificate.
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
