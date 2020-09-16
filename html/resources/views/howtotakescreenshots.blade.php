

@extends('layouts.homeview')
<?php  $data = Config::get('articlesInfo.how-to-take-screenshots'); ?>
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
           <p>The screenshot is also called as &lsquo;Print screen&rsquo;. If you want to capture the picture of your monitor then you have to take a screenshot of your screen below explained are the three ways to take a screenshot on Laptop & PC in windows machines.</p>
<h4>Ways to Take Screenshot on Windows </h4>

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
	<p>&nbsp</p>
<h4>By Pressing prt sc keys of your Keyboard</h4>


<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/sanpshot11.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
<p> <br>By pressing the &ldquo;prt scr&rdquo; key which is on the right top side of your keyboard copy&rsquo;s your screen which you&rsquo;re seeing on your monitor.</p>
<p>After that open your paint app and press ctrl+v keys to paste the copied screen in your paint.</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/sanpshot12.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
<p> <br>Once your copied screen successfully pasted on paint then you can save your file as per your choice format like PNG, JPEG, BMP, GIF.&nbsp;</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/sanpshot13.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <p>&nbsp</p>
<h4>By pressing Fn+prt scr sc keys</h4>
<p><b>Fn Key</b>&nbsp;functions &nbsp;like a Shift&nbsp;<b>key</b>&nbsp;and its sound like a keyboard modifier&nbsp;<b>key</b>&nbsp;that works to activate a second function on a dual-purpose&nbsp;<b>key</b>. Commonly found on laptop keyboards.</p>
<p>Some machines have Prt Scr as second function that is exactly where comes the use of <b>Fn key, </b>You need to press<b> Fn + PrtScr .</b></p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/fnplusPrtScr.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
<p> <br>Once you have done with above i.e. Pressing <b>Fn + Prt Scr </b>together<b> open Paint </b>or any desired Photo viewer application <b>, paste is by pressing ctrl + v .</b></p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/sanpshot12.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <p>&nbsp</p>
<h4>By pressing alt+prt scr keys</h4>
<p>For taking a screenshot of your windows screen directly press windows keys + prt sc keys of your keyboard.</p>
<p>&nbsp;Remember, first press window key and hold it after that press prt sc keys.</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/sanpshot14.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
<p>This will directly save the image of your screen in your pc folder.</p>
<p>This PC &gt; Pictures&gt; Screenshot.</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/sanpshot15.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <p>&nbsp</p>
<h4>By Using Snipping Tool app</h4>
<p>Sometime you wish not to take the screenshot of your full screen as the whole screen covers many unwanted things like taskbar, another opened window in background then snipping will help to eliminate the process get you exactly what you wish to select, hence its eliminates the image croping time.</p> 
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/sanpshot16.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <p>&nbsp</p>
         <p>Press window button and search for snip, You'll get snipping tool open it, click on new.</p>
         <p>&nbsp</p>
         <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/sanpshot17.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <p>&nbsp</p>
         
<p>After that select the portion which you want as an image format.</p>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/sanpshot18.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <p>&nbsp</p>
<p>Then click on file at the upper left side and select save.</p>
</div>
 
          @include('sharepost')
            
            </div>

            
          <!--   <div class="pt-5">
              <p>Categories:  <a href="#">Food</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
            </div> -->


          <!--   <div class="pt-5">
              <h3 class="mb-5">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard">
                    <img src="images/author.png" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard">
                    <img src="images/author.png" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard">
                        <img src="images/author.png" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply rounded">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard">
                            <img src="images/author.png" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply rounded">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard">
                                  <img src="images/author.png" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>Jean Doe</h3>
                                  <div class="meta">January 9, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard">
                    <img src="images/author.png" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>
                </li>
              </ul>
              
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div> -->

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

