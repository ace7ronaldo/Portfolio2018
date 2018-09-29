<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Portfolio</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<!-- =================== CSS ======================== -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">					
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href ="css/gallery.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
</head>
<body>
	<div class="protfolio-wrap">

		<!-- Start Header Area -->
		<?php include("header.php"); ?>
		<!-- End Header Area -->


		<!-- Start service Area -->
		<section class="service-area section-gap relative" id="service">
			<div class="overlay overlay-bg"></div>	
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10 text-white">Tour</h1>
							<p><b>Web VR</b></p>
						</div>
					</div>
				</div>	
			</div>	
		</section>
		<!-- End service Area -->

		<!-- Start services Area -->
		<section class="services-area pb-100" >
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-xl-12">
						<div class="single-service">
							<h4>College visits tend to be integral part of deciding where to go to study or if the place fits your focus area. Sometimes time or distance does not permit an individual to visit a college. This project aims to resolve this issue by designing a virtual experience.</h4>
							<p> When a user enters the website, they enter a studio session which helps them visualize the environment they’ll be working in. As they look around they’ll be able to see the kind of projects students produce and if it aligns with their interest. The user is able to get a realistic tour of w8hat the college offers and what it really does. </p>
							<p>The basic data used to build the user profile was the individual experiences of the MGD students who go to NC State. </p>
							<p>This project was built using A-frame.</p>
							<p><a href="tour copy/index.html">Click here to enter the tour</a></p>
						</div>
					</div>

				</div>
			</div>	
		</section>
		<!-- End services Area -->

		<!-- Start gallery Area -->

		<div class="container gallery-container">

			<div class="tz-gallery">

				<div class="row">

					<div class="col-sm-12 col-md-4">
						<a class="lightbox" href="img/Tour/activitymodule.jpeg">
							<img src="img/Tour/activitymodule.jpeg" alt="activity flow">
						</a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a class="lightbox" href="img/Tour/ideation.jpeg">
							<img src="img/Tour/ideation.jpeg" alt="module">
						</a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a class="lightbox" href="img/Tour/whiteboarding.jpeg">
							<img src="img/Tour/whiteboarding.jpeg" alt="whiteboarding">
						</a>
					</div>
					<div class="col-sm-12 col-md-8">
						<a class="lightbox" href="img/Tour/whiteboarding1.jpeg">
							<img src="img/Tour/whiteboarding1.jpeg" alt="planning">
						</a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a class="lightbox" href="img/Tour/setup.jpeg">
							<img src="img/Tour/setup.jpeg" alt="setup">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4">
						<a class="lightbox" href="img/Tour/camera.jpeg">
							<img src="img/Tour/camera.jpeg" alt="camera">
						</a>
					</div>
					<div class="col-sm-12 col-md-4"> 
						<a class="lightbox" href="img/Tour/studio.JPG">
							<img src="img/Tour/studio.JPG" alt="360 image">
						</a>
					</div>					

				</div>

			</div>

		</div>

		<!--end gallery area-->

		<?php include("footer.php"); ?>
	</div>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>			
	<script src="js/easing.min.js"></script>			
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>	
	<script src="js/owl.carousel.min.js"></script>			
	<script src="js/jquery.sticky.js"></script>			
	<script src="js/jquery.nice-select.min.js"></script>			
	<script src="js/parallax.min.js"></script>	
	<script src="js/mail-script.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>	
	<script src="js/main.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script> baguetteBox.run('.tz-gallery');</script>
</body>
</html>



