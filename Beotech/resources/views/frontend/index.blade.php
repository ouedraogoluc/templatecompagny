@extends('frontend.main_master')
@section('content')
@section('title')
BeoTech
@endsection

<section class="about-section-two">
    <div class="auto-container">
        <div class="row clearfix">
            @php
            $about = App\Models\Propos::find(1);
            $whychooseus = App\Models\Whychooseuser::find(1);
             @endphp
            <!--Column-->
            <div class="column col-lg-7 col-md-12 col-sm-12">
                <div class="about-content-box">
                    <div class="sec-title">
                        <h2>{{$about->title}}</h2>
                    </div>
                    <h4><span class="number">{{$about->years}}</span>{{$about->subtile}}</h4>
                    <div class="text">{{$about->description}}</div>
                    <!--Awards-->
                    {{-- <div class="awards">
                        <div class="row clearfix">
                            <!--Award Box-->
                            <div class="column col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="award-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image"><img src="/frontend/images/resource/award.png" alt="" /></figure>
                                        <div class="year">2014</div>
                                        <div class="award-name">NATIONAL AWARD</div>
                                    </div>
                                </div>
                            </div>
                            <!--Award Box-->
                            <div class="column col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="award-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image"><img src="/frontend/images/resource/award.png" alt="" /></figure>
                                        <div class="year">2016</div>
                                        <div class="award-name">GLOBAL AWARD</div>
                                    </div>
                                </div>
                            </div>
                            <!--Award Box-->
                            <div class="column col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="award-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image"><img src="/frontend/images/resource/award.png" alt="" /></figure>
                                        <div class="year">2019</div>
                                        <div class="award-name">HONOR AWARD</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> --}}

                </div>
            </div>

            <!--Column-->
            <div class="column col-lg-5 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image">
                        <img src=" {{(!empty($about->img_propos)) ? url('uploads/propos_images/'.$about->img_propos):url('uploads/no_image.jpg') }}"
                        alt="" />
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Fluid Section One-->
<section class="fluid-section-one">
    <div class="outer-container clearfix">

        <!--Image Column-->
        <div class="image-column" style="background-image:url({{(!empty($whychooseus->img_propos)) ? url('uploads/why_images/'.$whychooseus->img_propos):url('uploads/no_image.jpg') }});">
            <figure class="image-box"><img src="{{(!empty($whychooseus->img_propos)) ? url('uploads/why_images/'.$whychooseus->img_propos):url('uploads/no_image.jpg') }}" alt=""></figure>
        </div>

        <!--Content Column-->
        <div class="content-column">
            <div class="inner-column">
                <h2>{{$whychooseus->title}}</h2>
                <div class="text">
                    {{$whychooseus->description}}                
                </div>
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <!--Featured Block-->
                        <div class="featured-block">
                            <div class="feature-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-graph"></span>
                                </div>
                                <h3>{{$whychooseus->subtile}} </h3>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <!--Featured Block-->
                        <div class="featured-block">
                            <div class="feature-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-time-1"></span>
                                </div>
                                <h3>{{$whychooseus->subtile1}}</h3>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <!--Featured Block-->
                        <div class="featured-block">
                            <div class="feature-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-graphic-1"></span>
                                </div>
                                <h3>{{$whychooseus->subtile2}}</h3>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <!--Featured Block-->
                        <div class="featured-block">
                            <div class="feature-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-analytics"></span>
                                </div>
                                <h3>{{$whychooseus->subtile3}}</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!--Fun Facts Section-->
<div class="fact-counter-section">
    <div class="fact-counter">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="2000" data-stop="189">0</span>
                            <h5 class="counter-title">Team Members</h5>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3500" data-stop="915">0</span>
                            <h5 class="counter-title">Satisfied Clients</h5>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="2000" data-stop="70">0</span>
                            <h5 class="counter-title">New Projects</h5>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="2000" data-stop="60">0</span>%
                            <h5 class="counter-title">Profit Increased</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--End Fun Facts Section-->

