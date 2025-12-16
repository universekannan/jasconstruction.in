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
        <div class="tourz-search">
            <div class="container">
                <div class="row">
                    <div class="tourz-search-1">
                        <h1>Plan Your Travel Now!</h1>
                        <p>650+ Travel Agents serving 65+ Destinations worldwide</p>
                                <div class="ban-search">                        
                            <form>
                                <input type="text" id="searchresult" class="form-control" placeholder="search Tours....">
                                <button type="submit" onclick="load_report()">Serach</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
        <section>
            <div class="rows tb-space pad-bot-redu tb-space">
                <div class="container">
                    <!-- TITLE & DESCRIPTION -->
                    <div class="spe-title">
                        <h2>Tour <span>Packages</span></h2>
                        <div class="title-line">
                        </div>
                        <p>World's leading Travel Booking website</p>
                    </div>
                    <div class="tourz-hom-ser">
                        <ul class="slider-all">
                            <?php $__currentLoopData = $tourPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourPackageslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="col-md-4">

                                    <div class="to-ho-hotel-con pack-new-box">
                                        <div class="to-ho-hotel-con-1">

                                            <?php $__currentLoopData = $tourPackageslist['details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $eventlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <img src="upload/package_images/<?php echo e($eventlist['photo']); ?>" alt="">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div class="hom-pack-deta">
                                                <h2><?php echo e($tourPackageslist['packages_name']); ?></h2>
                                                <h4> ₹ <?php echo e($tourPackageslist['price']); ?></h4>
                                                <span class="cta-2"><a style="color: #fff"
                                                        href="<?php echo e(url('booknow')); ?>/<?php echo e($tourPackageslist['id']); ?>">Book
                                                        now</a></span>

                                            </div>
                                        </div>

                                    </div>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
 <section>
            <div class="rows tb-space pad-bot-redu tb-space">
                <div class="container">
                    <!-- TITLE & DESCRIPTION -->
                    <div class="spe-title">
                        <h2>Travels <span></span></h2>
                        <div class="title-line">
                        </div>
                        <p>World's leading Travels Booking website</p>
                    </div>
                    <div class="tourz-hom-ser">
                        <ul class="slider-all">
                            <?php $__currentLoopData = $Travels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourPackageslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="col-md-4">

                                    <div class="to-ho-hotel-con pack-new-box">
                                        <div class="to-ho-hotel-con-1">

                                            <?php $__currentLoopData = $tourPackageslist['details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $eventlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <img src="upload/package_images/<?php echo e($eventlist['photo']); ?>" alt="">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div class="hom-pack-deta">
                                                <h2><?php echo e($tourPackageslist['packages_name']); ?></h2>
                                                <h4> ₹ <?php echo e($tourPackageslist['price']); ?></h4>
                                                <span class="cta-2"><a style="color: #fff"
                                                        href="<?php echo e(url('booknow')); ?>/<?php echo e($tourPackageslist['id']); ?>">Book
                                                        now</a></span>

                                            </div>
                                        </div>

                                    </div>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
		
        <section>
            <div class="rows tb-space pad-top-o pad-bot-redu">
                <div class="container">
                    <!-- TITLE & DESCRIPTION -->
                    <div class="spe-title">
                        <h2>Popular <span>Destinations</span> </h2>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        <p>World's leading Travel Booking website</p>
                    </div>
                    <!-- HOTEL GRID -->
                    <div class="to-ho-hotel searchList">
                        <!-- HOTEL GRID -->
                        <?php $__currentLoopData = $populartourPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populartourPackageslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="to-ho-hotel-con">
                                    <div class="to-ho-hotel-con-1">
                                        <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div>
                                        <?php $__currentLoopData = $populartourPackageslist['details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $eventlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img src="upload/package_images/<?php echo e($eventlist['photo']); ?>" alt=""
                                                loading="lazy">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <div class="to-ho-hotel-con-23">
                                        <div class="to-ho-hotel-con-2"><a
                                                href="<?php echo e(url('booknow')); ?>/<?php echo e($populartourPackageslist['id']); ?>">
                                                <h4><?php echo e($populartourPackageslist['packages_name']); ?></h4>
                                            </a> </div>
                                        <div class="to-ho-hotel-con-3">
                                            <ul>
                                                
                                                <li><span class="ho-hot-pri-dis"></span><span class="ho-hot-pri">₹
                                                        <?php echo e($populartourPackageslist['price']); ?> </span> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'csrftoken': '<?php echo e(csrf_token()); ?>'
                }
            });
        </script>
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('page_scripts'); ?>
        <script>
            var search = "<?php echo e(url('search')); ?>";
            function load_report() {
                var searchresult = $("#searchresult").val();
                if (searchresult != "") {
                    var url = search + "/" + searchresult;
                    window.location.href = url;
                }
            }
        </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/welcome.blade.php ENDPATH**/ ?>