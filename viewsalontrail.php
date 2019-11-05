<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 100%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
<?php
session_start();
//get by id or email of the salon
$id = $_GET['id'];

$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

$data1 = $connection->query("SELECT * FROM slot WHERE slot.emp_id = 16");
//$data1 = $connection->query("SELECT * FROM employee,salon WHERE salon.salon_id = employee.salon_id");
//$data1 = $connection->query("SELECT salon.sname, salon.saddress,salon.pin,salon.state,employee.emp_id
							//	FROM salon 
							//	INNER JOIN salon On salon.salon_id = employee.salon_id
							//	WHERE salon_id=".$id);
/*$data1 = $connection->query("SELECT salon.*, employee.* FROM salon
        			INNER JOIN salon employee
					ON salon.salon_id = employee.salon_id
					WHERE salon.salon_id = '" . $id ."'");*/
$data2 = $connection->query("SELECT emp_id,fname,lname,email,salon_id FROM employee WHERE employee.salon_id =" . $id );
$row1 = $data1 -> fetch_assoc();
$row2 = $data2 -> fetch_assoc();



?>

<?php do { ?>
<div class="row">
  <div class="column">
    <div class="card">
      <h3><?php echo $row1['avail']; ?></h3>
    </div> 
  </div>
 
<?php do { ?> 
 <div class="row">
  <div class="column">
    <div class="card">
      <h3><?php echo $row2['fname']; ?></h3>
      <p><?php echo $row2['lname']; ?></p>
      <p><?php echo $row2['emp_id'];?></p>
      <p><?php echo $row2['email']; ?></p>
    </div> 
  </div>



  <?php } while($row2 = $data2 -> fetch_assoc()) ?>
  
  <?php } while($row1 = $data1 -> fetch_assoc()) ?>