<!--Case Section-->
<section class="case-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>Nos Realisations
            </h2>
        </div>
    </div>
    <!--Four Item Carousel-->
    <div class="four-item-carousel owl-carousel owl-theme">

        <!--Case block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="/frontend/images/resource/case-1.jpg" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <h3><a href="gallery-single.html">Family Asset Management</a></h3>
                                <div class="text">Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, teems.</div>
                                <a href="gallery-single.html" class="read-more">Read More <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Case block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="/frontend/images/resource/case-2.jpg" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <h3><a href="gallery-single.html">Family Asset Management</a></h3>
                                <div class="text">Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, teems.</div>
                                <a href="gallery-single.html" class="read-more">Read More <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Case block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="/frontend/images/resource/case-3.jpg" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <h3><a href="gallery-single.html">Family Asset Management</a></h3>
                                <div class="text">Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, teems.</div>
                                <a href="gallery-single.html" class="read-more">Read More <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Case block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="/frontend/images/resource/case-4.jpg" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <h3><a href="gallery-single.html">Family Asset Management</a></h3>
                                <div class="text">Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, teems.</div>
                                <a href="gallery-single.html" class="read-more">Read More <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Case block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="/frontend/images/resource/case-1.jpg" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <h3><a href="gallery-single.html">Family Asset Management</a></h3>
                                <div class="text">Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, teems.</div>
                                <a href="gallery-single.html" class="read-more">Read More <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Case block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="/frontend/images/resource/case-2.jpg" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <h3><a href="gallery-single.html">Family Asset Management</a></h3>
                                <div class="text">Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, teems.</div>
                                <a href="gallery-single.html" class="read-more">Read More <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Case block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="/frontend/images/resource/case-3.jpg" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <h3><a href="gallery-single.html">Family Asset Management</a></h3>

                                <div class="text">Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, teems.</div>
                                <a href="gallery-single.html" class="read-more">Read More <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Case block-->
        <div class="case-block">
            <div class="inner-box">
                <div class="image">
                    <img src="/frontend/images/resource/case-4.jpg" alt="" />
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <h3><a href="gallery-single.html">Family Asset Management</a></h3>

                                <div class="text">Providing insight-driven transformation to investment banks, wealth and asset managers, exchanges, teems.</div>
                                <a href="gallery-single.html" class="read-more">Read More <span class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Lower Box-->
    <div class="lower-box">
        <div class="case-text">Vous voulez réaliser un nouveau projet ?<a href="contact.html">contactez-nous.</a> Notre spécialiste est prêt à vous aider</div>
    </div>

</section>
<!--End Case Section-->

<!--Team Section-->
<section class="team-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>Les membres de notre équipe</h2>
        </div>

        <div class="row clearfix">

            <!--Team Member-->
            <div class="team-member col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><img src="/frontend/images/resource/team-1.png" alt=""></figure>
                        <ul class="social-icon-two">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h6><a href="team-single.html">David Warner</a></h6>
                        <div class="designation">Ceo</div>
                        <div class="text">As more and more people are turning to organic</div>
                    </div>
                </div>
            </div>

            <!--Team Member-->
            <div class="team-member col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><img src="/frontend/images/resource/team-2.png" alt=""></figure>
                        <ul class="social-icon-two">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h6><a href="team-single.html">James Simth</a></h6>
                        <div class="designation">Manager</div>
                        <div class="text">As more and more people are turning to organic</div>
                    </div>
                </div>
            </div>

            <!--Team Member-->
            <div class="team-member col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><img src="/frontend/images/resource/team-3.png" alt=""></figure>
                        <ul class="social-icon-two">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h6><a href="team-single.html">Adam Rose</a></h6>
                        <div class="designation">Employe</div>
                        <div class="text">As more and more people are turning to organic</div>
                    </div>
                </div>
            </div>

            <!--Team Member-->
            <div class="team-member col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image"><img src="/frontend/images/resource/team-4.png" alt=""></figure>
                        <ul class="social-icon-two">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h6><a href="team-single.html">Kevin Peterson</a></h6>
                        <div class="designation">Client</div>
                        <div class="text">As more and more people are turning to organic</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--End Team Section-->

<!--Sponsors Section-->
<section class="sponsors-section" style="background-image:url(images/background/1.jpg);">
    <div class="auto-container">
        <div class="carousel-outer">
            <!--Sponsors Slider-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li><div class="image-box"><a href="#"><img src="/frontend/images/clients/1.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="/frontend/images/clients/2.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="/frontend/images/clients/3.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="/frontend/images/clients/4.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="/frontend/images/clients/5.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="/frontend/images/clients/1.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="/frontend/images/clients/2.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="/frontend/images/clients/3.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="/frontend/images/clients/4.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="/frontend/images/clients/5.png" alt=""></a></div></li>
            </ul>
        </div>
    </div>
</section>
<!--End Sponsors Section-->

