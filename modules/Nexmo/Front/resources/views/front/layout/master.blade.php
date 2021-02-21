<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
@yield('seo')
<!-- Favicons -->
    <link href="{{asset('front/img/favicon.png')}}" rel="icon">
    <link href="{{asset('front/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('front/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('front/lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/venobox/venobox.css')}}" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="{{asset('front/css/nivo-slider-theme.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">
    @yield('css')
</head>

<body data-spy="scroll" data-target="#navbar-example">

<div id="preloader"></div>
@yield('content')
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->

<script src="{{asset('front/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/lib/venobox/venobox.min.js')}}"></script>
<script src="{{asset('front/lib/knob/jquery.knob.js')}}"></script>
<script src="{{asset('front/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('front/lib/parallax/parallax.js')}}"></script>
<script src="{{asset('front/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('front/lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
<script src="{{asset('front/lib/appear/jquery.appear.js')}}"></script>
<script src="{{asset('front/lib/isotope/isotope.pkgd.min.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{asset('front/contactform/contactform.js')}}"></script>

<script src="{{asset('front/js/main.js')}}"></script>
@yield('js')
</body>

</html>
