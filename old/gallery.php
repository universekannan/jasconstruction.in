<?php
session_start();
include "admin/config.php";
?>
<!DOCTYPE html>

<html lang="en">


<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>LIVE Builders Gallery</title>
<meta name="description" content="LIVE Builders is a Construction and Promoters company based in Chennai. We construct commercial and residential buildings . We are the best constructors in india.">
<meta name="keywords" content="LIVE Builders,construction,architect,builder,construction company in Tambaram,builders in Tambaram, architect in Tambaram,Tambaram builders,architects in Tambaram,architectural firms in Tambaram,architectural firms in Tambaram,architectural firms in Tambaram,list of architects in Tambaram,top construction companies in Tambaram,Architecture firm,Building contractors,Architects,Home builders,Building promoter's,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home builders in Tambaram,Building in Tambaram,promoter's in Tambaram,Construction company in Chennai district,Architecture firm in Chennai district,Building contractors in Chennai district,Architects in Chennai district,Home builders in Chennai district,Building in Chennai district,promoter's in Chennai district,Construction company in tamilnadu,Architecture firm in tamilnadu,Building contractors in tamilnadu,Architects in tamilnadu,Home builders in tamilnadu,Building in tamilnadu,promoter's in tamilnadu,Construction company in India,Architecture firm in India,Building contractors in India,Architects in India,Home builders in India,Building in India,promoter's in India,Construction company in marthandam,Architecture firm in marthandam,Building contractors in marthandam,Architects in marthandam,Home builders in marthandam,Building in marthandam,promoter's in marthandam,Construction company in Chennai,Architecture firm in Chennai,Building contractors in Chennai,Architects in Chennai,Home builders in Chennai,Building in Chennai,promoter's in Chennai,Construction company in colachel,Architecture firm in colachel,Building contractors in colachel,Architects in colachel,Home builders in colachel,Building in colachel,promoter's in colachel,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home builders in Tambaram,Building in Tambaram,promoter's in Tambaram,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home builders in Tambaram,Building in Tambaram,promoter's in Tambaram"/>
<meta name="conduct" content="8608007005" />
<meta name="address" content="Plot No: 103, Mahalakshmi Street,
Irumbuliyur,East Tamabaram Chennai -59. " />
<meta name="link" content="http://livebuilders.in/" />
<meta name="map" content="https://goo.gl/maps/7DpSQNpWLKi3dTDfA" />
<meta name="author" content="Galaxy Kannan" />
<meta name="copyright" content="LIVE Builders" />
<link rel="shortcut icon" href="images/logo.png" title="LIVE Builders"  />
<link href="" rel="search" title="Search LIVE Builders" type="application/opensearchdescription+xml"/>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<link rel="icon" type="image/png" href="images/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">    

    
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    
 
</head>

<body id="bg">
	
    <div class="page-wraper"> 
       	
        <!-- HEADER START -->
        <?php include"header.php"?>

        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/gallery-banner.jpg);">
            	<div class="overlay-main bg-black" style="opacity:0.5;"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                       <center> <h1 class="text-white">Gallery</h1></center>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
 
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50  bg-no-repeat bg-bottom-center bg-cover" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container">
                
                    <!-- PAGINATION TOP START -->
                    <div class="filter-wrap p-tb15">
                        <ul class="masonry-filter link-style  text-uppercase">
                            <li class="active"><a data-filter="*" href="#">All</a></li>
							 <?php
                            $sql = "select * from category";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <li><a data-filter=".<?php echo $row['id']; ?>" href="#"> <?php echo $row['name']; ?></a></li>
							<?php } ?>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                    
                    <!-- GALLERY CONTENT START -->
                    <div class="row">
                        <div class="portfolio-wrap mfp-gallery no-col-gap">
                        
                    		<!-- COLUMNS 1 -->
						    <?php
                            $sql = "select * from project order by id desc";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="masonry-item <?php echo $row['category_id']; ?> col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx p-a15">
                                    <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                                        <a href="javascript:void(0);">
                                            <img src="admin/photo/project/<?php echo $row['photo']; ?>"  alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="admin/photo/project/<?php echo $row['photo']; ?>" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                  
                        <?php } ?>
                        </div>
                    </div>
                    <!-- GALLERY CONTENT END -->
                   
                   
                    <!-- PAGINATION END -->                    
                    
                </div>
            </div>
            <!-- SECTION CONTENT END -->
        
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        <?php include"footer.php"?>

        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop" ><i class=" fa fa-arrow-up"></i></button>
        
    </div>
    

<!-- LOADING AREA START ===== -->
   <?php include"gallery-loading.php"?>

<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script type="text/javascript"  src="js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script type="text/javascript"  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script type="text/javascript"  src="js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script type="text/javascript"  src="js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script type="text/javascript"  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script type="text/javascript"  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script type="text/javascript"  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script type="text/javascript"  src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script type="text/javascript" src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script type="text/javascript"  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script type="text/javascript"  src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
<script type="text/javascript"  src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   --> 

<script type="text/javascript"  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script type="text/javascript"  src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script type="text/javascript"  src="js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->



<!-- STYLE SWITCHER END ==== -->


 
 


 


</body>


</html>
