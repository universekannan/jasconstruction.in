 <div class="wa_main_bn_wrap">
            <div id="home1-main-slider" class="owl-carousel owl-theme">
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <figure>
                        <img src="<?php echo e(URL::to('/')); ?>/upload/banners/<?php echo e($ban->photo); ?>" alt="">
                        <figcaption>
                            <div class="container">
                                <h2><span><?php echo e($ban->banner_name); ?></span></h2>
                                <h3><?php echo e($ban->description); ?></h3>
                                <a href="<?php echo e(url('/products')); ?>" class="theme-button">Shop Now</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
<?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/web/slider.blade.php ENDPATH**/ ?>