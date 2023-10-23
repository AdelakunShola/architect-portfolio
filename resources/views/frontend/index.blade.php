@extends('frontend.main_master')  
@section('main')
       
       <!-- CONTENT START -->
        <div class="page-content">

            <!-- SLIDER START -->
            @include('frontend.home.welcomeslider')
            <!-- SLIDER END -->

            <!-- WELCOME SECTION START -->
            @include('frontend.home.about')
            <!-- WELCOME  SECTION END -->

            <!-- LATEST PRJECTS SLIDER START -->
            @include('frontend.home.latest_project')
            <!-- LATEST PRJECTS SLIDER END -->


            <!-- OUR EXPERTS SECTION START -->
            @include('frontend.home.expert')
            <!-- OUR EXPERTS SECTION END -->



            <!-- COMPANY DETAIL SECTION START -->
            @include('frontend.home.company_details ')
            <!-- COMPANY DETAIL SECTION End -->

            <!-- TESTIMONIALS SECTION START -->
            @include('frontend.home.testimonial')
            <!-- TESTIMONIALS SECTION END -->

            <!-- CLIENT LOGO SECTION START -->
            @include('frontend.home.client_logo')
            <!-- CLIENT LOGO  SECTION End -->

        </div>
        <!-- CONTENT END -->

@endsection