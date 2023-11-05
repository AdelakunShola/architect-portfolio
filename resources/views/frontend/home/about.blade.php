@php
    $aboutpage = App\Models\AboutUs::find(1);
    $multi_image = App\Models\MultiImage::latest()->get();
@endphp

<div class="section-full p-t90 bg-gray">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 text-uppercase text-black">
                                <span class="font-30 font-weight-300">{{$aboutpage->main_title}}</span>
                                <h2 class="font-40">
                                    {{$aboutpage->short_desc}}
                                </h2>
                                
                                <p class="text-lowercase">{!! $aboutpage->main_desc !!}</p>
                                <a href="javascript:void(0);" class="btn-half site-button button-lg m-b15"><span>Read More</span><em></em></a>
                            </div>

                            <div class="col-md-7 col-sm-12">
                                <div class="m-carousel-1 m-l100">
                                    <div class="owl-carousel home-carousel-1 owl-btn-vertical-center">
                                        <!-- COLUMNS 1 -->


                            


                                   @foreach ($multi_image as $image)
                                        <div class="item">
                                            <div class="ow-img wt-img-effect zoom-slow">
                                                <a href=""><img src="{{ asset('/'.$image->multi_image) }}" alt="img"></a>
                                            </div>
                                        </div>
                                        @endforeach
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                            <strong>18 Year</strong>
                            <span class="text-black">Experience Working</span>
                        </div>
                    </div>
                   
                </div>
            </div>