<?php
session_start();

include("config.php");
if (isset($_POST["register"])) {
     //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		 $image_path = 'uploads/'.$_FILES['image']['name'];
		 $image_path = $connection->real_escape_string($image_path);
		$serv_name = $connection->real_escape_string($_POST["serv_name"]);
		$serv_desc = $connection->real_escape_string($_POST["serv_desc"]);
		$sprice = $connection->real_escape_string($_POST["sprice"]);



		$data1 = $connection->query("SELECT * FROM services WHERE serv_name= '$serv_name'");

		if ($data1->num_rows>0)
		{
			$message = "You have already registered this Service";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='salon_serv.php';
			</script>";

		}
		else
		{
				if(preg_match("!image!",$_FILES['image']['type'])){
				if(copy($_FILES['image']['tmp_name'],$image_path)){


		$data = $connection->query("INSERT INTO services (image, serv_name , serv_desc, sprice) VALUES ('$image_path', '$serv_name' , '$serv_desc', '$sprice')");

    	if ($data === false)
		{
			//echo "<img src='$image_path' />";
			$message = "Error Please Try Again";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='salon_serv.php';
			</script>";
		}

    	else
		{
			$message = "Your service has been added";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='salon_welcome.php';
			</script>";

		  }
	    }

	  }
		else{
				$message = "Please Insert Your Salon Image";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='salon_serv.php';
			</script>"	;
				}
		}

}

?>
