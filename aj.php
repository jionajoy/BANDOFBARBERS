
<?php  
include("config.php");
 if(isset($_POST["id"]))  
 {  
      $output = '';  
      //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers"); 
      $query1 = "SELECT * FROM slot WHERE slot.user_id IS NULL AND avail > CURTIME() AND slot.emp_id = '".$_POST["id"]."' ORDER BY avail ASC ";  
	  
      $result = mysqli_query($connection, $query1);  

	 if( $result->num_rows>0){
		
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= ' 
		   		  <tr>
				  <th width="70%"  ></th>   
				  <th width="70%"  ></th> 
				  
				  </tr>
				   <td width="70%">'.$row["avail"].'</td>  
				   <td width="70%">
				    <a href="bookslot_action.php?id='.$row["slot_id"].'">Book</a>
					</td>
					</tr>
				  
				 
				 
               
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
	 
	 
  else { 
	  $output1 .= ' 
		   		  No available TimeSlots
				
                ';  
       
}echo $output1; 
 ?>

 <?php } ?>