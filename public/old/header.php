  <header class="site-header header-style-1 ">
        	<!-- TOP BAR START -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="wt-topbar-right clearfix">
                        	<ul class="social-bx list-inline pull-right">
                                <li><a href="https://www.facebook.com/;" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.twitter.com/;" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.linkedin.com/;" class="fa fa-linkedin"></a></li>
                                <li><a href="" class="fa fa-rss"></a></li>
                                <li><a href="https://www.youtube.com/;" class="fa fa-youtube"></a></li>
                                <li><a href="https://www.instagram.com/;" class="fa fa-instagram"></a></li>
                            </ul>
                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><i class="fa fa-envelope"></i> infolivebuilders@yahoo.com</li>
                                <li><i class="fa fa-phone"></i> 8608007005</li>
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
                            <a href="index.php">
                                <img src="images/about.png" width="200" height="67" alt="" />
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
                                <li <?php if($page=="Home") echo "class='active'"; ?>>
                                    <a href="index.php">Home</a>
                                </li>
                                <li <?php if($page=="About Us") echo "class='active'"; ?>>
                                    <a href="about-us.php">About Us</a>
                                </li>
                                <li <?php if($page=="Projects") echo "class='active'"; ?>>
                                    <a href="javascript:;">Projects<i class="fa fa-chevron-down"></i></a>
                                            <ul class="sub-menu">
                                                <li>< <a href="completed.php">Completed Project</a></li>
                                                <!-- <li><a href="upcoming.php">Upcoming Project</a></li> -->
                                                <li><a href="progress.php">Progress Project</a></li>
                                            </ul>
                                        </li>
                                
                                <li <?php if($page=="Gallery") echo "class='active'"; ?>>
                                    <a href="gallery.php">Gallery</a>
                                </li>                                <li <?php if($page=="Testimonial") echo "class='active'"; ?>>
                                    <a href="testimonial.php">Testimonial</a>
                                </li>
                            
                                <li <?php if($page=="Contact Us") echo "class='active'"; ?>>
                                    <a href="contact-us.php">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>