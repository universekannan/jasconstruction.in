<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo e(url('admin/dashboard')); ?>" class="brand-link">
        <img src="<?php echo e(asset('/assets/images/preloader.gif')); ?>" class="brand-image img-circle elevation-3">JAS Construction
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'dashboard' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('admin/dashboard')); ?>" class="nav-link <?php echo e(Request::is('admin/dashboard') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                 <li
                        class="nav-item has-treeview <?php echo e(request()->segment(2) == 'addproject' || request()->segment(3) == '1' || request()->segment(3) == '2' || request()->segment(3) == '3' ? 'menu-open' : ''); ?>">
                        <a href="#"
                            class="nav-link <?php echo e(request()->segment(2) == 'addproject' || request()->segment(3) == '1' || request()->segment(3) == '2' || request()->segment(3) == '3' ? 'active' : ''); ?>">
                            <i class="nav-icon fa fa-credit-card fa-lg"></i>
                            <p>Projects
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(url('admin/addproject')); ?>"
                                    class="nav-link <?php echo e(request()->segment(2) == 'addproject' ? 'active' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Project</p>
                                </a>
                            </li>
                              <li class="nav-item">
                            <a href="<?php echo e(url('admin/projects/1')); ?>"
                                class="nav-link <?php echo e(request()->segment(3) == '1' ? 'active' : ''); ?>">
                                <i class="fa fa-ban nav-icon"></i>
                                <p>Upcoming Projects</p>
                            </a>
                        </li>                       
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/projects/2')); ?>"
                                 class="nav-link <?php echo e(request()->segment(3) == '2' ? 'active' : ''); ?>">
                                <i class="fa fa-ban nav-icon"></i>
                                <p>Progress Projects</p>
                            </a>
                        </li>                       
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/projects/3')); ?>"
                                class="nav-link <?php echo e(request()->segment(3) == '3' ? 'active' : ''); ?>">
                                <i class="fa fa-ban nav-icon"></i>
                                <p>Completed Projects</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    
                 <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'contact' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('admin/contact')); ?>" class="nav-link <?php echo e(Request::is('admin/contact') ? 'active' : ''); ?>">
                        <i class="nav-icon fa fas fa-address-book fa-lg"></i>
                        <p>Enquiry</p>
                    </a>
                </li>
                
                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'banners' ? 'menu-open' : ''); ?>">
                    <a href="<?php echo e(url('admin/banners')); ?>" class="nav-link <?php echo e(Request::is('admin/banners') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Banners</p>
                    </a>
                </li>

                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'backup' ? 'menu-open' : ''); ?>">
                   <a href="<?php echo e(route('backup')); ?>" class="nav-link <?php echo e(Request::is('admin/backup') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-archive" ></i>
                        <p>Backup</p>
                    </a>
                </li>
						
						
                <li class="nav-item has-treeview <?php echo e(request()->segment(1) == 'profile' || request()->is('changepassword') ? 'menu-open' : ''); ?>">
                    <a href="" class="nav-link <?php echo e(request()->segment(1) == 'profile' || request()->is('changepassword') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            <?php echo e(Auth::user()->full_name); ?>

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
<?php /**PATH C:\xampp\htdocs\jasconstruction.in\01-11-2024\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>