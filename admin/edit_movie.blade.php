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

        <form action="/product" method="POST" enctype="multipart/form-data" style="width: 1000px">
    
            <div class="from-group" >
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
    
            <div class="form-group">
                <label for="synopsis">Synopsis</label>
                <textarea class="form-control" id="synopsis" name="synopsis" rows="3"></textarea>
            </div>

            <div class="from-group">
                <label for="release">Release Year</label>
                <input type="number" class="form-control" id="release" name="release">
            </div>

            <div class="from-group" >
                <label for="price"">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            
            <div class="custom-file" style="margin-top: 30px; margin-bottom: 30px">
                <input type="file" class="custom-file-input" id="img_path" name="img_path">
                <label class="custom-file-label" for="customFile">Upload Poster</label>
            </div>
            <div style="margin-top: 30px">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection