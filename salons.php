<?php 
session_start();
$_SESSION["email"];
include("config.php");
//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
	$sql = "SELECT * FROM salon";
	$result = $connection -> query($sql);
		$row = $result -> fetch_assoc();	
	    

?>
<!doctype html>
<html><head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>Salon</title>
<style>
.gallery-image {
	height: 250px;
	width: 250px;
	}
</style>
    </head>
  <body>
<?php include('nav.php');?>
   
    <div class="container-fluid">    
    <div class="container text-center">
    
  <h3 style="color:black;margin-top:40px">Salons</h3><hr class="bg-info"><hr class="bg-info">
  <div class="row">
   <?php do { ?>
    <div class="col-sm-4">
        <div class="fixed" style="padding:30px">
      <a href="salonDesc.php?id= <?php echo $row['salon_id']; ?>" role="button">  
		<h2 style="color: black;"><?php echo $row['sname']; ?> </h2>
     
      <img src="<?php echo $row['image'];?>" style="width:100%" border:1px solid black; alt="Image" class="gallery-image"><br>
  
 </a></div>
    </div>
    <?php } while($row = $result -> fetch_assoc()) ?>
</div>
</div>
<br>
<div class="container">
 <div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">
    <br>What is Lorem Ipsum?<br><br>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>

    Where does it come from? <br><br>
    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.<br><br>

    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br>
<br>
<br>
</div>
</div>
      </div>
      
      <!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div></div>
  <!-- Footer -->
</body>

    
</html>
