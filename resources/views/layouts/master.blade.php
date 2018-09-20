<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Transportation & Agency Template is a simple Smooth transportation and Agency Based Template" />
    <meta name="keywords" content="Portfolio, Agency, Onepage, Html, Business, Blog, Parallax" />

    <!--====== TITLE TAG ======-->
    <title>PT BONA NUSANTARA RAYA SAKTI</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('carries/img/favicon_bona.png') }}" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="{{ asset('carries/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('carries/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('carries/css/stellarnav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('carries/css/owl.carousel.css') }}">
    <link href="{{ asset('carries/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('carries/css/font-awesome.min.css') }}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('carries/style.css') }}" rel="stylesheet">
    <link href="{{ asset('carries/css/responsive.css') }}" rel="stylesheet">

    <script src="{{ asset('carries/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home-three">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--- PRELOADER -->
<div class="preeloader">
    <div class="preloader-spinner"></div>
</div>

<!--SCROLL TO TOP-->
<a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

<!--START TOP AREA-->
@yield('header')
<!--END TOP AREA-->
@yield('content')
<!--ABOUT AREA-->
@yield('section_about')
<!--ABOUT AREA END-->

<!--SERVICE AREA-->
@yield('section_service')
<!--SERVICE AREA END-->

<!--PROMO AREA-->
@yield('section_promo')
<!--PROMO AREA END-->

<!--BLOG AREA-->
@yield('section_blog')
<!--BLOG AREA END-->

<!--TESTMONIAL AREA -->
@yield('section_testimonial')
<!--TESTMONIAL AREA END -->

<!--CLIENTS AREA-->
@yield('section_client')
<!--CLIENTS AREA END-->

<!--FOOER AREA-->
<div class="footer-area dark-bg">
    <div class="footer-area-bg"></div>
    <div class="footer-top-area wow fadeIn">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="footer-border"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-8 col-xs-12">
                    <div class="single-footer-widget footer-about">
                        <h3>About Us</h3>
                        <p>
                            PT.BONA NUSANTARA RAYA SAKTI adalah perusahaan yang bergerak dibidang jasa pengiriman barang
                            (ekspedisi) untuk antar kota ataupun antar pulau yang melalui jalur darat ataupun laut.
                        </p>
                        <ul>
                            <li><i class="fa fa-phone"></i> <a href="#">+62 21 420 2660, +62 21 4288 3183 (hunting)</a></li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:business@bonanusantara.com">business@bonanusantara.com</a></li>
                            <li><i class="fa fa-map-marker"></i> Jl.Garuda No.80 F
                                Jakarta 10620 - Indonesia </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-8 col-xs-12">
                    <div class="single-footer-widget list-widget">
                        <h3>Customer Service</h3>
                        <ul>
                            <li><a href="#">Support Forums</a></li>
                            <li><a href="#">Communication</a></li>
                            <li><a href="#">FAQS</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Rules & Condition</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-8 col-xs-12">
                    <div class="single-footer-widget instafeed-widget">
                        <h3>Customer Service</h3>
                        <ul>
                            <li><a href="#"><img src="{{ asset('carries/img/instafeed/1.jpg') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('carries/img/instafeed/2.jpg') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('carries/img/instafeed/3.jpg') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('carries/img/instafeed/4.jpg') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('carries/img/instafeed/5.jpg') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('carries/img/instafeed/6.jpg') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-border"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="footer-copyright wow fadeIn">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="http://bonanusantara.com"> Bona Nusantara </a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="footer-social-bookmark text-right wow fadeIn">
                        <ul class="social-bookmark">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FOOER AREA END-->


<!--====== SCRIPTS JS ======-->
<script src="{{ asset('carries/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('carries/js/vendor/bootstrap.min.js') }}"></script>

<!--====== PLUGINS JS ======-->
<script src="{{ asset('carries/js/vendor/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('carries/js/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('carries/js/vendor/jquery.appear.js') }}"></script>
<script src="{{ asset('carries/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('carries/js/stellar.js') }}"></script>
<script src="{{ asset('carries/js/wow.min.js') }}"></script>
<script src="{{ asset('carries/js/stellarnav.min.js') }}"></script>
<script src="{{ asset('carries/js/contact-form.js') }}"></script>
<script src="{{ asset('carries/js/jquery.sticky.js') }}"></script>

<!--===== ACTIVE JS=====-->
<script src="{{ asset('carries/js/main.js') }}"></script>
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 10009505;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<!-- End of LiveChat code -->
</body>

</html>
