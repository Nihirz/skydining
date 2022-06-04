<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	
	<script type="text/javascript" src="https://glpo.rootways.net/assets/frontend/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="{{asset('front/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/free.min.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/nav-core.min.css')}}">
	<link rel="stylesheet" href="{{asset('front/css/nav-layout.min.css')}}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('front/css/custom.css')}}">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	
<header>
	<div class="top-header">
		<div class="container">
			<div class="top-left">
				<a href="tel:7698181000"><i class="fas fa-phone-alt"></i> 769-8181-000</a>
			</div>
			<div class="top-right">
				<div class="social-icon">
					<ul>
						<li><a href="#" class="fb-icon"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" class="tw-icon"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" class="insta-icon"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#" class="yt-icon"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="/" class="logo">
						<img src="{{asset('front/images/logo.png')}}" alt="Skydining">
					</a>
				</div>
				<div class="col-md-9">
					<a href="12" class="nav-button">
					    <div id="nav-icon3">
					      <span></span>
					      <span></span>
					      <span></span>
					      <span></span>
					    </div>

					</a>

					<nav class="nav">
					    <ul>
					        <li><a class="{{ (request()->is('/*')) ? 'active' : '' }}" href="/" >Home</a></li>
					        <li><a class="{{ (request()->is('about-us')) ? 'active' : '' }}" href="{{ route('aboutUs') }}">About Us</a></li>
					        <li><a class="{{ (request()->is('safety')) ? 'active' : '' }}" href="{{ route('safety') }}">Safety</a></li>
					        <li><a class="{{ (request()->is('faq')) ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a></li>
					        <li><a class="{{ (request()->is('contact-us')) ? 'active' : '' }}" href="{{ route('contactUs') }}">Contact Us</a></li>
							<li><a class="{{ (request()->is('franchise')) ? 'active' : '' }}"  href="{{ route('franchise')}}">Franchise</a></li>
							{{-- @if (Route::has('login'))
								@auth
									<li><a href="{{ url('/home') }}">Home</a></li>
								@else
									<li><a href="{{ route('login') }}">Log in</a></li>
			
									@if (Route::has('register'))
										<li><a href="{{ route('register') }}" >Register</a></li>
									@endif
								@endauth
						@endif --}}
			
					        {{-- <li><a href="#">Login</a></li> --}}
					        <li><a href="{{ route('booking') }}" class="booking">Booking</a></li>
					    </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

@yield('content')
@include('layouts.footer')
<a href="#" class="nav-close">Close Menu</a>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<script src="{{asset('front/js/nav.jquery.min.js')}}"></script>
<script>
    $('.nav').nav();
</script>	
</body>
</html>