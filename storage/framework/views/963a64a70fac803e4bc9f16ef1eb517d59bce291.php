
<?php $__env->startSection('admin.content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">   
               <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?php echo e($tourpackagescount); ?></h3>
                    <p> Tour Packages </p>
                  </div>
                  <div class="icon">
                  <i class="ion ion-bag"></i>
               </div>
               <a href="<?php echo e(url('/tourpackages')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?php echo e($agepricecount); ?></h3>
                    <p> Price by Age </p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php echo e(url('/tourpackages')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-6">
           <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e($bookingscount); ?></h3>
                <p> Bookings </p>
              </div>
              <div class="icon">
                 <i class="ion ion-person-add"></i>
              </div>
               <a href="<?php echo e(url('/booking')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
               <div class="inner">
                <h3>4</h3>
                 <p> Live Bookings </p>
               </div>
               <div class="icon">
                  <i class="ion ion-person-add"></i>
               </div>
                <a href="<?php echo e(url('/tourpackages')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
         </div>
    </div>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>