<?php
session_start();
include("config.php");
$user_check = $_SESSION['email'];
		///$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_sql = "select * from salon where email='$user_check'";
   		$user_sql = $connection -> query($user_sql);

		if ($user_sql -> num_rows == 1) {

if(isset($_SESSION['email']))
{


		//make the database connection
		//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		//$user_check = $_SESSION['email'];

    	//make a query to check if a valid user
    	$sql = "select * from salon where email='$user_check'";

    	$result = $connection -> query($sql);


		if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
        	$salon_id = $row['salon_id'];
    		$employee = $connection -> query("select * from employee where fname IS NOT NULL AND salon_id = '$salon_id' ");
				$services=$connection -> query("select * from services where serv_name IS NOT NULL  ");


        $row2 = $employee -> fetch_assoc();
				$row3 = $services->fetch_assoc();


		}

}
?>




<html>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
 $(document).ready(function(){
      $('.view_data').click(function(){
           var id = $(this).attr("id");
           $.ajax({
                url:"aj.php",

                method:"post",
                data:{id:id},
                success:function(data){
                     $('#employee_detail').html(data);
                     $('#dataModal').modal("show");
                }
           });
      });
 });
	</script>
   <script>
	   $(document).ready(function(){

		    $("#code").click(function() {
           var id1 = $(this).attr("id");
           $.ajax({
                url:"emp_code.php",
			   cache: "false",
                method:"post",
			   data: {emp_code: $("#emp_code").val()},
                success:function(data){
					window.alert(data);

                }
           });
      });
 });

 </script>
<?php include("nav.php")?>
<body>
<div class="container-fluid text-center" >
<h1 class="text-info" style="margin-top:40px">Welcome &nbsp; <?php echo $row['oname']?> </h1><br>

    <div class="row" style="margin-top:50px">
    <div class="col-xl-4">
         <h5><b> Employees </b></h5><hr class="bg-info">

        <?php if($employee->num_rows>0) { ?>
<?php do { ?>



       <ul class="nav-link">

           <button  class="btn btn-dark view_data" id="<?php echo $row2["emp_id"]; ?>" style=" width:70%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; float:inherit" DISABLED><?php echo $row2['fname']; ?></button>
      </ul>


       <?php } while($row2 = $employee -> fetch_assoc()) ?>

        <?php } else { ?>

         <button name="view" style="color: black; width: 100%;" class="btn btn-info btn-xs view_data" disabled> No employee yet</button>
   <?php } ?>
         			</div>

				 <div class="col-xl-4">
							<h5><b> Services </b></h5><hr class="bg-info">

						 <?php if($services->num_rows>0) { ?>
		 <?php do { ?>



						<ul class="nav-link">

								<button  class="btn btn-dark view_data" id="<?php echo $row3["serv_id"]; ?>" style=" width:70%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; float:inherit" DISABLED><?php echo $row3['serv_name']; ?></button>
					 </ul>


				 <?php } while($row3 = $services -> fetch_assoc()) ?>

						 <?php } else { ?>

							<button name="view" style="color: black; width: 100%;" class="btn btn-info btn-xs view_data" disabled> No services yet</button>
				<?php } ?>
							</div>






<div class="col-xl-4">
<div class="card border-info" style="width:70%; margin-left:15%; padding:5%; margin-top:40px">
    <p>Please generate a code and give it to new employee. </p>
	<h3>Add an Employee</h3>


        <div class="generate">
        <input type="text" id="emp_code" name="emp_code" placeholder="Employee Code" />
		<input type="submit"   value="Generate" id="code" name= "code" style="margin-top:10px" />
	</div>
</div>




<div class="card border-info" style="width:70%; margin-left:15%; padding:5%; margin-top:40px">
		<h3>Add a Service</h3>
    <p>Please add the services you want to be listed in the portal. </p>

<form action="salon_serv.php">
<input type="submit" value="Add Service">
</form>

</div>
</div>
</div>
    </div>
</div>

</body> <br><br><br><br>
    <!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">

<?php include("footer.php")?>

     </div>
     </div>
  <!-- Footer -->
</html>

 <div id="dataModal" class="modal fade">
      <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Slot Details</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="employee_detail">
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
           </div>
      </div>
 </div>


  <?php } else {
	header(("Location:index.php"));
?>
<?php }?>
