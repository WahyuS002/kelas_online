@extends('layouts.backend')

@section('content')
<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="st_title"><i class="uil uil-apps"></i> Student Dashboard</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card_dash">
                    <div class="card_dash_left">
                        <h5>Total Purchased Courses</h5>
                        <h2>15</h2>
                        <span class="crdbg_3">New 5</span>
                    </div>
                    <div class="card_dash_right">
                        <img src="images/dashboard/online-course.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card_dash">
                    <div class="card_dash_left">
                        <h5>Total Instrutors Subscribing</h5>
                        <h2>45</h2>
                        <span class="crdbg_4">New 3</span>
                    </div>
                    <div class="card_dash_right">
                        <img src="images/dashboard/knowledge.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="section3125 mt-50">
                    <h4 class="item_title">News</h4>
                    <div class="la5lo1">
                        <div class="owl-carousel edututs_news owl-theme">
                            <div class="item">
                                <div class="fcrse_1">
                                    <a href="#" class="fcrse_img">
                                        <img src="images/courses/news-1.jpg" alt="">
                                    </a>
                                    <div class="fcrse_content">
                                        <a href="#" class="crsedt145 mt-15">COVID-19 Updates & Resources</a>
                                        <p class="news_des45">See the latest updates to coronavirus-related content, including changes to monetization, and access new Creator support resources</p>
                                        <div class="auth1lnkprce">
                                            <a href="#" class="cr1fot50">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_1">
                                    <a href="#" class="fcrse_img">
                                        <img src="images/courses/news-2.jpg" alt="">
                                    </a>
                                    <div class="fcrse_content">
                                        <a href="#" class="crsedt145 mt-15">Watch: Edututs+ interview Mr. Joginder</a>
                                        <p class="news_des45">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac eleifend ante. Duis ac pulvinar felis. Sed a nibh ligula. Mauris eget tortor id mauris tristique accumsan.</p>
                                        <div class="auth1lnkprce">
                                            <a href="#" class="cr1fot50">Watch Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_1">
                                    <a href="#" class="fcrse_img">
                                        <img src="images/courses/news-1.jpg" alt="">
                                    </a>
                                    <div class="fcrse_content">
                                        <a href="#" class="crsedt145 mt-15">COVID-19 Updates - April 7</a>
                                        <p class="news_des45">Ut porttitor mi vel orci cursus, nec elementum neque malesuada. Phasellus imperdiet quam gravida pharetra aliquet. Integer vel ligula eget nisl dignissim hendrerit.</p>
                                        <div class="auth1lnkprce">
                                            <a href="#" class="cr1fot50">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="section3125 mt-50">
                    <h4 class="item_title">What's new in Edututs+</h4>
                    <div class="la5lo1">
                        <div class="fcrse_1">
                            <div class="fcrse_content">
                                <a href="#" class="new_links10">Improved performance on Studio Dashboard</a>
                                <a href="#" class="new_links10">See more Dashboard updates</a>
                                <a href="#" class="new_links10">See issues-at-glance for Live</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection