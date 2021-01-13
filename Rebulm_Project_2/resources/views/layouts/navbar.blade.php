<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Admin</title>
        <link href="{{ asset('/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
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
        <a href="/admin" class="navbar-brand d-flex w-50 mr-auto"
            style="color:#D0D0D0; 
            font-size:1.6em; 
            letter-spacing:2px; 
            text-transform:uppercase;">

            <img src="{{asset('images/logo.png')}}" width="150" class="d-inline-block align-top" alt="">
            &nbsp;| Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" 
                        style="font-size:1.2em; 
                        letter-spacing:1px; 
                        text-transform:uppercase;"
                    href="/admin">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" 
                        style="font-size:1.2em; 
                        letter-spacing:1px; 
                        text-transform:uppercase;"
                    href="/admin/add_movies">ADD MOVIE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" 
                        style="font-size:1.2em; 
                        letter-spacing:1px; 
                        text-transform:uppercase;"
                    href="/admin/feedback">FEEDBACK</a>
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
                          Halo, Admin
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          {{-- <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="#">FaQ</a> --}}
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                <span class="link-collapse">Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </a>
                        </div>
                      </div>
                </li>
            </ul>
        </div>
    </nav>
{{-- isi kontennya disini --}}
@yield('content')
{{-- nyampe sini --}}
</body>
</html>