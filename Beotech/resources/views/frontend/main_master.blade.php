<!DOCTYPE html>
<html>

<!--  26:53-->
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<!-- Stylesheets -->
<link href="/frontend/css/bootstrap.css" rel="stylesheet">
<link href="/frontend/css/style.css" rel="stylesheet">
<link href="/frontend/css/slick.css" rel="stylesheet">
<link href="/frontend/css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="/frontend/css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="/frontend/css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="/frontend/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/frontend/images/favicon.png" type="image/x-icon">


<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/frontend/js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Main Header-->
    @include('frontend.body.header')

    <!--End Main Header -->

	<!--FullScreen Menu-->
    @include('frontend.body.menu')

    <!--End FullScreen Menu-->

	<!--Main Slider-->
    @include('frontend.body.sidebar')

    <!--End Main Slider-->

	<!--About Section-->
    @yield('content')

	<!--Subscribe Style One-->
    <section class="subscribe-style-one">
    	<div class="auto-container">
        	<div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h2>Newsletter Subscribe</h2>
                    <div class="text">Sign up today for hints, tips and the latest Updates.</div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <form method="post" action="#">
                        <div class="form-group clearfix">
                            <input type="email" name="email" value="" placeholder="Enter Email Address" required>
                            <button type="submit" class="theme-btn btn-style-one">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<!--End Subscribe Style One-->

	<!--Main Footer-->
    @include('frontend.body.footer')

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gears"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="/frontend/css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="/frontend/css/color-themes/green-theme.css"></span>
            <span class="palate blue-color" data-theme-file="/frontend/css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="/frontend/css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="/frontend/css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="/frontend/css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="/frontend/css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="/frontend/css/color-themes/redd-color.css"></span>
			<span class="palate olive-color" data-theme-file="/frontend/css/color-themes/olive-theme.css"></span>
            <span class="palate yellow-color" data-theme-file="/frontend/css/color-themes/yellow-theme.css"></span>
            <span class="palate pink-color" data-theme-file="/frontend/css/color-themes/pink-theme.css"></span>
            <span class="palate hotpink-color" data-theme-file="/frontend/css/color-themes/hotpink-color.css"></span>
        </div>
    </div>

	<ul class="box-version option-box"> <li class="box">Boxed</li> <li>Full width</li></ul>
	<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>

    <a href="#" class="purchase-btn">Purchase now $17</a>

    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

<script src="/frontend/js/jquery.js"></script>
<script src="/frontend/js/popper.min.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/frontend/js/jquery.fancybox.js"></script>
<script src="/frontend/js/appear.js"></script>
<script src="/frontend/js/owl.js"></script>
<script src="/frontend/js/wow.js"></script>
<script src="/frontend/js/slick.js"></script>
<script src="/frontend/js/jquery-ui.js"></script>
<script src="/frontend/js/script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyD39_Mb1wKUcuRD-0KPmQT6SQHhEMVX1O0"></script>
<script src="/frontend/js/map-script.js"></script>
<!--End Google Map APi-->

<script src="/frontend/js/color-settings.js"></script>

</body>

<!--  30:20-->
</html>
