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
<title>Service Registration</title>
</head>

<?php include('nav.php'); ?>

<div class="container-fluid" >
<div class="container">
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">
    <form class="form-horizontal" role="form" method="POST" action="service_register_action.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="margin-top:40px">
                <h2 style="text-align: center">Add a Service</h2>
                <hr class="bg-info">
            </div>
        </div>
				<div class="row" style="margin-top:30px">
								<div class="col-md-2"></div>
								<div class="col-md-3 field-label-responsive">
										<label for="image">Service Image:</label>
								</div>
								<div class="col-md-5">
										<div class="form-group">
												<div class="input-group mb-2 mr-sm-2 mb-sm-0">
														<input id="serv_image" type="file" accept="image/*" name="image" >
												</div>
										</div>
								</div>
						</div>
				<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-3 field-label-responsive">
								<label for="serv_name">Service Name:</label>
						</div>
						<div class="col-md-5">
								<div class="form-group">
										<div class="input-group mb-2 mr-sm-2 mb-sm-0">

												<input type="text" name="serv_name" class="form-control" id="serv_name"
															 placeholder="Service Name" required autofocus onChange="inputAlphabet(serv_name)">
										</div>
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-3 field-label-responsive">
								<label for="serv_desc">Service Description:</label>
						</div>
						<div class="col-md-5">
								<div class="form-group">
										<div class="input-group mb-2 mr-sm-2 mb-sm-0">

												<input type="text" name="serv_desc" class="form-control" id="serv_desc"
															 placeholder="Service Description" required autofocus onChange="inputAlphabet(serv_desc)">
										</div>
								</div>
						</div>
				</div>
				<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-3 field-label-responsive">
								<label for="sprice">Service Price:</label>
						</div>
						<div class="col-md-5">
								<div class="form-group">
										<div class="input-group mb-2 mr-sm-2 mb-sm-0">

												<input type="text" name="sprice" class="form-control" id="sprice"
															 placeholder="Service Price" >
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
