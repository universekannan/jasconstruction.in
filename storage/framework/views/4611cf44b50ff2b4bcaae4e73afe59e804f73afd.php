
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
                                <li class="active">product Detail</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		              <?php if(session()->has('success')): ?>
                            <div class="alert alert-success alert-dismissable" style="margin: 15px;">
                                <strong><center> <?php echo e(session('success')); ?></center> </strong>
                            </div>
                      <?php endif; ?>

        <section class="page_single">
            <div class="container">
                <div class="row padTB100">
                    <div class="prod-info-section">
                        <div class="clearfix">
                            <!--Thumbnail Column-->
                            <div class="carousel-column col-lg-6 col-md-6 col-sm-5 col-xs-12">
                                <div class="wa-product-main-image marB20">
                                    <a href="<?php echo e(URL::to('/')); ?>/upload/product/<?php echo e($product->photo); ?>" class="fancybox" data-fancybox-group="group" title="<?php echo e($product->product_name); ?>"> <img src="<?php echo e(URL::to('/')); ?>/upload/product/<?php echo e($product->photo); ?>" alt="" style="width:600px;"> </a>
                                </div>
                                <div id="wa-slide-image" class="owl-carousel  wa-slide-image carousel-style-1">
								<?php $__currentLoopData = $moreimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(URL::to('/')); ?>/upload/product/<?php echo e($pros->phone); ?>" class="fancybox" data-fancybox-group="group" title="<?php echo e($product->product_name); ?>"> <img src="<?php echo e(URL::to('/')); ?>/upload/product/<?php echo e($pros->phone); ?>" alt=""></a>  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-lg-6 col-md-6 col-sm-7 col-xs-12">
                                <div class="outer wow fadeInRight">
                                    <div class="title-box">
                                        <div class="inner marB30">
                                            <h2 class="marB10"><?php echo e($product->product_name); ?></h2>
                                           
                                            <span class="price marB10">
                                            ₹ <?php echo e(10 + $product->price); ?>

                                            <del>₹ <?php echo e($product->price); ?></del>
                                            <span class="clear"></span>
                                            </span>
                                            <p><?php echo e($product->product_name); ?>

                                            </p>
                                        </div>
                                        <div class="clear"></div>
                                        <!--Options-->
                                       
                                    </div>
                                    <!--Add-->
                                    <div class="add-options">
									<button type="button" class="theme-button" data-toggle="modal" data-target="#exampleModal">Order Now</button>
                                        
                                    </div>
                                </div>
                            </div><div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e($product->product_name); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	     <form action="<?php echo e(url('saveorder')); ?>" method="post">
      <?php echo e(csrf_field()); ?>

      <input type="hidden" name="prodect_id" value="<?php echo e($product->id); ?>">
      <div class="modal-body">

         <div class="form-group">
			<label for="full_name">Full Name</label>
			<input type="text" class="form-control" name="full_name" aria-describedby="emailHelp"  placeholder="Full Name">
		</div>
		 <div class="row">
		<div class="form-group col-md-6">
			<label for="mobile">Mobile</label>
			<input type="text" class="form-control" name="mobile" placeholder="Mobile">
		</div>
		 <div class="form-group col-md-6">
			<label for="qity">Product Quantity</label>
			<input type="number" class="form-control" value="1" max="10" min="0" name="qty" placeholder="Quantity">
		</div>
		</div>
         <div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" placeholder="Email">
		</div> 
		<div class="form-group">
			<label for="aderss">Address</label>
			<textarea class="form-control" name="aderss" rows="3">Address</textarea>
		  </div>

      </div>
     <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <input class="btn btn-primary" type="submit" value="Submit" />
                                            </div>
   </form>
	  
    </div>
  </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web/layouts.other_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/web/products/product.blade.php ENDPATH**/ ?>