

@extends('layouts.homeview')
<?php  $data = Config::get('articlesInfo.best-instagram-captions'); ?>
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
           <p>As the picture say thousands words, words can enhance a picture by adding a caption to it.</p>
<p>Writing a good captions for your post is like adding a feeling associated with the captured moment.</p>
<p>Instagram post without a caption is like a book without a title, so below are the 100 best instagram caption which will help you to grab a few idea for posting a instagram post with a caption.</p>

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
<h4>Caption For Instagram</h4>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/CaptionForInstagram.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <br> 
<p>"Nice Dream and Ice cream"</p>
<p>"Wake up Blessed not stressed"</p>
<p>"Everything Gonna be super Duper"</p>
<p>"Happiness Looks Gorgeous on You"</p>
<p>"I am never going back, the past is in the past"</p>
<p>"And it looks like I am the Queen"</p>
<p>"I don&rsquo;t need your approval, I have my own"</p>
<p>"I find happiness where the sun shines"</p>
<p>"My smile will make you crazy sweetheart"</p>
<p>"Complication make life worst"</p>
<p>"I blush when they call me with your name"</p>
<p>"Don&rsquo;t know why I love you but I love you"</p>
<p>"My lonely place is wherever you aren&rsquo;t"</p>
<p>"It doesn&rsquo;t matter where I am. I am yours"</p>
<p>"Hating people is cheap, not my material"</p>
<p>"Dreamer, never wake up"</p>
<p>"The only things left is empty feelings and Dark night"</p>
<p>"If karma doesn&rsquo;t hit u, I gladly will."</p>
<p>"Oh darling, go buy a personality"</p>
<p>"Not everyone likes me, not everyone matters"</p>
<br>  

<h4>Caption for Girls</h4>

<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/CaptionforGirls.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <br> 
<p>"I am short, fat and proud of that"</p>
<p>"Don&rsquo;t be a slave of heaven, be the queen of hell"</p>
<p>"Just another lost angel"</p>
<p>"Cute but psycho"</p>
<p>"Don&rsquo;t be a princess, be a queen"</p>
<p>"Be such a good soul that people crave your vibes"</p>
<p>"God is really creative I mean just look at me"</p>
<p>"Life isn&rsquo;t perfect but your outfit can be"</p>
<p>"Don&rsquo;t let today be a waste of makeup"</p>
<p>"Confidence, wear it like make up"</p>
<br>  

<H4>Instagram Captions for boys</H4>

<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/InstagramCaptionsforboys.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
<br>  
         <p>"Boys got swagger, men have style, but gentlemen have class"</p>
<p>"The only time a man should ever lie is to surprise someone"</p>
<p>"People with status don&rsquo;t need status."</p>
<p>"I may be fat, but you&rsquo;re ugly &ndash; I can lose weight!"</p>
<p>"Please don&rsquo;t get confused between my attitude &amp; personality!"</p>
<p>"Excellence is not a skill, It is an attitude."</p>
<p>"Treat me like a game, and I ll show you how its played"</p>
<p>"A man who is master of patience is master of everything else"</p>
<p>"Attitude is everything, so pick up a good one"</p>
<p>"A naughty thought a day keeps the stress away."</p>
<br>  

<H4>Instagram caption for friends</H4>


<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/Instagramcaptionforfriends.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <br> 
<p>"Friends are like stars, constantly coming and going, but the ones that stay burn as bright as the sun"</p>
<p>"I would never let my best friend do anything stupid&hellip;alone"</p>
<p>"You are my sunshine on rainy day"</p>
<p>"Making memories with you is my favorite thing to do"</p>
<p>"Always better together"</p>
<p>"Love is beautiful, friendships is better"</p>
<p>"A sweet friendship refreshes the soul"</p>
<p>"A friend is a second self"</p>
<p>"Friends who slay together, stay together"</p>
<p>"Friendship isn't a big thing. It's a million little things."</p>
<br>  

