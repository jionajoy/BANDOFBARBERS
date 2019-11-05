
<?php  
include("config.php");
 if(isset($_POST["id"]))  
 {  
      $output = '';  
      //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers"); 
	 
      $query = "DELETE FROM slot WHERE slot_id = '".$_POST["id"]."'";  
      $result = mysqli_query($connection, $query); 
	
       
   
 }  
 ?>