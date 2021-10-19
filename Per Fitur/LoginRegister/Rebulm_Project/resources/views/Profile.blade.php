<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    {{-- <link href="{{ asset('/css/bootstrap.css') }}" rel='stylesheet' type='text/css' /> --}}
    <!-- Custom Theme files -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-light" style="background-image: url({{url('../images/bg.png')}})">
    <div class="top-header span_top" style="background-color: rgb(36, 24, 24);">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="" /></a>
            <p>Movie Theater</p>
        </div>
        <a href="/" style="color:#D0D0D0;
        font-size:1.35em;
        letter-spacing:2px;
        text-transform:uppercase;
        padding:4px 0 0px 20px;
        margin:8px 0 0px 20px;
        display: inline-block;">home</a>

        <a href="/movies" style="color:#D0D0D0;
        font-size:1.35em;
        letter-spacing:2px;
        text-transform:uppercase;
        padding:4px 0 0px 20px;
        margin:8px 0 0px 20px;
        display: inline-block;">Movie</a>

        <a href="/profile" style="color:#D0D0D0;
        font-size:1.35em;
        letter-spacing:2px;
        text-transform:uppercase;
        padding:4px 0 0px 20px;
        margin:8px 0 0px 20px;
        display: inline-block;">Profile</a>
          <a href="/login" style="color:#D0D0D0;
				font-size:1.35em;
				letter-spacing:2px;
				text-transform:uppercase;
				padding:4px 0 0px 20px;
				margin:8px 0 0px 20px;
				margin-left:22%;
				display: inline-block;">Keluar</a>
        <div class="clearfix"></div>
    </div>
    <h1 style="text-align: center; color:white; margin-top:10px">WELCOME TO YOURS</h1>
    <h1 style="text-align: center; color:white;">PROFILE</h1>

    <div class="col d-flex justify-content-center container mt-3">
        <div class="card border-dark card w-50">
            <div class="card-header" style="background-color: rgb(36, 24, 24);">
                <h5 class="text-primary">Profile</h5>
                <!-- <h5>Register</h5> -->
            </div>
            <div class="card-body" style="background-color: rgb(36, 24, 24);">
                <form action="" method="POST">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <label for="id" class="text-light">ID</label>
                                <input type="text" class="form-control form-control-lg" name="id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <label for="nama" class="text-light">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-lg" name="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <label for="email" class="text-light">Email</label>
                                <input type="text" class="form-control form-control-lg" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_hp" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <label for="no_hp" class="text-light">Email</label>
                                <input type="text" class="form-control form-control-lg" name="no_hp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <label for="username" class="text-light">Username</label>
                                <input type="text" class="form-control form-control-lg" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <label for="email" class="text-light">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <label for="kode" class="text-light">Kode Promo</label>
                                <input type="text" class="form-control form-control-lg" name="kdoe">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <a href="/" class="btn btn-block btn-primary">Update</a>
                        </div>
                    </form>
            </div>
        </div>
    </div>


</body>

</html>
