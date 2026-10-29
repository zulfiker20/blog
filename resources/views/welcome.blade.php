 @extends('front.layouts.app')

 @section('title')
     Home
 @endsection

 @section('content')
 
 <!-- ======================= slider section  ============================ -->
    <div class="slider_section bg-white overflow-hidden pt-4 pb-4">
        <div class="container">
            <div class="row g-4">
                <!-- Left side large banner -->
                <div class="col-lg-8">
                    <a href="your-link-here" class="banner">
                        <div class="banner-left">
                            <img src="https://blog.bikroy.com/en/wp-content/uploads/2024/09/Blog-Size-Biraat-Haat-Winner-780x470.jpg" class="img-fluid w-100" alt="Main Banner">
                            <div class="banner-content">
                                <h2>Birat Haat 2024 Contest Winners Announced by Bikroy and Minister</h2>
                                <p>Bikroy, a leading online platform for livestock trading in Bangladesh, hosted the winners' announcement ceremony...</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Right side small banners -->
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <a href="your-link-here" class="banner">
                                <div class="banner-small">
                                    <img src="https://blog.bikroy.com/en/wp-content/uploads/2024/08/Ad-Boost-Blog-780x470-1.png" class="img-fluid w-100" alt="Small Banner 1">
                                    <div class="banner-content">
                                        <h3>Boost Your Ads for Better Results with Bikroy's Latest Feature</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="your-link-here" class="banner">
                                <div class="banner-small">
                                    <img src="https://blog.bikroy.com/en/wp-content/uploads/2024/08/Ad-Boost-Blog-780x470-1.png" class="img-fluid w-100" alt="Small Banner 2">
                                    <div class="banner-content">
                                        <h3>Introducing the Amazing "Saved Search" Feature on Bikroy</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ======================= slider End  ============================ -->
     <!-- banner advertisement start -->
     <div class="blog_section bg-white overflow-hidden pt-4 pb-4">
        <div class="container">
        <div class="row g-4">
            <div class="col-12 mt-0">
                <a href="#">
                <div class="ad-banner">
                    <img src="{{ asset('front/assets/images/banner.png') }}" alt="Advertisement" class="ad-image">
                    </div>
                </a>
        </div>
     </div>
    </div>
     
     <!-- banner advertisement end -->
    <!-- ======================= Blog Start  ============================ -->
    <div class="blog_section bg-white overflow-hidden pt-4 pb-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 order-xl-2">
                    <div class="blog_sidebar">
                        <div class="p-3 p-xl-4 border rounded">
                            <div class="card_header mb-4">
                                <h3>Categories</h3>
                            </div>
                            <div class="categories_list">
                                <ul>
                                    <li><a href="#">Technology (1)</a></li>
                                    <li><a href="#">Health & Wellness (1)</a></li>
                                    <li><a href="#">Travel (1)</a></li>
                                    <li><a href="#">Food & Recipes (1)</a></li>
                                    <li><a href="#">Lifestyle (1)</a></li>
                                    <li><a href="#">Finance (1)</a></li>
                                    <li><a href="#">Education (1)</a></li>
                                    <li><a href="#">Entertainment (1)</a></li>
                                    <li><a href="#">Sports (1)</a></li>
                                    <li><a href="#">Fashion (1)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-3 p-xl-4 border rounded mt-2">
                            <div class="card_header mb-4">
                                <h3>Latest Posts</h3>
                            </div>
                            <div class="latestpost_list">
                                <ul>
                                    <li><a href="#">BMW car price updated 2024</a></li>
                                    <li><a href="#">BMW ECU Cloning</a></li>
                                    <li><a href="#">ECU Remaping of Toyota</a></li>
                                    <li><a href="#">BMW car price updated 2024</a></li>
                                    <li><a href="#">BMW ECU Cloning</a></li>
                                    <li><a href="#">ECU Remaping of Toyota</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 order-xl-1">
                    <div class="blog_wrapper">
                        <div class="row gy-4">
                            <!-- blog post -->
                            <div class="col-md-6">
                                <div class="blog_post p-3 p-lg-4 card h-100 bg-transparent shadow-sm border-opacity-10">
                                    <div class="blog_img mb-4 position-relative">
                                        <a href="details.html">
                                            <img class="img-fluid rounded z-3" src="{{ asset('front/assets/images/blog/car.jpg') }}" alt="Health & Wellness">
                                        </a>
                                    </div>
                                    <div class="blog_content card-body p-0">
                                        <div class="short_info d-sm-flex align-items-center mb-3">
                                            <div class="mb-2 mb-sm-0 me-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon me-1">
                                                        <img src="{{ asset('front/assets/images/tag.svg') }}" alt="Tag">
                                                    </div>
                                                    <div class="date"><span>Health & Wellness</span></div>
                                                </div>
                                            </div>
                                            <div class="mb-2 mb-sm-0 me-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon me-1">
                                                        <img src="{{ asset('front/assets/images/calendar.svg') }}" alt="Date">
                                                    </div>
                                                    <div class="date"><span>20 Nov, 2024</span></div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon me-1">
                                                        <img src="{{ asset('front/assets/images/eye.svg') }}" alt="View">
                                                    </div>
                                                    <div class="date"><span>1297</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="mb-3">
                                            <a href="details.html">Exploring Italy with the Top Premium Car Rental
                                                Services</a>
                                        </h3>
                                        <div class="blog_desc mb-2">
                                            When it comes to experiencing the beauty and charm of Italy, there's no
                                            better way to explore its pi...
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-footer mt-2 bg-transparent border-0 blog_content p-0">
                                        <a class="learn_more" href="details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- blog post -->
                        </div>
                        <div class="btn-readmore mt-5 text-center">
                            <a class="readmoreanhr btn btn-primary" href="details.html">See More Post</a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <!-- ======================= Blog End  ============================ -->
    @endsection