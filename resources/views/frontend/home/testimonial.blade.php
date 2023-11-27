@php
    $testimonial = App\Models\Testimonial::latest()->get();
@endphp
<div class="section-full p-t140 bg-repeat " style="background-image: url('{{ asset('frontend/assets/images/background/ptn-1.png') }}')">
                <div class="container">         
                    <div class="section-content">
                        <!-- TITLE START -->
                        <div class="section-head text-left">
                            <h2 class="text-uppercase font-36">Testimonials</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator bg-black"></div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                        <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                        <div class="section-content">
                            <div class="owl-carousel testimonial-home">


                            @foreach($testimonial as $item)
                                <div class="item">
                                    <div class="testimonial-6">
                                        <div class="testimonial-pic-block">
                                            <div class="testimonial-pic">
                                                <img src="{{asset($item->image)}}" width="132" height="132" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix bg-white">
                                            <div class="testimonial-detail clearfix">
                                                <strong class="testimonial-name">{{$item->name}}</strong>
                                                <span class="testimonial-position p-t0">{{$item->position}}</span>
                                            </div>
                                            <div class="testimonial-paragraph text-black p-t15">
                                                <span class="fa fa-quote-left"></span>
                                                <p>{{$item->text}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                              
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                        <strong>Client</strong>
                        <span class="text-black">Says</span>
                    </div>
                </div>
            </div>