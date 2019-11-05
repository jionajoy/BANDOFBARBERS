<?php 
session_start();
include("config.php");
if(isset($_SESSION['emp_code']))
{
header("Location:index.php");
}
?>

<?php if(!isset($_SESSION['emp_code'])){ ?>

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
		<div class="card" style="margin-top:100px">
			<div class="card-header">
				<h3 class="text-info text-center">Employee Gateway</h3>

			</div>
			<div class="card-body">
				<form method="post" action="emp_login_action.php">
					<div class="input-group form-group" style="margin-top:30px">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="emp_code" class="form-control" placeholder="Employee Code" required >

					</div>
					
					<div class="form-group" style="margin-top:30px">
						<input name="login" type="submit" value="Enter" class="btn btn-outline-info login_btn mx-auto d-block">
					</div>
				</form>
			</div>
			<div class="card-footer" >
				
			</div>
		</div>
	</div>
</div>
</div> <br><br><br><br><br>
<!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div></div>
  <!-- Footer -->
    
    </body>



</html>
<?php } ?>
