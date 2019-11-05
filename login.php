<?php 
session_start();
include("config.php");
if(isset($_SESSION['email']))
{
header("Location:index.php");
}
?>

<?php if(!isset($_SESSION['email'])){ ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!--Custom styles-->
    <style>
    .bg-img {
  /* The image used */
  background-image:url();

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}</style>
</head>
<body>
    <?php include('nav.php') ?>
<div class="container-fluid">


<div class="container">
<div class="bg-img">
	<div class="d-flex justify-content-center">
		<div class="card" style="margin-top: 50px; margin-bottom: 50px;height: auto">
			<div class="card-header border-info">
				<h2 style=" text-align: center; margin-top:50px" class="text-info">LOGIN/REGISTER</h2>
			</div>
			<div class="card-body" style="margin-top: 30px">
				<div class="text-center">
					<a href="userLogin.php"><button type="button" class="btn btn-lg w-75 btn-outline-info" style="margin-bottom: 20px; ">User</button></a>
		        </div>
				<div class="text-center">
					<a href="emp_portal.php"><button type="button" class="btn btn-lg w-75 btn-outline-info" style="margin-bottom: 20px; ">Employee</button></a>
				</div>
				<div class="text-center">
				    <a href="salonLogin.php"><button type="button" class="btn  btn-lg w-75 btn-outline-info" style="margin-bottom: 20px;">Salon</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
    </div>
</div>
    <br>
    <!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div></div>
  <!-- Footer -->
</body>



</html>
<?php } ?>