@extends('layouts.homeview')
<?php  $data = Config::get('articlesInfo.how-to-host-on-twitch'); ?>
@section('header-title')

<title>{{ $data['title'] }}</title>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="{{ $data['description'] }}"/>
<meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large"/>
<link rel="canonical" href="{{ $data['url'] }}" />
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="{{ $data['title'] }}">
<meta property="og:description" content="{{ $data['description'] }}">
<meta property="og:url" content="{{ $data['url'] }}">
<meta property="og:site_name" content="theinfolord">
<meta property="article:publisher" content="https://www.facebook.com/saifio1994"> 
<meta property="article:author" content="https://www.facebook.com/saifio1994">
<meta property="article:section" content="{{ $data['title'] }}">
<meta property="article:published_time" content="2019-11-12T03:32:23+05:30">
<meta property="article:modified_time" content="2019-11-12T05:47:14+05:30">
<meta property="og:updated_time" content="2019-11-12T05:47:14+05:30">
<meta property="og:image" content="{{ $data['featureImage'] }}">
<meta property="og:image:secure_url" content="{{ $data['featureImage'] }}">
<meta property="og:image:width" content="1000">
<meta property="og:image:height" content="562">
<meta property="og:image:alt" content="{{ $data['title'] }}">
<meta property="fb:app_id" content="205556004017603"/>
<meta property="og:image:type" content="image/jpeg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $data['title'] }}">
<meta name="twitter:description" content=" {{ $data['description'] }}">

	

@endsection
@section('content') 
   

    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            <!-- <img src="images/img_10.jpg" alt="Image" class="img-fluid mb-5"> -->
            <p class="d-none d-lg-block HiddenMobile">
                <a class="category mb-5" href="{{ $app['url']->to('/blog-category-freebies') }}">Freebies</a> 
              <a class="category mb-5" href="{{ $app['url']->to('/blog-category-howto') }}">How to</a>       
             <a class="category mb-5" href="{{ $app['url']->to('/blog-category-trending') }}">Trending</a> 
              <a class="category mb-5" href="{{ $app['url']->to('/blog-category-social') }}">Social</a>
              </p>
            
            <h1 class="mb-4">{{ $data['title'] }}  
            <div class="fb-share-button" 
    data-href="{{ $data['url'] }}" 
   data-layout="button" data-size="small">
</div>   
 			</h1>
 			
            
             <div class="post-meta">

                        <span class="author mr-2"> <a  href="https://www.instagram.com/saifiomd/" target="_blank"> <img src="{{ url('public/images/author.png') }}" alt="Colorlib" class="mr-2"> </a>
                        <a href="https://api.whatsapp.com/send?phone=+919762390190">
                        <span class="ml-2 fa fa-whatsapp" aria-hidden="true" style="font-size:20px;color:green"></span></a>
                         </span>

                          <span class="mr-3"><i class="fa fa-upload" aria-hidden="true"></i> {{ $data['published_time'] }}</span>
                         <span class="ml-2"><span class="fa fa-eye"></span> {{ $data['views'] }}</span>
            </div>

           <!--   <div class="post-meta">

                        <span class="author mr-2"><img src="{{ url('public/images/author.png') }}" alt="Colorlib" class="mr-2">
                        	<a href="https://api.whatsapp.com/send?phone=+919321120903">
                        <span class="ml-2 fa fa-whatsapp" aria-hidden="true" style="font-size:20px;color:green"></span></a>
                        
                        <a class="category mb-5" href="https://www.instagram.com/saifiomd/">Author</a>
                         </span>


                        <span class="mr-3">{{ $data['published_time'] }}</span>

                       


                        <span class="ml-2"><span class="fa fa-eye"></span> {{ $data['views'] }}</span>
            </div> -->

 			
            
            <div class="row mb-5">
              <div class="col-md-12 mb-4">
                <img src="{{ $data['featureImage'] }}" alt="{{ $data['title'] }}" class="img-fluid">
              </div>
             
            </div>
           <!-- https://www.linkedin.com/shareArticle?mini=true&url=http://developer.linkedin.com&title=LinkedIn%20Developer%20Network &summary=My%20favorite%20developer%20program&source=LinkedIn -->

          


           
            <div class="post-content-body">
           <p>Hosting mode features on Twitch allows you to host another twitch streamer channel on your own channel.&nbsp; By <strong>hosting someone on twitch</strong> channel allows your viewers to enjoy other popular streams at the time you don&rsquo;t stream.</p>
<p>&nbsp;You can host any channel for your viewers without leaving your channel chat room. It is also a good way to promote your friend channel by hosting them to your channel, which can be result to increase in their following.</p>
<p>However hosting is not an new concept but its look tricky to do.</p>

