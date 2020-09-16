<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="token" content="{{csrf_token()}}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('public/js/app.js') }}" defer></script> -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css"/>
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <!-- css for home view -->
<link rel="stylesheet" type="text/css" href="public/css/style.css?v=3"/>
   <!--  <link rel="stylesheet" type="text/css" href="public/css/responsive.css"/> -->     
<link rel="stylesheet" type="text/css" href="public/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="public/css/animate.css">
<link href="public/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />

 <!-- end of css for home view -->
  <!-- js for home view -->
  <script type="text/javascript" src="public/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="public/js/sidemenu.js"></script>

<!-- end of js for home view -->

<!-- *********************** -->
 <!-- Fontfaces CSS-->
    <link href="public/css/font-face.css" rel="stylesheet" media="all">
    <link href="public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="public/css/theme.css?v=2" rel="stylesheet" media="all"> 

    <!-- ************************* -->


</head>
<body onload="onloadStatus();">

    
    <div id="app">
            



        <nav class="navbar  navbar-expand-md navbar-light navbar-laravel" id="uppernavbarall" style="position: fixed !important;
    top: 0;
    z-index: 1;
    width: 100%;">
     <button   id="navbarcartbutton" onclick="opencartMoadal()" > <img src="public/images/order.JPG" style="width: 10%">
        <div class="noti__item js-item-menu" id="navbarcartquantity" style="display: none;">
     <i class="zmdi zmdi-shopping-basket" style="display: none;"></i>
       <span class="quantity" id="cartquantitytext" style="font-size: 15px;">0</span> 
       <input type="hidden" name="cartquantity" id="cartquantity" value="0">
   </div>
        </button>
     
           
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }} <img src="public/images/icon/logo.png" alt="foodiO" style="width: 46%" />
                </a>

              

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                     
                    </ul>
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                 <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <a class="dropdown-item" href="{{ url('/myOrders') }}">
                                        {{ __('My Orders') }}
                                    </a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="public/js/jquery.alerts.js" type="text/javascript"></script>
    <script src="public/js/order.js"></script>

    <!-- ************************ -->
     <!-- Jquery JS-->

    <script src="public/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="public/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="public/vendor/slick/slick.min.js">
    </script>
    <script src="public/vendor/wow/wow.min.js"></script>
    <script src="public/vendor/animsition/animsition.min.js"></script>
    <script src="public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="public/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="public/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="public/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="public/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="public/vendor/select2/select2.min.js"></script>

    
    <script src="public/js/jquery.alerts.js" type="text/javascript"></script>

    <!-- Main JS-->
    <script src="public/js/main.js"></script>
    <!-- ***************** -->

</body>
</html>
