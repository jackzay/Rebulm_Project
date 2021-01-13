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
            <h3 class="head">Edit Movies</h3>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 10px;">

        @foreach ($movie as $movie)
        <form action="/admin/{{$movie->id_movie}}" method="POST" enctype="multipart/form-data" style="width: 1000px">
            @csrf
            @method('PUT')
            
            <div class="from-group" >
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$movie->movie_title}}">
            </div>
    
            <div class="form-group">
                <label for="synopsis">Synopsis</label>
                <textarea class="form-control" id="synopsis" name="synopsis" rows="3">{{$movie->synopsis}}</textarea>
            </div>

            <div class="from-group">
                <label for="release">Release Year</label>
                <input type="number" class="form-control" id="release" name="release" value="{{$movie->year}}">
            </div>

            <div class="from-group" >
                <label for="price"">Director</label>
                <input type="text" class="form-control" name="director" value="{{$movie->director}}">
            </div>

            <div class="from-group" >
                <label for="price"">Actress</label>
                <input type="text" class="form-control" name="actress" value="{{$movie->actress}}">
            </div>

            <div class="from-group" >
                <label for="duration"">Duration</label>
                <input type="text" class="form-control" name="duration" value="{{$movie->duration}}">
            </div>
            <div class="from-group" >
                <label for="price"">Rating</label>
                <input type="number" class="form-control" name="rating" value="{{$movie->rating}}">
            </div>

            <div class="from-group" >
                <label for="price"">Trailer(embed)</label>
                <input type="text" class="form-control" name="trailer" value="{{$movie->trailer}}">
            </div>
            
            <div class="custom-file" style="margin-top: 30px; margin-bottom: 30px">
                <input type="file" class="custom-file-input" id="img_path" name="img_path">
                <label class="custom-file-label" for="customFile">Upload Poster</label>
            </div>
            <div style="margin-top: 30px">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
        @endforeach
    </div>
</div>

@endsection