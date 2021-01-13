@extends('layouts.user')

@section('head')
	<title>Cinema A Entertainment Category Flat Bootstarp Resposive Website Template | Videos :: w3layouts</title>
	<link href="{{ asset('/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<script src="{{ asset('/js/jquery.min.js') }}"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
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
<div class="right-content">
	<div class="right-content-heading">
		<div class="right-content-heading-left">
			<h3 class="head" style="color:white;">Movies</h3>
		</div>
	</div>
			<!-- pop-up-box --> 
	<link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
	<script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
	<script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
			});
	</script>		

	<!--//pop-up-box -->
	<div class="content-grids">
		<div class="d-flex justify-content-center" style="margin-top: 20px">
			<div class="row">
				@foreach ($movies as $movie)
					{{-- @if (($loop->iteration)%4 == 0)
						<div class="content-grid last-grid">
							<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{asset('images/'. $movie->img_path)}}" title="allbum-name" /></a>
							<h3>{{$movie->movie_title}}</h3>
							<a class="button" href="movies/{{$movie->id_movie}}/review">Watch now</a>
							<div id="small-dialog" class="mfp-hide">
								<iframe  src="{{$movie->trailer}}" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					@else --}}
					{{-- <div class="col-12"> --}}
						<div class="content-grid" style="margin-left: 80px">
							
							<a class="play-icon popup-with-zoom-anim" href="#small-dialog{{$movie->id_movie}}"><img src="{{asset('images/'. $movie->img_path)}}" title="allbum-name" /></a>			
							<h3>{{$movie->movie_title}}</h3>
							<a class="button" href="movies/{{$movie->id_movie}}/review">Watch now</a>
							<div id="small-dialog{{$movie->id_movie}}" class="mfp-hide">
								<iframe  src="{{$movie->trailer}}" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					{{-- </div> --}}
					{{-- @endif --}}

				@endforeach
			</div>	
		</div>
		<div class="clearfix"> </div>
		<!---start-pagenation----->
		{{-- <div class="pagenation">
			<ul>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">Next</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div> --}}
		<!---End-pagenation----->
	</div>
</div>
<div class="clearfix"> </div>
@endsection