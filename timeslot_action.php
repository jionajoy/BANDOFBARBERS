+<?php 
session_start();
include("config.php");
	
	$emp_code = $_SESSION["emp_code"];

	

//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$data = $connection->query("SELECT * FROM employee WHERE emp_code='$emp_code'");
	if ($data -> num_rows == 1) {
			$row = $data -> fetch_assoc();
			$emp_id= $row['emp_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
		
	 
$b = $_SESSION["emp_code"];

$value = explode(',', $_POST['time']);
if(isset($_POST['submit']))
{      
	include("config.php");
	//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
	
	
	//delete records if its older than current date
	$delete = $connection->query("DELETE FROM slot WHERE date < DATE_SUB(NOW() , INTERVAL 1 DAY)"); 
//insert 
	
	if("" == trim($_POST['time'])){
		header("Location: emp_main_page.php");
	}
		
		
	foreach ($_POST['time'] as $value) {
		
		$check = $connection->query("SELECT * FROM slot WHERE avail = '$value ' AND (SELECT salon_id FROM employee WHERE emp_code='$b')");
		if ($check->num_rows>0){
			 
			$delete1 = $connection->query("DELETE FROM slot WHERE avail = ' $value ' AND emp_id = '$emp_id'");  
			
			header("Location: emp_main_page.php");
				//$message=" time slots Exsist";
		//echo "<script type='text/javascript'>alert('$message');
		//window.location.href='emp_main_page.php';
	//	</script>";
		}
	
	}
	
		
			foreach ($_POST['time'] as $value) {
				
			$query = $connection->query("INSERT INTO slot (avail, date , emp_id, salon_id) VALUES ('" . $value . "', CURDATE() , (SELECT emp_id FROM employee WHERE emp_code='$b'), (SELECT salon_id FROM employee WHERE emp_code='$b'))");  
				
				header("Location: emp_main_page.php");
					//$message = "Time Slots Updated";
        	//echo "<script type='text/javascript'>alert('$message');
				//window.location.href='emp_main_page.php';
			//</script>";
	}
	
		
		}


	
?>
<?php }?>
