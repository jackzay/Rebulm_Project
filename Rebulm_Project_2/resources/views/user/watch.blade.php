@extends('layouts.user')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="//cdn.jsdelivr.net/afterglow/latest/afterglow.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Document</title>
    <style>
        body{
            background-image: url({{ URL::asset('images/bg.png') }}) ;
            background-size: cover;
            
            
            
        

        }
        html{
            color: white;
            font-family: 'Open Sans', sans-serif;
        }
        /* Rebulm */

        
        #rebulm{
            margin-left:5%;
            margin-top:3%;
            
        }
        .watch{
            margin-left: 10%;
            border:10 px black;
        
        
        }
        .com{
            color: white;
        }
    .container{
        border-radius: 20px;
    }
    </style>
@endsection

@section('content')
    <br>
    <div class="container">
        <div class="row" >
    <div class="watch">

    <iframe width="960" height="600"  src="{{$movie->trailer}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>    

@endsection