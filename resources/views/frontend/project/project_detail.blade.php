@php
 $setting = App\Models\SiteSetting::find(1);
@endphp










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

<header class="site-header header-style-1  nav-wide">

<div class="sticky-header main-bar-wraper">
    <div class="main-bar bg-white p-t10">
        <div class="container">
            <div class="logo-header">
                <div class="logo-header-inner logo-header-one">
                    <a href="/">
                    <img src="{{ asset('upload/site/1783078147688200.png') }}" width="171" height="49" alt="" />
                </a>
                </div>
            </div>
            <!-- ETRA Nav -->
            <div class="extra-nav">
                <div class="extra-cell">
                    <a href="javascript:;" class="vnav-btn">
                        <span class="fa fa-bars"></span>
                    </a>
                </div>
            </div>
            <div class="extra-nav">
                <div class="extra-cell">
                    <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                </div>
            </div>

            <div class="extra-nav header-top-info">
                <div class="extra-cell">
                    <div class="wt-topbar-right clearfix top-bar">
                        <ul class="social-bx list-inline pull-right">
                            <li><a href="{{ $setting->facebook }}" class="fa fa-facebook"></a></li>
                            <li><a href="{{ $setting->twitter }}" class="fa fa-twitter"></a></li>
                            <li><a href="{{ $setting->youtube }}" class="fa fa-youtube"></a></li>
                            <li><a href="{{ $setting->instagram }}" class="fa fa-instagram"></a></li>
                        </ul>
                        <ul class="list-unstyled list-inline e-p-bx pull-right">
                            <li><i class="fa fa-envelope"></i>{{ $setting->email }}</li>
                            <li><i class="fa fa-phone"></i>{{ $setting->phone }}</li>
                        </ul>
                    </div>
                </div>
                <div class="extra-cell">
                    <div class="dropdown share-icon-btn2">
                        <a href="javascript:;" class="site-search-btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></a>
                        <div class="dropdown-menu bg-white">
                            <div class="top-bar">
                                <ul class="social-bx list-inline">
                                <li><a href="{{ $setting->facebook }}" class="fa fa-facebook"></a></li>
                                <li><a href="{{ $setting->twitter }}" class="fa fa-twitter"></a></li>
                                <li><a href="{{ $setting->youtube }}" class="fa fa-youtube"></a></li>
                                <li><a href="{{ $setting->instagram }}" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SITE Search -->
         

            <!-- STYLE SWITCHER  ======= -->
            <div class="nav-sidebar">
                <a href="javascript:;" class="vnav-close"></a>
                <div class="nav-siderbar-scroll">
                    <div class="vertical-content-wrap">
                        <div class="vertical-content-area vertical-centered">
                            <!-- MAIN Vav -->
                            <div class="vertical-nav">
                                <ul class=" nav navbar-nav">
                                    <li class="active">
                                        <a href="/">Home</a>
                                     </li>
                                    
                                    <li>
                                        <a href="{{ route('services') }}">Services</a>
                                    </li>
 
                                    <li>
                                         <a href="{{ route('all.project') }}">Projects</a>
                                    </li>

                                     <li>
                                        <a href="{{ route('about') }}">About us</a>
                                    </li>

                                    <li>
                                         <a href="{{ route('contact.us') }}">Contact us</a>
                                    </li>

                                        </ul>
                                    
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- STYLE SWITCHER END ==== -->

        </div>
    </div>
</div>

</header>
        <!-- HEADER END -->

        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image: url('{{ asset('frontend/assets/images/banner/5.jpg') }}')">

                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Improving quality of life with an integrated unified approach.</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li> {{ $projectdetails->project_type }} </li>
                                </ul>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


<br><br>



        <div class="project-detail-outer bg-top-left bg-parallax bg-center"  data-stellar-background-ratio="0.5"  style="background-image:url('{{ asset('frontend/assets/images/banner/5.jpg') }}')">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 project-detail-pic"></div>
                            <div class="col-md-6 col-sm-12 project-detail-containt bg-black square_shape3">
                                <div class="p-lr20 p-tb80">
                                    <div class="bg-white p-lr30 p-tb50 text-black">
                                        <h2 class="m-t0"><span class="font-34 text-uppercase">{{ $projectdetails->	title }}</span></h2>
                                        <p>{!! $projectdetails->	main_desc !!}</p>
                                        <div class="product-block">
                                            <div class="row">
                                              <div class="col-md-6 col-sm-6 m-b30">
                                                <h5 class="text-uppercase">Date</h5>
                                                <p>{{ $projectdetails->created_at->format('Y-m-d') }}</p>
                                              </div>
                                              <div class="col-md-6 col-sm-6 m-b30">
                                                <h5 class="text-uppercase">Client</h5>
                                                <p>{{ $projectdetails->client }}</p>
                                               </div>
                                              <div class="col-md-6 col-sm-6 m-b30">
                                                <h5 class="text-uppercase">Project type</h5>
                                                <p>{{ $projectdetails->project_type }}</p>
                                              </div>
                                              <div class="col-md-6 col-sm-6 m-b30">
                                                <h5 class="text-uppercase">Creative Director</h5>
                                                <p>{{ $projectdetails->project_type }}</p>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="p-t0">
                                            <ul class="social-icons social-square social-darkest m-b0">
                                            <li><a href="{{ $setting->facebook }}" class="fa fa-facebook"></a></li>
                                            <li><a href="{{ $setting->twitter }}" class="fa fa-twitter"></a></li>
                                            <li><a href="{{ $setting->youtube }}" class="fa fa-youtube"></a></li>
                                            <li><a href="{{ $setting->instagram }}" class="fa fa-instagram"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            <!-- SECTION CONTENT START -->
            <div class="section-full p-tb90 bg-repeat" >

                <div class="container-fluid">
                    <div class="section-content">            
                        <div class="work-carousel-outer">
                          <div class="owl-carousel work-carousel owl-btn-vertical-center">
                            <!-- COLUMNS 1 -->
                            @foreach ($multiImage as $image)
                            <div class="item">
                                <div class="wt-img-effect ">
                                    <img src="{{ asset('upload/projectdetail/multi/'.$image->multi_image) }}" alt="">
                                    
                                </div>                                
                            </div>

                            @endforeach
                          
                       </div>
                     </div> 
                     </div>
                 </div>
             </div>           
            <!-- SECTION CONTENT END  -->





           
                
                    

































        </div>
        <!-- CONTENT END -->



  <div class="wt-post-media">
        <iframe width="1000" height="563" src="https://www.youtube.com/embed/{{ $projectdetails->link_url }}?rel=0"  frameborder="0" allowfullscreen></iframe>
  </div>

        <!-- FOOTER START -->
 
<footer class="site-footer bg-gray footer-light footer-wide">

<div class="footer-bottom overlay-wraper">
    <div class="overlay-main bg-black" style="opacity:0;"></div>
    <div class="container p-t30">
        <div class="row">

            <div class="col-md-4 wt-footer-bot-left">
                <a href="/"><img src="{{ asset('upload/site/1783078147688200.png') }}" width="140" height="58" alt=""></a>
            </div>

            <div class="col-md-4 text-center copyright-block p-t15">
                <span class="copyrights-text">© {{ $setting->copyright }}</span>
            </div>

            <div class="col-md-4 wt-footer-bot-right p-t15">
                <ul class="copyrights-nav pull-right">
                    <li><a href="javascript:void(0);">Terms  & Condition</a></li>
                    <li><a href="javascript:void(0);">Privacy Policy</a></li>
                    <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
</footer> 

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
        <!-- FOOTER END -->

       
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