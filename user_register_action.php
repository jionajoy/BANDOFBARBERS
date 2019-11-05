<?php
session_start();
include("config.php");
    if (isset($_POST["submit"])) {
     //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

		$firstName = $connection->real_escape_string($_POST["fname"]);
		$lastName = $connection->real_escape_string($_POST["lname"]);
		$email = $connection->real_escape_string($_POST["email"]);
		$password = md5($connection->real_escape_string($_POST["password"]));
		
		$data1 = $connection->query("SELECT * FROM user WHERE email= '$email'");
		if ($data1->num_rows>0){
			$message = "You are already Registered";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='userLogin.php';
			</script>";
		
		}
		else{
		
		$data = $connection->query("INSERT INTO user (fname, lname, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')");

    	if ($data === false){
        	echo "Connection error!";
		}
    	else
		{
			header("Location:salons.php");
    	   echo "Your have been Registered ";
		}

	}
	}
?>

