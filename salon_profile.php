
<?php 
session_start();
include("config.php");
$user_check = $_SESSION['email'];
		//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_sql = "select * from salon where email='$user_check'";
   		$user_sql = $connection -> query($user_sql);
        
		if ($user_sql -> num_rows == 1) {

  	// check session variable
  	if (isset($_SESSION['email']))
  	{
		//make the database connection
		//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_check = $_SESSION['email'];
   
    	//make a query to check if a valid user
    	$ses_sql = "select * from salon where email='$user_check'";
    	$result = $connection -> query($ses_sql);
		if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
            $salon_id = $row['salon_id'];
    		$employee = $connection -> query("select * from employee where fname IS NOT NULL AND salon_id = '$salon_id' ");
            
           
    
        $row2 = $employee -> fetch_assoc();
         
    		
		
			
		?>

<?php include("nav.php")?>
<div class="container" style="text-align:center;">
    
    <h1  class="text-info" style="margin-top:40px">My Account</h1>
   <a  href=salon_welcome.php class="btn btn-outline-info" style="float:right" >ADD EMPLOYEE</a><br><hr>
    
    <div class="row" style="margin-top:50px">
    <div class="col-sm-4">
         <h5><b> Employees </b></h5><hr class="bg-info">
        
         <?php if($data2->num_rows>0) { ?>

<?php do { ?> 
        
       
    
       <ul class="nav-link">
           
           <button  class="btn btn-dark view_data" id="<?php echo $row2["emp_id"]; ?>" style=" width:70%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; float:inherit" DISABLED><?php echo $row2['fname']; ?></button>
      </ul>
        
      
       <?php } while($row2 = $employee -> fetch_assoc()) ?>
        
          <?php } else { ?>
        
         <button name="view" style="color: black; width: 100%;" class="btn btn-info btn-xs view_data" disabled> No employee yet</button>
   <?php } ?>
         </div>
        <div class="col-sm-8">  
    
	<table class="table table-info " style="width:50%; margin-left:25%; margin-top:50px">
        
        
		<tr>
            <td>Name:</td>
           <td> <?php echo $row["oname"] ?></td>
        </tr>
		
		<tr>
           <td> Email: </td>
           <td> <?php echo $row["email"] ?></td>
        </tr>
        <tr>
            <td>Salon Image:</td>
           <td><img src="<?php echo $row['image'];?>" style="width:200px; height:200px;"></td>
        </tr>
		<tr>
            <td>Salon Name: </td>
            <td><?php echo $row["sname"] ?></td>
        </tr>
       
		<tr>
            <td>Salon Address: </td>
            <td><?php echo $row["saddress"] ?></td>
        </tr>
        <tr>
           <td> City: </td>
            <td><?php echo $row["city"] ?></td>
        </tr>
		<tr>
           <td> Pin: </td>
            <td><?php echo $row["zip"] ?></td>
        </tr>
		<tr>
           <td> State: </td>
            <td><?php echo $row["state"] ?></td>
        </tr>						
	
			 
    </table>
        </div></div>
</div>   <br> 
    <!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div></div>
  <!-- Footer -->
   <?php } ?>
      <?php } ?>
    <?php } else { 
	header(("Location:index.php"));
?>
<?php }?>
