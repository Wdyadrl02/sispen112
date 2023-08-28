<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="{{url('public')}}/logo112.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{url('public/cssfornt')}}/fonts/icomoon/style.css">
	<link rel="stylesheet" href="{{url('public/cssfornt')}}/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="{{url('public/cssfornt')}}/css/tiny-slider.css">
	<link rel="stylesheet" href="{{url('public/cssfornt')}}/css/aos.css">
	<link rel="stylesheet" href="{{url('public/cssfornt')}}/css/glightbox.min.css">
	<link rel="stylesheet" href="{{url('public/cssfornt')}}/css/style.css">

	<link rel="stylesheet" href="{{url('public/cssfornt')}}/css/flatpickr.min.css">


	<title>SISPEN 112</title>
</head>
<body>
 
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	

	<!-- Start retroy layout blog posts -->
	<section class="section bg-light">
		<div class="container">
			<div class="half-content d-lg-flex align-items-stretch">
				<div class="img" data-aos="fade-in" data-aos-delay="100" >
					<img src="{{url('public/logo112.png')}}" alt="" height="80">
				</div>
				<div class="text">
					<h2 class="heading text-primary mb-3 ">Sintem Pendukung Layanan Darurat</h2>
				
				</div>
			</div>
			<p></p>
			<div class="row align-items-stretch retro-layout">
				@foreach($list_edukasi as $edukasi)
				<div class="col-md-4">
					<a href='{{url("daftar/$edukasi->id")}}' class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style='background-image: url({{url("imageEdukasi/$edukasi->foto")}});'></div>

						<div class="text">
							
							<h2>{{$edukasi->nama}}</h2>
						</div>
					</a>
					{{-- <a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url({{url('public/cssfornt/images/kebakaran.jpg')}});"></div>

						<div class="text">
							<h2>Edukasi Kebakaran</h2>
						</div>
					</a> --}}
				</div>
				@endforeach
				{{-- <div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url({{url('public/cssfornt/images/odgj.jpeg')}});"></div>

						<div class="text">
							<h2>Edukasi ODGJ Mengamuk</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url({{url('public/cssfornt/images/tawuran.jpg')}});"></div>

						<div class="text">
							
							<h2>Gangguan Kemasyarakatan</h2>
						</div>
					</a>
				</div> --}}

				{{-- <div class="col-md-4">
					<a href="single.html" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url({{url('public/cssfornt/images/img_1_vertical.jpg')}});"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Why is my internet so slow?</h2>
						</div>
					</a>
				</div> --}}

				
			</div>
		</div>
	</section>
	<!-- End retroy layout blog posts -->

	

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="{{url('public/cssfornt')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public/cssfornt')}}/js/tiny-slider.js"></script>

    <script src="{{url('public/cssfornt')}}/js/flatpickr.min.js"></script>


    <script src="{{url('public/cssfornt')}}/js/aos.js"></script>
    <script src="{{url('public/cssfornt')}}/js/glightbox.min.js"></script>
    <script src="{{url('public/cssfornt')}}/js/navbar.js"></script>
    <script src="{{url('public/cssfornt')}}/js/counter.js"></script>
    <script src="{{url('public/cssfornt')}}/js/custom.js"></script>

    
  </body>
  </html>
