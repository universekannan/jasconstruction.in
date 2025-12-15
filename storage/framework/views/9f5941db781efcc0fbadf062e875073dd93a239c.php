
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\livebuilders.in\resources\views/projects.blade.php ENDPATH**/ ?>