<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['gender']) && isset($_POST['email'])
    && isset($_POST['name']) && isset($_POST['mobile'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$gender = validate($_POST['gender']);
	$email = validate($_POST['email']);

	$mobile = validate($_POST['mobile']);
	$name = validate($_POST['name']);

	//$pname = rand(1000,10000)."-".$_FILES["file"]["name"];
	//$tname = $_FILES["file"]["tmp_name"];
	//$uploads_dir = 'images';
	
	$user_data = 'email='. $email. '&name='. $name;

	$imageFileTypeSSC = $_FILES['ssc']['type'];
	$imageFileTypePUC = $_FILES['puc']['type'];
	$imageFileTypeCaste = $_FILES['caste']['type'];

	if (empty($gender)) {
		header("Location: register.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($email)){
        header("Location: register.php?error=email is required&$user_data");
	    exit();
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?error=email is not in the correct format&$user_data");
	    exit();
	}
	else if(empty($mobile)){
        header("Location: register.php?error=Re email is required&$user_data");
	    exit();
	}
	else if(!preg_match('/^[0-9]{10}+$/', $mobile)) {
        header("Location: register.php?error=mobile number should be a 10 digited number&$user_data");
	    exit();
	}
	else if(empty($name)){
        header("Location: register.php?error=Name is required&$user_data");
	    exit();
	}
	else if(empty($imageFileTypeSSC)){
        header("Location: register.php?error=SSC certificate is required &$user_data");
	    exit();
	}
	else if(empty($imageFileTypePUC)){
        header("Location: register.php?error=PUC certificate is required&$user_data");
	    exit();
	}
	// Check file size
	else if ($_FILES["ssc"]["size"] > 500000) {
		 header("Location: register.php?error=SSC certificate image is too large. File size should not exced 500 KB&$user_data");
	     exit();
	}
	else if ($_FILES["puc"]["size"] > 500000) {
		 header("Location: register.php?error=PUC certificate image is too large. File size should not exced 500 KB&$user_data");
	     exit();
	}
	else if ($_FILES["caste"]["size"] > 500000) {
		 header("Location: register.php?error=Caste certificate image is too large. File size should not exced 500 KB&$user_data");
	     exit();
	}
	
	// Allow certain file formats
	else if($imageFileTypeSSC != "image/jpeg" && $imageFileTypeSSC != "image/png") {
		 header("Location: register.php?error=Only JPG and PNG files are allowed&$user_data");
	     exit();
	}
	else if($imageFileTypePUC != "image/jpeg" && $imageFileTypePUC != "image/png") {
	     header("Location: register.php?error=Only JPG and PNG files are allowed&$user_data");
	     exit();
	}
	else if(!empty($imageFileTypeCaste) && $imageFileTypeCaste != "image/jpeg" && $imageFileTypeCaste != "image/png") {
		 header("Location: register.php?error=Only JPG and PNG files are allowed&$user_data");
	     exit();
	}
	else{

		// hashing the email
        //$email = md5($email);
		
	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The email is already registered. Try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(gender, email, name, mobile, SSC_Cert, PUC_Cert, Caste_Cert) VALUES(?, ?, ?, ?, ?, ?, ?)";
		   if (is_uploaded_file($_FILES['ssc']['tmp_name'])) {
			$ssc = file_get_contents($_FILES['ssc']['tmp_name']);
			$puc = file_get_contents($_FILES['puc']['tmp_name']);
			$caste = file_get_contents($_FILES['caste']['tmp_name']);
			$imgType = $_FILES['ssc']['type'];
			$statement = $conn->prepare($sql2);
			$statement->bind_param('sssdsss', $gender, $email, $name, $mobile, $ssc, $puc, $caste);
			$current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
			}
           if ($current_id > 0) {
           	 header("Location: register.php?success= Registration successful");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}