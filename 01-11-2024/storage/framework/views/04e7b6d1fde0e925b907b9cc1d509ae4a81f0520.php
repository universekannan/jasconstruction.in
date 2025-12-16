
<?php $__env->startSection('content'); ?>
<div class="page-content ">
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?php echo e(URL::to('/')); ?>/assets/images/banner/all.jpg);">
            <div class="overlay-main bg-black" style="opacity:0.5;"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                      <center>  <h1 class="text-white">About  <?php echo e($project->project_name); ?></h1></center>
                    </div>
                </div>
            </div>       
			
            <div class="section-full p-t80 p-b50 bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="blog-post blog-lg date-style-3 date-skew">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                   <img src="<?php echo e(URL::to('/')); ?>/upload/projectsave/<?php echo e($project->photo); ?>" alt="<?php echo e($project->project_name); ?>">
                                </div>
                                <div class="wt-post-info p-a30 p-b15  bg-white">
                                    
                                    <div class="wt-post-text">
                                       <p><?php echo e($project->project_name); ?></p>
                                       <p><?php echo e($project->project_owner); ?></p>
                                       <p><?php echo e($project->project_address); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="section-head">
                                <h4 class="text-uppercase">Upcoming Projects</h4>

                            </div>
                            <div class="section-content">
                                                
                                <div class="owl-carousel client-logo-carousel-1 owl-btn-center-lr">
<?php $__currentLoopData = $Upcomingprojects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo wt-img-effect client-logo-media on-color bdr-1 bdr-gray">
                                            <a href="javascript:void(0);"><img src="<?php echo e(URL::to('/')); ?>/upload/projectsave/<?php echo e($pro->photo); ?>" alt=""></a></div>
                                        </div>
                                    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>   
							<hr>
							
                                <div class="section-head">
                                <h4 class="text-uppercase">Progress Projects</h4>

                            </div>
                            <div class="section-content">
                                                
                                <div class="owl-carousel client-logo-carousel-1 owl-btn-center-lr">
<?php $__currentLoopData = $Progressprojects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo wt-img-effect client-logo-media on-color bdr-1 bdr-gray">
                                            <a href="javascript:void(0);"><img src="<?php echo e(URL::to('/')); ?>/upload/projectsave/<?php echo e($pro->photo); ?>" alt=""></a></div>
                                        </div>
                                    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>   
							<hr>
							
 <div class="section-head">
                                <h4 class="text-uppercase">Completed Projects</h4>

                            </div>
                            <div class="section-content">
                                                
                                <div class="owl-carousel client-logo-carousel-1 owl-btn-center-lr">
<?php $__currentLoopData = $Completedprojects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo wt-img-effect client-logo-media on-color bdr-1 bdr-gray">
                                            <a href="javascript:void(0);"><img src="<?php echo e(URL::to('/')); ?>/upload/projectsave/<?php echo e($pro->photo); ?>" alt=""></a></div>
                                        </div>
                                    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>   
							<hr>

                            </div>     
							
						</div>
				   </aside>
                </div>
            </div>            
        </div>
		
		
</div>

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




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jasconstruction.in\01-11-2024\resources\views/project.blade.php ENDPATH**/ ?>