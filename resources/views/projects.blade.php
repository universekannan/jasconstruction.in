@extends('layouts.app')
@section('content')
<div class="page-content">
   <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ URL::to('/') }}/assets/images/banner/all.jpg);">
      <div class="overlay-main bg-black" style="opacity:0.5;"></div>
      <div class="container">
         <div class="wt-bnr-inr-entry">
            <center>
               <h1 class="text-white">{{ $projecttype->project_status_name }}</h1>
            </center>
         </div>
      </div>
   </div>
   <div class="section-full bg-white  p-t80 p-b70">
      <div class="container">
         <div class="section-content">
            <div class="row">
               @foreach ($products as $pro)
               <div class="col-md-4 col-sm-4 m-b30">
                  <div class="wt-box">
                     <div class="wt-media">
                        <a href="{{ url('project') }}/{{ $pro->id }}"><img src="{{ URL::to('/') }}/upload/projectsave/{{ $pro->photo }}" alt="{{ $pro->project_name }}"></a>
                     </div>
                     <div class="wt-info">
                        <h4 class="wt-title m-t20"><a href="project.php">{{ $pro->project_name }}</a></h4>
                        <p>{{ $pro->project_name }}, {{ $pro->project_name }}{{ $pro->project_owner }},'{{ $pro->project_address }}</p>
                        <a href="{{ url('project') }}/{{ $pro->id }}" class="site-button skew-icon-btn ">More<i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            <td colspan="7" class="mt-2">
               {!! $products->links('pagination::bootstrap-4') !!}
            </td>
         </div>
      </div>
   </div>
</div>
<!-- CONTENT END -->
<footer class="site-footer footer-dark">
<div class="call-to-action-wrap call-to-action-skew" style="background-image:url(assets/images/background/bg-4.png); background-repeat:repeat;background-color:#273447;">
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