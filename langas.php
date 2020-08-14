<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Vengamamba Ikkat World</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="langas_all_style.css" rel="stylesheet">
</head>
<body> 
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
	 <a class="navbar-brand" href="index.html">
	 	<img src="saree crop images/Logo/logo1.jpeg" width="200px" height="115px">
	 </a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
	 	<span class="navbar-toggler-icon"></span>
	 </button>	
	 <div class="collapse navbar-collapse" id="navbarResponsive">
	 	<ul class="navbar-nav ml-auto">
	 		<li class="nav-item dropdown">
	 			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Our Collection</a>
	 			<div class="dropdown-menu" aria-labelled="navbarDropdown">
	 				<a class="dropdown-item" href="pattu-sarees_saree_all.php">Pattu Sares</a>
	 				<div class="dropdown-divider"></div>
	 				<a class="dropdown-item" href="langas.php">Langas</a>
	 				<!-- div class="dropdown-divider"></div>
	 				<a class="dropdown-item" href="#">Kanchipuram</a>
	 				<div class="dropdown-divider"></div>
	 				<a class="dropdown-item" href="#">Gadwal</a> -->
	 			</div>
	 		</li>
	 		<li class="nav-item">
	 			<a class="nav-link" href="about.html">About us</a>
	 		</li>
	 	</ul>
	 	<form class="form-inline">
	 		<input class="form-control mr-sm-2" type="search" aria-label="search">
	 		<button class="btn btn-primary my-sm-0" type="sybmit">Search</button>
	 	</form>
	 </div>
	</div>
</nav>

	<a href="langas.php" id="category1">
		<div class="col-12">
			<h1 class="display-4">Langas</h1>
			<p>Starting Price Rs.5300/-</p>
		</div>
	</a>
	<div class="container gallery-container">
		<div class="tz-gallery">
			<div class="row">
				<?php
					$dir = glob('saree crop images/Langas home/all langas images/*.jpg', GLOB_BRACE);
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
     <!-- <a href="langas_sub1.php" id="category1">
    	<div class="col-12">
    		<h4 class="display-5">Double Border Ikkat Jakat Langa</h4>
    	</div>
    </a>
    <div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div id="slides1" class="carousel slide" data-ride="carousel">
	    		<ul class="carousel-indicators1">	
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
				</ul>
	            <div class="carousel-inner">
					<div class="carousel-item active demo-item">
						<a href="#"><img src="saree crop images/Langas home/double border ikkat jakat langa home/1.jpg"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="saree crop images/Langas home/double border ikkat jakat langa home/2.jpg"></a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#slides1" role="button" data-slide="prev">
      				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      				<span class="sr-only">Previous</span>
    		</a>
    		<a class="carousel-control-next" href="#slides1" role="button" data-slide="next">
      				<span class="carousel-control-next-icon" aria-hidden="true"></span>
      				<span class="sr-only">Next</span>
    		</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div id="slides2" class="carousel slide" data-ride="carousel">
	    		<ul class="carousel-indicators1">	
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
				</ul>
	            <div class="carousel-inner">
					<div class="carousel-item active demo-item">
						<a href="#"><img src="saree crop images/Langas home/double border ikkat jakat langa home/3.jpg"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="saree crop images/Langas home/double border ikkat jakat langa home/4.jpg"></a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#slides2" role="button" data-slide="prev">
      				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      				<span class="sr-only">Previous</span>
    		</a>
    		<a class="carousel-control-next" href="#slides2" role="button" data-slide="next">
      				<span class="carousel-control-next-icon" aria-hidden="true"></span>
      				<span class="sr-only">Next</span>
    		</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div id="slides3" class="carousel slide" data-ride="carousel">
	    		<ul class="carousel-indicators1">	
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
				</ul>
	            <div class="carousel-inner">
					<div class="carousel-item active demo-item">
						<a href="#"><img src="saree crop images/Langas home/double border ikkat jakat langa home/5.jpg"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="saree crop images/Langas home/double border ikkat jakat langa home/6.jpg"></a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#slides3" role="button" data-slide="prev">
      				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      				<span class="sr-only">Previous</span>
    		</a>
    		<a class="carousel-control-next" href="#slides3" role="button" data-slide="next">
      				<span class="carousel-control-next-icon" aria-hidden="true"></span>
      				<span class="sr-only">Next</span>
    		</a>
		</div>
	</div>
