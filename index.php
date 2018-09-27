	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

		<!--CSS============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">					
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">

		<style>
			#typedintro {
				color: white;
				font-size: 1.4rem;
			}
		</style>
	</head>
	<body>
		<div class="protfolio-wrap">

			<!-- Start Header Area -->
			<?php include("header.php"); ?>
			<!-- End Header Area -->	

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">

						<div id="typedintro"></div>

					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start portfolio-area Area -->	
			<section class="portfolio-area section-gap" id="portfolio">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Portfolio</h1>
							</div>
						</div>
					</div>

					<div class="filters">
						<ul>
							<li class="active" data-filter="*">All</li>
							<li data-filter=".corporate">Print</li>
							<li data-filter=".agency">UI/UX</li>
						</ul>
					</div>

					<div class="filters-content">
						<div class="row grid">
							<div class="single-portfolio col-sm-4 all corporate">
								<div class="item">
									<a href="wild"> <img src="img/p1.jpg" alt="Work 1">
										<div class="p-inner">
											<h4>Wild</h4>
											<div class="cat"> Book Design</div>
										</div>
									</a>
								</div>
							</div>
							<div class="single-portfolio col-sm-4 all agency">
								<div class="item">
									<a href="tour" ><img src="img/p2.jpg" alt="Work 1"> 
										<div class="p-inner">
											<h4>Tour</h4>
											<div class="cat"> Web VR</div>
										</div>
									</a>
								</div>
							</div>
							<div class="single-portfolio col-sm-4 all corporate">
								<div class="item">
									<a href="united" ><img src="img/p3.jpg" alt="Work 1">
										<div class="p-inner">
											<h5>Unite to Divide then Divide to Unite</h5>
											<div class="cat"> Poster Design</div>
										</div>
									</a>
								</div>									
							</div>
							<div class="single-portfolio col-sm-4 all corporate">
								<div class="item">
									<img src="img/p4.jpg" alt="Work 1">
									<div class="p-inner">
										<h4>Pendulum of Chaos</h4>
										<div class="cat"> Broadsheet Design</div>
									</div>
								</div>
							</div>
							<div class="single-portfolio col-sm-4 all agency">
								<div class="item">
									<img src="img/p5.jpg" alt="Work 1">
									<div class="p-inner">
										<h4>Why do Cells split?</h4>
										<div class="cat">Mobile App Design</div>
									</div>
								</div>
							</div>
							<div class="single-portfolio col-sm-4 all corporate">
								<div class="item">
									<img src="img/p6.jpg" alt="Work 1">
									<div class="p-inner">
										<h5>What is Graphic Design?</h5>
										<div class="cat"> Booklet Design</div>
									</div>
								</div>
							</div>	
							<div class="single-portfolio col-sm-4 all agency">
								<div class="item">
									<img src="img/p7.jpg" alt="Work 1">
									<div class="p-inner">
										<h5>Certainly Uncertain</h5>
										<div class="cat">Data Visualization</div>
									</div>
								</div>
							</div>							  

						</div>
					</div>

				</div>
			</section>
			<!-- End portfolio-area Area -->	

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
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
		<script>
			var options = {
				strings: [
				"mini about me thing^500",
				"curious^500",
				"add more sentences in the javascript^500"
				],
				typeSpeed: 30,				
			}

			var typed = new Typed("#typedintro", options);

		</script>
	</body>
	</html>



