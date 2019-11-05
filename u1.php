
 <?php  
session_start();
include("config.php");
$id = $_GET['id'];
 //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers"); 
 $query = "SELECT * FROM employee WHERE emp_id=".$id;  
 $result = mysqli_query($connection, $query);  
 ?>  
<!DOCTYPE html>
<html>
<head>
	<title>Time Slot</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


</head>
<body>

<?php include('nav.php') ?>
            
         
      
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center"></h3>  
                <br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">Employee Name</th>  
                               <th width="30%">View Time Slot</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["fname"]; ?></td>  
                          
                               <td><input type="button" name="view" value="view" id="<?php echo $row["emp_id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                  
                     <h4 class="modal-title">Time Slot Availability</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer"> 
                     <button type="button" class="close"  class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
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
 <br> <br> <br>
  <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div>
     </div>
</body>
</html>  
