@extends('layouts.app')
@section('content')
<div class="page-content ">
   <!-- INNER PAGE BANNER -->
   <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/images/banner/blog-banner.jpg);">
      <div class="overlay-main bg-black" style="opacity:0.5;"></div>
      <div class="container">
         <div class="wt-bnr-inr-entry">
            <center>
               <h1 class="text-white">About Us</h1>
            </center>
         </div>
      </div>
   </div>
   
   <div class="section-full p-t80 p-b50 bg-gray">
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <div class="blog-post blog-lg date-style-3 date-skew">
                  <div class="wt-post-media wt-img-effect zoom-slow">
                     <a href="javascript:void(0);"><img src="assets/images/blog/default/thum1.jpg" alt=""></a>
                  </div>
                  <div class="wt-post-info p-a30 p-b15  bg-white">
                     <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">About  Live Builders</a></h3>
                     </div>
                     <div class="wt-post-text">
                        <p>Live Builders is one of the best real estate developers in chennai,Tamilnadu. We specialize in building premier and Baget residential projects . We bring you the finest homes that are unsurpassed in quality and elegance.</p>
                     </div>
                     <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">Our Mission </a></h3>
                     </div>
                     <div class="wt-post-text">
                        <p>Adopting best process, quality and ethical standard
                           Using our experience and expertise to enhance value to customers money and time
                           Implementing continuous improvement in work standard to provide maximum customer satisfaction
                           Developing technological proficiencies
                        </p>
                     </div>
                     <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">Our Visson </a></h3>
                     </div>
                     <div class="wt-post-text">
                        <p>We are passionate about building homes and our brand. We want to take it to even greater heights. We want to be exceptional. We are taking this passion and running with it. We are pushing the boundaries, connecting, sharing, learning, creating and doing whatever it takes to be the best in the industry.</p>
                     </div>
                     <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">History</a></h3>
                     </div>
                     <div class="wt-post-text">
                        <p>Started way back 1985 by a group of professional, the LIVE BUILDERS came into being from 1996 through sustained and dedicated efforts. At present this concern develops properties (promotes residential flats, commercial complexes) and builds bungalows, commercial complexes and industrial buildings to their clients with the association and guidance of the leading Architects of this Metropolis and other cities too.</p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- LEFT PART END -->
            <!-- SIDE BAR START -->
            <div class="col-lg-3 col-md-3 col-sm-3">
               <div class="section-head">
                  <h4 class="text-uppercase">Upcoming Projects</h4>
               </div>
               <div class="section-content">
                  <div class="owl-carousel client-logo-carousel-1 owl-btn-center-lr">
                     @foreach ($Upcomingprojects as $pro)
                     <div class="item">
                        <div class="ow-client-logo">
                           <div class="client-logo wt-img-effect client-logo-media on-color bdr-1 bdr-gray">
                              <a href="javascript:void(0);"><img src="{{ URL::to('/') }}/upload/projectsave/{{ $pro->photo }}" alt=""></a>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <hr>
               <div class="section-head">
                  <h4 class="text-uppercase">Progress Projects</h4>
               </div>
               <div class="section-content">
                  <div class="owl-carousel client-logo-carousel-1 owl-btn-center-lr">
                     @foreach ($Progressprojects as $pro)
                     <div class="item">
                        <div class="ow-client-logo">
                           <div class="client-logo wt-img-effect client-logo-media on-color bdr-1 bdr-gray">
                              <a href="javascript:void(0);"><img src="{{ URL::to('/') }}/upload/projectsave/{{ $pro->photo }}" alt=""></a>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <hr>
               <div class="section-head">
                  <h4 class="text-uppercase">Completed Projects</h4>
               </div>
               <div class="section-content">
                  <div class="owl-carousel client-logo-carousel-1 owl-btn-center-lr">
                     @foreach ($Completedprojects as $pro)
                     <div class="item">
                        <div class="ow-client-logo">
                           <div class="client-logo wt-img-effect client-logo-media on-color bdr-1 bdr-gray">
                              <a href="javascript:void(0);"><img src="{{ URL::to('/') }}/upload/projectsave/{{ $pro->photo }}" alt=""></a>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <hr>
            </div>
         </div>
         </aside>
      </div>
   </div>
</div>
<footer class="site-footer footer-dark">
<div class="call-to-action-wrap call-to-action-skew" style="background-image:url(images/background/bg-4.png); background-repeat:repeat;background-color:#273447;">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-sm-8">
            <div class="call-to-action-left p-tb20 p-r50">
               <h4 class="text-uppercase m-b10">We are ready to build your dream tell us more about your project</h4>
               <p></p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="call-to-action-right p-tb30">
               <a href="contact-us.php" class="site-button skew-icon-btn m-r15 text-uppercase"  style="font-weight:600;">
               Contact us <i class="fa fa-angle-double-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection