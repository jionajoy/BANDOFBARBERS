<?php
	session_start();
include("config.php");

	if (isset($_POST["Login"])) {
		include("config.php");
 //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
	
		$email = $connection->real_escape_string($_POST["email"]);
		$password = md5($connection->real_escape_string($_POST["password"]));
		$data = $connection->query("SELECT * FROM employee WHERE email='$email' AND password='$password'");

		if ($data->num_rows > 0) {
			$row = $data->fetch_assoc();
			
			$_SESSION["email"] = $row['email'];
			$_SESSION["loggedIn"] = 1;
			$_SESSION["emp_code"] = $row['emp_code'];
			$_SESSION["emp_id"] = $emp_id;
		
header("Location: emp_main_page.php");
			

		} else {
			
			echo "Please check your inputs!";
		}
	}	
?>   