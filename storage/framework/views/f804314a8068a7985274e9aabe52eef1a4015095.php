
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
			<div class="rows inner_banner inner_banner_3">
				<div class="container">
					<div class="spe-title tit-inn-pg">
						<h1>Tour <span>Packages</span> </h1>
						<div class="title-line">
							<div class="tl-1"></div>
							<div class="tl-2"></div>
							<div class="tl-3"></div>
						</div>
						<p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide.</p>
						<ul>
							<li><a href="main.html">Home</a></li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
							<li><a href="#" class="bread-acti">Tour Packages</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>


	<!--====== PLACES ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
				<!--===== PLACES ======-->
  <?php $__currentLoopData = $ourpackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ourpackageslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="rows p2_2">
					<div class="col-md-6 col-sm-6 col-xs-12 p2_1">
                        <?php $__currentLoopData = $ourpackageslist['details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $eventlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="band">
                            <img src="<?php echo e(URL::to('/')); ?>/upload/package_images/<?php echo e($eventlist['photo']); ?>" alt="tourimage" />
                        </div>
                         <img src="<?php echo e(URL::to('/')); ?>/upload/package_images/<?php echo e($eventlist['photo']); ?>" alt="tourimage" />
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-6 col-sm-6 col-xs-12 p2">
						<h3><?php echo e($ourpackageslist['packages_name']); ?> <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span></h3>
						<p><?php echo $ourpackageslist['description'] ?></p>
						<div class="ticket">
							<ul>
								<li>Start Date : <?php echo e($ourpackageslist['tour_date']); ?></li>
								
							</ul>
						</div>
						<div class="featur">
							<h4>Package Locations</h4>
							<ul>
								<li><?php echo e($ourpackageslist['packages_name']); ?></li>
								<li>8 Breakfast, 3 Dinners</li>
								<li>First class Sightseeing</li>
								
							</ul>
						</div>
						<div class="p2_book">
							<ul>
								<li><a href="<?php echo e(url('booknow')); ?>/<?php echo e($ourpackageslist['id']); ?>" class="link-btn">View Package</a> </li>
							</ul>
						</div>
					</div>
				</div>
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/our_service.blade.php ENDPATH**/ ?>