@php
 $setting = App\Models\SiteSetting::find(1);
@endphp
<header class="site-header header-style-1  nav-wide">

<div class="sticky-header main-bar-wraper">
    <div class="main-bar bg-white p-t10">
        <div class="container">
            <div class="logo-header">
                <div class="logo-header-inner logo-header-one">
                    <a href="/">
                    <img src="{{ $setting->logo }}" width="171" height="49" alt="" />
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