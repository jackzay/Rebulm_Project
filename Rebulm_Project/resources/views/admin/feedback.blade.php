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
			<h3 class="head">Feedback</h3>
		</div>
	</div>

	<div class="d-flex justify-content-center" style="margin-top: 20px">
		<table class="table table-borderless" style="width: 1000px">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Movie Title</th>
					<th>Username</th>
					<th>Date</th>
					<th>Feedback</th>
				</tr>
			</thead>
			@foreach ($feedbacks as $feedback)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td style="width: 500px">
					{{-- @foreach ($feedback->movies as $movie)
						{{$movie->movie_title}}
					@endforeach --}}
				</td>
				<td>{{}}</td>
				{{-- <td>
					<a href="/product/{{$product-> id}}/edit" class="btn btn-primary">Edit</a>
					<form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger">Delete</button>
					</form>
				</td> --}}
			</tr>
		@endforeach
		</table>
	</div>

</div>
@endsection