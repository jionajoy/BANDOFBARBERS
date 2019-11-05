<?php
session_start();

include("config.php");
if (isset($_POST["register"])) {
     //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		
		$image_path = 'uploads/'.$_FILES['image']['name'];
		$image_path = $connection->real_escape_string($image_path);
		$oname = $connection->real_escape_string($_POST["oname"]);
		$sname = $connection->real_escape_string($_POST["sname"]);
		$email = $connection->real_escape_string($_POST["email"]);  
		$password = md5($connection->real_escape_string($_POST["password"])); 
		$saddress = $connection->real_escape_string($_POST["saddress"]);
		$city = $connection->real_escape_string($_POST["city"]);
		$zip = $connection->real_escape_string($_POST["zip"]);
		$state = $connection->real_escape_string($_POST["state"]);  		
		$number = $connection->real_escape_string($_POST["number"]);  
		
	
		$data1 = $connection->query("SELECT * FROM salon WHERE email= '$email'");
		
		if ($data1->num_rows>0)
		{
			$message = "You are already a Registered User";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='salonLogin.php';
			</script>";
			
		}
		else
		{
				if(preg_match("!image!",$_FILES['image']['type'])){
				if(copy($_FILES['image']['tmp_name'],$image_path)){
					
			
		$data = $connection->query("INSERT INTO salon (image, sname , oname, email, password, saddress, city, zip , state, number, latitude, longitude) VALUES ('$image_path', '$sname' , '$oname', '$email', '$password', '$saddress', '$city', '$zip' , '$state', '$number', NULL, NULL)");
			
    	if ($data === false)
		{
			//echo "<img src='$image_path' />";
			$message = "Error Please Try Again";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='salonReg.php';
			</script>";
		}
		
    	else
		{
			$message = "Your have been registered";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='salonLogin.php';
			</script>";
    	  
		  }
	    }
		     
	  }
		else{
				$message = "Please Insert Your Salon Image";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='salonReg.php';
			</script>"	;
				}	 
		}
			
}
  
?>