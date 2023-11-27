@php
    $team = App\Models\Team::latest()->get();
    $firstTeamMember = $team->first(); // Get the first item from the collection
@endphp

<div class="section-full bg-gray square_shape3">
    <div class="container-fluid">
        <div class="section-content">
            <div class="row">
                <div class="col-md-6 col-sm-12 bg-black square_shape1 square_shape2">
                    <div class="wt-left-part m-experts p-t90">
                        <!-- TITLE START -->
                        <div class="section-head text-left text-white">
                            <h2 class="text-uppercase font-36">Our experts</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator bg-white"></div>
                            </div>
                        </div>
                        <!-- TITLE END -->

                        <div class="wt-team-six large-pic">
                            <div class="wt-team-media wt-thum-bx">
                                <img src="{{ asset($firstTeamMember->image) }}" alt="">
                            </div>
                            <div class="wt-team-info text-center p-lr10 p-tb20 text-white">
                                <h2 class="wt-team-title text-uppercase"><a href="javascript:void(0);" class="text-white font-32 font-weight-500">{{ $firstTeamMember->name }}</a></h2>
                                <p class="font-22">{{ $firstTeamMember->position }}</p>
                                <ul class="social-icons social-md social-square social-dark white-border has-bg">
                                    <li><a href="{{ $firstTeamMember->twitter }}" class="fa fa-twitter"></a></li>
                                    <li><a href="{{ $firstTeamMember->youtube }}" class="fa fa-youtube"></a></li>
                                    <li><a href="{{ $firstTeamMember->instagram }}" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="hilite-title p-lr20 m-tb20 text-left text-uppercase bdr-gray bdr-left">
                            <strong class="text-gray">Experts</strong>
                            <span class="text-white">Team Members</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="wt-right-part team-outer">
                        <div class="row">
                            <!-- COLUMNS 1 -->
                            @foreach($team->slice(1, 3)->reverse() as $item)
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                <div class="wt-team-six bg-white">
                                    <div class="wt-team-media wt-thum-bx wt-img-overlay1">
                                        <img src="{{ asset($item->image) }}" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <ul class="social-icons social-square social-dark">
                                                    <li><a href="{{ $item->twitter }}" class="fa fa-twitter"></a></li>
                                                    <li><a href="{{ $item->youtube }}" class="fa fa-youtube"></a></li>
                                                    <li><a href="{{ $item->instagram }}" class="fa fa-instagram"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-team-info text-center bg-white p-lr10 p-tb20">
                                        <h5 class="wt-team-title text-uppercase m-a0"><a href="javascript:void(0);">{{ $item->name }}</a></h5>
                                        <p class="m-b0">{{ $item->position }}</p>
                                        <!--- Additional content here -->
                                    </div>
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
