<link rel="stylesheet" href="styles.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
</style>
<!------ Include the above in your HEAD tag ---------->

<!-- Footer -->

	<section id="footer">
		<div class="container" style="color:#fff">
			<div class="row">
                <div class="col-sm-8">
                   <p class="h5"> &copy All right Reserved.<a class="text-green ml-2" href="index.php" target="_blank" style="color:#fff">Band Of Barbers</a></p>
                </div>
				<div class="col-sm-4">
					<ul class="list-unstyled list-inline social text-center" >
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook" style="color:#fff;font-size:30px;padding-right:20px"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter" style="color:#fff;font-size:30px;padding-right:20px"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram" style="color:#fff;font-size:30px;padding-right:20px"></i></a></li>
                        <button class="btn btn-secondary" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				</div>
			</div>
		</div>
</section>

	<!-- ./Footer -->
