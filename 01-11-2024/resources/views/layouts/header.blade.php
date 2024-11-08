 <header class="site-header header-style-1 ">
        	<!-- TOP BAR START -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="wt-topbar-right clearfix">
                        	<ul class="social-bx list-inline pull-right">
                                <li><a href="https://www.facebook.com/share/a9G9JqYys45DwjZG/?mibextid=LQQJ4d/;" class="fa fa-facebook"></a></li>
                                <li><a href="https://youtube.com/@jasconstructionngl?si=EtxsEu7GdNpfi_9t/;" class="fa fa-youtube"></a></li>
                                <li><a href="https://www.instagram.com/jasconstruction_ngl/profilecard/?igsh=dXFkeTdkeWt4c2Nz/;" class="fa fa-instagram"></a></li>
                            </ul>
                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><i class="fa fa-envelope"></i> jasconstruction@outlook.com</li>
                                <li><i class="fa fa-phone"></i> 9894180324 </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAIN BAR START -->
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-primary" style="height: 90;">
                    <div class="container">
                    	<!-- SITE LOGO -->
                        <div class="logo-header mostion header-skew">
                            <a href="{{ url('home') }}">
                                <img src="{{ URL::to('/') }}/assets/images/logo.png" width="200" height="67" alt="" />
                            </a>
                        </div>
                        <!-- NAV TOGGLE BUTTON -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- EXTRA NAV -->
                       
                        <!-- SITE Search AREA -->
                       <!--  <div class="site-search">
                            <form action="#">
                                <div class="input-group">
                                    <input name="site-search" type="text" class="form-control" placeholder="Type to search">
                                    <span class="input-group-btn">
                                        <button type="button" class="site-button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>-->
                        <!-- MAIN NAV -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class='active'>
                                    <a href="{{ url('home') }}">Home</a>
                                </li>
                                <li >
                                    <a href="{{ url('about_us') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Projects<i class="fa fa-chevron-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('projects') }}/3">Completed Project</a></li>
                                                <li><a href="{{ url('projects') }}/1">Upcoming Project</a></li> 
                                                <li><a href="{{ url('projects') }}/2">Progress Project</a></li>
                                            </ul>
                                        </li>
                                <li>
                                    <a href="{{ url('gallery') }}">Gallery</a>
                                </li>                                <li >
                                    <a href="{{ url('testimonial') }}">Testimonial</a>
                                </li>
                            
                                <li >
                                    <a href="{{ url('contactus') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header> 