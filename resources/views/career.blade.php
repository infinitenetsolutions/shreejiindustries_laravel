
<x-layouts>
    @slot('title','career')
        
@slot('body')
    

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/9.jpg)">
        <div class="auto-container">
            <h2>Career</h2>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">home</a></li>
                <li>Career</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title-inner">
                                <div class="title">SEND YOUR RESUME TO US </div>
                                <h2>Find a Career Opportunity</h2>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="http://ary-themes.com/html/buliten/sendemail.php"
                                id="contact-form">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name " required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email " required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject " required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone " required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="file" name="phone" placeholder="Drop Your resume " required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message "></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-four" type="submit" name="submit-form"
                                            style="color:#fff;">Submit</button>
                                    </div>

                                </div>
                            </form>

                        </div>

                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title-inner">
                                <div class="title">SHREEJI INDUSTRIES</div>
                                <h2>Current Openings</h2>
                            </div>
                        </div>

                        <div class="content-boxed" style="background-color:#f91026;">
                            <div class="text" style="color:#fff;font-size: 16px;">Job Name</div>
                            <ul>
                                <li style="color:#fff;font-size: 16px;"><span class="icon fa fa-user"
                                        style="color:#fff;"></span>Job Description</li>

                            </ul>
                        </div>
                        <div class="content-boxed" style="background-color:blue;">
                            <div class="text" style="color:#fff;font-size: 16px;">Job Name</div>
                            <ul>
                                <li style="color:#fff;font-size: 16px;"><span class="icon fa fa-user"></span>Job
                                    Description</li>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Faq Section -->



    <!--Sponsors Section-->
    <section class="sponsors-section-two" style="background-image:url(images/background/8.jpg)">
        <div class="auto-container">

            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/6.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/7.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/8.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/9.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/10.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/6.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/7.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/8.png" alt=""></a></figure>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Sponsors Section-->



</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<!-- Color Palate / Color Switcher -->
@endslot
</x-layouts>