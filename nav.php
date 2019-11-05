<?php
//session_start();
include("config.php");
 //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");


?>
<html>
<head>
<title>Home </title>
</head>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<meta charset="UTF-8">
<div class="jumbotron text-center text-info" style="margin-bottom:0; padding:20px">
  <h1>Band Of Barbers</h1>

</div>

  <nav class="navbar navbar-expand-sm  bg-info navbar-dark sticky-top " style="padding-top:0px; margin-top:50px; margin:0px;width:100%;">
   <a class="navbar-brand" href="index.php">
    <img src="images/logo5.png" alt="logo" class="img-fluid" style="width:80px; height:80px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="index.php" style="color:#ffffff">Home</a>
      </li>
        <li class="nav-item" >
        <a class="nav-link" href="salons.php" style="color:#ffffff" >Salons</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="about.php" style="color:#ffffff">Why Us?</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="contact.php" style="color:#ffffff">Contact</a>
      </li>
       <li class="nav-item">
 <?php if(isset($_SESSION["email"])) {
			$check =  $_SESSION["email"];
	include("config.php");
        // $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
			  	$check =  $_SESSION["email"];
			  	$query5 = $connection->query("SELECT email FROM user WHERE email = '$check'");
				$query6 = $connection->query("SELECT email FROM salon WHERE email = '$check'");
				$query7 = $connection->query("SELECT email FROM employee WHERE email = '$check'");
				$row5 = $query5->fetch_assoc();
				$row6 = $query6->fetch_assoc();
				$row7 = $query7->fetch_assoc();
	?>
		<?php if($check = $row5['email']){ ?>

		 <a class="nav-link" href="user_profile.php?id=<?php echo $_SESSION["email"]; ?>" style="color:#ffffff">My Account</a>
		 <?php } elseif($check = $row6['email']){?>

		 <a class="nav-link" href="salon_profile.php?id=<?php echo $_SESSION["email"]; ?>" style="color:#ffffff">My Account</a>

		 <?php } elseif($check = $row7['email']){?>
		 <a class="nav-link" href="emp_profile.php?id=<?php echo $_SESSION["email"]; ?>" style="color:#ffffff">My Account</a>
		 <?php } else {?>
		 <?php } ?>
           <?php } ?>
        </li>
      <li class="nav-item">
 		<?php if(isset($_SESSION["email"])){?>

        <a class="nav-link" href="logout.php" style="color:#ffffff">Logout</a>
      </li>
      <li class="nav-item">
			<?php } else { ?>
          <a class="nav-link" href="login.php" style="color:#ffffff">Login</a>
          <?php } ?>
		</li>







    </ul>

    </div>
</nav>

</html>
