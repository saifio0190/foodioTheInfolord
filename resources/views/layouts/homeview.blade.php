<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>@yield('header-title')
	<script src="public/js/jquery-1.11.3.min.js"></script>
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
	<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('public/images/favicon/android-icon-192x192.png') }}">
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
					<div class="col-md-4 col-sm-4 text-center"> <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
						<h1 class="site-logo"> <a href="{{ $app['url']->to('/') }}"><img src="public/images/the_lordinfo.png" style=" width: 70%"> </a>
</h1>
					</div>
					<div class="col-8 col-md-8 text-center">
						<nav class="navbar navbar-expand-md  navbar-light bg-light">
							<div class="container">
								<div class="collapse navbar-collapse" id="navbarMenu">
									<ul class="navbar-nav mx-auto" style="font-weight: bolder;">
										<li class="nav-item"> <a class="nav-link active" href="{{ $app['url']->to('/home') }}">Home</a>
										</li>
										<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>
											<div class="dropdown-menu" aria-labelledby="dropdown05">
												<a class="dropdown-item" href="{{ $app['url']->to('/blog-category') }}"></a> <a class="dropdown-item" href="{{ $app['url']->to('/blog-category') }}">Social</a>
												<a class="dropdown-item" href="{{ $app['url']->to('/blog-category') }}">Freebies</a>
												<a class="dropdown-item" href="{{ $app['url']->to('/blog-category') }}">How to</a>
												<a class="dropdown-item" href="{{ $app['url']->to('/blog-category') }}">Trending</a>
											</div>
										</li>
										<li class="nav-item"> <a class="nav-link" href="{{ $app['url']->to('/about') }}">About Us</a>
										</li>
										<li class="nav-item"> <a class="nav-link" href="{{ $app['url']->to('/contact') }}">Contact Us</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<main class="py-4">
		@yield('content')
		</main>
		<footer class="site-footer">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-12 ml-auto">
						<div class="row">
							<!-- <div class="col-md-7">
                  <h3>Latest Post</h3>
                  <div class="post-entry-sidebar">
                    <ul>
                      <li>
                        <a href="">
                          <img src="{{ url('public/images/img_2.jpg') }}" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>How to Find the Video Games of Your Youth</h4>
                            <div class="post-meta">
                              <span class="mr-2">March 15, 2018 </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <img src="{{ url('public/images/img_3.jpg') }}" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>How to Find the Video Games of Your Youth</h4>
                            <div class="post-meta">
                              <span class="mr-2">March 15, 2018 </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <img src="{{ url('public/images/img_4.jpg') }}" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>How to Find the Video Games of Your Youth</h4>
                            <div class="post-meta">
                              <span class="mr-2">March 15, 2018 </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div> -->
							<div class="col-md-3 col-lg-3"></div>
							<div class="col-md-3 col-lg-3">
								<div class="mb-5">
									<h3>See Us</h3>
									<ul class="list-unstyled">
										<li><a href="#"><span class="fa fa-twitter"></span> Twitter</a>
										</li>
										<li><a href="#"><span class="fa fa-facebook"></span> Facebook</a>
										</li>
										<li><a href="#"><span class="fa fa-instagram"></span> Instagram</a>
										</li>
										<li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a>
										</li>
										<li><a href="#"><span class="fa fa-google-plus"></span> Google plus</a>
										</li>
										<!-- <li><a href="#">Disclaimer</a></li> -->
									</ul>
								</div>
							</div>
							<div class="col-md-1 col-lg-1"></div>
							<div class="col-md-3 col-lg-3">
								<div class="mb-5">
									<h3>Quick Links</h3>
									<ul class="list-unstyled">
										<li><a href="{{ $app['url']->to('/') }}">All Posts</a>
										</li>
										<li><a href="{{ $app['url']->to('/about') }}">About Us</a>
										</li>
										<li><a href="{{ $app['url']->to('/contact') }}">Contact Us</a>
										</li>
										<li><a href="{{ $app['url']->to('/privacy') }}">Privacy & Poilicy</a>
										</li>
										<li><a href=" {{ $app['url']->to('/disclaimer') }}">Disclaimer</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-2 col-lg-2"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p class="small">Copyright &copy;
							<script>
								document.write(new Date().getFullYear());
							</script>All Rights Reserved | <a href="https://theinfolord.com" target="_blank">The Infolord</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- END footer -->
	</div>
	<!-- loader -->
	<div id="loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" />
		</svg>
	</div>
	<script src="public/js/jquery-3.2.1.min.js"></script>
	<!-- <script  src="public/js/jquery-1.11.3.min.js"></script> -->
	<script src="public/js/jquery-migrate-3.0.0.js"></script>
	<script src="public/js/popper.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/owl.carousel.min.js"></script>
	<script src="public/js/jquery.waypoints.min.js"></script>
	<script src="public/js/jquery.stellar.min.js"></script>
	<script src="public/js/main.js"></script>
</body>

</html>