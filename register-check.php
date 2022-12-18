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

	$user_data = 'email='. $email. '&name='. $name;


	if (empty($gender)) {
		header("Location: register.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($email)){
        header("Location: register.php?error=email is required&$user_data");
	    exit();
	}
	else if(empty($mobile)){
        header("Location: register.php?error=Re email is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: register.php?error=Name is required&$user_data");
	    exit();
	}

	else{

		// hashing the email
        //$email = md5($email);

	    $sql = "SELECT * FROM users WHERE user_name='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The email is already registered. Try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(gender, email, name, mobile) VALUES('$gender', '$email', '$name', '$mobile')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
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