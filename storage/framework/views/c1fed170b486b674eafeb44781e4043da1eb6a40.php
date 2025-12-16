<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo e(url('dashboard')); ?>" class="brand-link">
        Vijay Hardwares
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'admin/dashboard' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('admin/dashboard')); ?>" class="nav-link <?php echo e(Request::is('admin/dashboard') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				 <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'admin/banners' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('admin/banners')); ?>" class="nav-link <?php echo e(Request::is('admin/banners') ? 'active' : ''); ?>">
                        <i class="nav-icon fa fa-image"></i>
                        <p>Banners</p>
                    </a>
                </li>
				
                <li class="nav-item has-treeview <?php echo e(request()->segment(2) == 'admin/addproduct' || request()->is('admin/products/viewproducts') ? 'menu-open' : ''); ?>">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Product
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item <?php echo e(request()->segment(1) == 'admin/addproduct' ? 'menu-open' : ''); ?>">
                            <a href="<?php echo e(url('admin/addproduct')); ?>"
                                class="nav-link <?php echo e(Request::is('admin/addproduct') ? 'active' : ''); ?>">
                                <i class="nav-icon fa fa-clipboard"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/products/viewproducts')); ?>"
                                class="nav-link <?php echo e(Request::is('admin/products/viewproducts') ? 'active' : ''); ?>">
                                <i class="fa fa-ban nav-icon"></i>
                                <p>View Products</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'pendingorder' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('admin/pendingorder')); ?>" class="nav-link <?php echo e(Request::is('pendingorder') ? 'active' : ''); ?>">
                        <i class="nav-icon fa fas fa-cart-arrow-down fa-lg"></i>
                        <p>Pending Order</p>
                    </a>
                </li>
				 <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'completedorder' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('admin/completedorder')); ?>" class="nav-link <?php echo e(Request::is('completedorder') ? 'active' : ''); ?>">
                        <i class="nav-icon fa fas fa-cart-plus fa-lg"></i>
                        <p>Completed Order</p>
                    </a>
                </li>
				
				 <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'contact' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('admin/contact')); ?>" class="nav-link <?php echo e(Request::is('contact') ? 'active' : ''); ?>">
                        <i class="nav-icon fa fas fa-address-book fa-lg"></i>
                        <p>Enquiry</p>
                    </a>
                </li>

				<li class="nav-item has-treeview <?php echo e(request()->segment(2) == 'location' || request()->segment(2) == 'categorys' || request()->segment(2) == 'Banners' || request()->segment(2) == 'subcategory' || request()->segment(2) == 'banners' ? 'menu-open' : ''); ?>">
					<a href="#"
						class="nav-link <?php echo e(request()->segment(2) == 'location' || request()->segment(2) == 'categorys' || request()->segment(2) == 'Banners' || request()->segment(2) == 'subcategory' || request()->segment(2) == 'banners' ? 'active' : ''); ?>">
						<i class="nav-icon fas fa-cog"></i>
						<p>
							Settings
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo e(url('admin/backup')); ?>"
								class="nav-link <?php echo e(request()->is('backup') ? 'active' : ''); ?>">
								<i class="far fa-dot-circle nav-icon"></i>
								<p>Backup</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo e(url('admin/categorys')); ?>"
								class="nav-link <?php echo e(request()->segment(2) == 'categorys' || request()->segment(2) == 'subcategory' ? 'active' : ''); ?>">

								<i class="far fa-dot-circle nav-icon"></i>
								<p>Category</p>
							</a>
						</li>
					</ul>
				</li>
                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'profile' || request()->is('changepassword') ? 'menu-open' : ''); ?>">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            <?php echo e(Auth::user()->name); ?>

                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item <?php echo e(request()->segment(1) == 'changepassword' ? 'menu-open' : ''); ?>">
                            <a href="<?php echo e(url('changepassword')); ?>"
                                class="nav-link <?php echo e(Request::is('changepassword') ? 'active' : ''); ?>">
                                <i class="nav-icon fa fa-clipboard"></i>
                                <p>Changepassword</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(url('/logout')); ?>"
                                class="nav-link <?php echo e(Request::is('logout') ? 'active' : ''); ?>">
                                <i class="fa fa-ban nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>