@php
    
    $project = App\Models\ProjectDetail::latest()->get();
    $projecttype = App\Models\ProjectType::latest()->get();

@endphp
<div class="section-full p-t90 p-lr80 latest_project-outer square_shape3">

                <!-- TITLE START -->
                <div class="section-head text-left">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="text-uppercase font-36">Latest Project</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator bg-black"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="btn-filter-wrap">
                                <li class="btn-filter btn-active" data-filter="*">All Project</li>
                                @foreach($project as $item)
                                <li class="btn-filter" data-filter=".building-col"></li>
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->

                <!-- IMAGE CAROUSEL START -->
                <div class="section-content">
                    <div class="owl-carousel owl-carousel-filter  owl-btn-bottom-left">
                        <!-- COLUMNS 1 -->

                        @foreach($project as $item)
                        <div class="item fadingcol building-col">
                            <div class="wt-img-effect ">
                                <img src="{{ asset('/'.$item->image) }}" alt="img">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="javascript:void(0);" class="text-white font-20 letter-spacing-4 text-uppercase">{{ $item->title }}</a></h2>
                                            <p>{{ $item->short_desc }}</p>
                                            <a href="javscript:;" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       

                       

                    </div>
                    @endforeach
                </div>

                <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                    <strong>Awesome</strong>
                    <span class="text-black">Designs</span>
                </div>
            </div>