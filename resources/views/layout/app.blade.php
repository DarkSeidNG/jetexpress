<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>JetExpress | Nigeria's number one logistics company</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="generator" content="2017.0.0.363"/>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/JiSlider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- Owl-carousel-CSS --><link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="https://fonts.googleapis.com/css62d2.css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,900" rel="stylesheet">

    <!-- banner -->
    <link rel="shortcut icon" href="images/sachlight-express--trusted-nigeria-delivery%2c-cargo-and-logistics-faviconab47.ico?crc=3910585358"/>

</head>
<body>
<div class="main_section_agile" style="background:#000">
    <div class="agileits_w3layouts_banner_nav">

        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="index-2.html"><img alt="" width="177" height="62" src="images/sachlog.png"/></a></h1>

            </div>

            <ul class="agile_forms">
                <li><a href="https://m.facebook.com/Sachlight/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> </a> </li>
                <li><a href="https://mobile.twitter.com/sachlighte" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
                <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
                <li><a href="https://www.instagram.com/sachlight_express/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                <li><a href="http://sachlightexpress.com:2095/" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i> </a> </li>


            </ul>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-2" id="link-effect-2">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}" class="effect-3" style="color:#E88614">Home</a></li>
                        <li ><a href="{{url('/about-us')}}" class="effect-3" style="color:#E88614">About Us</a></li>
                        <li ><a href="{{url('/services')}}" class="effect-3" style="color:#E88614">Services</a></li>
                        <li><a href="#" class="effect-3" style="color:#E88614" data-toggle="modal" data-target="#myModal4">Send Package</a></li>
                        <li ><a href="{{url('/mail')}}" class="effect-3" style="color:#E88614">Mail Us</a></li>
                    </ul>
                </nav>

            </div>
        </nav>
        <div class="clearfix"> </div>
    </div>
</div>

@yield("content");

<!-- //agile_testimonials -->
<!-- footer -->
<!-- Modal2 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <div class="signin-form profile">
                    <div class="login-form">
                        <h5 style="color:#e88614">Need To Transport?</h5>
                        <p  style="color:#e88614">Send package</p>
                        <form method="post" enctype="multipart/form-data" action="http://sachlightexpress.com/index?pg=2">
                            <input type="text" class="form-control" name="sname" placeholder="Sender's Name" required>
                            <input type="tel" class="form-control" name="sphone" placeholder="Sender's Phone Number" required>
                            <input type="email" class="form-control" name="semail" placeholder="Sender's Email" required>
                            <input type="text" class="form-control" name="saddress" placeholder="Sender's Address" required>

                            <input type="text" class="form-control" name="rname" placeholder="Receiver's Name" required>
                            <input type="tel" class="form-control" name="rphone" placeholder="Receiver's Phone Number" required>


                            <input type="text" class="form-control" name="raddress" placeholder="Receiver's Address" required>
                            <input type="text" class="form-control" name="city" placeholder="Destination City" required>
                            <select id="stateid" name="state" class="select2_single form-control" tabindex="-1" onChange="return loadLGA()">
                                <option value="">Destination State</option>
                                <option value="1">Abia State</option>

                                <option value="2">Adamawa State</option>

                                <option value="3">Akwa Ibom State</option>

                                <option value="4">Anambra State</option>

                                <option value="5">Bauchi State</option>

                                <option value="6">Bayelsa State</option>

                                <option value="7">Benue State</option>

                                <option value="8">Borno State</option>

                                <option value="9">Cross River State</option>

                                <option value="10">Delta State</option>

                                <option value="11">Ebonyi State</option>

                                <option value="12">Edo State</option>

                                <option value="13">Ekiti State</option>

                                <option value="14">Enugu State</option>

                                <option value="15">FCT</option>

                                <option value="16">Gombe State</option>

                                <option value="17">Imo State</option>

                                <option value="18">Jigawa State</option>

                                <option value="19">Kaduna State</option>

                                <option value="20">Kano State</option>

                                <option value="21">Katsina State</option>

                                <option value="22">Kebbi State</option>

                                <option value="23">Kogi State</option>

                                <option value="24">Kwara State</option>

                                <option value="25">Lagos State</option>

                                <option value="26">Nasarawa State</option>

                                <option value="27">Niger State</option>

                                <option value="28">Ogun State</option>

                                <option value="29">Ondo State</option>

                                <option value="30">Osun State</option>

                                <option value="31">Oyo State</option>

                                <option value="32">Plateau State</option>

                                <option value="33">Rivers State</option>

                                <option value="34">Sokoto State</option>

                                <option value="35">Taraba State</option>

                                <option value="36">Yobe State</option>

                                <option value="37">Zamfara State</option>

                            </select>

                            <input type="text" class="form-control" name="zipcode" placeholder="Destination Zip/Postcode" required>
                            <input type="text" class="form-control" name="country" placeholder="Destination Country" required>
                            <textarea name="request" class="form-control" placeholder="Additional Request"></textarea>

                            <input type="submit" value="Send Package" class="btn-danger">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal2 -->

