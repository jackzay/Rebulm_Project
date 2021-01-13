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
		{{-- <div id="small-dialog" class="mfp-hide">
			<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
		</div> --}}
		<div class="d-flex justify-content-center" style="margin-top: 20px">
			<div class="row">
		@foreach ($movies as $movie)
		<div class="col-3 mb-3">
			<div class="card" style="width: 300px">
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog{{$movie->id_movie}}"><img src="images/{{$movie->img_path}}" title="allbum-name" style="width: 300px"/></a>
				<div id="small-dialog{{$movie->id_movie}}" class="mfp-hide">
					<iframe  src="{{$movie->trailer}}" frameborder="0" allowfullscreen></iframe>
				</div>
				
				<div class="card-body ">
					<h4 class="card-title">{{$movie->movie_title}}</h4>
					<a class="btn btn-success" href="/admin/{{$movie-> id_movie}}/edit_movie">Edit</a>

					<form action="/admin/{{ $movie->id_movie}}" method ="POST" style="display: inline-block">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger">Delete</button>
					</form>
				</div>
			</div>
		</div>

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
@endsection