@extends('layouts.user')

@section('head')
	<title>Cinema A Entertainment Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
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

	<style>
	.watch{
				margin-left: 10%;
				border:10 px black;
				margin-top:50px;
			
			}	
	</style>
@endsection

@section('content')
	<div class="reviews-section">
		<div class="col-md-9 reviews-grids" style="background-color: rgb(36, 24, 24);color:white; left:10%; padding-top:20px">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe width="960" height="600"  src="{{$movie->trailer}}" frameborder="0" style="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div> 
			<div class="review" >
				<div class="movie-pic">
					<a href="#"><img src="{{asset('images/'. $movie->img_path)}}" alt="" /></a>
				</div>
				
				<div class="review-info" >
				<hr size="10px">
					<a class="span" href="single.html" style="color:white; text-transform:uppercase;"><i>{{$movie->movie_title}}</i></a>
					<br>
					{{-- <p class="dirctr" style="color:white"><a href=""></p> --}}
					<p class="ratingview">Rating:</p>
					<div class="rating">
						<span>☆</span>
						<span>☆</span>
						<span>☆</span>
						<span>☆</span>
						<span>☆</span>
					</div>
					<p class="ratingview">
					&nbsp;{{$movie->rating}}/10  
					</p>
					<div class="clearfix"></div>
					<div class="yrw">
						<form action="/home/transaction" method="post">
							@csrf
							<input type="hidden" name="id_movie" value="{{$movie->id_movie}}">
							<input type="hidden" name="id_user" value="{{Auth::user()->id}}">
							<div class="wt text-center">
								<button type="submit" class="button" name="paket" value = "rent1">Rent 1 week</button>
								{{-- <a href="transaction">Rent 1 week</a> --}}
							</div>
							<div class="wt text-center">
								<button type="submit" class="button" name="paket" value = "buy">Buy this Movie</button>
							</div>
						</form>
{{-- 
						<div class="wt text-center">
							<a href="/home/movies/{{$movie->id_movie}}/menu">More</a>
						</div> --}}
						<div class="clearfix"></div>
					</div>
					<p class="info">CAST:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$movie->actress}}</p>
					<p class="info">DIRECTOR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$movie->director}}</p>
					<p class="info">YEAR RELEASE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$movie->year}}</p>
					<p class="info">DURATION:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; {{$movie->duration}}</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="single" style="color:white">
				<h3>SYNOPSIS :</h3>
				<p><i> {{$movie->synopsis}}</i></p>
			</div>
			<div class="best-review" style="color:white">
							<!-- comments-section-starts -->
				<div class="comments-section" style="color:white">	
					<div class="comments-section-head" style="color:white">
						<div class="comments-section-head-text" style="color:white">
							<h3>Comments</h3>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="comments-section-grids">
						@foreach ($feedback as $feedback)
							<div class="comments-section-grid">
								<div class="col-md-2 comments-section-grid-image">
									<img src="{{asset('images/profile.png')}}" class="img-responsive" alt="" style="width: 150px;"/>
								</div>
								<div class="col-md-10 comments-section-grid-text">
									<h4><a href="#">{{Auth::user()->name}}</a></h4>
									<label>{{$feedback->created_at}}  </label>
									<p>{{$feedback->comment}}</p>
									{{-- <span><a href="#">Reply</a></span>
									<i class="rply-arrow"></i> --}}
								</div>
								<div class="clearfix"></div>
							</div>
						@endforeach

					</div>
				</div>
				<!-- comments-section-ends -->
				<div class="reply-section">
					<div class="reply-section-head">
						<div class="reply-section-head-text">
							<h3>Leave Comment</h3>
						</div>
					</div> 
					<div class="blog-form">
						<form action="/home/movies/{{$movie->id_movie}}/review" method="POST" enctype="multipart/form-data">
							@csrf
							<input type="hidden" name="id_movie" value="{{$movie->id_movie}}">
							<input type="hidden" name="id_user" value="{{Auth::user()->id}}">
							<input type="text" class="text" value="Enter Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Name';}">								
							<div class="form-group">
								<textarea class="form-control" name="comment" rows="3"></textarea>
							</div>
				
							<input type="submit" class="btn btn-success" value="SUBMIT COMMENT">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

		<div class="review-slider">
			<ul id="flexiselDemo1">
				<li><img src="images/r1.jpg" alt=""/></li>
				<li><img src="images/r2.jpg" alt=""/></li>
				<li><img src="images/r3.jpg" alt=""/></li>
				<li><img src="images/r4.jpg" alt=""/></li>
				<li><img src="images/r5.jpg" alt=""/></li>
				<li><img src="images/r6.jpg" alt=""/></li>
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
								changePoint:480,
								visibleItems: 1
							}, 
							landscape: { 
								changePoint:640,
								visibleItems: 2
							},
							tablet: { 
								changePoint:768,
								visibleItems: 3
							}
						}
					});
					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>		
		<div class="clearfix"></div>
@endsection

