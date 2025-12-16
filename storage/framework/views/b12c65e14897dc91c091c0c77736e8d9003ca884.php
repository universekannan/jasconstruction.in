
<?php $__env->startSection('web/content'); ?>
 <section class="services text-center padB100">
        <div class="container">
                    <div class="row">
                        <!--//==Services Item Start==//-->
                        <div class="col-md-4 col-sm-4">
                            <div class="wa-box-style2">
                                <div class="icon">
                                <h1><img src="https://www.vijayhardwares.in/website/image/Group 2474.png" alt=""></h1>
                                </div>
                                <div class="text">
                                    <h4>SATISFACTION</h4>
                                <p class="card-text">99% Guaranteed Satisfaction</p>
								</br>
                                </div>
                            </div>
                        </div>
                  
                        <div class="col-md-4 col-sm-4">
                            <div class="wa-box-style2">
                                <div class="icon">
                                <h1><img src="https://www.vijayhardwares.in/website/image/Group 2475.png" alt=""></h1>
                                </div>
                                <div class="text">
                                    <h4>ORIGNAL PRODUCTS</h4>
                                <p class="card-text">99% Guaranteed Satisfaction</p>
								</br>
                                </div>
                            </div>
                        </div>
                        <!--//==Services Item End==//-->
                        <!--//==Services Item Start==//-->
                        <div class="col-md-4 col-sm-4">
                            <div class="wa-box-style2">
                                <div class="icon">
                                <h1><img src="https://www.vijayhardwares.in/website/image/Group 2476.png" alt=""></h1>
                                </div>
                                <div class="text">
                                    <h4>DEALS</h4>
                                <p class="card-text">Transparent & Competitive Best Pricing</p>

                                </div>
                            </div>
                        </div>
                        
                    </div>
              
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
						</br></br>
                            <h2>Popular Products <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>Top Selling Items in Vijay Hardwares: Customers’ Favorites</em>
                    </div>
                </div>
				
                <div class="row">
                    <div id="best-seller" class="owl-carousel owl-theme carousel-style-1">
                        <!--//==product Item==//-->
                   <?php $__currentLoopData = $bestsell; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                  <img src="<?php echo e(URL::to('/')); ?>/upload/product/<?php echo e($pro->photo); ?>" alt="" style="height:200px;">
                                    <div class="caption">
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
                                    <div class="clear"></div>
                                    <div class="clear"></div>
                                    <span class="price">
                                    <del>₹ <?php echo e(10 + $pro->price); ?></del>
                                    ₹ <?php echo e($pro->price); ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
						</br></br>
                            <h2>Trending Products<span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>Are you looking for trending products to buy in 2024?</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                </div>
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
                                <h2><a href="<?php echo e(url('product')); ?>/<?php echo e($pro->product_url); ?>"><?php echo e(substr($pro->product_name,0,17)); ?></a></h2>
                                <div class="clear"></div>
                              
                                <div class="clear"></div>
                                <span class="price">
                                <del>₹ <?php echo e(10 + $pro->price); ?></del>
                                ₹ <?php echo e($pro->price); ?>

                                </span>
                            </div>
                        </div>
                    </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
           
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
						</br></br>
                            <h2>Our Brands<span class="heading-border"></span></h2>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="wa-partner-carousel owl-carousel-style1 text-center owl-carousel owl-theme">
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
					 <img src="https://www.vijayhardwares.in/website/image/ourbrands/image 62.svg">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                    <img src="https://www.vijayhardwares.in/website/image/ourbrands/image 63.svg">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                    <img src="https://www.vijayhardwares.in/website/image/ourbrands/image 64.svg">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                    <img src="https://www.vijayhardwares.in/website/image/ourbrands/image 65.svg">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                    <img src="https://www.vijayhardwares.in/website/image/ourbrands/image 66.svg">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                    <img src="https://www.vijayhardwares.in/website/image/ourbrands/image 68.jpg">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                    <img src="https://www.vijayhardwares.in/website/image/ourbrands/image 72.svg">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/web/index.blade.php ENDPATH**/ ?>