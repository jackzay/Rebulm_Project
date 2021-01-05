<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cinema A Entertainment Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
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
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    {{-- <div class="full">
        <div class="top-header" style="background-color: rgb(36, 24, 24);">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
                <p>Movie Theater</p>
            </div>
            <a href="#" style="color:#D0D0D0;
            font-size:1.35em;
            letter-spacing:2px;
            text-transform:uppercase;
            padding:4px 0 0px 20px;
            margin:8px 0 0px 20px;
            display: inline-block;">home</a>
            
            <a href="#" style="color:#D0D0D0;
            font-size:1.35em;
            letter-spacing:2px;
            text-transform:uppercase;
            padding:4px 0 0px 20px;
            margin:8px 0 0px 20px;
            display: inline-block;">Movie</a>	

            <a href="#" style="color:#D0D0D0;
            font-size:1.35em;
            letter-spacing:2px;
            text-transform:uppercase;
            padding:4px 0 0px 20px;
            margin:8px 0 0px 20px;
            display: inline-block;">Profile</a>
            <!-- <div class="nav" ></div> -->
            <div class="search">
                <form>
                    <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
                    <input type="submit" value="">
                </form>
            </div>
        
            <div class="clearfix"></div>
        </div> --}}
        <main>
            @yield('content')
        </main>
    {{-- </div> --}}
</body>
</html>