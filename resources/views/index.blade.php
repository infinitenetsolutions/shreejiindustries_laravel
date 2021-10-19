<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <title>Shreeji Industries | Home</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="{{ asset('css/color-switcher-design.css') }}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{ asset('css/color-themes/default-theme.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    <!--popup-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/onclick-form-popup.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/onclick-form-popup.js') }}"></script>
    <!--//popup-->

</head>

<body class="hidden-bar-wrapper">

    <!--popup-->
    <div class="side-widget open">
        <div class="inner">
            <a class="btn btn-blue productCheckout" id="get-started"
                style="color:#fff!important;background-color:#e30016!important;font-size:18px!important;">Get Your
                Requirement</a>
        </div>
    </div>


    <div id="popup-container">
        <div id="popup-window">
            <div class="modal-content" style="margin-top:50px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <a href="#" class="your-class"></a>
                <div>
                    <div class="row text-center">
                        <h3>Tell us what you are looking for?</h3>


                    </div>
                    <br>
                    <form action="" method="post" id="footer-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" name="first_name" id="first_name"
                                    placeholder="First Name *" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="last_name" id="last_name" placeholder="Last Name *"
                                    required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" name="email" id="email" placeholder="Your Email *"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="phone" placeholder="Phone *" id="phone">
                                <br>
                            </div>
                        </div>
                        <center>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </center>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!--//popup-->


    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header">

            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container">
                    <div class="clearfix">
                        <!--Top Left-->
                        <div class="top-left">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span> Welcome To Our Shreeji Industries.</li>
                            </ul>
                        </div>
                        <!--Top Right-->
                        <div class="top-right">
                            <div class="timing">Opening Hours: Monday - Saturday 9 am to 5 pm</div>
                            <!--Social Box-->
                            <ul class="social-box">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                            <!--Language-->
                            <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span
                                        class="flag-icon"><img src="images/icons/flag-icon.jpg"
                                            alt="" /></span>English &nbsp;<span
                                        class="icon fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Arabic</a></li>
                                    <li><a href="#">Hindi</a></li>
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
                            <div class="logo"><a href="/"><img src="images/logo.png" style="width: 346px;"
                                        alt="" title=""></a></div>
                        </div>

                        <div class="pull-right upper-right">
                            <div class="info-outer clearfix">
                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <div class="icon-box"><span class="flaticon-contact-1"></span></div>
                                    <ul>
                                        <li><span>Free Call</span> <br> +91-8818892500</li>
                                    </ul>
                                </div>

                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <div class="icon-box"><span class="flaticon-email-2"></span></div>
                                    <ul>
                                        <li><span>Mail Us</span> <br> shreeji-industries@outlook.com</li>
                                    </ul>
                                </div>

                                <!--Info Box-->
                                <div class="upper-column info-box">
                                    <a href="contact" class="theme-btn btn-style-two">Get A Quoter</a>
                                </div>
                            </div>

                            <!--Header Lower-->
                            <div class="header-lower">

                                <div class="nav-outer clearfix">
                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-md">
                                        <div class="navbar-header">
                                            <!-- Toggle Button -->
                                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                data-target="#navbarSupportedContent"
                                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                                aria-label="Toggle navigation">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>

                                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">
                                                <li><a href="#">Home</a>
                                                    <!-- 	<ul>
             <li><a href="/-2.html">Home Page 01</a></li>
             <li><a href="/-3.html">Home Page 02</a></li>
             <li><a href="/-4.html">Home Page 03</a></li>
             <li class="dropdown"><a href="#">Header Styles</a>
              <ul>
               <li><a href="/-2.html">Header Style 01</a></li>
               <li><a href="/-3.html">Header Style 02</a></li>
               <li><a href="/-4.html">Header Style 03</a></li>
              </ul>
             </li>
            </ul> -->
                                                </li>
                                                <li class="dropdown"><a href="#">About Us</a>
                                                    <ul>
                                                        <li><a href="about-company">About Company</a></li>
                                                        <li><a href="about-director">About Director</a></li>
                                                        <li><a href="mission-vission">Mission & Vission</a></li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="{{route('our-products')}}">Our Products</a>
                                                    <ul>
                                                        @foreach ($all_categories as $items)
                                                            <li class="dropdown"><a
                                                                   target="blank" href="{{route('our-products')}}">{{ $items->c_name }}</a>
                                                                <ul>
                                                                    <li><a href="{{route('our-products')}}">Header Style 01</a></li>
                                                                    <li><a href="#">Header Style 02</a></li>
                                                                    <li><a href="#">Header Style 03</a></li>
                                                                </ul>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li><a href="our-clients">Our Clients</a></li>
                                                <li><a href="faq">FAQ</a></li>

                                                <li><a href="contact">Contact us</a></li>
                                                <li><a href="career">Career</a></li>

                                            </ul>
                                        </div>
                                    </nav>

                                    <!-- Main Menu End-->
                                    <div class="outer-box clearfix">

                                        <!--Option Box-->
                                        <div class="option-box">
                                            <!--Cart Box-->
                                            <div class="cart-box">
                                                <div class="dropdown">
                                                    <!-- 	<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-cart-of-checkered-design"></span><span class="total-cart">2</span></button> -->
                                                    <div class="dropdown-menu pull-right cart-panel"
                                                        aria-labelledby="dropdownMenu3">

                                                        <div class="cart-product">
                                                            <div class="inner">
                                                                <div class="cross-icon"><span
                                                                        class="icon fa fa-remove"></span></div>
                                                                <div class="image"><img
                                                                        src="images/resource/post-thumb-3.jpg" alt="" />
                                                                </div>
                                                                <h3><a href="shop-single.html">Flying Ninja</a></h3>
                                                                <div class="quantity-text">Quantity 1</div>
                                                                <div class="price">$99.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-product">
                                                            <div class="inner">
                                                                <div class="cross-icon"><span
                                                                        class="icon fa fa-remove"></span></div>
                                                                <div class="image"><img
                                                                        src="images/resource/post-thumb-2.jpg" alt="" />
                                                                </div>
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
                                            <!-- 	<div class="search-box-outer">
           <div class="dropdown">
            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
             <li class="panel-outer">
              <div class="form-container">
               <form method="post" action="http://ary-themes.com/html/buliten/blog.html">
                <div class="form-group">
                 <input type="search" name="field-name" value="" placeholder="Search Here" required>
                 <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                </div>
               </form>
              </div>
             </li>
            </ul>
           </div>
          </div> -->

                                        </div>
                                    </div>
                                    <div class="side-curve"></div>
                                </div>

                            </div>
                            <!--End Header Lower-->

                        </div>

                    </div>

                </div>
            </div>
            <!--End Header Upper-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="/" class="img-responsive"><img src="images/logo.png" style="width: 346px;" alt=""
                                title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix" style="margin-top:30px;">
                                    <li><a href="/">Home</a>
                                        <!-- 	<ul>
          <li><a href="/-2.html">Home Page 01</a></li>
          <li><a href="/-3.html">Home Page 02</a></li>
          <li><a href="/-4.html">Home Page 03</a></li>
          <li class="dropdown"><a href="#">Header Styles</a>
           <ul>
            <li><a href="/-2.html">Header Style 01</a></li>
            <li><a href="/-3.html">Header Style 02</a></li>
            <li><a href="/-4.html">Header Style 03</a></li>
           </ul>
          </li>
         </ul> -->
                                    </li>
                                    <li class="dropdown"><a href="#">About Us</a>
                                        <ul>
                                            <li><a href="about-company">About Company</a></li>
                                            <li><a href="about-director">About Director</a></li>
                                            <li><a href="mission-vission">Mission & Vission</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="/our-products">Our Products</a>
                                        <ul>

                                            @foreach ($all_categories as $items)
                                                <li class="dropdown"><a href="{{route('our-products')}}">{{ $items->c_name }}</a>
                                                    <ul>
                                                        <li><a href="{{route('our-products')}}">Header Style 01</a></li>
                                                        <li><a href="#">Header Style 02</a></li>
                                                        <li><a href="#">Header Style 03</a></li>
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!-- <li class="dropdown"><a href="#">Projects</a>
         <ul>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="projects-detail.html">Projects Detail</a></li>
         </ul>
        </li> -->
                                    <!-- 	<li class="dropdown"><a href="#">Shop</a>
         <ul>
          <li><a href="shop.html">Our Products</a></li>
          <li><a href="shop-single.html">Product Single</a></li>
          <li><a href="shopping-cart.html">Shopping Cart</a></li>
          <li><a href="checkout.html">Checkout</a></li>
          <li><a href="account.html">Account</a></li>
         </ul>
        </li> -->
                                    <li><a href="our-clients">Our Clients</a></li>
                                    <li><a href="faq">FAQ</a></li>
                                    <li><a href="contact">Contact us</a></li>
                                    <li><a href="career">Career</a></li>



                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

        </header>
        <!--End Main Header -->

        <!--Main Slider-->
        <section class="main-slider">

            <div class="main-slider-carousel owl-carousel owl-theme">

                <div class="slide" style="background-image:url(images/main-slider/image-1.jpg)">
                    <div class="auto-container">
                        <div class="content clearfix">
                            <div class="title">Industrial Manufacturing</div>
                            <h2>Smart Partnerships</h2>
                            <div class="text">To take advantage of digitization, industrial manufacturers
                                <br> need new operating models.
                            </div>
                            <div class="link-box">
                                <a href="about" class="theme-btn btn-style-one">Our Service</a> <a href="contact.html"
                                    class="theme-btn btn-style-three">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide" style="background-image:url(images/main-slider/image-1.jpg)">
                    <div class="auto-container">
                        <div class="content clearfix">
                            <div class="title">Industrial Manufacturing</div>
                            <h2>Smart Partnerships</h2>
                            <div class="text">To take advantage of digitization, industrial manufacturers
                                <br> need new operating models.
                            </div>
                            <div class="link-box">
                                <a href="about" class="theme-btn btn-style-one">Our Service</a> <a href="contact"
                                    class="theme-btn btn-style-three">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide" style="background-image:url(images/main-slider/image-1.jpg)">
                    <div class="auto-container">
                        <div class="content clearfix">
                            <div class="title">Industrial Manufacturing</div>
                            <h2>Smart Partnerships</h2>
                            <div class="text">To take advantage of digitization, industrial manufacturers
                                <br> need new operating models.
                            </div>
                            <div class="link-box">
                                <a href="about" class="theme-btn btn-style-one">Our Service</a> <a href="contact"
                                    class="theme-btn btn-style-three">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Left Title -->
            <div class="left-title">manufacturers</div>

            <div class="auto-container">
                <!-- Social Box -->
                <div class="social-box">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-skype"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                </div>
            </div>
            <!--Scroll Dwwn Btn-->
            <div class="mouse-btn-down scroll-to-target" data-target=".welcome-section"></div>
        </section>
        <!--End Main Slider-->

        <!-- Welcome Section -->
        <section class="welcome-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/welcome.jpg" alt="" style="width: 427px;" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title-inner">
                                    <div class="title">Welcome to </div>
                                    <h2>our Website</h2>
                                </div>
                            </div>
                            <div class="text">Shreejl Industries came into existence in 2014. We are
                                prominent business industry, manufacturer and supplier of varying disposable products
                                and processing machines. We are committed to manufacture and supply quality assured
                                machines using intensified mechanism. The machinery offered by us is operational
                                efficient, low maintenance, reliable, heavy duty and environment friendly, â��as we look
                                upon the earth as being with us, not for us'.
                                <p class="text">Our industry is composed of qualified technical
                                    professionals. We are always dexterous to meet the challenges in the world of
                                    machinery and market. We understand the market needs and we are custodians of our
                                    customer's satisfaction, trust and confidence.</p>
                            </div>
                            <a href="about" class="theme-btn btn-style-three">About More</a>

                            <!-- Counter Box -->
                            <div class="counter-box">

                                <div class="fact-counter">
                                    <div class="row clearfix">

                                        <!--Column-->
                                        <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner wow fadeInLeft" data-wow-delay="300ms"
                                                data-wow-duration="1500ms">
                                                <div class="count-outer count-box">
                                                    <h4 class="counter-title">Product</h4>
                                                    <span class="count-text" data-speed="3000"
                                                        data-stop="1200">0</span>+
                                                </div>
                                            </div>
                                        </div>

                                        <!--Column-->
                                        <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner wow fadeInLeft" data-wow-delay="600ms"
                                                data-wow-duration="1500ms">
                                                <div class="count-outer count-box">
                                                    <h4 class="counter-title">Happy Clients</h4>
                                                    <span class="count-text" data-speed="2500"
                                                        data-stop="800">0</span>+
                                                </div>
                                            </div>
                                        </div>

                                        <!--Column-->
                                        <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner wow fadeInLeft" data-wow-delay="900ms"
                                                data-wow-duration="1500ms">
                                                <div class="count-outer count-box">
                                                    <h4 class="counter-title">Satisfaction</h4>
                                                    <span class="count-text" data-speed="2000"
                                                        data-stop="99">0</span>+
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Welcome Section -->

        <!-- Services Section -->
        <section class="services-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="title-inner">
                        <div class="title">Welcome to</div>
                        <h2>Our Products</h2>
                    </div>
                </div>

                <div class="row clearfix">

                    <!-- Services Block -->
                    <div class="services-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="oil-gas.html"><img src="images/resource/service-1.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="upper-layer"></div>
                                <div class="lower-layer"></div>
                                <h3><a href="oil-gas.html">Paper Plate Making Machine</a></h3>
                                <div class="text"><a href="#">Read More.</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="civil.html"><img src="images/resource/service-2.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="upper-layer"></div>
                                <div class="lower-layer"></div>
                                <h3><a href="civil.html">Paper Dona Making Machine</a></h3>
                                <div class="text"> <a href="#">Read More.</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="chemical-research.html"><img src="images/resource/service-3.jpg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="upper-layer"></div>
                                <div class="lower-layer"></div>
                                <h3><a href="chemical-research.html">Kraft Paper Rolls</a></h3>
                                <div class="text"> <a href="#">Read More.</a></div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </section>
        <!-- End Services Section -->

        <!-- Call To Action Section -->
        <section class="call-to-action-section" style="background-image:url(images/background/1.jpg);">
            <div class="auto-container">
                <h2>Get A <span class="theme_color">Solutions</span> For All <br> Industries</h2>
                <div class="text">We believe strongly that we can and must do things differently. <br> Our
                    aim is to bring you news, perspectives.</div>
                <a href="contact" class="theme-btn btn-style-four">Contact Us</a>
            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- Project Section -->
        <section class="project-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="title-inner">
                        <div class="title">Our Work</div>
                        <h2>Our All Product</h2>
                    </div>
                </div>

                <div class="four-item-carousel owl-carousel owl-theme">

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/project-1.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="icons">
                                        <a class="plus" href="images/resource/project-1.jpg"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                        <a class="link" href="team.html"><span
                                                class="icon flaticon-link"></span></a>
                                    </div>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="team.html">Pre Construction</a></h3>
                                            <div class="category">Agriculture, Chemical</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/project-2.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="icons">
                                        <a class="plus" href="images/resource/project-2.jpg"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                        <a class="link" href="team.html"><span
                                                class="icon flaticon-link"></span></a>
                                    </div>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="team.html">Pre Construction</a></h3>
                                            <div class="category">Agriculture, Chemical</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/project-3.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="icons">
                                        <a class="plus" href="images/resource/project-3.jpg"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                        <a class="link" href="team.html"><span
                                                class="icon flaticon-link"></span></a>
                                    </div>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="team.html">Pre Construction</a></h3>
                                            <div class="category">Agriculture, Chemical</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/project-4.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="icons">
                                        <a class="plus" href="images/resource/project-4.jpg"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                        <a class="link" href="team.html"><span
                                                class="icon flaticon-link"></span></a>
                                    </div>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="team.html">Pre Construction</a></h3>
                                            <div class="category">Agriculture, Chemical</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/project-1.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="icons">
                                        <a class="plus" href="images/resource/project-1.jpg"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                        <a class="link" href="team.html"><span
                                                class="icon flaticon-link"></span></a>
                                    </div>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="team.html">Pre Construction</a></h3>
                                            <div class="category">Agriculture, Chemical</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/project-2.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="icons">
                                        <a class="plus" href="images/resource/project-2.jpg"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                        <a class="link" href="team.html"><span
                                                class="icon flaticon-link"></span></a>
                                    </div>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="team.html">Pre Construction</a></h3>
                                            <div class="category">Agriculture, Chemical</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/project-3.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="icons">
                                        <a class="plus" href="images/resource/project-3.jpg"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                        <a class="link" href="team.html"><span
                                                class="icon flaticon-link"></span></a>
                                    </div>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="team.html">Pre Construction</a></h3>
                                            <div class="category">Agriculture, Chemical</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/project-4.jpg" alt="" />
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="icons">
                                        <a class="plus" href="images/resource/project-4.jpg"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                        <a class="link" href="team.html"><span
                                                class="icon flaticon-link"></span></a>
                                    </div>
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <h3><a href="team.html">Pre Construction</a></h3>
                                            <div class="category">Agriculture, Chemical</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Project Section -->

        <!--Call To Action Section Two-->
        <section class="call-to-action-section-two" style="background-image:url(images/background/1.jpg)">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left">
                        <h2>We tailor this service to your business, your goals and your budget</h2>
                    </div>
                    <div class="pull-right">
                        <a href="contact.html" class="theme-btn btn-style-three">Success Track</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Call To Action Section Two -->

        <!-- Team Section -->
        <section class="team-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Title Column -->
                    <div class="title-column col-lg-3 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title-inner">
                                    <div class="title">Our team</div>
                                    <h2>Expert Members</h2>
                                </div>
                            </div>
                            <div class="text">Suspendisse tempus, enim at convallis maximus, ex ante faucibus
                                lorem, at rhoncus justo tellus at eros.</div>
                        </div>
                    </div>

                    <!-- Carousel Column -->
                    <div class="carousel-column col-lg-9 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="team-carousel owl-carousel owl-theme">

                                <!--Team Block-->
                                <div class="team-block">
                                    <div class="inner-box">
                                        <div class="border-one"></div>
                                        <div class="border-two"></div>
                                        <div class="image">
                                            <a href="team.html"><img src="images/resource/team-1.png" alt="" /></a>
                                            <ul class="social-icons">
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="team.html">Monica Wagase</a></h3>
                                            <div class="designation">Camical officer</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Team Block-->
                                <div class="team-block">
                                    <div class="inner-box">
                                        <div class="border-one"></div>
                                        <div class="border-two"></div>
                                        <div class="image">
                                            <a href="team.html"><img src="images/resource/team-2.png" alt="" /></a>
                                            <ul class="social-icons">
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="team.html">Monica Wagase</a></h3>
                                            <div class="designation">Camical officer</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Team Block-->
                                <div class="team-block">
                                    <div class="inner-box">
                                        <div class="border-one"></div>
                                        <div class="border-two"></div>
                                        <div class="image">
                                            <a href="team.html"><img src="images/resource/team-3.png" alt="" /></a>
                                            <ul class="social-icons">
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="team.html">Monica Wagase</a></h3>
                                            <div class="designation">Camical officer</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Team Block-->
                                <div class="team-block">
                                    <div class="inner-box">
                                        <div class="border-one"></div>
                                        <div class="border-two"></div>
                                        <div class="image">
                                            <a href="team.html"><img src="images/resource/team-1.png" alt="" /></a>
                                            <ul class="social-icons">
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="team.html">Monica Wagase</a></h3>
                                            <div class="designation">Camical officer</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Team Block-->
                                <div class="team-block">
                                    <div class="inner-box">
                                        <div class="border-one"></div>
                                        <div class="border-two"></div>
                                        <div class="image">
                                            <a href="team.html"><img src="images/resource/team-2.png" alt="" /></a>
                                            <ul class="social-icons">
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="team.html">Monica Wagase</a></h3>
                                            <div class="designation">Camical officer</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Team Block-->
                                <div class="team-block">
                                    <div class="inner-box">
                                        <div class="border-one"></div>
                                        <div class="border-two"></div>
                                        <div class="image">
                                            <a href="team.html"><img src="images/resource/team-3.png" alt="" /></a>
                                            <ul class="social-icons">
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="team.html">Monica Wagase</a></h3>
                                            <div class="designation">Camical officer</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="title-inner">
                        <div class="title">Automate & Simplify The Whole Process</div>
                        <h2>What Clients Saying</h2>
                    </div>
                </div>

                <div class="single-item-carousel owl-carousel owl-theme">

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/author-1.jpg" alt="" />
                                <span class="quote-icon flaticon-left-quote"></span>
                            </div>
                            <h3>Camron Mobita</h3>
                            <div class="text">The Forexnic loan has been the most attractive loan products on
                                the market, helping numerous businesses gain access to financing they would not be able
                                to obtain conventionally and at extremely favorable rates and terms.</div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/author-1.jpg" alt="" />
                                <span class="quote-icon flaticon-left-quote"></span>
                            </div>
                            <h3>Camron Mobita</h3>
                            <div class="text">The Forexnic loan has been the most attractive loan products on
                                the market, helping numerous businesses gain access to financing they would not be able
                                to obtain conventionally and at extremely favorable rates and terms.</div>
                        </div>
                    </div>

                    <!-- Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/author-1.jpg" alt="" />
                                <span class="quote-icon flaticon-left-quote"></span>
                            </div>
                            <h3>Camron Mobita</h3>
                            <div class="text">The Forexnic loan has been the most attractive loan products on
                                the market, helping numerous businesses gain access to financing they would not be able
                                to obtain conventionally and at extremely favorable rates and terms.</div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Testimonial Section -->

        <!-- Default Section -->
        <section class="default-section">
            <div class="outer-container">
                <div class="clearfix">

                    <!-- News Column -->
                    <div class="news-column">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title-inner">
                                    <div class="title">Latest News and Artical</div>
                                    <h2>Company Blogs</h2>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <!-- Image Column -->
                                        <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                            <div class="column-inner">
                                                <div class="image">
                                                    <img src="images/resource/news-1.jpg" alt="" />
                                                    <div class="image-layer"
                                                        style="background-image:url(images/resource/news-1.jpg)"><a
                                                            class="overlay-link" href="blog-single.html"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Content Column -->
                                        <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                            <div class="column-inner">
                                                <ul class="post-info">
                                                    <li>24th August 2019</li>
                                                    <li>Machnical Engineering</li>
                                                </ul>
                                                <h3><a href="blog-single.html">Collaboration through advanced touch base
                                                        UI</a></h3>
                                                <div class="text">Baseline the procedure and samepage your
                                                    department. Golden goose. Social currency. Those options are already
                                                    baked in with this model run it up the flagpole.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <!-- Image Column -->
                                        <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                            <div class="column-inner">
                                                <div class="image">
                                                    <img src="images/resource/news-2.jpg" alt="" />
                                                    <div class="image-layer"
                                                        style="background-image:url(images/resource/news-1.jpg)"><a
                                                            class="overlay-link" href="blog-single.html"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Content Column -->
                                        <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                            <div class="column-inner">
                                                <ul class="post-info">
                                                    <li>24th August 2019</li>
                                                    <li>Machnical Engineering</li>
                                                </ul>
                                                <h3><a href="blog-single.html">Lean into that problem proceduralize.</a>
                                                </h3>
                                                <div class="text">Baseline the procedure and samepage your
                                                    department. Golden goose. Social currency. Those options are already
                                                    baked in with this model run it up the flagpole.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column" style="background-image:url(images/background/2.jpg)">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title light">
                                <div class="title-inner">
                                    <div class="title">information details</div>
                                    <h2>Request a Quote</h2>
                                </div>
                            </div>

                            <!-- Quote Form -->
                            <div class="quote-form">

                                <!--Contact Form-->
                                <form method="post" action="http://ary-themes.com/html/buliten/contact.html">
                                    <div class="row clearfix">

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="text" name="username" placeholder="Your Name" required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="text" name="email" placeholder="Email" required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <input type="text" name="phone" placeholder="Phone" required>
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <select class="custom-select-box">
                                                <option>Service Required</option>
                                                <option>Service One</option>
                                                <option>Service Two</option>
                                                <option>Service Three</option>
                                                <option>Service Four</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <button class="theme-btn btn-style-two" type="submit"
                                                name="submit-form">Get A Quote</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Default Section -->

        <!--Sponsors Section-->
        <section class="sponsors-section">
            <div class="auto-container">

                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a>
                            </figure>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
        <!--End Sponsors Section-->

        <!--Main Footer-->
        @include('include.footer')
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <!-- Color Palate / Color Switcher -->



    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>

</body>

</html>
