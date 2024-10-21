@extends('layouts.app')
@section('content')
<div class="page-content">
         <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/images/banner/gallery-banner.jpg);">
            	<div class="overlay-main bg-black" style="opacity:0.5;"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                       <center> <h1 class="text-white">Contact Us</h1></center>
                    </div>
                </div>
            </div>

            <!-- SECTION CONTENTG START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                
                    <div class="section-content m-b50">
                        <div class="row">
                        
                        	<!-- LOCATION BLOCK-->
                         

                            <!-- CONTACT FORM-->
                            <div class="wt-box col-md-12">
                                <h4 class="text-uppercase">Contact Detail </h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-square">
                               <span class="separator-left bg-primary"></span>
                               <span class="separator-right bg-primary"></span>
                           </div>
                       </div>
					   <div class="row">
                        
                            <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                                    <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                        <div class="wt-icon-box-sm bg-primary m-b20 corner">
                                            <span class="icon-cell text-white">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
                                        <div class="icon-content">
                                            <h5>Phone</h5>
                                            <p>+91 8608007005</p>
                                            <p></p>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="wt-icon-box-sm bg-primary m-b20 corner">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h6>Email</h6>
                                        <p>infolivebuilders@yahoo.com</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                                <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="wt-icon-box-sm bg-primary m-b20 corner">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5>Address</h5>
                                        <p>Plot No: 103, Mahalakshmi Street,<br /> Irumbuliyur,East Tamabaram Chennai -59.</p>
                                    </div>
                                </div>
                            </div>
                        
                        </div>

                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- CONTACT DETAIL BLOCK -->
                    <div class="section-content ">
                        <div class="row">
                         <div class="wt-box col-md-6">
                                <h4 class="text-uppercase">Contact Form </h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                    </div>
                                </div>
                                
                                <form class="cons-contact-form" method="post" action="">
                         <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <div class="row">
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input name="username" type="text" required class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
        
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
        
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                                    <textarea name="message" rows="4" class="form-control " required placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-md-12 text-right">
                                            <button name="submit" type="submit" value="Submit" class="site-button skew-icon-btn m-r15">Submit <i class="fa fa-angle-double-right"></i></button>
                                            <button name="Resat" type="reset" value="Reset"  class="site-button skew-icon-btn" >Reset <i class="fa fa-angle-double-right"></i></button>
                                        </div>
        
                                    </div>
                                </div>

                                </form>
                        
                            </div>


                                <div class="wt-box col-md-6">
                                <h4 class="text-uppercase">Office Location </h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                   </div>
                                </div>
                                 <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3888.902330470827!2d80.1038719!3d12.9139986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b3d7ca39ce15208!2zMTLCsDU0JzUwLjQiTiA4MMKwMDYnMjEuOCJF!5e0!3m2!1sen!2sin!4v1670054187878!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>


                        </div>
                    </div>
                    
                </div>
           </div>
            <!-- SECTION CONTENT END -->
            
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
         <footer class="site-footer footer-dark">

            <!-- COLL-TO ACTION START -->

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


