<?php
	session_start();
include("config.php");
	if (isset($_SESSION["email"]) && isset($_SESSION["loggedIn"])) {
		header("Location: salon_welcome.php");
		exit();
	}

	if (isset($_POST["Login"])) {
		// $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
	

		$email = $connection->real_escape_string($_POST["email"]);
		$password = md5($connection->real_escape_string($_POST["password"]));
		
		
		
		$data = $connection->query("SELECT * FROM salon WHERE email='$email' AND password='$password'");
				if ($data->num_rows > 0) {
			$_SESSION["email"] = $email;
			$_SESSION["loggedIn"] = 1;
			
			
		
			
			header("Location: salon_welcome.php");
			exit();

		} else {
			
			echo "Please check your inputs!";
		}
	}	
?>   