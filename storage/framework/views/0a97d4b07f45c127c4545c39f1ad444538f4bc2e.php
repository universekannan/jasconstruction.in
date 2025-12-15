<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="<?php echo e(route('dashboard')); ?>" class="brand-link">
		<img src="<?php echo e(asset('/AdminLTELogo.png')); ?>" class="brand-image img-circle elevation-3">
		<img src="<?php echo e(URL::to('/')); ?>/upload/user_photo/<?php echo e(Auth::user()->user_photo); ?>" class="brand-image img-circle elevation-3">
		<span class="brand-text font-weight-light"><?php echo e(config('app.name')); ?></span>
	</a>
	<div class="sidebar">
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item has-treeview <?php echo e(((request()->segment(1) =='dashboard')) ? 'menu-open' : ''); ?>">
					<a href="<?php echo e(route('dashboard')); ?>" class="nav-link">
						<i class="nav-icon fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				 <li class="nav-item has-treeview <?php echo e(((request()->segment(1) =='member') || request()->is('members') || request()->is('geneology')) ? 'menu-open' : ''); ?>">
            <a href="#" class="nav-link">
             <i class="far fa-user nav-icon"></i>
              <p>
                Manage Member 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('members')); ?>" class="nav-link <?php echo e((request()->is('members')) ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Members</p>
                </a>
              </li> 
			  <li class="nav-item">
                <a href="<?php echo e(route('geneology')); ?>" class="nav-link <?php echo e((request()->is('geneology')) ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Geneology</p>
                </a>
              </li>
            </ul>
          </li>
		  
		  
		  
		   <li class="nav-item has-treeview <?php echo e((request()->is('todayincome') || request()->is('totalincome')) ? 'menu-open' : ''); ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-up"></i>
              <p>
                Manage Income
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('todayincome')); ?>" class="nav-link <?php echo e((request()->is('todayincome')) ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Today Income</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('totalincome')); ?>" class="nav-link <?php echo e((request()->is('totalincome')) ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total Income</p>
                </a>
              </li>
            </ul>
          </li>

		    <li id="ManagingWallet" class="nav-item has-treeview <?php echo e((request()->is('payment/create') || request()->is('wallet') || request()->is('withdrawal') || request()->is('requestpayment') || request()->is('transfer') || request()->is('newrequest')) ? 'menu-open' : ''); ?>">
            <a id="ManagingWallets" href="#" class="nav-link">
              <i class="nav-icon fas fa-wallet #2317"></i>
              <p>
                Managing Wallet
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
			
            <ul class="nav nav-treeview">
			    <li class="nav-item">
                <a id="Wallet" class="nav-link <?php echo e((request()->is('wallet')) ? 'active' : ''); ?>" href="<?php echo e(url('wallet')); ?>/<?php echo e(date('Y-m-d' ,strtotime('-1 days'))); ?>/<?php echo e(date('Y-m-d')); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wallet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('newrequest')); ?>" class="nav-link <?php echo e((request()->is('newrequest')) ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Withdrawal Request</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="<?php echo e(route('requestpayment')); ?>" class="nav-link <?php echo e((request()->is('requestpayment')) ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Amount Request</p>
                </a>
              </li>            
            </ul>
          </li>
		  
		   <li class="nav-item has-treeview <?php echo e(((request()->segment(1) =='profile') || request()->is('changepassword')) ? 'menu-open' : ''); ?>">
				<a href="" class="nav-link">
				  <i class="nav-icon fas fa-user"></i>
				  <p>
				  <?php echo e(Auth::user()->name); ?>

					 <i class="fas fa-angle-left right"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					 <a href="<?php echo e(route('profile')); ?>" class="nav-link <?php echo e((request()->is('profile')) ? 'active' : ''); ?>">
						<i class="far fa-circle nav-icon"></i>
						<p>Edit Profile</p>
					 </a>
				  </li>
				  <li class="nav-item">
					 <a href="<?php echo e(route('changepassword')); ?>" class="nav-link <?php echo e((request()->is('changepassword')) ? 'active' : ''); ?>">
						<i class="far fa-circle nav-icon"></i>
						<p>Change Password</p>
					 </a>
				  </li>
				  <li class="nav-item">
					 <a href="<?php echo e(route('logout')); ?>" class="nav-link ">
						<i class="far fa-circle nav-icon"></i>
						<p>Logout</p>
					 </a>
				  </li>
				</ul>
			</li>
			</ul>
		</nav>
	</div>
</aside>
<?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>