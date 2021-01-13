@extends('layouts.user')

@section('head')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Rebulm
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ asset('css/argon/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/argon/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('css/argon/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/argon/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('css/argon/css/argon-design-system.css?v=1.2.2') }}" rel="stylesheet" />

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
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
@endsection

@section('content')
    <section class="" style="background-image: url({{ URL::asset('images/bg.png') }}); padding-bottom:200px">
    <div class="container">
    <br><br><br><br><br><br><br><br><br>
        <div class="card card-profile shadow mt--300 bg-dark" style=" background-color:rgb(36, 24, 24);">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="javascript:;">
                                <img src="{{asset('images/profile.png')}}" class="rounded-circle" style="width:100%; padding-top:20px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                        <div class="card-profile-actions py-4 mt-lg-0">
                            <!-- <a href="#" class="btn btn-sm btn-info mr-4">Connect</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-default float-right">Message</a> -->
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1 " class="text-white">

                    </div>
                </div>
                <div class="text-center text-white">
                    <br><br>
                    <h3  style="text-align:center;"class="text-white">{{Auth::user()->name}}</h3>
                    <!-- <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Bucharest, Romania</div> -->
                    <!-- <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer -->
                </div>
                <!-- <div><i class="ni education_hat mr-2"></i>University of Computer Science</div> -->
            </div>
            <div class="mt-5 py-5 border-top">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="card-body">
                            <form action="{{ route('user.profile') }}" method="POST" enctype="multipart/form-data">
                                @method('patch')
                                @csrf 
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label"></label>

                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="text-white">Email</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="{{Auth::user()->email}}" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="text-white">Username</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="username" value="{{Auth::user()->username}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="text-white">Name</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{Auth::user()->name}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput2" class="text-white">Nomor HP</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" name="phonenumber" value="{{Auth::user()->phonenumber}}">
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="ftpr" class="text-white">Ganti Foto Profile</label>
                                                <input type="file" class="form-control" id="img_path" name="img_path">
                                            </div> --}}

                                            <!-- </div> -->
                                            <!-- <input type="email" class="form-control form-control-lg" id="email" name="email" -->
                                            <!-- placeholder="Email or Phone Number"> -->
                                            <!-- </div> -->
                                            <!-- </div> -->
                                            <div class="form-group row">
                                                <label for="nama" class="col-sm-3 col-form-label"></label>
                                                <div class="col-sm-6">
                                                    <!-- <label for="email" class="text-light">Password</label> -->
                                                    <!-- <input type="password" class="form-control form-control-lg" id="password" -->
                                                    <!-- name="password" placeholder="Password"> -->
                                                </div>
                                            </div>
                                            <!-- <div class="form-group text-center">
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Daftar</button>
                            </div>
                        </div> -->
                                    <div class="form-group text-center">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Save</button>
                                        <!-- <div class="mt-2"> -->
                                        <!-- <span class="text-center text-light">Don't have an account? <a href="/register">Register -->
                                        <!-- Here</a></span> -->
                                        <!-- </div> -->
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="text-center">
                    <a href="javascript:;">Pertanyaan? Hubungi Kami</a>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
    </div>
    </section>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <script src="../assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/bootstrap-datepicker.min.js"></script>
    <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="../assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-design-system-pro"
        });
    </script>
        </div>
    </div>
    </div>
    </footer>
    </div>
    </div>
@endsection