<H4>FOOD CAPTION for Instagram</H4>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/FOODCAPTIONforInstagram.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <br> 

<p>"Good Food is Good Mood"</p>
<p>"Do You Believe in love at first bite"</p>
<p>"The Longer the Noodle the louder the slurp"</p>
<p>"Food Its always a good idea"</p>
<p>"According to serving sizes I am family of four"</p>
<p>"Food time is the best time"</p>
<p>"You can&rsquo;t live a full life on an empty stomach"</p>
<p>"I'm on a seafood diet. I see food and I eat it.""</p>
<p>""Did you say exercise? Or extra fries?""</p>
<p>"Food before dudes"</p>
<br>  

<H4>Couple instagram caption</H4>

<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/Coupleinstagramcaption.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <br> 
<p>"Your hand fits in mine like its made just for me"</p>
<p>"You and me make a wonderful &ldquo;WE&rdquo;"</p>
<p>"When the angels ask what I most loved about life, I'll say you."</p>
<p>"&ldquo;I love everything there is to love about you.&rdquo;"</p>
<p>"Some kisses are given with eyes "</p>
<p>"I m never gonna stop falling in love with you"</p>
<p>"When I count my blessings, I count you twice"</p>
<p>"Youre not my number one, you re my only one"</p>
<p>"I let you in my world, then you became it"</p>
<p>"Im looking at you and my heart loves the views"</p>
<br>  

<H4>Birthday caption</H4>
<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/BirthdaycaptionforInstagram.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <br> 

         <p>"On This day a Queen was Born"</p>
<p>"Blessed to see another year"</p>
<p>"I don&rsquo;t get older I level up"</p>
<p>"O this day, the sweetest being on earth was born"</p>
<p>"Gonna Party Like its my Birthday cause it is!!!"</p>
<p>"I hope your birthday is as special as you are"</p>
<p>"The day is all yours &mdash; have fun!"</p>
<p>"Wishing you the biggest slice of happy today."</p>
<p>"Your birthday is the perfect time to remind you what a wonderful person you are."</p>
<p>"Most things don&rsquo;t get better with age. Except you."</p>
<br>  

<H4>short Instagram caption</H4>

<div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/shortInstagramcaption.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <br> 
 <p>"trust the vibes"</p>
<p>"Smiling &amp; dreaming"</p>
<p>"sweeter than honey"</p>
<p>"I decide my vibe"</p>
<p>"Today&rsquo;s perfect"</p>
<p>"Better together"</p>
<p>"You&rsquo;re my happy place"</p>
<p>"Happy mind happy life"</p>
<p>"You re just my type"</p>
<p>"Just livin&rsquo; my life"</p>
<br>  

<H4>One word instagram caption</H4>
         <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/Onewordinstagramcaption.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <!-- <span class="ml-2"><span class="fa fa-copyright"></span> Big Fish Games</span> -->
                </div>
             </div>
         </div>
         <br> 

         <p>"Starlight"</p>
<p>"Sunkissed"</p>
<p>"Carefree"</p>
<p>"Wild world"</p>
<p>"Peachy"</p>
<p>"Focused"</p>
<p>"Lucky"</p>
<p>"Hoping"</p>
<p>"Wishing"</p>
<p>"Lost"</p>
    <br>        

<H4>Final words </H4>
<p>Add these 100 best instagram caption to your insta posts to express your &nbsp;enjoying moments better.</p>
<p>You can also use the above best insta captions while posting any captured moments, Or sharing joyful occasions with your friends, beloved one to make them feel special.</p>

<p>The best 80 instagram caption you should use while adding post to your instagram profile</p>
</div>



          @include('sharepost')
 <!-- <div class="row mb-5">
              <div class="col-md-12 mb-4">
                <img src="images/img_7.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="col-md-6 mb-4">
                <img src="images/img_9.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="col-md-6 mb-4">
                <img src="images/img_11.jpg" alt="Image placeholder" class="img-fluid">
              </div>
            </div> -->
            
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

