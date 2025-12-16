
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
                                <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="index">
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
                        <!--<div class="col-md-3 col-sm-3 col-xs-12">
                            <ul class="inline top-ecommerce-icons">
                                <li>
                                    <a href="#" id="whishlistIcon">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <sup>03</sup>
                                    </a>
                                    <div class="shopping-cart">
                                        <a class="closeCart"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                        <ul class="shopping-cart-items">
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart1.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Chrome Finish Facucets...</span></a>
                                                <span class="item-price">$849.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart2.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Barrolio Skin tap...</span></a>
                                                <span class="item-price">$1,249.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart3.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Mauris et pulvinar...</span></a>
                                                <span class="item-price">$129.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <span class="lighter-text pull-left">Total:</span>
                                                <span class="main-color-text pull-right">$2,229.97</span>
                                            </div>
                                        </div>
                                        <a href="#" class="theme-button">Checkout</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" id="userIcon">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    <sup>Click</sup>
                                    </a>
                                    <div class="user-menu">
                                        <a class="closeMenu"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                        <ul class="user-menu-items">
                                            <li class="clearfix">
                                                <a href="#">Account</a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#">Track Order</a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" id="cartIcon">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>											
                                    <sup >03</sup>
                                    </a>
                                    <div class="shopping-cart">
                                        <a class="closeCart"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                        <ul class="shopping-cart-items">
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart1.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Chrome Finish Facucets...</span></a>
                                                <span class="item-price">$849.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart2.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Barrolio Skin tap...</span></a>
                                                <span class="item-price">$1,249.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart3.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Mauris et pulvinar...</span></a>
                                                <span class="item-price">$129.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <span class="lighter-text pull-left">Total:</span>
                                                <span class="main-color-text pull-right">$2,229.97</span>
                                            </div>
                                        </div>
                                        <a href="#" class="theme-button">Checkout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/web/layouts/other_header.blade.php ENDPATH**/ ?>