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

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script src="js/validation.js"></script>
	<!--Custom styles-->
</head>
<body>
    <?php include('nav.php') ?>
<div class="container-fluid">


<div class="container">
	<div class="d-flex justify-content-center">
		<div class="card" style="margin-top:70px">
			<div class="card-header">
				<h3 class="text-info text-center">Salon Sign In</h3>
			</div>
			<div class="card-body">
				<form method="post" action="salon_login_action.php" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="email" required onChange="ValidateEmail(email)">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<div class="form-group">
						<input type="submit" name="Login" value="Login" class="btn btn-outline-info  mx-auto d-block">
					</div>
				</form>
			</div>
			<div class="card-footer" >
				<div class="d-flex justify-content-center links text-info" >
					Don't have an account?<a href="salonReg.php" style="color: black">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#" style="color: black">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div><br><br><br><br><br>
    
    <!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div></div>
  <!-- Footer -->
</body>



</html>
<?php } ?>