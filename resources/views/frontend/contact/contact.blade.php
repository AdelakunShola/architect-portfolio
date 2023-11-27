@extends('frontend.main_master')
@section('main')



      	
        <!-- HEADER START -->
     
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url('{{ asset('frontend/assets/images/banner/5.jpg') }}')">
            	<div class="overlay-main bg-black opacity-07"></div> 
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Inspired design for people</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Contact us</li>
                                </ul>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
             
            <!-- SECTION CONTENTG START -->
            <div class="section-full p-tb80">
                <!-- LOCATION BLOCK-->
                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head text-left text-black">
                        <h2 class="text-uppercase font-36">Where to Find us </h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-black"></div>
                        </div>
                    </div>
                    <!-- TITLE END -->                
                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="section-content">
                        <!-- CONTACT FORM-->
                        <div class="wt-box">
                            
                            	<div class="contact-one p-a40 p-r150">
                                <form class="" method="POST" action="{{ route('store.contact') }}">
                            @csrf
                                            <div class="form-group">
                                                <input name="name" id="name" type="text" required class="form-control" placeholder="Name">
                                            </div>
                                       
                                            <div class="form-group">
                                                <input name="email" type="text" id="email" required data-error="Please enter your email" class="form-control"  placeholder="Email">
                                            </div>

                                            <div class="form-group">
                                                <input name="phone" id="phone_number" type="text" data-error="Please enter your number" required class="form-control" placeholder="Phone">
                                            </div>
                                       
                                            <div class="form-group">
                                                <textarea name="message" rows="3" class="form-control " required placeholder="Message"></textarea>
                                            </div>
                                        
                                            <button name="submit" type="submit" value="Submit" class="site-button black radius-no text-uppercase">
                                                    <span class="font-12 letter-spacing-5">Submit</span>
                                            </button>

                                            </form>
                                            

 
                                            @php
                                                 $setting = App\Models\SiteSetting::find(1);
                                            @endphp
                                            <div class="contact-info bg-black text-white p-a30">
                                                <div class="wt-icon-box-wraper left p-b30">
                                                    <div class="icon-sm"><i class="iconmoon-smartphone-1"></i></div>
                                                    <div class="icon-content text-white ">
                                                        <h5 class="m-t0 text-uppercase">Phone number</h5>
                                                        <p>{{ $setting->phone }}</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="wt-icon-box-wraper left p-b30">
                                                    <div class="icon-sm"><i class="iconmoon-email"></i></div>
                                                    <div class="icon-content text-white">
                                                        <h5 class="m-t0  text-uppercase">Email address</h5>
                                                        <p>{{ $setting->email }}</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="wt-icon-box-wraper left">
                                                    <div class="icon-sm"><i class="iconmoon-travel"></i></div>
                                                    <div class="icon-content text-white">
                                                        <h5 class="m-t0  text-uppercase">Address info</h5>
                                                        <p>{{ $setting->address }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            
                        </div>
                    </div>
                </div>
           </div>
           
            <div class="section-full">
                <div class="gmap-outline">
                    <div id="gmap_canvas4" class="google-map"></div>
                </div>
           </div>           
            <!-- SECTION CONTENT END -->
            
        </div>
        <!-- CONTENT END -->

   
@endsection