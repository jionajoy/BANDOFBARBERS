

<!doctype html>
<html><head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.min.js"> </script>
<title>Contact Us</title>

    </head>
  <body>
<?php include('nav.php');?>
<div class="container">
 
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">

    <h2 class="text-center" style="font-size:34px; margin-top:40px">GET IN TOUCH</h2>
    <hr class="bg-info">
    <div id="contact" class="container-fluid bg-grey">

  <div class="row" style="margin-top:40px">
    <div class="col-sm-4">
         <div class="col-md-3"></div>
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Brisbane, Australia</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> bandofbarbers@gmail.com</p>
    </div>

    <div class="col-sm-7 slideanim">

      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-lg btn-outline-info mx-auto d-block" type="submit" style="margin-top:30px" >Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
<!-- Image of location/map -->
<img src="images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%; margin-top:40px">


<!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div></div>
  <!-- Footer -->
</body>


</html>
