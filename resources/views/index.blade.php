 @include('front_web.header')
    <!-- ##### Vizew Post Area Start ##### -->
    <section class="vizew-post-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="all-posts-area">
                        <!-- Section Heading -->
                        <div class="section-heading style-2">
                            <h4>Featured Videos</h4>
                            <div class="line"></div>
                        </div>

                        <!-- Featured Post Slides -->
                        <div class="featured-post-slides owl-carousel mb-30">
                            <!-- Single Feature Post -->
                            @foreach($posts as $post)
                            <div class="single-feature-post video-post bg-img" style="background-image: url({{asset($post->featured)}});">
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata">{{$post->Category->name}}</a>
                                    <a href="{{route('single_post',['slug'=>$post->id])}}" class="post-title">{{$post->title}}</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row">
                            @foreach($posts_without_3 as $pw)
                            <!-- Single Blog Post -->
                            <div class="col-12 col-md-6">
                                <div class="single-post-area mb-80">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{asset($pw->featured)}}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-cata cata-sm cata-danger">{{$pw->category->name}}</a>
                                        <a href="single-post.html" class="post-title">{{$pw->title}}</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <!-- Section Heading -->
                                <div class="section-heading style-2">
                                    <h4>{{$cook_posts->name}}</h4>
                                    <div class="line"></div>
                                </div>

                                <!-- Sports Video Slides -->
                                <div class="sport-video-slides owl-carousel mb-50">
                                    @foreach($cook_posts->posts->take(2) as $catepost)
                                    <!-- Single Blog Post -->
                                    <div class="single-post-area">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="{{asset($catepost->featured)}}" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="post-cata cata-sm cata-success">{{$catepost->category->name}}</a>
                                            <a href="single-post.html" class="post-title">{{$catepost->title}}</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <!-- Section Heading -->
                                <div class="section-heading style-2">
                                    <h4>{{$medical_posts->name}}</h4>
                                    <div class="line"></div>
                                </div>
                                <!-- medical_posts Slides -->
                                <div class="business-video-slides owl-carousel mb-50">
                                     @foreach($medical_posts->posts->take(2) as $medical_post)
                                    <!-- Single Blog Post -->
                                    <div class="single-post-area">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="{{$medical_post->featured}}" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="post-cata cata-sm cata-primary">{{$medical_post->category->name}}</a>
                                            <a href="single-post.html" class="post-title">{{$medical_post->title}}</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @foreach($latest_posts as $laposts)
                        <!-- Single Post Area -->
                        <div class="single-post-area mb-30">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{$laposts->featured}}" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        <a href="#" class="post-cata cata-sm cata-danger">{{$laposts->category->name}}</a>
                                        <a href="single-post.html" class="post-title mb-2">{{$laposts->title}}</a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-author">By Jane</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#" class="post-date">Sep 08, 2018</a>
                                        </div>
                                        <p class="mb-2">{{substr($laposts->content,0,100)}}</p>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget followers-widget mb-50">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
                            <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>{{$wike_posts->name}}</h4>
                                <div class="line"></div>
                            </div>
                            @foreach($wike_posts->posts->take(1) as $w_post)
                            <!-- Single Blog Post -->
                            <div class="single-post-area mb-30">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{$w_post->featured}}" alt="">
                                </div>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata cata-sm cata-success">{{$w_post->category->name}}</a>
                                    <a href="single-post.html" class="post-title">{{$w_post->title}}</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                             @foreach($wike_posts2 as $w_post2)
                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="{{$w_post2->featured}}" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">{{$w_post2->title}}</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 29</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 08</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 23</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget add-widget mb-50">
                            <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                        </div>
                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget newsletter-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Newsletter</h4>
                                <div class="line"></div>
                            </div>
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                            <!-- Newsletter Form -->
                            <div class="newsletter-form">
                                <form action="#" method="post">
                                    <input type="email" name="nl-email" class="form-control mb-15" id="emailnl" placeholder="Enter your email">
                                    <button type="submit" class="btn vizew-btn w-100">Subscribe</button>
                                </form>
                            </div>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>{{$islamic_posts->name}}</h4>
                                <div class="line"></div>
                            </div>
                            @foreach($islamic_posts->posts->take(1) as $islamic_post)
                            <!-- Single Blog Post -->
                            <div class="single-post-area mb-30">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{$islamic_post->featured}}" alt="">
                                </div>

                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="post-cata cata-sm cata-success">{{$islamic_post->category->name}}</a>
                                    <a href="single-post.html" class="post-title">{{$islamic_post->title}}</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                             @foreach($islamic_posts2 as $islamic_post2)
                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="{{$islamic_post2->featured}}" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">{{$islamic_post2->title}}</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 29</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 08</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 23</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Vizew Psot Area End ##### -->
    @include('front_web.footer')