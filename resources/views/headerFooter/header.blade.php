 <!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      @yield('header-title')
  

   <script  src="public/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css')}}">
    <!-- <link href="{{ asset('public/css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('public/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{ asset('public/css/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('public/') }}/css/style.css?v=<?=strtotime('now')?>">

 <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('public/images/favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('public/images/favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/images/favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/images/favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/images/favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('public/images/favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('public/images/favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('public/images/favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/images/favicon/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('public/images/favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/images/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/images/favicon/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/images/favicon/favicon-16x16.png') }}">
<link rel="manifest" href="images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">




  </head>
  <body style="background-color: lightblue;">
    

    <div class="wrap">

      <header role="banner">
       

       <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-md-4 col-sm-4 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo" > <a href="{{ $app['url']->to('/') }}"><img src="public/images/the_lordinfo.png" style=" width: 70%"> </a>
</h1>
            </div>
            <div class="col-8 col-md-8 text-center">

        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto" style="font-weight: bolder;">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ $app['url']->to('/home') }}">Home</a>
                </li>
                
               

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                    <a class="dropdown-item" href="{{ $app['url']->to('/blog-category') }}"></a> 
                    <a class="dropdown-item" href="{{ $app['url']->to('/blog-category') }}">Social</a>
                    <a class="dropdown-item" href="{{ $app['url']->to('/blog-category') }}">Freebies</a>
                    <a class="dropdown-item" href="{{ $app['url']->to('/blog-category') }}">How to</a>
                    <a class="dropdown-item" href="{{ $app['url']->to('/blog-category') }}">Trending</a>
                  </div>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ $app['url']->to('/about') }}">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ $app['url']->to('/contact') }}">Contact Us</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
            </div>
          </div>
        </div>
      </header>