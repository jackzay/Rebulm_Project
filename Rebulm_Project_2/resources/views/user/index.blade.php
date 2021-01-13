@extends('layouts.user')


@section('head')
	<title>Rebulm</title>
	<link href="{{ asset('/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<script src="{{ asset('/js/jquery.min.js') }}"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}

	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfont-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
@endsection

@section('content')
	<div class="header">
		<div class="top-header"">
			

		

				<div class=" clearfix"></div>
	</div>
	<div class="header-info">
		<br>
		<br>
		<br>
		<br>
		<br>
		<h1>INTERSTELLAR</h1>
		<p class="age"><a href="#">All Age</a> Matthew McConaughey</p>
		<!-- <p class="review">Rating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 8,5/10</p> -->
		<p class="review reviewgo">Genre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; Science Fiction, Adventure, Mystery</p>
		<p class="review">Release &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 6 November 2014</p>
		<!-- <p class="special">The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.</p>
				<a class="video" href="#"><i class="video1"></i>WATCH TRAILER</a>
				<a class="book" href="#"><i class="book1"></i>BOOK TICKET</a> -->
	</div>
	</div>
	<div class="review-slider">
		<ul id="flexiselDemo1">
			<li><img src="images/AvengerInfinity.jpg" alt="" /></li>
			<li><img src="images/SpidermanFFH.jpg" alt="" /></li>
			<li><img src="images/HarryPotterTheDeathlyHallows.jpg" alt="" /></li>
			<li><img src="images/r4.jpg" alt="" /></li>
			<li><img src="images/Joker.jpg" alt="" /></li>
			<li><img src="images/TheImitationGame.jpg" alt="" /></li>
			<li><img src="images/Spongebob.jpg" alt="" /></li>
		</ul>
		<script type="text/javascript">
			$(window).load(function() {

				$("#flexiselDemo1").flexisel({
					visibleItems: 6,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: false,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint: 480,
							visibleItems: 2
						},
						landscape: {
							changePoint: 640,
							visibleItems: 3
						},
						tablet: {
							changePoint: 768,
							visibleItems: 4
						}
					}
				});
			});
		</script>
		<script type="text/javascript" src="{{asset('/js/jquery.flexisel.js')}}"></script>
		{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flexisel/2.2.2/js/jquery.flexisel.js"></script> --}}
	</div>
	<div class="video">
		<iframe src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="more-reviews">
		<ul id="flexiselDemo2">
			<li><img src="images/Frozen2.jpg" alt="" /></li>
			<li><img src="images/m2.jpg" alt="" /></li>
			<li><img src="images/Fantasticbeasts_.jpg" alt="" /></li>
			<li><img src="images/m4.jpg" alt="" /></li>
		</ul>
		<script type="text/javascript">
			$(window).load(function() {

				$("#flexiselDemo2").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover: false,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint: 480,
							visibleItems: 2
						},
						landscape: {
							changePoint: 640,
							visibleItems: 3
						},
						tablet: {
							changePoint: 768,
							visibleItems: 3
						}
					}
				});
			});
		</script>
		<script type="text/javascript" src="{{asset('/js/jquery.flexisel.js') }}"></script>
		{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flexisel/2.2.2/js/jquery.flexisel.js"></script> --}}
	</div>
	</div>
	</div>
	<div class="clearfix"></div>
@endsection