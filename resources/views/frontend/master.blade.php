<!DOCTYPE html>
    <html lang="en">
{{-- header --}}
	<head>
        <title>Ibrahima Kalil - portfolio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="css/animate.css"> -->
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
        <link href="{{asset('fonts/icomoon/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <!-- <link rel="stylesheet" href="css/flexslider.css"> -->
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        
        <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="css/style.css">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">


    </head>

{{-- navigation --}}

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">



<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
			aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>


		<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="home">Home</a></li>
				<!-- <li class="nav-item"><a class="nav-link" href="portfolio">Portfolio</a></li> -->
				<li class="nav-item"><a class="nav-link" href="{{ route('portfolio')}} ">Portfolio</a></li>
				<!-- <li class="nav-item"><a class="nav-link" href="#">Resume</a></li> -->
				<li class="nav-item"><a class="nav-link" href="#">About</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>

{{--hero section--}}
@yield('hero')


{{--page content goes here--}}
@yield('content')

@yield('home_content')
{{--footer section--}}
	<footer class="site-footer">
		<div class="container">

			<div class="row mb-5">
				<p class="col-12 text-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>

			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<p>
						<a href="#" class="social-item"><span class="icon-facebook2"></span></a>
						<a href="#" class="social-item"><span class="icon-twitter"></span></a>
						<a href="#" class="social-item"><span class="icon-instagram2"></span></a>
						<a href="#" class="social-item"><span class="icon-linkedin2"></span></a>
						<a href="#" class="social-item"><span class="icon-vimeo"></span></a>
					</p>
				</div>
			</div>

		</div>
	</footer>



	

	<script src="{{ asset('js/vendor/jquery.min.js')}}"></script>
	<script src="{{ asset('js/vendor/jquery-migrate-3.0.1.min.js')}}"></script>
	<script src="{{ asset('js/vendor/popper.min.js')}}"></script>
	
	<script src="{{ asset('js/vendor/jquery.easing.1.3.js')}}"></script>
	
	<script src="{{ asset('js/vendor/jquery.stellar.min.js')}}"></script>
	<script src="{{ asset('js/vendor/jquery.waypoints.min.js')}}"></script>
	
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="{{ asset('js/custom.js')}}"></script>

	<!-- Google Map -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    	<script src="js/google-map.js"></script> -->

</body>

</html>