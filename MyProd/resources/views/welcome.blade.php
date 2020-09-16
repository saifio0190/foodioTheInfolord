
<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
<meta charset="utf-8">
<title>food</title>
<link href='https://fonts.googleapis.com/css?family=Lobster+Two:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,300,700' rel='stylesheet' type='text/css' />

<!--MOBILE DEVICE-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!--CSS-->
<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="public/css/style.css"/>
<link rel="stylesheet" type="text/css" href="public/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="public/css/animate.css">
<link rel="stylesheet" type="text/css" href="public/css/responsive.css"/>

<!--JS-->

<script type="text/javascript" src="public/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="public/js/modernizr.js"></script>
<script src="public/js/scripts.js"></script>
<script src="public/js/waypoints.min.js"></script>
</head>

<body>
<!--    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->
  
<!-- Paste this code after body tag -->
<div class="se-pre-con"></div>
<!-- Ends -->

<header>
  <div class="container">
    <div class="row clearfix" id="home">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="logo">
          <h1> <a href="#"><img src="public/images/icon/logo.png" alt="" /></a> </h1>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="contact">
          <p>Questions? Call us Toll-free!<span class="number"><a href="#">1800-0000-7777</a></span><span class="time">(11AM to 11PM)</span></p>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="saction1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="menu">
          <div class="mobile-nav-container"> </div>
          <div class="mobile-nav-btn"><img class="nav-open" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6214/nav-open.png" alt="Nav Button Open" /> <img class="nav-close" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6214/nav-close.png" alt="Nav Button Close" /> </div>
          <nav>
            <ul>
              <!-- <li><a href="#home">Home</a></li> -->
              <li><a href="#resturant">Popular Restaurants </a></li>
              <li><a href="#offer">Order </a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="login">
          <ul>
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            <!-- <li><a href="#">Help</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="backgraound">
  <div class="container" >
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="back">
          <div class="line1 os-animation" data-os-animation="rotateInDownLeft" data-os-animation-delay="1s"> </div>
          <div class="line2 os-animation" data-os-animation="rotateInDownLeft" data-os-animation-delay="1s"> </div>
          <h2 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.50s">Network of over 5000 Restaurants</h2>
          <h3 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="1s">To Order Smartly <br></h3>
          <div class="line3 os-animation" data-os-animation="rotateInDownRight" data-os-animation-delay="1s"> </div>
          <div class="line4 os-animation" data-os-animation="rotateInDownRight" data-os-animation-delay="1s"> </div>

        </div>
      </div>
    </div>
    <!-- <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="textbox os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">
        <h3>Location Name</h3>
        <input type="text" placeholder="Secunderabad" />
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="textbox os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">
        <h3>Restaurant Name</h3>
        <input type="text" placeholder="Swagath Grand" />
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="textbox1 os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">
        <h3>Cuisine Name</h3>
        <input type="text" placeholder="Chicken Biriyani" />
        <span class="search"><a href="#"><i class="fa fa-search"></i></a></span> </div>
    </div> -->
  </div>
</section>
<section class="saction3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="ordaring">
          <h2 class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.50s"> How to use !!</h2>
          <div class="dotted os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="1s"></div>
          <p class="os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.50s">Just 4 stap follow</p>
          <div class="dotted1 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="1s"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6">
        <figure class="step os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.50s"> <img src="public/images/one.png" alt="" /> </figure>
        <div class="arrow" > <img src="public/images/arrow.png" alt="" /> </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <figure class="step os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="1.5s"> <img src="public/images/two.png" alt="" /> </figure>
        <div class="arrow1 "> <img src="public/images/arrow.png" alt="" /> </div>
      </div>
       <div class="col-lg-3 col-md-3 col-sm-6">
        <figure class="step1 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="3.5s"> <img src="public/images/four.png" alt="" /> </figure>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <figure class="step os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="2.5s"> <img src="public/images/thrww.png" alt="" /> </figure>
        <div class="arrow"> <img src="public/images/arrow.png" alt="" /> </div>
      </div>
     
    </div>
  </div>
</section>
<section class="saction4">
  <div class="container" id="offer">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="dotted3 os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="1s"></div>
        <div class="special">
          <h2 class="os-animation" data-os-animation="bounceInDown" data-os-animation-delay="0.50s">Special Offer</h2>
          <div class="dotted4 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="1s"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.20s">
        <div class="img clearfix"> <img src="public/images/002.png" alt=""/> </div>
        <div class="title clearfix">
          <h3>Olister Combo<br/>
            pack lorem</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.50s">
        <div class="img"> <img src="public/images/003.png" alt=""/> </div>
        <div class="title">
          <h3>Olister Combo<br/>
            pack lorem</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="1s">
        <div class="img"> <img src="public/images/oo1.png" alt=""/> </div>
        <div class="title">
          <h3>Olister Combo<br/>
            pack lorem</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
  </div>
