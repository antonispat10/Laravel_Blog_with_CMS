<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script‌​>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="main-header">

        <div class="img-responsive" >

            <img src="images/d.kati.jpg"  width='300px' alt="" class="img-responsive">

        </div>


    </div>

    <title>Blog</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">




    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>



<body id="app-layout" class="col-md-10 col-md-offset-1">


<nav class="navbar navbar-default navbar-static-topx">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Blog
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Αρχική</a></li>


                <!-- Right Side Of Navbar -->


                <!-- Blog Categories Well -->






            <!-- Authentication Links -->

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Σύνδεση</a></li>
                    <li><a href="{{ url('/login/facebook') }}">Loginzz</a></li>

                    <li><a href="{{ url('/register') }}">Εγγραφή</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>



@yield('content')




    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{--<script src="{{ elixir('js/app.js') }}"></script> --}}

<!-- jQuery -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/libs/libs.js')}}"></script>
    <script src="{{asset('js/libs/bootstrap.js')}}"></script>
    <script src="{{asset('js/libs/jquery.js')}}"></script>
    <script src="{{asset('js/libs/metisMenu.js')}}"></script>
    <script src="{{asset('js/libs/sb-admin-2.js')}}"></script>
    <script src="{{asset('js/libs/scripts.js')}}"></script>
    <script src="{{asset('js/jq.js') }}"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>


</body>
</html>