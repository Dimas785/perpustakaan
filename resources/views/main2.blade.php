<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Perpustakaan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


	<!--  Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- login -->
	<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					<!-- {{ config('app.name', 'Perpustakaan') }} -->
					Perpustakaan
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav me-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ms-auto">
						<!-- Authentication Links -->
						@guest
						@if (Route::has('login'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@endif

						@if (Route::has('register'))
						<!-- <li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li> -->
						@endif
						@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
							</a>

							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>

		<!-- <div id="fh5co-offcanvass">
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="icon-cross"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand" href="index.html"></a></h1>
		<ul>
			<li class="active"><a href="index.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="pricing.html">Pricing</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		<h3 class="fh5co-lead">Connect with us</h3>
		<p class="fh5co-social-icons">
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-instagram"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-youtube"></i></a>
		</p>
	</div> -->

		<header id="fh5co-header" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- <a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="icon-menu"></i></a> -->
						<a class="navbar-brand" href="index.html">Perpustakaan</a>
					</div>
				</div>
			</div>
			<div class="input-group mb-3">
				<div>
					<!-- search -->
					<div class="d-flex flex-1 align-items-end justify-content-between">
						@guest
						<div></div>
						@else
						<a class="btn btn-outline-secondary m-5" href="/detail" role="button">Tambah</a>
						@endguest
						<div class="text-end p-2">
							<input type="text" class="d-inline-flex p-2" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
							<button class="btn btn-outline-secondary m-3" type="button" id="button-addon2">Search</button>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END .header -->


		<div id="fh5co-main">
			<div class="container">

				<div class="row">

					<div id="fh5co-board" data-columns>

						@foreach ($data as $item)
						<div class="item">
							<div class="animate-box">
								<a href="{{ asset('images/'.$item->file_name) }}" class="image-popup fh5co-board-img">
									<img src="{{ asset('images/'.$item->file_name) }}" alt="Uploaded Image"></a>
								<div class="d-flex flex-column bd-highlight">
									<div class="pt-3 m-3 fw-bold">Judul Buku</div>
									<div class="fh5co-desc p-3">{{ $item->judul_buku }}</div>
									<div class="pt-3 m-3 fw-bold">Penulis</div>
									<div class="fh5co-desc">{{ $item->penulis }}</div>
									<div class="pt-3 m-3 fw-bold">Penerbit</div>
									<div class="fh5co-desc">{{ $item->penerbit }}</div>
									<div class="pt-3 m-3 fw-bold">Tahun Terbit</div>
									<div class="fh5co-desc">{{ $item->tahun_terbit }}</div>
								</div>
								<div class="btn-group p-5" role="group" aria-label="Basic example">
									@guest
									@else
									<a href="{{ url('buku/'.$item->judul_buku.'/edit') }}" type="button" class="btn btn-primary">Edit</a>
									<form class="d-inline" action="{{ url('buku/'.$item->judul_buku) }}" method="post">
										@csrf
										@method('DELETE')
										<button type="submit" name="hapus" class="btn btn-primary">Hapus</button>
									</form>
									@endguest
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer">

			<!-- <div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="fh5co-social-icons">
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-instagram"></i></a>
						<a href="#"><i class="icon-dribbble"></i></a>
						<a href="#"><i class="icon-youtube"></i></a>
					</p>
				</div>
			</div>
		</div> -->
		</footer>


		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Salvattore -->
		<script src="js/salvattore.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>




</body>

</html>