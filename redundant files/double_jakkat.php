<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Edam Textiles</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="double_jakkat_style.css" rel="stylesheet">
</head>
<body> 
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
	 <a class="navbar-brand" href="handloomIndex.html">Edam Textitles</a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
	 	<span class="navbar-toggler-icon"></span>
	 </button>	
	 <div class="collapse navbar-collapse" id="navbarResponsive">
	 	<ul class="navbar-nav ml-auto">
	 		<li class="nav-item dropdown">
	 			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Sarees</a>
	 			<div class="dropdown-menu" aria-labelled="navbarDropdown">
	 				<a class="dropdown-item" href="#">Kanchipattu</a>
	 				<div class="dropdown-divider"></div>
	 				<a class="dropdown-item" href="#">Banaras</a>
	 				<div class="dropdown-divider"></div>
	 				<a class="dropdown-item" href="#">Kanchipuram</a>
	 				<div class="dropdown-divider"></div>
	 				<a class="dropdown-item" href="#">Gadwal</a>
	 			</div>
	 		</li>
	 		<li class="nav-item">
	 			<a class="nav-link" href="#">About us</a>
	 		</li>
	 	</ul>
	 	<form class="form-inline">
	 		<input class="form-control mr-sm-2" type="search" aria-label="search">
	 		<button class="btn btn-primary my-sm-0" type="sybmit">Search</button>
	 	</form>
	 </div>
	</div>
</nav>
<main>
	<a href="double_jakkat.php" id="category1">
		<div class="col-12">
			<h1 class="display-4">Double Jakkat Sarees</h1>
			<p class="display-5">(Stating Price - Rs. 15000/- )</p>
		</div>
	</a>
     <a href="double_jakkat_sub1.php" id="category1">
    	<div class="col-12">
    		<h4 class="display-5">Sub clickable 1</h4>
    	</div>
    </a>
	<div class="container gallery-container">
		<div class="tz-gallery">
			<div class="row">
				<?php
					$dir = glob('double jakkat crop images/*.jpg', GLOB_BRACE);
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

</main>
<hr class="my-4">
	<a href="double_jakkat_sub2.php" id="category1">
    	<div class="col-12">
    		<h4 class="display-5">Sub clickable 2</h4>
    	</div>
    </a>
    <hr class="my-4">
    <a href="double_jakkat_sub3.php" id="category1">
    	<div class="col-12">
    		<h4 class="display-5">Sub clickable 3</h4>
    	</div>
    </a>
<hr class="my-4">
<!--- Footer -->
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-12">
				<hr class="light">
				<p>Phone : +91 9493888776</p>
				<p>Email : xyz@xyz.com</p>
				<p>Note: Due to COVID-19 Only Prepaid Orders.</p>
				<p>Note: Please feel to suugest and contact us throughh Email.</p>
			</div>
			<div class="col-12">
				<hr class="light-100">
				<h5>&copy; edamtextiles.ml</h5>
			</div>
		</div>
	</div>
</footer>

</body>


</html>