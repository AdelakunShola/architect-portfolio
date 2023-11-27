@php
 $setting = App\Models\SiteSetting::find(1);
@endphp
<footer class="site-footer bg-gray footer-light footer-wide">

<div class="footer-bottom overlay-wraper">
    <div class="overlay-main bg-black" style="opacity:0;"></div>
    <div class="container p-t30">
        <div class="row">

            <div class="col-md-4 wt-footer-bot-left">
                <a href="/"><img src="{{ $setting->logo }}" width="140" height="58" alt=""></a>
            </div>

            <div class="col-md-4 text-center copyright-block p-t15">
                <span class="copyrights-text">© {{ $setting->copyright }}</span>
            </div>

            <div class="col-md-4 wt-footer-bot-right p-t15">
                <ul class="copyrights-nav pull-right">
                    <li><a href="javascript:void(0);">Terms  & Condition</a></li>
                    <li><a href="javascript:void(0);">Privacy Policy</a></li>
                    <li><a href="contact-1.html">Contact Us</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
</footer> 

 <!-- BUTTON TOP START -->
 <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
        
        </div>
    
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <svg id="triangle" width="140px" height="140px" viewBox="-3 -4 39 39">
              <polygon fill="#fff" stroke="#000" stroke-width="2" points="16,0 32,32 0,32"></polygon>
            </svg>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->  