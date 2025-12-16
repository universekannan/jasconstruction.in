<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
<title>Gallery Jas Construction Kanyakumari Dist</title>
<meta name="description" content="Gallery Jas Builders is a Construction and Promoters company based in Kanyakumari Dist. We construct commercial and residential buildings . We are the best constructors in india.">
<meta name="keywords" content="Gallery Jas Builders,construction,architect,builder,construction company in Tambaram,builders in Tambaram, architect in Tambaram,Tambaram builders,architects in Tambaram,architectural firms in Tambaram,architectural firms in Tambaram,architectural firms in Tambaram,list of architects in Tambaram,top construction companies in Tambaram,Architecture firm,Building contractors,Architects,Home builders,Building promoter's,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home builders in Tambaram,Building in Tambaram,promoter's in Tambaram,Construction company in Kanyakumari Dist district,Architecture firm in Kanyakumari Dist district,Building contractors in Kanyakumari Dist district,Architects in Kanyakumari Dist district,Home builders in Kanyakumari Dist district,Building in Kanyakumari Dist district,promoter's in Kanyakumari Dist district,Construction company in tamilnadu,Architecture firm in tamilnadu,Building contractors in tamilnadu,Architects in tamilnadu,Home builders in tamilnadu,Building in tamilnadu,promoter's in tamilnadu,Construction company in India,Architecture firm in India,Building contractors in India,Architects in India,Home builders in India,Building in India,promoter's in India,Construction company in marthandam,Architecture firm in marthandam,Building contractors in marthandam,Architects in marthandam,Home builders in marthandam,Building in marthandam,promoter's in marthandam,Construction company in Kanyakumari Dist,Architecture firm in Kanyakumari Dist,Building contractors in Kanyakumari Dist,Architects in Kanyakumari Dist,Home builders in Kanyakumari Dist,Building in Kanyakumari Dist,promoter's in Kanyakumari Dist,Construction company in colachel,Architecture firm in colachel,Building contractors in colachel,Architects in colachel,Home builders in colachel,Building in colachel,promoter's in colachel,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home builders in Tambaram,Building in Tambaram,promoter's in Tambaram,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home builders in Tambaram,Building in Tambaram,promoter's in Tambaram"/>
<meta name="conduct" content="9894180324" />
<meta name="address" content="6/28 B, Main Rd, Parvathipuram, Nagercoil, 629003, Tamil Nadu, India" />
<meta name="link" content="http://jasconstruction.in/" />
<meta name="map" content="" />
<meta name="author" content="Galaxy Kannan" />
<meta name="copyright" content="Gallery Jas Construction" />
<link rel="shortcut icon" href="images/logo.png" title="Gallery Jas Construction"  />
<link href="" rel="search" title="Search Gallery Jas Construction" type="application/opensearchdescription+xml"/>


<?php $__env->startSection('content'); ?>
      <div class="page-content">
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/images/banner/gallery-banner.jpg);">
            <div class="overlay-main bg-black" style="opacity:0.5;"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                   <center> <h1 class="text-white">Gallery</h1></center>
                </div>
            </div>
        </div>
<div class="section-full p-t80" style="background-image:url(assets/images/background/bg-4.png); background-repeat:repeat;background-color:#273447; ">
   <div class="overlay-main"></div>
   <div class="container">
      <div class="section-head">
         <div class="row">
            <div class="col-md-3">
               <h2 class="text-uppercase text-white m-a0 p-t15">Gallery</h2>
            </div>
            <div class="col-md-9">
               <div class="filter-wrap p-tb15 right">
                  <ul class="masonry-filter outline-style button-skew text-uppercase customize">
                     <li class="active"><a data-filter="*" href="#"><span> All</span></a></li>
					 
<?php $__currentLoopData = $projectstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li><a data-filter=".<?php echo e($pro->id); ?>"><span> <?php echo e($pro->project_status_name); ?></span></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-full p-t80 p-b50  bg-no-repeat bg-bottom-center bg-cover" style="background-image:url(assets/images/background/bg-6.jpg);">
      <div class="container">
         <!-- GALLERY CONTENT START -->
         <div class="row">
            <div class="portfolio-wrap mfp-gallery no-col-gap">
               <!-- COLUMNS 1 -->
<?php $__currentLoopData = $projectimg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="masonry-item <?php echo e($pro->project_status_id); ?> col-lg-4 col-md-4 col-sm-6 col-xs-6">
                  <div class="wt-gallery-bx p-a15">
                     <div class="wt-thum-bx wt-img-effect img-reflection p-a15">
                        <a href="javascript:void(0);">
                        <img src="<?php echo e(URL::to('/')); ?>/upload/projectsave/<?php echo e($pro->photo); ?>" alt="<?php echo e($pro->project_name); ?>" alt="">
                        </a>
                        <div class="overlay-bx">
                           <div class="overlay-icon">
                              <a href="javascript:void(0);">
                              <i class="fa fa-link wt-icon-box-xs"></i>
                              </a>
                              <a href="<?php echo e(URL::to('/')); ?>/upload/projectsave/<?php echo e($pro->photo); ?>" alt="<?php echo e($pro->project_name); ?>" class="mfp-link">
                              <i class="fa fa-picture-o wt-icon-box-xs"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jasconstruction.in\01-11-2024\resources\views/gallery.blade.php ENDPATH**/ ?>