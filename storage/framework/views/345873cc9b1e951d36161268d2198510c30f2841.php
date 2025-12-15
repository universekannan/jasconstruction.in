<?php echo $__env->yieldContent('third_party_stylesheets'); ?>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/font-awesome.min.css'); ?>">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/mob.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/materialize.css'); ?>" />
<?php echo $__env->yieldPushContent('page_css'); ?>
</head>
<body>
<?php echo $__env->make('layouts.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid sb2">
        <div class="row">
<?php echo $__env->make('layouts.adminsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layouts.adminfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('third_party_scripts'); ?>

<?php echo $__env->yieldPushContent('page_scripts'); ?>
<script src="<?php echo asset('assets/admin/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo asset('assets/admin/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo asset('assets/admin/js/materialize.min.js'); ?>"></script>
    <script src="<?php echo asset('assets/admin/js/custom.js'); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/layouts/adminapp.blade.php ENDPATH**/ ?>