@extends('frontend.main_master')
@section('main')

@php
 $setting = App\Models\SiteSetting::find(1);
@endphp



 <!-- CONTENT START -->
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
        <iframe width="1000" height="563" src="https://www.youtube.com/embed/{{ $projectdetails->link_url }}"></iframe>
  </div>



@endsection