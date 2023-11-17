@extends('frontend.main_master')
@section('main')
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(images/banner/3.jpg);">
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
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Services</li>
                                </ul>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
             
          
             
            
            
            <!-- OUR SERVICES SECTION START -->
            <div class="section-full bg-black p-tb90 square_shape1">
                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head text-left text-white">
                        <h2 class="text-uppercase font-36">Our Services</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-white"></div>
                        </div>
                    </div>
                    <!-- TITLE END -->                  
                    <div class="section-content circle-block-outer" data-toggle="tab-hover">
                        <div class="row">
                        
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper right p-a20 m-b50 text-white" data-target="#tab1" data-toggle="tab">
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase">Master Plans</h4>
                                        <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend. </p>
                                    </div>
                                </div> 
                                <div class="wt-icon-box-wraper right p-a20 m-b50 text-white" data-target="#tab2" data-toggle="tab">
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase">Architecture</h4>
                                        <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend. </p>
                                    </div>
                                </div>
                                <div class="wt-icon-box-wraper right p-a20 m-b50 text-white" data-target="#tab3" data-toggle="tab">
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase">Landscaping</h4>
                                        <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend. </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="circle-content-pic tab-content ">
                                    <div id="tab1" class="tab-pane active">
                                        <div class="wt-box">
                                            <div class="wt-media text-primary m-b20 ">
                                                <img src="{{asset('frontend/images/gallery/portrait/pic1.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <div id="tab2" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media text-primary m-b20">
                                                <img src="{{asset('frontend/images/gallery/portrait/pic2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <div id="tab3" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media text-primary m-b20">
                                                <img src="{{asset('frontend/images/gallery/portrait/pic3.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <div id="tab4" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media text-primary m-b20">
                                                <img src="{{asset('frontend/images/gallery/portrait/pic4.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <div id="tab5" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media text-primary m-b20">
                                                <img src="{{asset('frontend/images/gallery/portrait/pic5.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <div id="tab6" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media text-primary m-b20">
                                                <img src="{{asset('frontend/images/gallery/portrait/pic6.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div> 
                                    
                                 </div>  
                            </div>
                            
                            <div class="col-md-4 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper left p-a20 m-b50 text-white" data-target="#tab4" data-toggle="tab">
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase">Interior</h4>
                                        <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend. </p>
                                    </div>
                                </div> 
                                <div class="wt-icon-box-wraper left p-a20 m-b50 text-white" data-target="#tab5" data-toggle="tab">
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase">Construction</h4>
                                        <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend. </p>
                                    </div>
                                </div>
                                <div class="wt-icon-box-wraper left p-a20 m-b50 text-white" data-target="#tab6" data-toggle="tab">
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase">Urban Designs</h4>
                                        <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend. </p>
                                    </div>
                                </div>                                
                            </div>
                            
                        </div>
                    </div>                    
                </div>
                
                
            </div>   
            <!-- OUR SERVICES SECTION END -->  
                       
                            
            
    

        @endsection
        
 
