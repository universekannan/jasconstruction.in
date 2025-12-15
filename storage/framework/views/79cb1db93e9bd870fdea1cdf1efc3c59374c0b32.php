
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



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\livebuilders.in\resources\views/gallery.blade.php ENDPATH**/ ?>