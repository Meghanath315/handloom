<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Vengamamba Ikkat World</title>
	<!-- <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script src="jquery.fancybox.min.js"></script>
	<link href="jquery.fancybox.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="pattu-sarees_sub1_style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>
<body> 
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
	 <a class="navbar-brand" href="handloomIndex.html">Vengamamba Ikkat World</a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
	 	<span class="navbar-toggler-icon"></span>
	 </button>	
	 <div class="collapse navbar-collapse" id="navbarResponsive">
	 	<ul class="navbar-nav ml-auto">
	 		<li class="nav-item dropdown">
	 			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Sarees</a>
	 			<div class="dropdown-menu" aria-labelled="navbarDropdown">
	 				<a class="dropdown-item" href="pattu-sarees_saree_all.php">Pattu Sarees</a>
	 				<div class="dropdown-divider"></div>
	 				<a class="dropdown-item" href="langas.php">Langas</a>
	 				<!-- <div class="dropdown-divider"></div>
	 				<a class="dropdown-item" href="#">Kanchipuram</a>
	 				<div class="dropdown-divider"></div>
	 				<a class="dropdown-item" href="#">Gadwal</a> -->
	 			</div>
	 		</li>
	 		<li class="nav-item">
	 			<a class="nav-link" href="#">About us</a>
	 		</li>
	 	</ul>
	 	<form class="form-inline">
	 		<input class="form-control mr-sm-2" type="search" aria-label="search">
	 		<button class="btn btn-primary my-sm-0" type="submit">Search</button>
	 	</form>
	 </div>
	</div>
</nav>

<a href="ikkat_sub2.php" id="category1">
		<div class="col-12">
			<h1 class="display-4"></h1>
			<p class="display-5">(Stating Price - Rs. 7200/- )</p>
		</div>
	</a>
	<div class="container gallery-container">
		<div class="tz-gallery">
			<div class="row">
				<?php
					$dir = glob('ikkat crop images/sub 2/*.jpg', GLOB_BRACE);
				
		    		foreach ($dir as $value) 
				 	 {
						# code...
				?>		
					<div class="col-sm-6 col-md-4">
						<a class="lightbox" href="<?php echo $value ;?>">
							<img src="<?php echo $value ;?>">
						</a>
					</div>
			
				<?php

					}
				?>
			</div>
		</div>
	</div>
	<script>
		baguetteBox.run('.tz-gallery');
	</script>

<hr class="my-4">
<!--- Footer -->
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-6">
				<hr class="light">
				<h5>Contact Us</h5>
				<hr class="light">
				<p>Ph : +91 9493888776</p>
				<p>Email : vengamamba.info@gmail.com</p>
				<p>Note: Due to COVID-19 Only Prepaid Orders.</p>
				<p>Note: Please feel free to suggest and contact us through Email.</p>
			</div>
			<div class="col-md-6">
				<hr class="light">
				<h5>Customer Support</h5>
				<hr class="light">
				<a href="privacyPolicy.html">Privacy Policy</a>
				<br>
				<a href="refundPolicy.html">Refund Policy</a>
				<br>
				<a href="terms.html">Terms of Service</a>
			</div>
			<div class="col-12">
				<hr class="light-100">
				<h5>&copy; www.vengamambaikkatworld.ml</h5>
			</div>
		</div>
	</div>
</footer>
</body>
</html>