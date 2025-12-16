 <header class="site-header header-style-1 ">
     <!-- TOP BAR START -->
     <div class="top-bar">
         <div class="container">
             <div class="row">
                 <div class="wt-topbar-right clearfix">
                     <ul class="social-bx list-inline pull-right">
                         <li><a href="https://www.facebook.com/profile.php?id=61573566025068" class="fa fa-facebook"></a></li>
                         <li><a href="https://youtube.com/@jasconstructionngl2025" class="fa fa-youtube"></a></li>
                         <li><a href="https://www.instagram.com/jasconstructionngl/" class="fa fa-instagram"></a></li>
                     </ul>
                     <ul class="list-unstyled e-p-bx pull-right">
                         <li>
                             <i class="fa fa-envelope"></i>
                             <a href="mailto:jasconstruction@outlook.com">jasconstruction@outlook.com</a>
                         </li>
                         <li>
                             <i class="fa fa-phone"></i>
                             <a href="tel:+919894180324">9894180324</a>
                         </li>

                     </ul>

                 </div>
             </div>
         </div>
     </div>
     <!-- MAIN BAR START -->
     <div class="sticky-header main-bar-wraper">
         <div class="main-bar" style="height: 90px; background-color: white;">
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

                 <div class="header-nav navbar-collapse collapse ">
                     <ul class=" nav navbar-nav">
                         <li class=''>
                             <a href="{{ url('home') }}">Home</a>
                         </li>
                         <li>
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
                         </li>
                         <li>
                             <a href="{{ url('testimonial') }}">Testimonial</a>
                         </li>

                         <li>
                             <a href="{{ url('contactus') }}">Contact Us</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </header>