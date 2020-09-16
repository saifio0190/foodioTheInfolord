@extends('layouts.homeview')
<?php  $data = Config::get('articlesInfo.free-online-movie-streaming-sites'); ?>
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
<meta property="article:publisher" content=" https://www.facebook.com/saifio1994"> 
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
           <p> Streaming<strong> free movies online</strong> right through the place of your comfort zone feels great and it is much more enjoyable.</p>
<p>In a busy scheduled world, the need for entertainment has been increased and even we don&rsquo;t have enough time and money to go out for a movie.</p>
<p>So in this hectic world, the need for entertainment is essential and a good movie can refresh our mood as well as make our day better.</p>
<p>Well streaming <strong>free best movies online</strong> can make our day better.</p>
<p>These websites are safe for our computer and legal to use and even don&rsquo;t require any downloading. You can <strong>stream movies without downloading</strong>  them.</p>
<p>Finding a full-length movie is also a big deal but this website provides you a full-length movie from start to end with some commercial interruptions.</p>
<p><h3>List of top 14 Best free online movie streaming sites.</h3></p>
<div id="tocs" style="display: block; ">
  
  <h5 class=" text-uppercase text-center " id="tocH">Table of contents  

    <button class="btn btn-info" id="tocShowHide" onclick="javascript:tocShowHide()"> [Hide] </button>
   
  </h5>

  <div id="toc" style="display: block;">

 </div>
</div>

<p>Here listed below are plenty of <strong> Best free online movie streaming sites. </strong>&nbsp; All you need to stream movies for free is just an internet connection in your Device.</p>

<div id="contents">
<h4>Sony crackle   </h4>

           <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="https://www.sonycrackle.com/">
                <img src="{{ url('public/images/crackle.jpg') }}" alt="Image placeholder" class="img-fluid">
                </a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> Sony Crackle</span>
                </div>
             </div>
         </div>
<p>In the list of best free movie online website sony crackle is one of the best websites to watch <strong> free movies online </strong>because it is a platform of Sony Pictures Entertainment which consists of an original content library.</p>
<p>This means that they offer thousands of <strong>free full-length movies with High quality for free</strong> with some commercial ads between the movies.</p>
<p>But we don&rsquo;t have to watch a long adds during the streaming free feature-length movie, they are short and are only a few commercial ads.</p>
<p>These high-quality movies give us a similar feel of cinema no matter wherever we watch the movies or whatever size of monitor or screen we have we get the best quality movie streaming features.</p>
<p>Sony Crackle is available at 21 countries and in three languages but because of VPN ( Virtual Private Network), we can access Sony crackle from any country we live in.</p>
 <h4>HDO movies</h4 >

                       
     <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <img src="{{ url('public/images/HDonline.jpg') }}" alt="Image placeholder" class="img-fluid">
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> HDO</span>
                </div>
             </div>
         </div>                    
            

<p>HDO movies have a massive database of free movies and TV series where you can watch movies without any sign-up process.</p>
<p>You can stream a full-length movie according to the genre, country, latest movies, most view, IMBD rated with the best quality.</p>
<p>Here you can also stream Hindi, Tollywood, Bollywood, all kinds of movies for free.</p>

<p>&nbsp;<h4>Popcornflix</h4></p>
       <div class="row mb-5 post-images">
                      <div class="col-md-12 mb-4 text-center">
                        <a href="https://www.popcornflix.com/">
                <img src="{{ url('public/images/popcornflix.jpg') }}" alt="Image placeholder" class="img-fluid"> 
              </a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> Popcornflix </span>
                </div>
             </div>
         </div>  

<p>If you are a movie lover then Popcornflix is the best place to visit for watching the latest films online because they keep adding new movies regularly.</p>
<p>Popcornflix has nearly about 1500 movies of each genre like romance, action, family, comedy, drama, horror and many more.</p>
<p>They feature full-length independent movies and here you can also stream web series and film school.</p>
<p>They also have the best thing that you don&rsquo;t need an account and there is no need to sign up to stream a movie.</p>
<p>Just hit the play button and enjoy your favorite movies without any signup.</p>

<p> <h4>Snagfilm </h4></p>
 <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="https://www.snagfilms.com/">
                <img src="{{ url('public/images/Snagfilm.jpg') }}" alt="Image placeholder" class="img-fluid">
                </a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> Snagfilm</span>
                </div>
             </div>
         </div>  

<p>Sangfilm is another best website that offers  <strong>free movies online </strong> like, Documentary, independent films, and tv shows.</p>
<p>The best things are that they have a library of over 5000 films which can browse by genre or you can search by title.</p>
<p>However, Snagfilm doesn&rsquo;t have lots of commercial films in it and even the latest film. But if you are a lover of documentaries and biographies movie then Snagfilm is the best option for you.</p>
<p>For streaming a movie you have to sign in it via google+ facebook and twitter. You can also stream a movie through a smartphone because the SnagFilm app is also available on the store of Android and IOS.</p>

