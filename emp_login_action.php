<?php
	session_start();
include("config.php");

	if (isset($_SESSION["email"])) {
		
		header("Location: emp_welcome.php");
		//exit();
	}

	if (isset($_POST["login"])) {
		include("config.php");
		// $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
	
		$emp_code = $connection->real_escape_string($_POST["emp_code"]);
		$data = $connection->query("SELECT * FROM employee WHERE emp_code ='$emp_code'");
				
		if ($data->num_rows > 0) {
			$row = $data->fetch_assoc();
			
			
			$_SESSION["loggedIn"] = 1;
			$_SESSION["emp_code"] = $row['emp_code'];
			$_SESSION["emp_id"] = $row['emp_id'];
		///echo $_SESSION["emp_code"];
			header("Location: emp_welcome.php");
			//exit();

		} 
		else {
			$message = "Please Enter a valid Employee code!";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='empLogin.php';
			</script>";
			
		}
	}	
?>   
