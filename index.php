<?php
  include('config.php');
  session_start();
  $data = "SELECT * FROM plot";
  $data_result = mysqli_query($con,$data) or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Free Web tutorials">
  	<meta name="keywords" content="HTML, CSS, JavaScript">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BhuPlots</title>
	<link rel="icon" href="assets/img/logo.png" type="image/gif" sizes="16x16">
	<!--Bootstrap stylesheets-->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
	<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!--Bootstrap scripts 1-->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<!--External stylesheets-->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/Footer-Dark.css">
	<link rel="stylesheet" type="text/css" href="assets/css/album.css">
	<link rel="stylesheet" type="text/css" href="assets/css/products.css">

	<!--Font awesome and animate css cdn links-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />

	<script>
		$(document).ready(function(){
			$("#myModal").modal('show');
		});
	</script>
	<script>
		  window.onscroll(function () {
		    var nav = document.querySelector('.navbar');
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					nav.classList.add('navbar-scrolled');
				} else {
					nav.classList.remove('navbar-scrolled')
				}

		  });
	</script>
</head>
<body>

<!--Popup Modal-->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--<div class="modal-header">
                <h4 class="modal-title">Subscribe our Newsletter</h4>
            </div>-->
            <div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3><strong>Featured Posts</strong></h3><span class="badge badge-danger">Ad</span><br/><br/>
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							  </ol>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="assets/img/modal-bg.jpg" class="d-block w-100" alt="..." onclick="window.location.href='#';">
										<div class="carousel-caption d-none d-md-block">
        							<button class="btn btn-primary" style="font-size: 10px !important;" onclick="window.location.href='#';">See details</button>
      							</div>
							    </div>
							    <div class="carousel-item">
							      <img src="assets/img/plots.jpg" class="d-block w-100" alt="..." onclick="window.location.href='#';">
										<div class="carousel-caption d-none d-md-block">
        							<button class="btn btn-primary" style="font-size: 10px !important;" onclick="window.location.href='#';">See details</button>
      							</div>
							    </div>
							    <div class="carousel-item">
							      <img src="assets/img/placeholder.jpg" class="d-block w-100" alt="..." onclick="window.location.href='#';">
										<div class="carousel-caption d-none d-md-block">
        							<button class="btn btn-primary" style="font-size: 10px !important;" onclick="window.location.href='#';">See details</button>
      							</div>
									</div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
            </div>
        </div>
    </div>
</div>

<!--Main Navigation-->
<header>
    <nav id="navbar" style="background-color:rgba(0,0,256, 0.1)" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand" href="#"><strong>BhuPlots</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
								<div class="dropdown">
	                <li class="nav-item">
	                    <a class="nav-link" href="#">Profile</a>
											<div class="dropdown-content">
												<a href="">Account</a>
												<a href="">Information</a>
											</div>
	                </li>
							</div>
            </ul>
        </div>
    </nav>

    <div class="view intro hm-purple-light" style="height: 500px;">
    	<div class="centered">
    		<h2><strong style="color: #010b1d !important;">Welcome to BhuPlots</strong></h2>
    		<p><strong style="color: #010b1d !important;">Looking for someplace nice?</strong></p>
    		<form action="search.php" method="post">
    			<input type="text" name="search" placeholder="Search.." id="bar"><br/><br/>
    			<button type="submit" class="btn btn-primary search">Search</button>
    		</form>
    	</div>
    </div>

</header><br/>
</div>
<h3 class="pb-4 mb-4 font-italic border-bottom text-center" style="margin: 0 50px 0 0;">
    Best Plots around you!
</h3>
<!--Product cards-->
		<div class="row">
			<!-- Product  -->
<?php
  while( $row = mysqli_fetch_assoc($data_result) ) {
	 $name = $row['name'];
	 $pid = $row['id'];
?>
			<div class="col-md-4 product-grid">
				<div class="image">
					<a href="product-details.php?pid=<?php echo $pid;?>">
						<img src="admin/plots-images/<?php echo $row['image1']; ?>" class="w-100">
						<div class="overlay">
							<div class="detail">View Details</div>
						</div>
					</a>
				</div>
				<h5 class="text-center"><?php echo $row['name']; ?></h5>
				<p class="text-center"><?php echo $row['org']; ?></p>
				<p class="text-center"><?php echo $row['type']; ?></p>
				<p class="text-center text-muted"><?php echo $row['location']; ?></p>
				<p class="text-center">Rs. <?php echo $row['price']; ?> onwards</p>
				<a href="product-details.php?pid=<?php echo $pid;?>" class="btn buy">See more details</a>
			</div>
			<!-- ./Product -->
<?php
		$_SESSION['id'] = $pid;
		}
        ?>
</div><br/>
<!--Testimonial section-->
<div class="testimonial">
	<h2 class="text-center">What Makes Us a Preferred Choice</h2><br/>
	<div class="row" data-aos="fade-up">
		<div class="col-6 col-md-4">
			<div class="choices">
				<i class="far fa-file-alt fa-6x"></i><br/><br/>
				<h3>Maximum Choices</h3>
				<p>15 Lac + & counting. New properties every hour to help buyers find the right home</p>
			</div>
		</div>
		<div class="col-6 col-md-4">
			<div class="buyers">
				<i class="far fa-check-circle fa-6x"></i><br/><br/>
				<h3>Buyers Trust Us</h3>
				<p>12 million users visit us every month for their buying and renting needs</p>
			</div>
		</div>
		<div class="col-6 col-md-4">
			<div class="sellers">
				<i class="far fa-thumbs-up fa-6x"></i><br/><br/>
				<h3>Seller Prefer Us</h3>
				<p>27,000 new properties posted daily, making us the biggest platform to sell & rent properties</p>
			</div>
		</div>
	</div>
</div><br/>

 <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
<!--Scripts-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!--External scripts-->
<script type="text/javascript" src="assets/js/navbar.js"></script>

</body>
</html>