<p><h4>Yo Movies</h4></p>
 <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="https://www.yomovies.co.in/">
                <img src="{{ url('public/images/yomovies.jpg') }}" alt="Image placeholder" class="img-fluid">
                </a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> Yo Movies</span>
                </div>
             </div>
         </div>  
<p>Yo movies provide every kind of movie you want streams like Bollywood, Hollywood Hindi Dubbed, Hollywood, Tollywood movies, tv-series and many more.</p>
<p>while you visit the yo movies you will see lots of tabs on the websites where you will get genre like Bollywood, most rating, top IMDB, most viewed, New movies.</p>
<p>The best part of this website is that you can watch online movies without paying any cost with lots of genres available.</p>

<p> <h4> Tubi Tv </h4></p>
 <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="https://tubitv.com/">
                <img src="{{ url('public/images/Tubitv.jpg') }}" alt="Image placeholder" class="img-fluid">
                </a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span>Tubi Tv</span>
                </div>
             </div>
         </div>  

<p>Here Tubi Tv is also one of the most beautiful free online movies streaming sites</p>
<p>You can watch here thousands of movies and tv series absolutely for free including new release and Anime TV series which is not available on other popular subscription video apps.</p>
<p>Tubi also provides to its user adds free HD shows and movies every week so, you 'll never run out of entertainment on the weekend.</p>
<p>You can also browse as per you&rsquo;re your favorite genres like drama comedy action horror anime, etc.</p>

<p><h4>Top documentary film</h4></p>
 <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="https://topdocumentaryfilms.com/">
                <img src="{{ url('public/images/Top_Documentary_Films_.jpg') }}" alt="Image placeholder" class="img-fluid">
                </a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> Top documentary film</span>
                </div>
             </div>
         </div>  
<p>As the name indicate the website is for the one who is a lover of watching a documentary film.</p>
<p>They have more than 3000 documentaries movies most of them with full length and have around 1.5 million monthly visitors on their sites.</p>
<p>You can find the documentary movies with categories like Technology, sports, Science, Religion, Psychology, politics, history, health, Environment, crime and many more. Where lots of movies are in high quality and in which most of them are with zero advertisements.</p>
<p>If you want to know about the new documentary release you can sign up for getting emails alerts</p>

<p>&nbsp; <h4> Con TV </h4></p>
 <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="https://www.contv.com/">
                <img src="{{ url('public/images/contv.jpg') }}" alt="Image placeholder" class="img-fluid">
                </a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> Con TV</span>
                </div>
             </div>
         </div>  
<p>&nbsp;Con TV is one of the best online movie watching websites for anime lovers. Here you will find movies like anime, fantasy, gaming, grindhouse, horror, sci-fi, and many more.</p>
<p>They have a collection of over 12000 movies including Popular rare and tv series. You can search a movie by genre or by title to get what exactly you want to watch.</p>
<p>You can also pick up the movie by latest addition, most viewed, rating, staff picks and much. There is no need to sign up required for streaming your favorite movie.</p>
<p>Viewster is available in 120 countries with language filter like English, French, German, and Spanish.</p>
<p>They also offer free Android and IOS apps. It has over 10M downloads on android and has a monthly 40 million visitors on a website.</p>

<p> <h4>Classic Cinema Online </h4></p>
 <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="http://www.classiccinemaonline.com/">
                <img src="{{ url('public/images/ClassicCinema.jpg') }}" alt="Image placeholder" class="img-fluid"></a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> Classic Cinema</span>
                </div>
             </div>
         </div>  
<p>Classic cinema online is only for those who are a lover of old classic movies and a silent movie. If you are the one who loves to watch a classic movie then it is the best place for you.</p>
<p>They have a classic collection of silent and old movies like Change of habit, scrooge, love story, etc with stars like Elizabeth Taylor, Lucille Ball, John Wayne, and Rock Hudson.</p>
<p>You can also stream a movie by genres like Documentary, Drama Sci-Fi, Musical, Horror sci-fi, etc, etc.</p>

<p> <h4>Retrovision</h4></p>
 <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="https://retrovision.tv/">
                <img src="{{ url('public/images/retrovision.jpg') }}" alt="Image placeholder" class="img-fluid"></a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> Retrovision</span>
                </div>
             </div>
         </div>  
<p>Retrovision is another site having a collection of classic movies like classic cinema online.</p>
<p>Here you can stream a free movie online like ADVENTURE COMEDY CLASSIC Tv CARTOONS CRIME DRAMA HORROR SCI-FI WESTERNS WAR.</p>
<p>You can also search a movie by genre or by the alphabetized list which they have on their home page.</p>
<p>With free classic movies like So this is Washington, For You I Die, etc you can also stream your favorite classic tv show like one step beyond, bonanza, bob steel and lot.</p>
<p><h4>MX Player</h4></p>
 <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="https://www.mxplayer.in/">
                <img src="{{ url('public/images/MX_player.jpg') }}" alt="Image placeholder" class="img-fluid">
                </a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> MX Player</span>
                </div>
             </div>
         </div>  
