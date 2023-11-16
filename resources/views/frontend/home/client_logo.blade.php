@php
    $client = App\Models\Client::latest()->get();
@endphp
<div class="section-full p-tb40 bg-black square_shape4">
                <div class="container">
                    <div class="section-content">

                        <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <!-- TITLE START -->
                                    <div class="text-left">
                                        <h2 class="text-uppercase font-36 text-white">Our Clients</h2>
                                        <div class="wt-separator-outer">
                                            <div class="wt-separator bg-white"></div>
                                        </div>
                                    </div>
                                    <!-- TITLE END -->
                                </div>

                                <div class="col-md-8 col-sm-12">
                                    <div class="section-content bg-white p-tb10">
                                        <div class="owl-carousel home-client-carousel owl-btn-center-v">

                                        @foreach($client as $item)
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo client-logo-media">
                                                        <a href="javascript:void(0);"><img src="{{asset($item->image)}}" alt=""></a></div>
                                                </div>
                                            </div>
                                            @endforeach

                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>