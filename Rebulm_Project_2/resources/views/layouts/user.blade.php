<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-faded justify-content-center" style="background-color: rgb(36, 24, 24);">
        <a href="/" class="navbar-brand d-flex w-50 mr-auto"
            style="color:#D0D0D0; 
            font-size:1.6em; 
            letter-spacing:2px; 
            text-transform:uppercase;">

            <img src="{{asset("images/logo.png")}}" width="150" class="d-inline-block align-top" alt="">
            &nbsp;| Movie </a>
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
                    href="/home">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" 
                        style="font-size:1.2em; 
                        letter-spacing:1px; 
                        text-transform:uppercase;"
                    href="/home/movies">Movies</a>
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
                          Halo, {{Auth::user()->username}}
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/home/profile">Profile</a>
                            <a class="dropdown-item" href="/faq">FaQ</a>
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
    <main>
        @yield('content')
    </main>
</body>
</html>