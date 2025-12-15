<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo e(config('app.name')); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/fav.ico">


<?php $__env->startSection('content'); ?>
</head>
<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <div class="pop-bg"></div>

  <section>
		<div class="db">
			<div class="db-l">
				<div class="db-l-1">
					<ul>
						<li><img src="images/db-profile.jpg" alt="" />
						</li>
						<li><span>80%</span> profile compl</li>
						<li><span>18</span> Notifications</li>
					</ul>
				</div>
				<div class="db-l-2">
				<?php echo $__env->make('layouts.leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				</div>
			</div>

			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>My Profile</h4>
					<div class="db-2-main-com db-2-main-com-table">
						<table class="responsive-table">
							<tbody>
								<tr>
									<td>User Name</td>
									<td>:</td>
									<td>Sam Anderson</td>
								</tr>
								<tr>
									<td>Password</td>
									<td>:</td>
									<td>mypasswordtour</td>
								</tr>
								<tr>
									<td>Eamil</td>
									<td>:</td>
									<td>sam_anderson@gmail.com</td>
								</tr>
								<tr>
									<td>Phone</td>
									<td>:</td>
									<td>+01 4561 3214</td>
								</tr>
								<tr>
									<td>Date of birth</td>
									<td>:</td>
									<td>03 Jun 1990</td>
								</tr>
								<tr>
									<td>Address</td>
									<td>:</td>
									<td>8800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</td>
								</tr>
								<tr>
									<td>Status</td>
									<td>:</td>
									<td><span class="db-done">Active</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="db-mak-pay-bot">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p> 
							
							<a href="<?php echo e(url('update')); ?>" class="waves-effect waves-light btn-large">Update Profile</a>

							</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	
<?php $__env->stopSection(); ?>

















<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/user_profile.blade.php ENDPATH**/ ?>