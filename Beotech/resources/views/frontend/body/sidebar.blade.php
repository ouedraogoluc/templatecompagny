<section class="main-slider">

    <div class="main-slider-carousel owl-carousel owl-theme">

        @foreach ($sliders as $slider)
        <div class="slide" style="background-image:url({{asset($slider->slider_img)}});)">
            <div class="auto-container">
                <div class="content clearfix">
                    <div class="title">We Help</div>
                    <h1>{{$slider->title}}</h1>
                    <div class="text">
                        {{$slider->description}}
                    </div>
                    <div class="link-box">
                        <a href="about.html" class="theme-btn btn-style-one">Learn More</a> <a href="contact.html" class="theme-btn btn-style-two">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
