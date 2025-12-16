
<?php $__env->startSection('web/content'); ?>
 <div class="page-header black-overlay">
            <div class="container breadcrumb-section">
                <div class="row pad-s15">
                    <div class="col-md-12">
                        <h2>product Detail</h2>
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="">Home</a>
                                </li>
                                <li class="active">products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="wa-products-main padTB100">
            <div class="container">
                <div class="row" id="MixItUp1">
                    <!--//==product Item==//-->
               <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="<?php echo e(URL::to('/')); ?>/upload/product/<?php echo e($pro->photo); ?>" alt="" style="height:200px;">
                                <div class="caption"><?php echo e($pro->product_name); ?>

                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="<?php echo e(url('product')); ?>/<?php echo e($pro->product_url); ?>" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="<?php echo e(url('product')); ?>/<?php echo e($pro->product_url); ?>"><?php echo e($pro->product_name); ?></a></h2>
                               
                                <span class="price">
                                <del><?php echo e(10 + $pro->price); ?></del>
                                <?php echo e($pro->price); ?>

                                </span>
                            </div>
                        </div>
                    </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web/layouts.other_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/web/products/search_result.blade.php ENDPATH**/ ?>