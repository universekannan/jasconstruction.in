<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
<title>Projects Jas Construction Kanyakumari Dist</title>
<meta name="description" content="Projects Jas Builders is a Construction and Promoters company based in Kanyakumari Dist. We construct commercial and residential buildings . We are the best constructors in india.">
<meta name="keywords" content="Contact Us Jas Builders,construction,architect,builder,construction company in Tambaram,builders in Tambaram, architect in Tambaram,Tambaram builders,architects in Tambaram,architectural firms in Tambaram,architectural firms in Tambaram,architectural firms in Tambaram,list of architects in Tambaram,top construction companies in Tambaram,Architecture firm,Building contractors,Architects,Home builders,Building promoter's,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home builders in Tambaram,Building in Tambaram,promoter's in Tambaram,Construction company in Kanyakumari Dist district,Architecture firm in Kanyakumari Dist district,Building contractors in Kanyakumari Dist district,Architects in Kanyakumari Dist district,Home builders in Kanyakumari Dist district,Building in Kanyakumari Dist district,promoter's in Kanyakumari Dist district,Construction company in tamilnadu,Architecture firm in tamilnadu,Building contractors in tamilnadu,Architects in tamilnadu,Home builders in tamilnadu,Building in tamilnadu,promoter's in tamilnadu,Construction company in India,Architecture firm in India,Building contractors in India,Architects in India,Home builders in India,Building in India,promoter's in India,Construction company in marthandam,Architecture firm in marthandam,Building contractors in marthandam,Architects in marthandam,Home builders in marthandam,Building in marthandam,promoter's in marthandam,Construction company in Kanyakumari Dist,Architecture firm in Kanyakumari Dist,Building contractors in Kanyakumari Dist,Architects in Kanyakumari Dist,Home builders in Kanyakumari Dist,Building in Kanyakumari Dist,promoter's in Kanyakumari Dist,Construction company in colachel,Architecture firm in colachel,Building contractors in colachel,Architects in colachel,Home builders in colachel,Building in colachel,promoter's in colachel,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home builders in Tambaram,Building in Tambaram,promoter's in Tambaram,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home builders in Tambaram,Building in Tambaram,promoter's in Tambaram"/>
<meta name="conduct" content="9894180324" />
<meta name="address" content="6/28 B, Main Rd, Parvathipuram, Nagercoil, 629003, Tamil Nadu, India" />
<meta name="link" content="http://jasconstruction.in/" />
<meta name="map" content="" />
<meta name="author" content="Galaxy Kannan" />
<meta name="copyright" content="Projects Jas Construction" />
<link rel="shortcut icon" href="images/logo.png" title="Projects Jas Construction"  />
<link href="" rel="search" title="Search Projects Jas Construction" type="application/opensearchdescription+xml"/>

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