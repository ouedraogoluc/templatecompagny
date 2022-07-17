<header class="main-header header-style-two">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                <!--Top Left-->
                <div class="top-left">
                    <div class="text">Welcome to Beotech, we have over 4 years of expertise</div>
                </div>
                <!--Top Right-->
                <div class="top-right">
                    <!--Social Box-->
                    <ul class="social-box">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                    <!--Language-->
                    <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="flag-icon"><img src="/frontend/images/icons/flag-icon.jpg" alt=""/></span>English &nbsp;<span class="icon fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                            <li><a href="#">English</a></li>
                            <li><a href="#">french</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="index-2.html"><img src="/frontend/images/beotech.png" alt="" title="BeoTech"></a></div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-pin"></span></div>
                        <ul>
                            <li>Rue13x24 Medina Dakar <br> Senegal</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-technology-1"></span></div>
                        <ul>
                            <li>+221781137355 <br> beotech@beotech.com</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-clock"></span></div>
                        <ul>
                            <li>10:00am to 6:00pm <br> Sunday Closed</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Hidden Nav Toggler -->
    <div class="nav-toggler">
       <div class="nav-btn"><button class="hidden-bar-opener"><span class="icon flaticon-menu"></span></button></div>
    </div>
    <!-- / Hidden Nav Toggler -->

    <!--Header Lower-->
    <div class="header-lower">

        <div class="auto-container">
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                @include('frontend.body.nav')

                <!-- Main Menu End-->
                <div class="outer-box clearfix">

                    <!--Option Box-->
                    <div class="option-box">
                        <!--Cart Box-->
                        <div class="cart-box">
                            <div class="dropdown">
                                <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-cart-of-checkered-design"></span><span class="total-cart">2</span></button>
                                <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">

                                    <div class="cart-product">
                                        <div class="inner">
                                            <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                            <div class="image"><img src="/frontend/images/resource/post-thumb-3.jpg" alt="" /></div>
                                            <h3><a href="shop-single.html">Flying Ninja</a></h3>
                                            <div class="quantity-text">Quantity 1</div>
                                            <div class="price">$99.00</div>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="inner">
                                            <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                            <div class="image"><img src="/frontend/images/resource/post-thumb-2.jpg" alt="" /></div>
                                            <h3><a href="shop-single.html">Patient Ninja</a></h3>
                                            <div class="quantity-text">Quantity 1</div>
                                            <div class="price">$99.00</div>
                                        </div>
                                    </div>
                                    <div class="cart-total">Sub Total: <span>$198</span></div>
                                    <ul class="btns-boxed">
                                        <li><a href="shoping-cart.html">View Cart</a></li>
                                        <li><a href="checkout.html">CheckOut</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="#">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="side-curve"></div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index-2.html" class="img-responsive"><img src="/frontend/images/beotech.png" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                @include('frontend.body.nav')
                <!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