<!--News Section-->
<section class="news-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>Our Latest News</h2>
        </div>

        <div class="row clearfix">

            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-single.html"><img src="/frontend/images/resource/news-1.jpg" alt="" /></a>
                        <ul class="category">
                            <li><a href="blog-single.html">Initiative, </a></li>
                            <li><a href="blog-single.html">Programs</a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <div class="author">
                            Golifa Mona
                        </div>
                        <h5><a href="blog-single.html">Possession of my entire soul</a></h5>
                        <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which.</div>
                        <ul class="post-date">
                            <li>14th August, 2019</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-single.html"><img src="/frontend/images/resource/news-2.jpg" alt="" /></a>
                        <ul class="category">
                            <li><a href="blog-single.html">Sales</a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <div class="author">
                            Mark Mona
                        </div>
                        <h5><a href="blog-single.html">Even the powerful Pointing</a></h5>
                        <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which.</div>
                        <ul class="post-date">
                            <li>21st July, 2019</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--News Block-->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="blog-single.html"><img src="/frontend/images/resource/news-3.jpg" alt="" /></a>
                        <ul class="category">
                            <li><a href="blog-single.html">Factory, </a></li>
                            <li><a href="blog-single.html">Industry</a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <div class="author">
                            Dellin Mark
                        </div>
                        <h5><a href="blog-single.html">Pityful a rethoric question ran</a></h5>
                        <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which.</div>
                        <ul class="post-date">
                            <li>10th July, 2019</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--End News Section-->

<!--Default Section-->
<section class="default-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Testimonial Column-->
            <div class="testimonial-column col-lg-6 col-md-6 col-sm-12">
                <div class="inner-column">

                    <div class="sec-title">
                        <h2>Testimonial</h2>
                    </div>

                    <div class="single-vertical-carousel">
                        <!--Featured Block Two-->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="author-info">
                                    <div class="image">
                                        <img src="/frontend/images/resource/author-1.jpg" alt="" />
                                    </div>
                                    <h6>JOHN ABRAHAM</h6>
                                    <div class="designation">Morris, CEO</div>
                                </div>
                                <div class="text">“ The first mate and his Skipper too will do their very best to make the man named Brady tropic island nest these are the voyages of the Starship Enterprise of a man named Brady tropic island nest these are the voyages.”</div>
                            </div>
                        </div>

                        <!--Featured Block Two-->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="author-info">
                                    <div class="image">
                                        <img src="/frontend/images/resource/author-1.jpg" alt="" />
                                    </div>
                                    <h6>JOHN ABRAHAM</h6>
                                    <div class="designation">Morris, CEO</div>
                                </div>
                                <div class="text">“ The first mate and his Skipper too will do their very best to make the man named Brady tropic island nest these are the voyages of the Starship Enterprise of a man named Brady tropic island nest these are the voyages.”</div>
                            </div>
                        </div>

                        <!--Featured Block Two-->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="author-info">
                                    <div class="image">
                                        <img src="/frontend/images/resource/author-1.jpg" alt="" />
                                    </div>
                                    <h6>JOHN ABRAHAM</h6>
                                    <div class="designation">Morris, CEO</div>
                                </div>
                                <div class="text">“ The first mate and his Skipper too will do their very best to make the man named Brady tropic island nest these are the voyages of the Starship Enterprise of a man named Brady tropic island nest these are the voyages.”</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!--Graph Column-->
            <div class="graph-column col-lg-6 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Business Growth</h2>
                    </div>
                    <div class="graph-image">
                        <img src="/frontend/images/resource/graph.png" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Default Section-->

<!--Map Info Section-->
<section class="map-info-section">
    <div class="outer-container">
        <div class="clearfix">
            <!--Left Column-->
            <div class="left-column">
                <!--Map Outer-->
                <div class="map-outer">
                    <!--Map Canvas-->
                    <div class="map-canvas"
                        data-zoom="12"
                        data-lat="-37.817085"
                        data-lng="144.955631"
                        data-type="roadmap"
                        data-hue="#ffc400"
                        data-title="Envato"
                        data-icon-path="images/icons/map-marker.png"
                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-column" style="background-image:url(images/resource/image-1.jpg)">
                <div class="content">
                    <h3>Request for quote</h3>
                    <div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process.</div>

                    <!-- Quote Form -->
                    <div class="quote-form">

                        <!--Contact Form-->
                        <form method="post" action="#">
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="username" placeholder="How to assist you:*" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="phone" placeholder="Phone number:*" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="text" placeholder="Your name:*" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-one">Submit request <span class="icon flaticon-share-option"></span></button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--End Map Info Section-->

@endsection
