

@extends('layouts.homeview')
<?php  $data = Config::get('articlesInfo.how-to-save-photo-and-video-from-instagram'); ?>
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
<meta property="article:publisher" content=" someone"> <!-- https://www.facebook.com/NoHumanVerification -->
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
            <!-- <a class="category mb-5" href="#">How to</a> <a class="category mb-5" href="#">Travel</a> -->
            <div class="row mb-5">
              <div class="col-md-12 mb-4">
                <img src="{{ $data['featureImage'] }}" alt="{{ $data['title'] }}" class="img-fluid">
              </div>
             
            </div>
           
            <div class="post-content-body">
           <p>As we Know Instagram doesn’t allow us to share photos and videos to our profile from the desktop site. To post photos and videos on Instagram from pc seems hard because there isn’t any option on desktop site to share our content from PC. Its seems hard but it isn’t.
            </p>
            <p> 
We scroll Instagram daily to see some great looking picture and  sometimes we also wish to save them for our later use.
               Most often we wish to copy them in same resolution as it was uploaded But unfortunately, Instagram doesn’t allow us to save photos and videos directly to our device. 
               <br>
               Below mentioned are the method to save the instagram photo and video directly to your device without any hassle. Just use the method below to save your loved video and picture of instagram.
</p>
<h4>Steps to save photo and video from Instagram to our PC, MAC and Mobile Device.</h4>

<div id="tocs" style="display: block; ">
  
  <h5 class=" text-uppercase text-center " id="tocH">Table of contents  

    <button class="btn btn-info" id="tocShowHide" onclick="javascript:tocShowHide()"> [Hide] </button>
   
  </h5>

  <div id="toc" style="display: block;">

 </div>
</div>

<div id="contents">
  <p>&nbsp</p>
<h4>Clever Desktop Hacks (step by step)</h4>
<p>   This clever desktop hack let you to save your favourite instagram content without using any other third party app at the hightest possible resolution. There is no need to sacrifice the quality of the picture jut proceed the below given  clever hack to successfully save your loved instagram content on your pc or mac .</p>
  <p> <strong>login and Navigate to Instagram photo you want to save using your <b>Chrome browser</b>.</strong></p>

<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_1.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
<p> <br>Select the picture (media) which you're wishing to save.</p>

<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_2.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
  </div>

<p> <br>Press Right click on your desired picture and select Inspect Element from the given options.&nbsp;</p>
    <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_3.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
     </div>  
     <p> <br>Click on  ► div class just above the highlighted line  (Remember you have to click on dropdown horizontal arrow pointing like this  ► div class) the highlighted portion will automatically appear don't be  worried. </p>
         

<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_4.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <p>  <br>

          Once you clicked on arrow you'll find the uploaded image link ( This is the  image link with actual resolution, Right click and select <b>Copy link address</b>.</p>
         <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_5.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
          <p>&nbsp</p>
         <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_6.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
<p> <br>Now once you copied the link address open new tab in browser and paste it and then press enter.</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_7.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
   <p> <br>Now you'll see the image open on your screen just right click on the image and select <b>Save image as</b> .</p>
         <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_8.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <p>&nbsp</p>
         <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_9.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>

<p><br>  Check your download folder or press ctrl+j to see doenloaded media.</p>



 <h4> Using Instagram Downloader.</h4>
 
         
<p>Instagram Downloader is a Online tool to download Instagram videos in 2 simple steps & save Instagram videos to your device. It's free & easy to use.</p>
<h5> Steps to follow Instagram Downloader.</h5>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_21.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
 </div>
<p><br> Navigate to Instagram.com in your browser  and go to your desired image or picture. <b>Right Click on three veriticl  &bullet;</b>.</p>
<p> &nbsp</p>

<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_22.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
 </div>

<p><br> Click on <b>Copy Link</b> from the appeared options and Navigate to dowmloadgram.com in new tab as shown in pictures.</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_23.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
 </div>
 <p>  &nbsp</p>
 <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_24.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
 </div>

<p><br> Paste the intagram media link(copied from copy link option) in given search field of Downloadgram and hit the below download button.</p>

<p> &nbsp</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/how-to-save-photo-and-video-from-instagram/How_to_save_photo_from_Instagram_25.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
 </div>
 <p><br> Wait a sec, a download video/download picture button will appear click on it to save your instagram video and picture on your pc and mobile device.</p>
 <p>  &nbsp</p>
 <H4>Using Screenshots</H4>
 <p>  <br>  The easiest and simple way of saving Instagram picture to your Windows or mac is to take the screenshot.
</p>
  <p> 
 You can used this methdo if size and resolution of picture  doesn’t  matter . For better size and resolution used method (Clever Desktop Tricks & using Chrome extention) .
</p>
<h5> On Windows.</h5>

 <p>  To take screenshot on windows prt scr Key is used in combination with other keys depend upon keyboard type you are using. </p>
 <u>
   <li>By Pressing Prt Scr</li>
   <li>By Pressing Fn + Prt Scr</li>
   <li>By Pressing Alt + Prt Scr</li>
   <li>By Using Snipping tools</li>
 </u>
 <p>  &nbsp</p>

<h5> On Mac.</h5>

 <p>   To take screenshot on your Mac device simply hold Shift+command+3 keys of your Keyboard.
Wait a sec, the  portion of screen will automatically save to your desktop. It will be saves as file name like “Screen shot YYYY-MM-DD at 00:00:00.
 </p>
 

 <p>  &nbsp</p>
 <h4> Final words</h4>


 

 <p>  Above explained method allow you to save any instagram photo video and IGTV video in your pc, mac and android.
</p>
<p> 
Using this method you can save your favourite content of instagram in just a few click. The above ecplained method is Hundred percent legit and successfully ways to save insta photo video and igtv video.
</p>

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
      
                 
    </section>

    <section class="py-5">
    <!-- Related Post -->
    @include('relatedpost')

    </section>
    <script src="public/js/toc.js"></script>
@endsection

