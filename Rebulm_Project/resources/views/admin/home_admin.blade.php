@extends('layouts.navbar')

@section('content')

<style>
    .right-content2{
	    padding: 3em;
        border-top: 1px solid #000;
        background: white;
}
</style>
<div class="right-content2">
	<div class="right-content-heading">
		<div class="right-content-heading-left">
			<h3 class="head">Our Movies</h3>
		</div>
	</div>
	<!-- pop-up-box --> 
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
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
		<div id="small-dialog" class="mfp-hide">
			<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="content-grid">
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum1.jpg" title="allbum-name" /></a>
			<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
			<ul>
				<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
				<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
				<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
			</ul>
			<a class="button" href="/edit_movies">Update</a>
			<a class="button" href="#small-dialog">Delete</a>
		</div>

		<div class="content-grid">
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum2.jpg" title="allbum-name" /></a>
			<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
			<ul>
				<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
				<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
				<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
			</ul>
			<a class="button" href="#small-dialog">Update</a>
			<a class="button" href="#small-dialog">Delete</a>
		</div>

		<div class="content-grid">
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum3.jpg" title="allbum-name" /></a>
			<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
			<ul>
				<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
				<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
				<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
			</ul>
			<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
		</div>

		<div class="content-grid last-grid">
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/gridallbum4.jpg" title="allbum-name" /></a>
			<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
			<ul>
				<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
				<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
				<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
			</ul>
			<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
		</div>

		
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
@endsection