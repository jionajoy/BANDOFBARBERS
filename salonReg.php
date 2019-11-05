<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/validation.js"></script>
<title>Salon Registration</title>
</head>

<?php include('nav.php'); ?>

<div class="container-fluid" >
<div class="container">
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">
    <form class="form-horizontal" role="form" method="POST" action="salon_register_action.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="margin-top:40px">
                <h2 style="text-align: center">Register a Salon</h2>
                <hr class="bg-info">
            </div>
        </div>
		<div class="row" style="margin-top:30px">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="image">Salon Image:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <input id="uploadimage" type="file" accept="image/*" name="image" >
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="sname">Salon Name:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="sname" class="form-control" id="sname"
                               placeholder="Salon Name" required autofocus onChange="inputAlphabet(sname)">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="oname">Owner Name:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="oname" class="form-control" id="oname"
                               placeholder="Owner Name" required onChange="inputAlphabet(oname)">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="email">Salon E-Mail Address:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="email" class="form-control" id="semail"
                               placeholder="you@example.com" required onChange="ValidateEmail(semail)" >
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

                        <input type="password"  class="form-control"
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
                <div class="form-group has-danger">
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

        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3 field-label-responsive">
                <label for="zip">Zip Code:</label>
            </div>
            <div class="col-md-5">
                <div class="form-group has-danger">
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
                <div class="form-group has-danger">
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
                <button type="submit" name = "register" class="btn btn-info" > Register</button>
            </div>
        </div>
    </form>
	</div>

<br>
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
