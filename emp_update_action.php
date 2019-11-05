<?php          
session_start();
include("config.php");

$emp_code = $_SESSION["emp_code"];
    if (isset($_POST["submit"])) {
		include("config.php");
     //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$emp_code = $_SESSION["emp_code"];
		$fname = $connection->real_escape_string($_POST["fname"]);
		$lname = $connection->real_escape_string($_POST["lname"]);					
		$email = $connection->real_escape_string($_POST["email"]);  
		$password = md5($connection->real_escape_string($_POST["password"])); 
		
		
		$emp_check = $connection->query("SELECT * FROM employee WHERE emp_code='$emp_code'");
		
		
		
		if ($emp_check->num_rows > 0) 
		{
			
			$data = $connection->query("UPDATE employee SET fname = '$fname' , lname = '$lname' , email = '$email' , password = '$password' WHERE emp_code = '$emp_code' ");
			
    		$message = "Registration Sucessful!";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='emp_portal.php';
			</script>";
				
		} 		
		else 
		{
			
				$message = "Registration Error!";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='empLogin.php';
			</script>";
			
		} 	   
		
		
}


?>
