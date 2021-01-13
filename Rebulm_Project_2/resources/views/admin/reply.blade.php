@extends('layouts.admin')

@section('content')
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
            <input type="text" class="text" value="Enter Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Name';}">								
            <div class="form-group">
                <textarea class="form-control" name="comment" rows="3"></textarea>
            </div>

            <input type="submit" class="btn btn-success" value="SUBMIT COMMENT">
        </form>
    </div>
</div>
@endsection