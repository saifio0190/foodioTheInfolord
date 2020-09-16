 <?php  $data = Config::get('articlesInfo'); 


  ?>
 <!--  
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit  ">
                </div>
              </form>
            </div>
            
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="images/person_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>Craig David</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                  <p><a href="#" class="btn btn-info btn-sm rounded">Read my bio</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div> 
            </div> -->
            <!-- END sidebar-box -->  
            <div class="sidebar-box papular-post" >
              <h3 class="heading">Popular Posts</h3>
              <div class="post-entry-sidebar" style="overflow: auto; height: 480px;">
                <ul>
                 <?php foreach ($data  as $key => $value):
                 if ($value['popular'] ==1) {   ?>
                  
              

                  <li>
                    <a href="{{ $value['hostFreeURL'] }}">
                      <img src=" {{ url($value['hostfreeImg'] ) }}" alt="{{ $value['title'] }}" class="mr-3">
                      <div class="text">
                        <h5 style="font-size: 16px;">{{$value['title']}} </h5>
                        <div class="post-meta">
                           <span class="mr-2">{{ $value['published_time'] }}</span>
                          <span class="ml-2"><span class="fa fa-eye"> </span> {{ $value['views']}}</span>
                        </div>
                      </div>
                    </a>
                  </li>
                   
                 <?php
                     } 
                  endforeach 

                 ?>


                 <!--   <li>
                    <a href="{{ $app['url']->to('/safe-youtube-to-mp3') }}">
                      <img src=" {{ url('public/images/Youtube-Featured.jpg') }}" alt="YouTube to MP3" class="mr-3">
                      <div class="text">
                        <h5 style="font-size: 16px;">Safe Youtube to MP3 converter </h5>
                        <div class="post-meta">
                           <span class="mr-2">Mar 15, 2019</span>
                          <span class="ml-2"><span class="fa fa-eye"></span> 3</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{ $app['url']->to('/free-online-gaming-sites') }}">
                      <img src=" {{ url('public/images/Featured.jpg') }}" alt="YouTube to MP3" class="mr-3">
                      <div class="text">
                        <h5 style="font-size: 16px;"> Top 11 Best Free Online Games Sites </h5>
                        <div class="post-meta">
                           <span class="mr-2">Mar 15, 2019</span>
                          <span class="ml-2"><span class="fa fa-eye"></span> 3</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{ $app['url']->to('/how-to-post-on-instagram') }}">
                      <img src=" {{ url('public/images/How-to-post-on-instgram/How_to_Post_on_Instagram_From_Pc.jpg') }}" alt="How to post on Instagram" class="mr-3">
                      <div class="text">
                        <h5 style="font-size: 16px;"> How to post on instagram from PC </h5>
                        <div class="post-meta">
                           <span class="mr-2">Mar 15, 2019</span>
                          <span class="ml-2"><span class="fa fa-eye"></span> 3</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{ $app['url']->to('/best-instagram-captions') }}">
                      <img src=" {{ url('public/images/The80BestInstagramCaptions.jpg') }}" alt="YouTube to MP3" class="mr-3">
                      <div class="text">
                        <h5 style="font-size: 16px;"> The 80 best Instagram Captions. </h5>
                        <div class="post-meta">
                           <span class="mr-2">Mar 15, 2019</span>
                          <span class="ml-2"><span class="fa fa-eye"></span> 3</span>
                        </div>
                      </div>
                    </a>
                  </li>
                   <li>
                    <a href="{{ $app['url']->to('/how-to-take-screenshots') }}">
                      <img src=" {{ url('public/images/SnapshotFeatured.jpg') }}" alt="YouTube to MP3" class="mr-3">
                      <div class="text">
                        <h5 style="font-size: 16px;">How To Take Screenshot in Laptop & PC. </h5>
                        <div class="post-meta">
                           <span class="mr-2">Mar 15, 2019</span>
                          <span class="ml-2"><span class="fa fa-eye"></span> 3</span>
                        </div>
                      </div>
                    </a>
                  </li>
                   <li>
                    <a href="{{ $app['url']->to('/how-to-get-netflix-for-free') }}">
                      <img src=" {{ url('public/images/How_to_get_Netflix_For_Free/netflix-featured.jpg') }}" alt="YouTube to MP3" class="mr-3">
                      <div class="text">
                        <h5 style="font-size: 16px;">How to get Netflix for free (Unlimited). </h5>
                        <div class="post-meta">
                          <span class="mr-2">Mar 15, 2019</span>
                          <span class="ml-2"><span class="fa fa-eye"></span> 7</span>
                        </div>
                      </div>
                    </a>
                  </li> -->
                 
                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->

           <!--  <div class="sidebar-box">
              <h3 class="heading">Blogs</h3>
              <ul class="categories">
                <li><a href="#">Food <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(22)</span></a></li>
                <li><a href="#">Lifestyle <span>(37)</span></a></li>
                <li><a href="#">Business <span>(42)</span></a></li>
                <li><a href="#">Adventure <span>(14)</span></a></li>
              </ul>
            </div> -->
            <!-- END sidebar-box -->

            <!-- <div class="sidebar-box">
              <h3 class="heading">Tags</h3>
              <ul class="tags">
                <li><a href="#">Travel</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Freelancing</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Freelancing</a></li>
              </ul>
            </div> -->