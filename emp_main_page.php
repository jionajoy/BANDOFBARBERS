<?php
	session_start();
include("config.php");
if(!isset($_SESSION["emp_code"])){
	header('Location: empLogin.php');
}

	$emp_code = $_SESSION["emp_code"];
include("config.php");
 //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

		$data = $connection->query("SELECT * FROM employee WHERE emp_code='$emp_code'");
if ($data->num_rows>0){
			$row = $data -> fetch_assoc();
			$emp_id = $row['emp_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
		$_SESSION["emp_code"] =$row['emp_code'];

	 	$slot = $connection->query("SELECT * FROM slot WHERE avail > CURTIME() AND emp_id='$emp_id' ORDER BY avail ASC ");
		  $row1 = $slot-> fetch_assoc();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8"><link href="styles.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/validation.js"></script>
<title>Employee Portal</title>
</head>

<?php include('nav.php'); ?>
<body>

<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">

<div>
	<h3 style="text-align: center; margin-top:40px">Welcome <?php echo $row['fname']; ?></h3>
</div>
	</div>

			<div class="row">

            <div class="col-md-6">
                <h3 style="text-align: center; margin-top:40px">Selected Timeslots</h3>

                <hr class="bg-info">
            </div>
        </div>

	<div class="row">
	<?php do { ?>
	<div class="col-md-6">
	<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">


		<?php if($slot->num_rows >0){ ?>
		<h5 style="text-align: center; margin-top:40px; margin-left:40px; margin-right:40px; border: 1px groove;"> <?php echo $row1['avail'] ?></h5>
		<a type="btn btn-info" id="<?php echo $row1['slot_id']; ?>" name="view" style="text-align: center; color: black; width: 25%;"  class="btn btn-info btn-xs view_data" > Delete</a>
	<?php } else { ?>
	<p style="text-align: center;">NO SLOTS SELECTED FOR TODAY </p>
		<?php } ?>
		</div>

	</div>
	<?php } while ($row1 = $slot-> fetch_assoc()) ?>
	</div>
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">

	<form class="form-horizontal" method="post" action="timeslot_action.php">
	<div class="row">
            <div class="col-md-6">
                <h2 style="text-align: center; margin-top:40px">Update Your TimeSlots</h2>
                <hr class="bg-info">
            </div>
        </div>
	<h3 style="text-align: center; margin-top:40px"> <?php include('timeslots.php'); ?></h3>
	</form>


</div>




 <script>
 $(document).ready(function(){
      $('.view_data').click(function(){
           var id = $(this).attr("id");
           $.ajax({
                url:"timeslot_delete.php",
                method:"post",
                data:{id:id},
                success:function(data){
				 location.reload();
					//alert(data);


                }
           });
      });
 });
 </script>
	</body>
	<?php include('footer.php'); ?>
</html>
<?php }?>