</section>
<section class="saction5">
  <div class="container" id="resturant">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="restaurants">
        <h3 class="os-animation" data-os-animation="rollIn" data-os-animation-delay="1s">Top Restaurant </h3>
      </div>
      <div class="dotted6 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="0.50s"></div>
      <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1s"> <a href="#"><img src="public/images/pizzhut.png" alt=""/> </a> </figure>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.2s"> <a href="#"> <img src="public/images/SUB.png" alt="" /></a></figure>
        </div>
      </div>
      <!--row-->
      
      <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6" >
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.4s"> <a href="#"> <img src="public/images/KFC.png" alt=""/></a> </figure>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.6s"> <a href="#"><img src="public/images/papjohns.png" alt="" /></a> </figure>
        </div>
      </div>
      <!--row-->
      
      <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.8s"> <a href="#"><img src="public/images/dominos.png" alt="" /></a> </figure>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6">
          <figure class="rest os-animation" data-os-animation="fadeInDown" data-os-animation-delay="2s"> <a href="#"><img src="public/images/barista.png" alt="" /></a> </figure>
        </div>
      </div>
      <!--row--> 
      
    </div>
    <!---col-->
    
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="food">
        <h3 class="os-animation" data-os-animation="rollIn" data-os-animation-delay="2.5s">Top Cuisines</h3>
      </div>
      <div class="dotted7 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="2.8s"></div>
      <div class="food1">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3s"> <img src="public/images/pizz.png" alt=""/>
              <div class="order"> <a href="#">Cuisine Name</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3.2s"> <img src="public/images/burgar.png" alt="" />
              <div class="order"> <a href="#">Cuisine Name</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3.4s"> <img src="public/images/donelt.png" alt="" />
              <div class="order"> <a href="#">Cuisine Name</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3.6s"> <img src="public/images/sup.png" alt="" />
              <div class="order"> <a href="#">Cuisine Name</a> </div>
            </figure>
          </div>
        </div>
      </div>
      <div class="food1">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="3.8s"> <img src="public/images/checken.png" alt=""/>
              <div class="order"> <a href="#">Cuisine Name</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="4s"> <img src="public/images/passta.png" alt=""/>
              <div class="order"> <a href="#">Cuisine Name</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="4.2s"> <img src="public/images/bhel.png" alt=""/>
              <div class="order"> <a href="#">Cuisine Name</a> </div>
            </figure>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <figure class="food os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="4.4s"> <img src="public/images/past.png" alt=""/>
              <div class="order"> <a href="#">Cuisine Name</a> </div>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="saction6">
  <div class="container">
    <div class="row bg os-animation" data-os-animation="flash" data-os-animation-delay="1s">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="images">
          <h3 class="os-animation">Enjoy Exclusive Food <br />
            Order any of these</h3>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <div class="point">
          <p><span>&#10152;</span><a href="#"> Party Order</a></p>
          <p><span>&#10152;</span><a href="#">Home Made Food</a></p>
          <p><span>&#10152;</span><a href="#">Diet Food</a></p>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-5">
        <figure class="imgs"> <img src="public/images/abc.png" alt="" /> </figure>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <div class="button"> <a href="#">Order Now</a> </div>
      </div>
    </div>
  </div>
</section>
<section class="saction7">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
        <figure class="service os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1s"> <img src="public/images/plan.png" alt=""/> </figure>
        <div class="det os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.3s">
          <h3>100% Service Guarantee </h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
        <figure class="service os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.5s"> <img src="public/images/mak.png" alt="" /> </figure>
        <div class="det os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.8s">
          <h3>100% Service Guarantee </h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <figure class="service os-animation" data-os-animation="fadeInDown" data-os-animation-delay="2s"> <img src="public/images/kljj.png" alt=""/> </figure>
        <div class="det os-animation" data-os-animation="fadeInDown" data-os-animation-delay="2.3s">
          <h3>100% Service Guarantee </h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="saction8">
  <div class="container" id="contact">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="site">
          <h3>About Us</h3>
        </div>
        <div class="sitelink">
          <ul>
            <li> <span>&#10152;</span>><a href="https://www.facebook.com/saifio1994">Know us</a></a></li>
            <li><span>&#10152;</span><a href="https://www.linkedin.com/in/itzsaifio/">Contact Us</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="follow">
          <h3>Follow Us On...</h3>
        </div>
        <div class="social">
          <ul>
            <li> <i class="fa fa-facebook-square"></i><a href="https://www.facebook.com/saifio1994">Facebook</a></li>
            <li><i class="fa fa-linkedin-square"></i><a href="https://www.linkedin.com/in/itzsaifio/">Linkedin</a></li>
            
          </ul>
        </div>
      </div>
 
    </div>
  </div>
</footer>
<footer class="saction9">
  <div class="container" id="lastsection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="email">&copy; All right reserved 2019  /  foodiO </div>
        <!-- <p class="freetemplates">Free Template by <a href="http://freetemplates.pro/">FreeTemplates.pro</a></p> -->
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="public/js/sidemenu.js"></script>
</body>
</html>