<div class="footer">
    <div class="container">
        <div class="w3ls_address_mail_footer_grids">
            <div class="col-md-3 w3ls_footer_grid_left">
                <ul class="agileits_w3layouts_footer_grid_list">
                    <li><a href="index-2.html" style="color:#E88614">Home</a></li>
                    <li><a href="services-sachlight-express.html" style="color:#E88614">Services</a></li>
                    <li><a href="about-sachlight-express.html" style="color:#E88614">About Us</a></li>
                    <li><a href="#" style="color:#E88614" data-toggle="modal" data-target="#myModal4">Send Package</a></li>
                    <li><a href="mail.html" style="color:#E88614">Mail Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left" style="background:#e88614">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <p style="color:#FFF">Suite 35, Block A, Alausa Shopping plaza, Ikeja, Lagos, Nigeria.</p>


            </div>
            <div class="col-md-3 w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left" style="background:#e88614">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <p style="color:#FFF">+234 (0)803 683 5321, <span>+234 (0)704 096 0230</span></p>

            </div>
            <div class="col-md-3 w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left" style="background:#e88614">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <p><a href="mailto:info@sachlightexpress.com" style="color:#e88614">info@sachlightexpress.com</a>
                    <span><a href="mailto:admin@sachlightexpress.com" style="color:#e88614">contact@sachlightexpress.com</a></span>
                </p>
            </div>

            <div class="clearfix"> </div>
        </div>
        <div class="agileinfo_copyright">
            <p>Copyright © 2019 Sachlight Express. All Rights Reserved | Design by <a href="http://noraktech.com/" style="color:#e88614">Norak Technologies Limited</a></p>
        </div>
    </div>
</div><!-- //footer -->

<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/JiSlider.js"></script>
<script>
    $(window).load(function () {
        $('#JiSlider').JiSlider({color: '#e88614', start: 1, reverse: true}).addClass('ff')
    })
</script><script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<script type="text/javascript">
    $(function(){
        $("#bars li .bar").each(function(key, bar){
            var percentage = $(this).data('percentage');

            $(this).animate({
                'height':percentage+'%'
            }, 1000);
        })
    })
</script>
<script src="js/simplePlayer.js"></script>
<script>
    $("document").ready(function() {
        $("#video").simplePlayer();
    });
</script>

<!-- flexisel -->
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:667,
                    visibleItems:2
                },
                tablet: {
                    changePoint:800,
                    visibleItems: 3
                }
            }
        });

    });
</script>
<!-- //flexisel -->

<!-- requried-jsfiles-for owl -->
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo2").owlCarousel({
            items : 1,
            lazyLoad : false,
            autoPlay : true,
            navigation : false,
            navigationText :  false,
            pagination : true,
        });
    });
</script>
<!-- //requried-jsfiles-for owl -->


<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>

</html>
