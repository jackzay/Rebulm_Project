<!DOCTYPE html>
<html>
<head>
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


</head>

<body>
	<nav class="navbar navbar-dark navbar-expand-md bg-faded justify-content-center" style="background-color: rgb(36, 24, 24);">
        <a href="/" class="navbar-brand d-flex w-50 mr-auto"
            style="color:#D0D0D0; 
            font-size:1.6em; 
            letter-spacing:2px; 
            text-transform:uppercase;">

            <img src="images/logo.png" width="150" class="d-inline-block align-top" alt="">
            &nbsp;| Movie </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" 
                        style="font-size:1.2em; 
                        letter-spacing:1px; 
                        text-transform:uppercase;"
                    href="/">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" 
                        style="font-size:1.2em; 
                        letter-spacing:1px; 
                        text-transform:uppercase;"
                    href="/movies">Movies</a>
                  </li>
                  
            </ul>
            <ul class="nav navbar-nav mt-1 ml-auto w-100 justify-content-end">
                <li class="nav-item">
                    <div class="dropdown show ">
                        <a class="btn btn-default dropdown-toggle"
                          style="color:#D0D0D0; 
                          font-size:1.2em; 
                          /* letter-spacing:1px;  */
                          /* text-transform:uppercase;" */
                        href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Halo, User
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="/profile">Profile</a>
                          <a class="dropdown-item" href="/faq">FaQ</a>
                          <a class="dropdown-item" href="/login">Logout</a>
                        </div>
                      </div>
                </li>
            </ul>
        </div>
    </nav>
	<!-- header-section-starts -->
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

			@foreach ($movies as $movie)
				@if ()
					
				@else
					
				@endif
				<div class="content-grid">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/SpidermanFFH.jpg" title="allbum-name" /></a>
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
					{{-- <ul style="background-color: rgb(36, 24, 24);">
						<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
						<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
						<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
					</ul> --}}
					<a class="button" href="/review">Watch now</a>

					<div id="small-dialog" class="mfp-hide">
						<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			@endforeach

			{{-- <div class="content-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/thelmi.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color: rgb(36, 24, 24);">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim" href="#small-dialog" >Watch now</a>
			</div>
			<div class="content-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/r5.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color: rgb(36, 24, 24);">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
			</div>
			<div class="content-grid last-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/r6.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color: rgb(36, 24, 24);">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
			</div>
			<div class="content-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/endgame.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color: rgb(36, 24, 24);">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
			</div>
			<div class="content-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/AvengerInfinity.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color:black;">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
			</div>
			<div class="content-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/Fantasticbeasts.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color: rgb(36, 24, 24);">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
			</div>
			<div class="content-grid last-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/m2.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color: rgb(36, 24, 24);">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
			</div>
			<div class="content-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/Joker.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color: rgb(36, 24, 24);">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim"  href="#small-dialog">Watch now</a>
			</div>
			<div class="content-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/HarryPotterTheDeathlyHallows.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color: rgb(36, 24, 24);">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim" href="#small-dialog" >Watch now</a>
			</div>
				<div class="content-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/war.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color: rgb(36, 24, 24);">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim" href="#small-dialog" >Watch now</a>
			</div>
			<div class="content-grid  last-grid">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/r1.jpg" title="allbum-name" /></a>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
				<ul style="background-color: rgb(36, 24, 24);">
					<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
					<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
				</ul>
				<a class="button play-icon popup-with-zoom-anim" href="#small-dialog" >Watch now</a>
			</div> --}}

			<div class="clearfix"> </div>
			<!---start-pagenation----->
			<div class="pagenation">
				<ul>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!---End-pagenation----->
		</div>
	</div>
	<div class="clearfix"> </div>
</body>
</html>