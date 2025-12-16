<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
<title>Projects Jas Construction Kanyakumari Dist</title>
<meta name="description" content="Projects Jas Construction is a Construction and Promoters company based in Kanyakumari Dist. We construct commercial and residential buildings . We are the best constructors in india.">
<meta name="keywords" content="Contact Us Jas Construction,construction,architect,builder,construction company in Tambaram,Construction in Tambaram, architect in Tambaram,Tambaram Construction,architects in Tambaram,architectural firms in Tambaram,architectural firms in Tambaram,architectural firms in Tambaram,list of architects in Tambaram,top construction companies in Tambaram,Architecture firm,Building contractors,Architects,Home Construction,Building promoter's,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home Construction in Tambaram,Building in Tambaram,promoter's in Tambaram,Construction company in Kanyakumari Dist district,Architecture firm in Kanyakumari Dist district,Building contractors in Kanyakumari Dist district,Architects in Kanyakumari Dist district,Home Construction in Kanyakumari Dist district,Building in Kanyakumari Dist district,promoter's in Kanyakumari Dist district,Construction company in tamilnadu,Architecture firm in tamilnadu,Building contractors in tamilnadu,Architects in tamilnadu,Home Construction in tamilnadu,Building in tamilnadu,promoter's in tamilnadu,Construction company in India,Architecture firm in India,Building contractors in India,Architects in India,Home Construction in India,Building in India,promoter's in India,Construction company in marthandam,Architecture firm in marthandam,Building contractors in marthandam,Architects in marthandam,Home Construction in marthandam,Building in marthandam,promoter's in marthandam,Construction company in Kanyakumari Dist,Architecture firm in Kanyakumari Dist,Building contractors in Kanyakumari Dist,Architects in Kanyakumari Dist,Home Construction in Kanyakumari Dist,Building in Kanyakumari Dist,promoter's in Kanyakumari Dist,Construction company in colachel,Architecture firm in colachel,Building contractors in colachel,Architects in colachel,Home Construction in colachel,Building in colachel,promoter's in colachel,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home Construction in Tambaram,Building in Tambaram,promoter's in Tambaram,Construction company in Tambaram,Architecture firm in Tambaram,Building contractors in Tambaram,Architects in Tambaram,Home Construction in Tambaram,Building in Tambaram,promoter's in Tambaram"/>
<meta name="conduct" content="9894180324" />
<meta name="address" content="6/28 B, Main Rd, Parvathipuram, Nagercoil, 629003, Tamil Nadu, India" />
<meta name="link" content="http://jasconstruction.in/" />
<meta name="map" content="" />
<meta name="author" content="Galaxy Kannan" />
<meta name="copyright" content="Projects Jas Construction" />
<link rel="shortcut icon" href="images/logo.png" title="Projects Jas Construction"  />
<link href="" rel="search" title="Search Projects Jas Construction" type="application/opensearchdescription+xml"/>


<?php $__env->startSection('content'); ?>
<div class="page-content">
   <div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?php echo e(URL::to('/')); ?>/assets/images/banner/all.jpg);">
      <div class="overlay-main bg-black" style="opacity:0.5;"></div>
      <div class="container">
         <div class="wt-bnr-inr-entry">
            <center>
               <h1 class="text-white"><?php echo e($projecttype->project_status_name); ?></h1>
            </center>
         </div>
      </div>
   </div>
   <div class="section-full bg-white  p-t80 p-b70">
      <div class="container">
         <div class="section-content">
            <div class="row">
               <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-md-4 col-sm-4 m-b30">
                  <div class="wt-box">
                     <div class="wt-media">
                        <a href="<?php echo e(url('project')); ?>/<?php echo e($pro->id); ?>"><img src="<?php echo e(URL::to('/')); ?>/upload/projectsave/<?php echo e($pro->photo); ?>" alt="<?php echo e($pro->project_name); ?>"></a>
                     </div>
                     <div class="wt-info">
                        <h4 class="wt-title m-t20"><a href="project.php"><?php echo e($pro->project_name); ?></a></h4>
                        <p><?php echo e($pro->project_name); ?>, <?php echo e($pro->project_name); ?><?php echo e($pro->project_owner); ?>,'<?php echo e($pro->project_address); ?></p>
                        <a href="<?php echo e(url('project')); ?>/<?php echo e($pro->id); ?>" class="site-button skew-icon-btn ">More<i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <td colspan="7" class="mt-2">
               <?php echo $products->links('pagination::bootstrap-4'); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jasconstruction.in\01-11-2024\resources\views/projects.blade.php ENDPATH**/ ?>