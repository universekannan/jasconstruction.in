<div class="preloader">
    <div class="cssload-container">
        <div class="cssload-loading">
            <div id="object"><i class="fa fa-bath" aria-hidden="true"></i></div>
        </div>
        <h4 class="title">Loading</h4>
    </div>
</div>
<header id="main-header">
    <div id="top-bar" class="hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 text-left">
                    <!-- Logo Desktop-->
                    <a class="logo hidden-xs" href="<?php echo e(url('home')); ?>">
                    <img class="site_logo" alt="Site Logo"  src="<?php echo e(URL::to('/')); ?>/assets/img/logo.png" />
                    </a>
                </div>
                <div class="col-md-9 col-sm-4 col-xs-12">
                 <form class="wa-search-bar" action="<?php echo e(url('searchresult')); ?>" method="post" >
                        <?php echo e(csrf_field()); ?>

                        <input type="text" name="product_name" placeholder="Search..">
						
                        <button type="submit" class="default-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </form>
                </div>
             
            </div>
        </div>
    </div>
    <div id="main-menu" class="wa-main-menu">
        <div class="wathemes-menu relative">
            <div class="navbar navbar-default navbar-bg-light" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span></button> 
                                <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="<?php echo e(url('home')); ?>">
                                <img class="site_logo" alt="Site Logo"  src="assets/img/logo-2.png" />
                                </a>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
                                    <li><a href="<?php echo e(url('about_us')); ?>">About Us</a></li>
                                    <li class="mega-menu">
                                        <a href="#" class="has-submenu">Category<span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                                        <ul class="dropdown-menu wv_menu_color sm-nowrap">
                                            <li>
                                                <div class="row">
												<?php $__currentLoopData = $webmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-sm-3">
                                                        <h6 class="title"><?php echo e($menu->category_name); ?></h6>
                                                        <div class="page-links">
														<?php $__currentLoopData = $menu->submenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div>
                                                                <a href="<?php echo e(url('product/category')); ?>/<?php echo e($submenu->category_url); ?>"><?php echo e($submenu->category_name); ?></a>
                                                            </div>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
									  <li><a href="<?php echo e(url('products')); ?>">Products</a></li>
                                   
                                    <li><a href="<?php echo e(url('testimonials')); ?>">Testimonials</a></li>
                                    <li><a href="<?php echo e(url('contact')); ?>">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/web/layouts/header.blade.php ENDPATH**/ ?>