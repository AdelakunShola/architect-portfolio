<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Elroi's Render</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/fontawesome/css/font-awesome.min.css')}}" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/loader.min.css')}}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
    <!-- REVOLUTION SLIDER 4 STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/rev-slider-4.css')}}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/plugins/revolution/revolution/css/navigation.css')}}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">

</head>

<body>

    <div class="page-wraper">

        <!-- HEADER START -->
      @include('frontend.body.header')
        <!-- HEADER END -->

        @yield('main')

        <!-- FOOTER START -->
        @include('frontend.body.footer')
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>


    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <svg id="triangle" width="140px" height="140px" viewBox="-3 -4 39 39">
		  <polygon fill="#fff" stroke="#000" stroke-width="2" points="16,0 32,32 0,32"></polygon>
		</svg>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{asset('frontend/assets/js/jquery-1.12.4.min.js')}}"></script>
    <!-- JQUERY.MIN JS -->
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <!-- BOOTSTRAP.MIN JS -->



    <script src="{{asset('frontend/assets/js/magnific-popup.min.js')}}"></script>
    <!-- MAGNIFIC-POPUP JS -->

    <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
    <!-- WAYPOINTS JS -->
    <script src="{{asset('frontend/assets/js/counterup.min.js')}}"></script>
    <!-- COUNTERUP JS -->
    <script src="{{asset('frontend/assets/js/waypoints-sticky.min.js')}}"></script>
    <!-- COUNTERUP JS -->

    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- MASONRY  -->

    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <!-- OWL  SLIDER  -->
    <script src="{{asset('frontend/assets/js/jquery.owl-filter.js')}}"></script>

    <script src="{{asset('frontend/assets/js/stellar.min.js')}}"></script>
    <!-- PARALLAX BG IMAGE   -->
    <script src="{{asset('frontend/assets/js/scrolla.min.js')}}"></script>
    <!-- ON SCROLL CONTENT ANIMTE   -->

    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    <!-- CUSTOM FUCTIONS  -->
    <script src="{{asset('frontend/assets/js/shortcode.js')}}"></script>
    <!-- SHORTCODE FUCTIONS  -->
    <!-- REVOLUTION JS FILES -->

    <script src="{{asset('frontend/assets/css/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontend/assets/css/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('frontend/assets/css/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{asset('frontend/assets/js/rev-script-1.js')}}"></script>

</body>

</html>