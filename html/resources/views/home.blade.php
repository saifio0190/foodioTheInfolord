


@extends('layouts.homeview')
<?php
$data = Config::get('articlesInfo');
$categoryArr = ['Social','Freebies','How to','Trending'];
 ?>

@section('header-title')
<title>The Infolord- An era of InfoMasters, Home of Freebies & Hacks. </title>
 <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="The Infolord : Here's where you'll discover legitmate ways to get Freebies and many Hacks teaching you to be a Info Legend."/>
<meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large"/>
<link rel="canonical" href="https://theinfolord.com/home" />
<meta property="og:locale" content="en_US">
<meta property="og:type" content="homepage">
<meta property="og:title" content="The Infolord- An era of InfoMasters, Home of Freebies & Hacks.">
<meta property="og:description" content="The Infolord : Here's where you'll discover legitmate ways to get Freebies and many Hacks teaching you to be a Info Legend.">
<meta property="og:url" content="https://theinfolord.com/home">
<meta property="og:site_name" content="theinfolord">
<meta property="article:publisher" content="https://www.facebook.com/saifio1994"> <!-- https://www.facebook.com/NoHumanVerification -->
<meta property="article:author" content="https://www.facebook.com/saifio1994">
<meta property="article:section" content="The Infolord- Home">
<meta property="article:published_time" content="2019-11-12T03:32:23+05:30">
<meta property="article:modified_time" content="2019-11-12T05:47:14+05:30">
<meta property="og:updated_time" content="2019-11-12T05:47:14+05:30">
<meta property="og:image" content="https://theinfolord.com/public/images/Youtube-Featured.jpg">
<meta property="og:image:secure_url" content="https://theinfolord.com/public/images/Youtube-Featured.jpg">
<meta property="og:image:width" content="1000">
<meta property="og:image:height" content="562">
<meta property="og:image:alt" content="https://theinfolord.com/public/images/Youtube-Featured.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="The Infolord- An era of InfoMasters, Home of Freebies & Hacks.">
<meta name="twitter:description" content="The Infolord : Here's where you'll discover legitmate ways to get Freebies and many Hacks teaching you to be a Info Legend.">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KJCWNMM');</script>
<!-- End Google Tag Manager -->

@endsection
@section('content')         
  <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12" >

              <div class="owl-carousel owl-theme home-slider">
               


                  <?php foreach ($data  as $key => $value):
                 if ($value['homeCarousel'] == 1) {   ?>
                  
             
 

                 <div>
                  <a href="{{ $value['hostFreeURL'] }}" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{ url($value['hostfreeImg'] ) }}'); ">
                    <div class="text half-to-full">
                      <span class="category mb-5">{{ $categoryArr[$value['category'][0]] }}</span>
                      <div class="post-meta">
                        
                        <span class="author mr-2"><img src="{{ url('public/images/author.png') }}" alt="Infolord"> Infolord</span>&bullet;
                        <span class="mr-2">{{ $value['published_time'] }}  </span>
                        <span class="ml-2"><span class="fa fa-eye"></span> {{ $value['views'] }}</span>
                        
                      </div>
                      <h3>{{ $value['title'] }}</h3>
                      <p>{{ $value['homeDesc'] }}</p>
                    </div>
                  </a>
                </div>
                   
                 <?php
                     } 
                  endforeach 

                 ?>

              </div>
              
            </div>

            <!--  another Part -->
           <!--  <div class="col-md-12 col-lg-3 " >

              <div class="sidebar-box ">
              
              <div class="post-entry-sidebar">

                <ul>
                  <p class="heading" style="color: black">Popular Posts</p>
                  <li>
                    <a href="">
                      <img src=" {{ url('public/images/Youtube-Featured.jpg') }}" alt="YouTube to MP3" class="mr-3">
                      <div class="text">
                        <h4>How to convert Youtube videos  to MP3 </h4>
                        <div class="post-meta">
                          <span class="mr-2">March 15, 2019 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                   <li>
                    <a href="">
                      <img src=" {{ url('public/images/Youtube-Featured.jpg') }}" alt="YouTube to MP3" class="mr-3">
                      <div class="text">
                        <h4>How to convert Youtube videos  to MP3 </h4>
                        <div class="post-meta">
                          <span class="mr-2">March 15, 2019 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                
                  
                </ul>
              </div>
            </div> -->
              
            <!-- </div> -->
            <!-- end of another part -->
          </div>
          
        </div>


      </section>
    
      <!-- END section -->


   <section class=" site-section-home">
        
           

        <div class="container">
         
          <div class="row blog-entries">
            
           
            <div class="col-md-12 col-lg-8 main-content">
              <p> <h3> Blog Categories</h3></p>


              <div class="row">


               
              

                <div class="col-md-3 ">
                  <a href="{{ $app['url']->to('/blog-category-social') }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="public/images/Cate/social-featured.jpg" alt="Image placeholder">
                    
                      <div class="blog-content-body">
                      <div class="post-meta text-center">
                       
                        <!-- <span class="ml-2"><span class="fa fa-eye"></span> 3</span>
                        <span class="mr-2">March 15, 2018 </span> -->
                                               <span class="author mr-2"><img src="public/images/author.png" alt="Infolord"> <span class="category mb-5">Social</span> </span>
                       
                        
                      </div>
                    </div>
                  </a>
                </div>
               

                <div class="col-md-3">
                  <a href="{{ $app['url']->to('/blog-category-trending') }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="public/images/Cate/trending_featured.jpg" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta text-center">
                       
                        <!-- <span class="ml-2"><span class="fa fa-eye"></span> 3</span>
                        <span class="mr-2">March 15, 2018 </span> -->
                        
                        <span class="author mr-2"><img src="public/images/author.png" alt="Infolord"> <span class="category mb-5">Trending</span> </span>
                        
                      </div>
                      
                      
                    </div>
                  </a>
                </div>

                <div class="col-md-3">
                  <a href="{{ $app['url']->to('/blog-category-howto') }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="public/images/Cate/How-to.jpg" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta text-center">
                       
                       <!--  <span class="ml-2"><span class="fa fa-eye"></span> 3</span>
                        <span class="mr-2">March 15, 2018 </span> -->
                        
                        <span class="author mr-2"><img src="public/images/author.png" alt="Infolord"> <span class="category mb-5">How to</span> </span>
                        
                        
                      </div>
                      
                    </div>
                  </a>
                </div>

                <div class="col-md-3 ">
                  <a href="{{ $app['url']->to('/blog-category-freebies') }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="public/images/Cate/Freebies-featured.jpg" alt="Image placeholder">
                    
                      <div class="blog-content-body">
                      <div class="post-meta text-center">
                        
                        <span class="author mr-2"><img src="public/images/author.png" alt="Infolord"> <span class="category mb-5">Freebies</span> </span>
                        
                        <!-- <span class="ml-2"><span class="fa 
                        fa-eye"></span> 3</span>
                        <span class="mr-2">March 15, 2018 </span> -->
                         
                        
                      </div>
                      
                      
                      
                    </div>
                      
                    
                  </a>
                
                </div>
              

               
              </div>
              </div>


               <div class="col-md-12 col-lg-4 " style="border-color: skyblue ; border-width: 3px,3px,3px,3px   " >
                 @include('popularpost')
                 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJCWNMM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
          </div>
              
            <!-- </div> -->
           

            <!-- END main-content -->

         
            <!-- END sidebar -->

          </div>
        </div>
      </section> 
    
 
@endsection

