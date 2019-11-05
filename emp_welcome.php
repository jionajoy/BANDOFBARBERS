<?php
session_start();
include("config.php");
if(!isset($_SESSION["emp_code"]))
{
header("Location:index.php");
}
?>
<?php if(isset($_SESSION["emp_code"])){ ?>
<?php
	include("config.php");
//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
$data = $connection->query("SELECT * FROM employee WHERE emp_code ='$emp_code'");

		if ($data->num_rows > 0) {


			$_SESSION["emp_code"] = $emp_code;
			$_SESSION["emp_id"] = $emp_id;
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8"><link href="styles.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/validation.js"></script>
<title>Employee Registartion</title>
</head>

<body>
<?php include('nav.php'); ?>
<div class="container-fluid">
<div class="container-fluid">
<div class="container">
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">
    <form class="form-horizontal" role="form" method="POST" action="emp_update_action.php">
	<div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 style="text-align: center; margin-top:40px">Update Your Details</h2>
                <hr class="bg-info">
            </div>
        </div>
        <div class="row" style="margin-top:30px">
             <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="Fname">First Name:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="fname" class="form-control" id="Fname"
                               placeholder="First Name" required autofocus onChange="inputAlphabet(fname)">
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="lname">Last Name:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="lname" class="form-control" id="lname"
                               placeholder="Last Name" required onChange="inputAlphabet(lname)">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-Mail Address:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required onChange="ValidateEmail(email)">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="password">Password:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required onChange="lengthDefine(password,4)">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="password">Confirm Password:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="password" class="form-control"
                               id="rePassword" placeholder="Password" required onChange="checkRePassword(password, rePassword)">
                    </div>
                </div>
            </div>
        </div>
				<div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="address">Address:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group h">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="saddress" class="form-control" id="address"
                               placeholder="1234 Main St" required>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="city">City:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="city" class="form-control" id="city"
                               placeholder="city" required onChange="inputAlphabet(city)">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3 field-label-responsive">
                    <label for="zip">Zip Code:</label>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                            <input type="int" name="zip" class="form-control" id="zip"
                                   placeholder="Zip" required onChange="checkZIPCode(zip)">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3 field-label-responsive">
                    <label for="state">State:</label>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                            <input type="text" name="state" class="form-control" id="state"
                                   placeholder="State" required onChange="inputAlphabet(state)">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="number">Store Contact Number:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="int" name="number" class="form-control" id="snumber"
                               placeholder="Store Contact Number" required >
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="margin-top:30px">
            <div class="col-md-5"></div>
            <div class="col-md-5">
                <button type="submit" name="submit" class="btn btn-info" >Update</button>
            </div>
        </div>
    </form>
	</div>
</div>
</div>
<br>



<div class="container-fluid">


<div class="container">

	<div class="d-flex justify-content-center">
		<div class="card" style="margin-top: 50px; margin-bottom: 50px;height: auto; width: 70%">


		<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black; text-align: center;">
	<div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 style="text-align: center; margin-top:40px">Employee Login</h2>
                <hr class="bg-info">
                   <a href="emp_portal.php"><button type="button" class="btn  btn-lg w-75 btn-outline-info" style="margin-bottom: 20px;">Login</button></a>
            </div>
        </div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php include('footer.php') ?>
</body>
</html>

<?php } ?>