<div id="tocs" style="display: block; ">
  
  <h5 class=" text-uppercase text-center " id="tocH">Table of contents  

    <button class="btn btn-info" id="tocShowHide" onclick="javascript:tocShowHide()"> [Hide] </button>
   
  </h5>

  <div id="toc" style="display: block;">

 </div>
</div>
<!-- <ul>
<li>By Pressing &ldquo;prt scr&rdquo; key of you Keyboard</li>
<li>By pressing &ldquo;Fn + prt scr&rdquo; keys</li>
<li>By pressing &ldquo;windows + prt scr&rdquo; keys</li>
<li>By snipping tools app</li>
</ul> -->
<div id="contents">
	<br>	
<h4>Hosting Twitch on a Desktop</h4>
<br>	
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/HowToHostonTwitch1.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>

<p> <br>	Navigate To <a title="Twitch tv" href="https://www.twitch.tv/" target="_blank" rel="noopener">Twitch.tv</a> in your browser (Any Web browser can be used for Hosting on a Windows or Mac)
  <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/HowToHostonTwitch2.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
</p>
<p><br>	Select Login in (if youre already a twitch user you can log in and open your account otherwise click on sign up to create new account and fill the given field by following their instruction)</li>

</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/HowToHostonTwitch3.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
<p> <br>	Select the user icon ( It is on the top of the right corner. By selecting a user icon a drop down menu get open)
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/HowToHostonTwitch4.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
<p> <br>	 Select channel ( it Dropdown the channel chatroom)</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/HowToHostonTwitch5.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
<p><br>	Type <strong>/host</strong> in send message section ( for example if you want to host the channel name having XYZ then simply you have to type /host XYZ &nbsp;in your send message section.</p>

<p>Hosting the channel will let your viewvers to view the channel youre hosting without closing your chatroom</p>
<ul>
<p>To stop hosted channel just type <strong>/unhost</strong> in given send message section.</p>

<h4>Hosting twitch on a mobile</h4>
<p>	&nbsp</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/hostingtwitchonmobile.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>

  
<ul>
	<p>	&nbsp</p>
<li>Open the twitch app in your device</li>
<li><a title="APK" href="https://play.google.com/store/apps/details?id=tv.twitch.android.app&amp;hl=en" target="_blank" rel="noopener">Twitch app for Android</a></li>
<li><a title="IOS" href="https://apps.apple.com/us/app/twitch-live-game-streaming/id460177396" target="_blank" rel="noopener">Twitch app for IOS</a></li>
</ul>
<p>	&nbsp</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/HowToHostonTwitchm1.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>

<p>	&nbsp</p>

<p>Select the login ( Select Login if you already have a account on twitch, proceed with your username and password in the given field)</p>

<p>Select sign up ( to make a account on twitch simply tap on sign up fill up the required the information)</p>


<p>	&nbsp</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/HowToHostonTwitchM2.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>

<p>	&nbsp</p>

<p>Select user icon ( It is in the top left corner which will display your profile)</p>

<p>	&nbsp</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/HowToHostonTwitchM3.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>

<p>	&nbsp</p>
<p>Select the chat tab ( The fourth tab below your profile picture which opens your channel chat)</p>



<p>	&nbsp</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/HowToHostonTwitchM4.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>

<p>	&nbsp</p>
<p>Type <strong>/host</strong> with the channel name you want to host in your own chat. ( for example if you want to host the channel name having XYZ then simply you have to type&nbsp; /host XYZ&nbsp; in your send message section.</p>

<p>Hosting the channel will let your viewvers to view the channel youre hosting without closing your chatroom.</p>

<p>To stop hosted channel just type <strong>/unhost</strong> in given send message section.</p>

<H4>Final words</H4>
<p>Hosting channel on twitch is an great feature to the streamers which let your followers to watch others channel streaming without leaving yours. floow these steps to host when you don&rsquo;t stream or to help your friends by exposing their talent on your channel to increase their fanbase.&nbsp;</p>

<p><strong>Hosting on twitch</strong> looks tricky but its isn&rsquo;t here how to host on twitch step by step process with images.&nbsp;</p>




                 


        </div>
        
          @include('sharepost')
 
            </div>

          

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
          <!-- Popular post -->
          @include('popularpost')

          </div>
          <!-- END sidebar -->

        </div>
      </div>
       <div class="row">
          <div class="col-md-12 col-lg-8">
            
          </div>
        </div>
                
                 
    </section>

    <section class="py-5">
    <!-- Related Post -->
    @include('relatedpost')

    </section>
    <script src="public/js/toc.js"></script>
@endsection

