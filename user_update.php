<?php
session_start();
$user_check = $_SESSION['email'];
include("config.php");
		
	
   		$user_sql = $connection -> query("select * from user where email='$user_check'");
        
		if ($user_sql -> num_rows == 1) {
			$row = $user_sql -> fetch_assoc();
			$id = $row['user_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
			$password = $row['password'];


	if(isset($_GET['Submit'])){//if the submit button is clicked
	
	$nfname = $_GET['nfname'];
	
	$nlname = $_GET['nlname'];
	
	$nemail = $_GET['nemail'];
	
	$npassword = md5($_GET['npassword']);
		
	$update = $connection->query("UPDATE user SET fname='$nfname', lname='$nlname', email='$nemail', password='$npassword' WHERE user_id = '$id'");
	
	
	
	
		
if($update === true){//if the update worked
		
		$message = "Update Successful";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='user_update.php';
			</script>";
	header("Location:user_profile.php");
}
else {

	$message = "Update Error";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='user_update.php';
			</script>";
}
		
	
	}
?>

<?php include("nav.php"); ?>

<h2>Update Record</h2>
<form action="user_update.php" method="get">
<table border="0" cellspacing="10">
<tr>
<td>First Name:</td> <td><input type="text" name="nfname" value="<?php echo $row['fname']; ?>"></td>
</tr>
<td>Last Name:</td> <td><input type="text" name="nlname" value="<?php echo $row['lname']; ?>"></td>
</tr>
<tr>
<td>Email:</td> <td><input type="text" name="nemail" value="<?php echo $row['email']; ?>"></td>
</tr>
<tr>
<td>Password:</td> <td><input type="password" name="npassword" value="<?php echo $row['password']?>"></td>
</tr>
<tr>
<td><INPUT TYPE="Submit" VALUE="Update Your Details" NAME="Submit"></td>
</tr>
</table>
</form>

	
<?php include("footer.php"); ?>
<?php }?>

