<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="VijayHardwares">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Vijay Hardwares</title>
        <link rel="shortcut icon" href="<?php echo asset('assets/img/favicon.ico'); ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo asset('assets/img/favicon.ico'); ?>" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" id="colors">
<link href="<?php echo asset('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" id="colors">
<link href="<?php echo asset('assets/plugins/menu/css/hover-dropdown-menu.css'); ?>" rel="stylesheet" id="colors">
<link href="<?php echo asset('assets/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" id="colors">
<link href="<?php echo asset('assets/plugins/owl-carousel/css/owl.carousel.css'); ?>" rel="stylesheet" id="colors">
<link href="<?php echo asset('assets/plugins/fancymedia/css/jquery.fancybox.css'); ?>" rel="stylesheet" id="colors">
<link href="<?php echo asset('assets/css/jquery-ui.css'); ?>" rel="stylesheet" id="colors">
<link href="<?php echo asset('assets/plugins/switcher/switcher.css'); ?>" rel="stylesheet" id="colors">
<link href="<?php echo asset('assets/css/style.css'); ?>" rel="stylesheet" id="colors">
<link href="<?php echo asset('assets/css/responsive.css'); ?>" rel="stylesheet" id="colors">
  </head>
  <body>
<?php echo $__env->make('web/layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('web/slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->yieldContent('web/content'); ?>

<?php echo $__env->make('web/layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('web/third_party_scripts'); ?>
	    <script src="<?php echo asset('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo asset('assets/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('assets/plugins/menu/js/hover-dropdown-menu.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('assets/plugins/menu/js/jquery.hover-dropdown-menu-addon.js'); ?>"></script>
        <script src="<?php echo asset('assets/plugins/owl-carousel/js/owl.carousel.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('assets/plugins/switcher/switcher.js'); ?>"></script>
        <script src="<?php echo asset('assets/js/main.js'); ?>"></script>
    <?php echo $__env->yieldPushContent('web/page_scripts'); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/web/layouts/app.blade.php ENDPATH**/ ?>