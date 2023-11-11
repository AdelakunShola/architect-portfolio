@extends('frontend.main_master')
@section('main')

@php
    
    $project = App\Models\ProjectDetail::latest()->get();
    $projecttype = App\Models\ProjectType::latest()->get();

@endphp


<div class="page-wraper"> 
       	
           <!-- HEADER START -->
         
           <!-- HEADER END -->
           
           <!-- CONTENT START -->
           <div class="page-content">
               <!-- INNER PAGE BANNER -->
               <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(images/banner/6.jpg);">
                   <div class="overlay-main bg-black opacity-07"></div>
                   <div class="container">
                       <div class="wt-bnr-inr-entry">
                           <div class="banner-title-outer">
                               <div class="banner-title-name">
                                   <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Sustainability, Innovation, and Craftmanship</h2>
                               </div>
                           </div>
                           <!-- BREADCRUMB ROW -->                            
                           <div class="p-tb20">
                               <div>
                                   <ul class="wt-breadcrumb breadcrumb-style-2">
                                       <li><a href="javascript:void(0);">Home</a></li>
                                       <li>Work grid</li>
                                   </ul>
                               </div>
                           </div>
                           <!-- BREADCRUMB ROW END -->                        
                       </div>
                   </div>
               </div>
               <!-- INNER PAGE BANNER END -->
               
               <!-- SECTION CONTENT START -->
               <div class="section-full p-tb90">
                   <div class="container">
                       <!-- PAGINATION START -->
                       <div class="filter-wrap p-tb50">
                           <ul class="masonry-filter link-style  text-uppercase">
                                   <li class="active"><a data-filter="*" href="#">All</a></li>
                                   <li><a data-filter=".cat-1" href="#">House</a></li>
                                   <li><a data-filter=".cat-2" href="#">Building</a></li>
                                   <li><a data-filter=".cat-3" href="#">Office</a></li>
                                   <li><a data-filter=".cat-4" href="#">Garden</a></li>
                                   <li><a data-filter=".cat-5" href="#">Interior</a></li>
                           </ul>
                       </div>
                       <!-- PAGINATION END -->
                   </div>
                   <!-- GALLERY CONTENT START -->

                                   </div>
                                   @endforeach
                                                                                                                                
                               </div>
                           </div>
                       </div>
                   <!-- GALLERY CONTENT END -->
               
               </div>
               <!-- SECTION CONTENT END  -->
   
           </div>
           <!-- CONTENT END -->
           
           <!-- FOOTER START -->
           
           <!-- FOOTER END -->
   
           <!-- BUTTON TOP START -->
           <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
           
       </div>
    
  





@endsection