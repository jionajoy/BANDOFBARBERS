<?php 
session_start();
include("config.php");
$_SESSION['email'];
if(!isset($_SESSION['id'])){
	header("Location:userLogin.php");


$id =$_GET['id'];
//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");


$data = $connection->query("SELECT * FROM slot WHERE slot_id =" . $id );
$row = $data->fetch_assoc();
?>


<div class="row">
    <div class="col-sm-4">
     <h2 style="color: black;">Confirm Your Slot</h2>
     <h3 style="color: black;"><?php echo $row['avail']; ?> </h3>
      <a href="bookslot_action.php?id= <?php echo $row['slot_id']; ?>"> Click Here
   </a>
    </div>
</div>
<?php } else { ?>
<?php header("Location:userLogin.php"); } ?>