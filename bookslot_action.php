<?php
session_start();
	include("config.php");
	if(!isset( $_SESSION["email"])){
		$message = "Please Login to Book an Appointment";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='userLogin.php';
			</script>";
	
	} ?>
	<?php if(isset($_SESSION["email"]) ) { ?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php include('nav.php') ?>

	<?php
$user_email = $_SESSION["email"];

include("config.php");
//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
$user = $connection->query("SELECT * FROM user WHERE email = '$user_email'");
if ($user->num_rows>0){
	$row = $user->fetch_assoc();
	$username=$row['fname'];
	$user_id = $row['user_id'];
	
	$id = $_GET['id'];
$booking = $connection->query("UPDATE slot SET  user_id = '$user_id' WHERE slot_id = '$id'");
}
	

	
$confirm = $connection->query("SELECT * FROM slot WHERE slot.user_id='$user_id'   ");
if($confirm->num_rows>0){
	$data = $confirm->fetch_assoc();
	
	$time = $data['avail'];
	$date = $data['date'];
	$emp = $data['emp_id'];
	
}
$empdet = $connection->query("SELECT * FROM employee WHERE emp_id = '$emp'");
if($empdet->num_rows>0){
	$data1 = $empdet->fetch_assoc();
	
	
	$empname = $data1['fname'];
	//echo "booking Confirmed ";
	//header("Location:index.php");
}
?>


<div class="container" style="text-align:center; ">
    <h1 class="text-info" style="margin-top:40px">Booking Confirmation</h1>
    
	  <table class="table table-info " style="width:50%; margin-left:25%; margin-top:50px">
         
          
          <tr >
             <td>  Name:</td>
            <td><?php echo $username; ?></td>
          </tr>
          <tr>
             <td> Time:</td>
             <td> <?php echo $time; ?></td>
          </tr>
          <tr>
             <td> Date:</td>
             <td> <?php $date = date('Y-m-d'); echo $date; ?></td>
          </tr>
          <tr>
              <td>Employee Name:</td>
                <td><?php echo $empname; ?></td>
          </tr>
    </table></div>
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  <?php } ?>