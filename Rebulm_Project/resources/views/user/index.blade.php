<!DOCTYPE html>
<html>

<head>
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
                    <a class="nav-link active" 
                        style="font-size:1.2em; 
                        letter-spacing:1px; 
                        text-transform:uppercase;"
                    href="/home">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" 
                        style="font-size:1.2em; 
                        letter-spacing:1px; 
                        text-transform:uppercase;"
                    href="/home/movies">Movies</a>
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
	
		<!-- <div class="menu">
				<ul>
					<li><a class="active" href="index.html"><i class="home"></i></a></li>
					<li><a href="videos.html"><div class="video"><i class="videos"></i><i class="videos1"></i></div></a></li>
					<li><a href="reviews.html"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="404.html"><div class="bk"><i class="booking"></i><i class="booking1"></i></div></a></li>
					<li><a href="contact.html"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div> -->
		<!-- <div class="main"> -->
		<div class="header">
			<div class="top-header"">
			

		

				<div class="clearfix"></div>
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
		<!-- <div class="news">
			<div class="col-md-6 news-left-grid">
				<h3>Don’t be late,</h3>
				<h2>Book your ticket now!</h2>
				<h4>Easy, simple & fast.</h4>
				<a href="#"><i class="book"></i>BOOK TICKET</a>
				<p>Get Discount up to <strong>10%</strong> if you are a member!</p>
			</div>
			<div class="col-md-6 news-right-grid">
				<h3>News</h3>
				<div class="news-grid">
					<h5>Lorem Ipsum Dolor Sit Amet</h5>
					<label>Nov 11 2014</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
				<div class="news-grid">
					<h5>Lorem Ipsum Dolor Sit Amet</h5>
					<label>Nov 11 2014</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
				<a class="more" href="#">MORE</a>
			</div>
			<div class="clearfix"></div>
		</div> -->
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
</body>

</html>