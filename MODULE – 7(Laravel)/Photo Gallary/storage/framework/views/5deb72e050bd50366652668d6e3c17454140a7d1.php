<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home - Pintereso Bootstrap Template</title>
	<script
		type="text/javascript"> (function () { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
	<link rel="stylesheet" href="assets/css/app.css">
	<link rel="stylesheet" href="assets/css/theme.css">

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
		<a class="navbar-brand font-weight-bolder mr-3" href="index.html"><img src="assets/img/logo.png"></a>
		<button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault"
			aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarsDefault">
			<ul class="navbar-nav mr-auto align-items-center">
				<form class="bd-search hidden-sm-down">
					<input type="text" class="form-control bg-graylight border-0 font-weight-bold" id="search-input"
						placeholder="Search..." autocomplete="off">
					<div class="dropdown-menu bd-search-results" id="search-results">
					</div>
				</form>
			</ul>
			<ul class="navbar-nav ml-auto align-items-center">
				<li class="nav-item">
					<a class="nav-link active" href="/">Home</a>
				</li>

				<li class="nav-item">
					<a class="nav-link active" href="/dashboard">Admin</a>
				</li>


				<li class="nav-item dropdown">

					<div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="dropdown02">
						<h4 class="dropdown-header display-4">Download Pintereso<br /> HTML Bootstrap Template</h4>
						<div class="dropdown-divider">
						</div>
						<span class="dropdown-item"><a
								href="https://github.com/wowthemesnet/template-pintereso-bootstrap-html/archive/master.zip"
								class="btn btn-primary d-block"><i class="fa fa-download"></i> Download</a></span>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<main role="main">


		<section class="mt-4 mb-5">
			<div class="container mb-4">
				<h1 class="font-weight-bold title">Explore</h1>
				<div class="row">
					<nav class="navbar navbar-expand-lg navbar-light bg-white pl-2 pr-2">
						<button class="navbar-light navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarsExplore" aria-controls="navbarsDefault" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarsExplore">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="#">Lifestyle</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Food</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Travel</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
									<div class="dropdown-menu shadow-lg" aria-labelledby="dropdown01">
										<a class="dropdown-item" href="#">Astronomy</a>
										<a class="dropdown-item" href="#">Nature</a>
										<a class="dropdown-item" href="#">Cooking</a>
										<a class="dropdown-item" href="#">Fashion</a>
										<a class="dropdown-item" href="#">Wellness</a>
										<a class="dropdown-item" href="#">Dieting</a>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">

					<div class="card-columns">
						<?php $__currentLoopData = $img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="card card-pin">
								<img class="card-img" src="assets/img/<?php echo e($i->image); ?>" alt="Card image">
								<div class="overlay">

								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>

				</div>
			</div>
		</section>

	</main>

	<script src="assets/js/app.js"></script>
	<script src="assets/js/theme.js"></script>

	<footer class="footer pt-5 pb-5 text-center">

		<div class="container">

			<div class="socials-media">

				<ul class="list-unstyled">
					<li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
								class="fa fa-facebook"></i></a></li>
					<li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-twitter"></i></a>
					</li>
					<li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
								class="fa fa-instagram"></i></a></li>
					<li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
								class="fa fa-google-plus"></i></a></li>
					<li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-behance"></i></a>
					</li>
					<li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
								class="fa fa-dribbble"></i></a></li>
				</ul>

			</div>




		</div>

	</footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\ASSIGNMENT\MODULE – 7(Laravel)\Photo Gallery 2\resources\views/index.blade.php ENDPATH**/ ?>