

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
session_start();
include("config.php");
//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
	
$sql = $connection->query("SELECT * FROM slot WHERE AND date = CURDATE() slot.user_id=NULL AND slot.emp_id= 16");
	$rowtime = $sql->fetch_assoc();
	$time = $rowtime['avail'];
	
$sql1 = $connection->query("SELECT * FROM employee WHERE emp_id= 16");
	
	if($sql1->num_rows>0){
	$row1 = $sql1->fetch_assoc();
	$name = $row1['fname'];
	}
	
	if($sql->num_rows>0){
		
		$row = $sql->fetch_assoc();
		//$avail = $row['avail'];
		$slot_id = $row['slot_id'];
		$time = $row['avail'];
		
	}?>
	
	<div class="row">
    <div class="col-sm-8">
     <h2 style="color: black; align-content: center;"><?php echo $name; ?></h2>
     <?php echo $time ;?>
		</div>
	</div>
	
	<?php 
	$sql = $connection->query("SELECT * FROM slot WHERE slot.user_id is NULL AND HOUR(avail) > HOUR(CURTIME()) AND slot.emp_id=16 " );
	if($sql->num_rows>0){
		//$row = $sql->fetch_assoc();
		$slot_id = $row['slot_id'];
		while($row = $sql->fetch_assoc()){
			
		$resultset[] = $row['avail'];
		}
	foreach($resultset as $value) {?>
		<div class="row">
    <div class="col-sm-4">
     <h3 style="color: black;"><?php echo $value; ?> </h3>
      <a href="bookslot_action.php?id= <?php echo $slot_id; ?>"> Book This Slot
   </a>
    </div>
    </div>
    <?php } while($row = $sql->fetch_assoc()) ?>
		
		<?php } else { ?>
		
		<div class="row">
    <div class="col-sm-4">
     <h3 style="color: black;">No available Slots </h3>
      
  
    </div>
    </div>
   <?php } ?>
		





 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div>
     </div>
   