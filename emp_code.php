<?php 
session_start();
include("config.php");
if(isset($_POST["emp_code"])){
	$output3 = '';
$user_check = $_SESSION['email'];
	
		//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_sql = "select * from salon where email='$user_check'";
   		$user_sql = $connection -> query($user_sql);
        
		if ($user_sql -> num_rows == 1) {
$user_check = $_SESSION['email'];


	 //include("config.php");
	//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
	
	$emp_code = $connection->real_escape_string($_POST["emp_code"]);
	
	$data1 = $connection->query("INSERT into employee (fname , lname , email , password , emp_code, salon_id) 
	VALUES (NULL,NULL,NULL,NULL,'$emp_code', (SELECT salon_id FROM salon WHERE email = '$user_check'))");

	
	if ($data1 === false) {
		
		
		       $output3 .= ' 
		   		Error Please try again!
                ';  
		echo $output3;

	}else{
		
    	       $output3 .= ' 
		   		Employee Code Generated.

                ';  

	echo $output3;
}

?>

<?php } ?>

    <?php } else { 
	header(("Location:salon_welcome.php"));
?>
<?php } ?>

