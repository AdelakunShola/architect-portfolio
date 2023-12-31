@extends('frontend.main_master')
@section('main')

@php
    $aboutpage = App\Models\AboutUs::find(1);
    $multi_image = App\Models\MultiImage::latest()->get();
@endphp






        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url('{{ asset('frontend/assets/images/banner/3.jpg') }}')">

                <div class="overlay-main bg-black opacity-07"></div>                                                                      
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Fusing logic with imagination and truth with discovery.</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
             
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-tb90 bg-gray square_shape2">
                <div class="container">
                    <div class="section-content ">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <div class="m-about m-l50 m-r50">
                                    <div class="owl-carousel about-us-carousel owl-btn-bottom-right">
                                        <!-- COLUMNS 1 -->
                                        @foreach ($multi_image as $image)
                                        <div class="item">
                                            <div class="ow-img wt-img-effect zoom-slow">
                                                <a href="javascript:void(0);"><img src="{{ asset('/'.$image->multi_image) }}" alt="" style="width: 360px; height:380px;"></a>
                                            </div>
                                        </div>
                                        @endforeach
                                       
                                   </div>
                               </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="m-about-containt text-uppercase text-black p-t30">
                                    <span class="font-30 font-weight-300">About Us</span>
                                    <h2 class="font-40">{{$aboutpage->main_title}}</h2>
                                  
                                    <p class="text-lowercase">{!! $aboutpage->main_desc !!} </p>
                                    
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>   
            <!-- ABOUT COMPANY SECTION END -->
             
      
            
  
                       
            <!-- OUR STORY SECTION START -->
         
            <!-- OUR STORY SECTION END -->        
            
            @endsection
            
      
        
       
        
         


