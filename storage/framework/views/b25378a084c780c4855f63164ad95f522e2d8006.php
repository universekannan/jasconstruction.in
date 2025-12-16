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
            <div class="rows inner_banner inner_banner_2">
                <div class="container">
                    <div class="spe-title tit-inn-pg">
                        <h1>About <span>Us</span> </h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        <p>World's leading Travel Booking website.</p>
                        <ul>
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li><a href="#" class="bread-acti">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--====== ABOUT CONTENT ==========-->
        <section class="tourb2-ab-p-2 com-colo-abou">
            <div class="container">
                <div class="row tourb2-ab-p1">
                    <div class="col-md-6 col-sm-6">
                        <div class="tourb2-ab-p1-left">
                            <h3>Hi! Welcome to Holiday Tour & Travels</h3> <span>Welcome to Prahanaa Tours, your ultimate
                                destination for unforgettable tours experiences.</span>
                            <p>At Prahanaa Tours, we're passionate about exploration, adventure, and creating memories that
                                last a lifetime. Whether you're dreaming of a relaxing beach getaway, a thrilling outdoor
                                adventure, or a cultural immersion in exotic destinations, we're here to turn your travel
                                dreams into reality.</p>
                            <p>Thank you for choosing Prahanaa Tours. Get ready to embark on the journey of a lifetime.</p>
                            <a href="#" class="link-btn">Call to us: +32(0)465669964</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="tourb2-ab-p1-right"> <img src="<?php echo e(asset('assets/images/about.png')); ?>" alt="" /> </div>
                    </div>
                </div>
            </div>
        </section>

    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/about_us.blade.php ENDPATH**/ ?>