<p>MX Player is a video player apps available for Android And IOS. But in its video section, there are lots of free Hindi movies, web series are available to stream for free to its user.</p>
<p>It is best suited for Hindi movies lover. the genre like Hollywood action in Hindi, best of the south in Hindi, horror movies in Hindi, Bollywood Rewind, Romantic movies and much.</p>
<p>But it's only available in Hindi if love Hindi movies then it the best apps for you to stream lots of free Hindi movies online. You don&rsquo;t have to sign up or even don&rsquo;t have to pay any cost.</p>
<p>The apps have 500 million global users and 350 million Indian users.</p>
<p><h4>Hotstar</h4></p>

<div class="row mb-5">
              <div class="col-md-12 mb-4">
                <a href="https://www.hotstar.com/in">
                <img src="{{ url('public/images/hotstar.jpg') }}" alt="Image placeholder" class="img-fluid"></a>
              </div>
             
            </div>
<p>Hotstar is one of the best streaming websites in India. If you love watching Hindi movies, Tv series then it is the website for you. Hotstar also offers live sports for the sports lover. But only available in India and neighboring countries. You can use their service by using VPN</p>
<p>Not only Hindi also contains a library of free English movies. One more best thing about this site is that you don&rsquo;t need to sign up to stream free movies.</p>
<p>If you are from India or a Hindi movie fan then you can access Hotstar service for streaming free Hindi movies online. You can stream free Tamil, Telugu, Bengali, Gujarati movies too.</p>
<p>But you cant stream all the movies for free if you want then you have to buy its premium subscription for unlimited entertainment which is available in INR299 per month and INR999 per year.</p>

<p><h4>VUDU</h4></p>
       <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="https://www.vudu.com/">
                <img src="{{ url('public/images/vudu-logo.jpg') }}" alt="Image placeholder" class="img-fluid">
                </a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> VUDU</span>
                </div>
             </div>
         </div>

<p>Vudu might not be our first option for sites for streaming movies online but there are thousands of movie which is available on Vudu for free like shutter island, Gravity, Stuart little, Hercules, last man standing and many more.</p>
<p>But the thing is you have to go through the commercial adds to watch full movies.</p>
<p>The all free movie available on its free page with genre like New This Week, Popular movies, Not on Netflix.</p>
<p>Here you will get all the movies with adds to watch for the free. You can have Vudu on IOS, Android, and Microsoft too.</p>

<p><h4>Yidio</h4></p>
 <div class="row mb-5 post-images">
              <div class="col-md-12 mb-4 text-center">
                <a href="https://www.yidio.com/">
                <img src="{{ url('public/images/Yidio.jpg') }}" alt="Image placeholder" class="img-fluid">
                </a>
                <div class="post-meta">
                <span class="ml-2"><span class="fa fa-copyright"></span> Yidio</span>
                </div>
             </div>
         </div>  
<p>Yidio is not a movie streaming site but instead, they direct the user where you can watch free movies according to categories.</p>
<p>Yidio movies are in DVD quality which is not suitable for the big screen. But a perfect quality to watch a movie in Apple or Android device.</p>
<p>Here you can find all your tv shows and movies in one place. They also provide an update about new movies, series and other content to its user.&nbsp;</p>
<p>So the Yidio is a website that guides us better where to watch our favorite movies for free according to the genre like animation classics musical family suspense and many more.</p>

<p><h4>Final Words</h4></p>

<p>This list of 14 best free online movie streaming sites where you can watch your favorite movies like Hollywood Movies, Bollywood Movies, Documentaries Movies, Web Series and much more with no hassle.</p>
<p>We have shared list of free online movie streaming sites where you can watch a full-length movie with just some commercial add. These add are provided to give a free service to its users so be free to stream a movie.</p> 

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
                    <img src="images/person_1.jpg" alt="Image placeholder">
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
                    <img src="images/person_1.jpg" alt="Image placeholder">
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
                        <img src="images/person_1.jpg" alt="Image placeholder">
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
                            <img src="images/person_1.jpg" alt="Image placeholder">
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
                                  <img src="images/person_1.jpg" alt="Image placeholder">
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
                    <img src="images/person_1.jpg" alt="Image placeholder">
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
           <!--  Popular posts -->
           @include('popularpost')
          </div>
          <!-- END sidebar -->

        </div>
      </div>
      <!--  <div class="row">
          <div class="col-md-12 col-lg-8">
            
          </div>
        </div>
                 <div class="row">
                  <div class="col-md-12 col-lg-1"> 
                  </div> 
                  <div class="col-md-12 col-lg-7" style="text-align: center; border-style: dashed;"> 
                   
              
                    <a href="#" class="p-2">   <span class="fa fa-share-alt" style="font-weight: bolder;"></span></a> 
                    <a href="" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="" class="p-2"><span class="fa fa-youtube-play"></span></a>
                    
                  
                  </div>

                  <div class="col-md-12 col-lg-4"> 
                    
                    </div>
                   </div> -->
                 
    </section>

    <section class="py-5">
      
    <!-- Related Post -->
    @include('relatedpost')


    </section>
    <script src="public/js/toc.js"></script>
@endsection

