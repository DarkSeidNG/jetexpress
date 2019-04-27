@extends('layout.app')

@section('content')
<!-- Content Wrapper -->
<article>
    <!-- Banner -->
    <section class="banner mask-overlay pad-120 white-clr">
        <div class="container theme-container rel-div">
            <img class="pt-10 effect animated fadeInLeft" alt="" src="assets/img/icons/icon-1.png" />
            <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                <li><a href="index-2.html#">fast</a></li>
                <li><a href="index-2.html#">secured</a></li>
                <li><a href="index-2.html#">worldwide</a></li>
            </ul>
            <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"><span class="theme-clr"> YOUR TRUSTED LOGISTICS PARTNER </span></h2>
        </div>
        <div class="pad-50 visible-lg"></div>
    </section>
    <!-- /.Banner -->

    <!-- About Us -->
    <section class="pad-80 about-wrap clrbg-before">
        <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About </span>
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us">
                        <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About Us </h2>
                        <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">
                            Jet Express Logistics  is a specialized courier service as well as helping you with your daily errands. We operates with well trained and competent staff equipped to meet and deliver required services to your organization.
                            <br/><br/>
                            Jet Express Logistics are fast and reliable with 24/7 online/phone support.
                            <br/><br/>
                            With a large client base ranging from blue chip companies to personal clients, coupled with our team of experienced drivers and logistics experts, you will be assured of careful handling of your fragile items, friendly and professional courier service and prompt delivery.</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="pb-80 visible-lg"></div>
                    <img alt="" src="assets/img/block/about-img.jpg" height="400" class="wow slideInRight" data-wow-offset="50" data-wow-delay=".20s" />
                </div>
            </div>
        </div>
    </section>
    <!-- /.About Us -->

    <!-- Steps -->
    <section class="steps-wrap mask-overlay pad-80">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 1. </div>
                    <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                        <h2 class="title-3">Book</h2>
                        <p class="gray-clr"> </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 2. </div>
                    <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                        <h2 class="title-3">We Pack</h2>
                        <p class="gray-clr"> </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 3. </div>
                    <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">
                        <h2 class="title-3">We Deliver</h2>
                        <p class="gray-clr"> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="assets/img/block/step-img.png" alt="" /> </div>
    </section>
    <!-- /.Steps -->

    <!-- Product Delivery -->
    <section class="prod-delivery">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-11 col-md-offset-1">
                    <div class="pt-120 rel-div" align="center">
                        <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"><span style="background-color: #fff;" ><span class="theme-clr"> fastest </span> pickup and delivery service </span></h2>
                        <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s"><strong>24/7 Service</strong><br>
                            <strong>Security Cleared Drivers</strong><br>
                            <strong>Live Tracking</strong><br>
                            <strong>SMS/Email Alerts</strong><br>
                            <strong>Estimated Delivery Time</strong></p>
                        <div class="pb-120 hidden-xs"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Product Delivery -->


    <!-- Contact us -->
    <section class="contact-wrap pad-120">
        <span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span>
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="title-wrap">
                        <h2 class="section-title wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">contact us</h2>
                        <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s" >Get in touch with us easily</p>
                    </div>

                    <ul class="contact-detail title-2">
                        <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".25s"> <span>Hotlines:</span> <p class="gray-clr">  +234-706-695-6190 <br> +234-708-415-0086 </p> </li>
                        <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Email address:</span> <p class="gray-clr"> info@jetexpress.com</p> </li>
                        <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Location:</span> <p class="gray-clr"> 16B, Omorinre Johnson Street, Lekki Phase 1, Lagos</p> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Contact us -->
</article>
<!-- /.Content Wrapper -->
@endsection
