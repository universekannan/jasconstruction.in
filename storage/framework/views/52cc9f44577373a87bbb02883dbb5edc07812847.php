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

    <script src="<?php echo asset('assets/js/jquery-latest.min.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/jquery-ui.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/wow.min.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/select-opt.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/slick.js'); ?>"></script>
    <script src="<?php echo asset('assets/js/custom.js'); ?>"></script>
    <?php echo $__env->yieldPushContent('page_scripts'); ?>

    <script>
        $('.number').keypress(function(event) {
            var keycode = event.which;
            if (!(event.shiftKey == false && (keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 &&
                    keycode <= 57)))) {
                event.preventDefault();
            }
        });

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

        $('#loginsubmit').click(function() {
            var email = $("#email").val().trim();
            $("#errormessage").html("");
            // alert("hi");
            if (email == "") {
                $("#errormessage").html("Please enter Email or Mobile No");
                $("#email").focus();
            } else if ($("#password").val().trim() == "") {
                $("#errormessage").html("Please enter Password");
                $("#password").focus();
            } else {
                var email = $("#email").val().trim();
                var password = $("#password").val().trim();
                $.ajax({
                    url: "<?php echo e(url('/login')); ?>",
                    type: "POST",
                    data: {
                        email: email,
                        password: password,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType: 'json',
                    success: function(result)
                     {
                        console.log(result);
                        if (result.status == "fail") {
                            $("#errormessage").html("Invalid Login Credentials");
                        } else if (result.status == "success") {
                            if(result.user_type_id==1 || result.user_type_id==2){
                                window.location.href = "<?php echo e(url('/dashboard')); ?>";
                            }else{
                                window.location.href = '';
                            }
                        }
                    },
                    error: function(error) {
                        console.log(JSON.stringify(error));
                    }
                });
            }
        });

        function fogotpass() {
            $("#loginformdiv").hide();
            $("#logintitle").html("Forgot Password");
            $("#forgotpassdiv").show();
        }

        function backsignin() {
            $("#forgotpassdiv").hide();
            $("#forgototpdiv").hide();
            $("#loginformdiv").show();
            $("#logintitle").html("Log In");
        }

        // //display something
        // $('#login').modal('hide');
        // $('#login').data('bs.modal', null); // this clears the BS modal data

        // $('#login').modal({
        //     backdrop: 'static',
        //     keyboard: false
        // });
    </script>

</body>

</html><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/layouts/app.blade.php ENDPATH**/ ?>