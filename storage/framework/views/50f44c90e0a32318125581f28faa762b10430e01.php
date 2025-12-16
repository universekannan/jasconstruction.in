<?php echo $__env->yieldContent('third_party_stylesheets'); ?>
<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/mob.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/animate.css'); ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

<?php echo $__env->yieldPushContent('page_css'); ?>
</head>
<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('third_party_scripts'); ?>

<?php echo $__env->yieldPushContent('page_scripts'); ?>
    <script src="<?php echo asset('assets/js/jquery-latest.min.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/jquery-ui.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/wow.min.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/select-opt.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/slick.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/custom.js'); ?>"></script>
    <script>
         
    $('.multiple-items').slick({
        dots: true,
        arrows: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
            }
        }]

    });
    $('.slider-all').slick({
        dots: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
            }
        }]

    });
  </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views////layouts/app.blade.php ENDPATH**/ ?>