</div>
<hr class="my-4">
	<a href="langas_sub2.php" id="category1">
    	<div class="col-12">
    		<h4 class="display-5">Petu Langa</h4>
    	</div>
    </a>
    <div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div id="slides4" class="carousel slide" data-ride="carousel">
	    		<ul class="carousel-indicators1">	
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
				</ul>
	            <div class="carousel-inner">
					<div class="carousel-item active demo-item">
						<a href="#"><img src="saree crop images/Langas home/petu langa home/1.jpg"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="saree crop images/Langas home/petu langa home/2.jpg"></a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#slides4" role="button" data-slide="prev">
      				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      				<span class="sr-only">Previous</span>
    		</a>
    		<a class="carousel-control-next" href="#slides4" role="button" data-slide="next">
      				<span class="carousel-control-next-icon" aria-hidden="true"></span>
      				<span class="sr-only">Next</span>
    		</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div id="slides5" class="carousel slide" data-ride="carousel">
	    		<ul class="carousel-indicators1">	
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
				</ul>
	            <div class="carousel-inner">
					<div class="carousel-item active demo-item">
						<a href="#"><img src="saree crop images/Langas home/petu langa home/3.jpg"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="saree crop images/Langas home/petu langa home/4.jpg"></a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#slides5" role="button" data-slide="prev">
      				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      				<span class="sr-only">Previous</span>
    		</a>
    		<a class="carousel-control-next" href="#slides5" role="button" data-slide="next">
      				<span class="carousel-control-next-icon" aria-hidden="true"></span>
      				<span class="sr-only">Next</span>
    		</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div id="slides6" class="carousel slide" data-ride="carousel">
	    		<ul class="carousel-indicators1">	
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
				</ul>
	            <div class="carousel-inner">
					<div class="carousel-item active demo-item">
						<a href="#"><img src="saree crop images/Langas home/petu langa home/5.jpg"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="saree crop images/Langas home/petu langa home/6.jpg"></a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#slides6" role="button" data-slide="prev">
      				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      				<span class="sr-only">Previous</span>
    		</a>
    		<a class="carousel-control-next" href="#slides6" role="button" data-slide="next">
      				<span class="carousel-control-next-icon" aria-hidden="true"></span>
      				<span class="sr-only">Next</span>
    		</a>
		</div>
	</div>
</div>
    <hr class="my-4">
    <a href="langas_sub3.php" id="category1">
    	<div class="col-12">
    		<h4 class="display-5">Big Border Langa</h4>
    	</div>
    </a>
    <div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div id="slides7" class="carousel slide" data-ride="carousel">
	    		<ul class="carousel-indicators1">	
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
				</ul>
	            <div class="carousel-inner">
					<div class="carousel-item active demo-item">
						<a href="#"><img src="saree crop images/Langas home/Big border langa home/1.jpg"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="saree crop images/Langas home/Big border langa home/2.jpg"></a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#slides7" role="button" data-slide="prev">
      				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      				<span class="sr-only">Previous</span>
    		</a>
    		<a class="carousel-control-next" href="#slides7" role="button" data-slide="next">
      				<span class="carousel-control-next-icon" aria-hidden="true"></span>
      				<span class="sr-only">Next</span>
    		</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div id="slides8" class="carousel slide" data-ride="carousel">
	    		<ul class="carousel-indicators1">	
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
				</ul>
	            <div class="carousel-inner">
					<div class="carousel-item active demo-item">
						<a href="#"><img src="saree crop images/Langas home/Big border langa home/3.jpg"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="saree crop images/Langas home/Big border langa home/4.jpg"></a>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#slides8" role="button" data-slide="prev">
      				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      				<span class="sr-only">Previous</span>
    		</a>
    		<a class="carousel-control-next" href="#slides8" role="button" data-slide="next">
      				<span class="carousel-control-next-icon" aria-hidden="true"></span>
      				<span class="sr-only">Next</span>
    		</a>
		</div>
	</div>
</div> -->
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