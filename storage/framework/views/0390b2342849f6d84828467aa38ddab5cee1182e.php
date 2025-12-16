<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo e(route('dashboard')); ?>" class="brand-link">
        <img src="<?php echo e(asset('/assets/images/preloader.gif')); ?>" class="brand-image img-circle elevation-3">Prahanaa Tours
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'dashboard' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(route('dashboard')); ?>" class="nav-link <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'tourpackages' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(route('tourpackages')); ?>" class="nav-link <?php echo e(Request::is('index') ? 'active' : ''); ?>">
                        <i class="nav-icon fa fa-plane fa-lg"></i>
                        <p>Tour Packages</p>
                    </a>
                </li>
				 <li class="nav-item has-treeview <?php echo e(request()->segment(2) == 'travel' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('admin/travel')); ?>" class="nav-link <?php echo e(Request::is('travel') ? 'active' : ''); ?>">
                        <i class="nav-icon fa fa-car fa-lg"></i>
                        <p>Travels</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'ageprice' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(route('ageprice')); ?>" class="nav-link <?php echo e(Request::is('ageprice') ? 'active' : ''); ?>">
                        <i class="nav-icon fa fa-plane fa-lg"></i>
                        <p>Price by Age</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php echo e(request()->segment(2) == 'booking' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('booking')); ?>" class="nav-link <?php echo e(Request::is('booking') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-ticket-alt fa-lg"></i>
                        <p>Bookings</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php echo e(request()->segment(2) == 'pickuplocation' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('admin/pickuplocation')); ?>" class="nav-link <?php echo e(Request::is('pickuplocation') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-truck-pickup fa-lg"></i>
                        <p>Pickup Location</p>
                    </a>
                </li>
               

                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'index' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(route('index')); ?>" class="nav-link <?php echo e(Request::is('index') ? 'active' : ''); ?>">
                        <i class="nav-icon fa fa-download fa-lg"></i>
                        <p>Backups</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'profile' || request()->is('changepassword') ? 'menu-open' : ''); ?>">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            <?php echo e(Auth::user()->full_name); ?>

                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item <?php echo e(request()->segment(1) == 'changepassword' ? 'menu-open' : ''); ?>">
                            <a href="<?php echo e(route('changepassword')); ?>"
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
<?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>