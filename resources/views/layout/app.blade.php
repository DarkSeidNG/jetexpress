<!DOCTYPE html>
<html>
<head>
    <title>JetExpress</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="Express Errands" />
    <meta property="og:site" content="http://www.expresserrands.com/" />
    <meta property="og:title" content="Express Errands"/>
    <meta property="og:description" content="Express Errands is a specialized courier service as well as helping you with your daily errands. We have trained staff in Lagos that are always ready to serve your daily needs as well as delivering your errands order as your request may be. Express Errands are fast and reliable with 24/7 online support. With a large client base ranging from blue chip companies to personal clients, coupled with our team of experienced drivers and logistics experts, you will be assured of careful handling of your fragile items, friendly and professional courier service and prompt delivery" />
    <meta property="og:url" content="http://www.expresserrands.com/" />
    <meta property="og:type" content="article" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="">
    <meta name="keywords" content="jetexpress logistics errands, logistics, courier service, dispatch riders, dispatch bikers, dispatch, logistics company in nigeria, logistics company in lagos, pickup and delivery, errands, riders, drivers, fast dispatch riders in lagos nigeria, fast pickup and delivery in lagos nigeria">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css">
    <!-- Fonts Css -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/font-elegant/elegant.css">
    <!-- OwlCarousel2 Slider Css -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl.carousel.2/assets/owl.carousel.css">


    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- Main Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">


    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.js"></script>
    <![endif]-->
</head>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+2347063978814", // WhatsApp number
            call_to_action: "Instant Response via WhatsApp", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
<body id="home">
<!-- Preloader -->
<div id="preloader">

    <div class="small1">
        <div class="small ball smallball1"></div>
        <div class="small ball smallball2"></div>
        <div class="small ball smallball3"></div>
        <div class="small ball smallball4"></div>
    </div>


    <div class="small2">
        <div class="small ball smallball5"></div>
        <div class="small ball smallball6"></div>
        <div class="small ball smallball7"></div>
        <div class="small ball smallball8"></div>
    </div>

    <div class="bigcon">
        <div class="big ball"></div>
    </div>

</div>
<!-- /.Preloader -->


<!-- Main Wrapper -->
<main class="wrapper">

    <!-- Header -->
    <header class="header-main header-style3">

        <!-- Header Topbar -->
        <div class="top-bar2">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <a class="navbar-logo" href="{{url('/')}}"> <img src="assets/img/logo/logo.jpg" alt="logo" /> </a>
                    </div>
                    <div class="col-md-10 col-sm-12 fs-12 text-right">
                        <ul class="list-inline">
                            <li><p class="theme-clr font2-title1"> <br/> 16B, Omorinre Johnson Street, Lekki Phase 1, Lagos </p> </li>
                            <li><p class="theme-clr font2-title1"> <br/> Mon-Sun, 8am-6pm</p></li>
                            <li><p class="theme-clr font2-title1"> <br/> +234-706-695-6190</p></li>
                            <li><p class="theme-clr font2-title1"> <br/> +234-708-415-0086</p></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.Header Topbar -->

        <!-- Header Logo & Navigation -->
        <nav class="menu-bar font2-title1 white-clr">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-xs-12 visible-xs">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12 fs-12">
                        <a class="sticky-logo hidden-sm" href="{{url('/')}}"> <img alt="" src="assets/img/logo/logo.jpg" style="height: 100%; width: auto;" /> </a>
                        <div id="navbar" class="collapse navbar-collapse no-pad">
                            <ul class="navbar-nav theme-menu">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about-us')}}">about</a></li>
                                <li><a href="{{url('/services')}}">services</a></li>
                                <li><a href="{{url('/faq')}}">faq</a></li>
                                <li><a href="{{url('/request')}}">request pickup & delivery</a></li>
                                <li><a href="{{url('/contact')}}">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- /.Header Logo & Navigation -->

    </header>
    <!-- /.Header -->

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="footer-bottom">
            <div class="theme-container container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p> © Copyright {{date('Y')}} JetExpress. All rights reserved </p>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <p> Powered by <a href="http://ifwaxtel.com/" class="main-clr"> iFwAxTeL </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.Footer -->

</main>
<!-- / Main Wrapper -->

<!-- Top -->
<div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

<!-- Main Jquery JS -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<!-- Bootstrap JS -->
<script src="assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Bootstrap Select JS -->
<script src="assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<!-- OwlCarousel2 Slider JS -->
<script src="assets/plugins/owl.carousel.2/owl.carousel.min.js" type="text/javascript"></script>
<!-- Sticky Header -->
<script src="assets/js/jquery.sticky.js"></script>
<!-- Wow JS -->
<script src="assets/plugins/WOW-master/dist/wow.min.js" type="text/javascript"></script>

<!-- Slider JS -->


<!-- Theme JS -->
<script src="assets/js/theme.js" type="text/javascript"></script>

</body>
</html>
