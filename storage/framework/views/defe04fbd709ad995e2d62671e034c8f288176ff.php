<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/fav.ico">
    
    <?php $__env->startSection('content'); ?>
        <section>
            <div class="tr-register">
                <?php if(session()->has('password')): ?>
                    <div class="alert alert-success alert-dismissable" style="margin: 15px;">
                        <a href="#" style="color:green !important" class="close" data-dismiss="alert"
                            aria-label="close">&times;</a>
                        <strong> <?php echo e(session('password')); ?> </strong>
                    </div>
                <?php endif; ?>
                <?php if(session()->has('password_confirmation')): ?>
                    <div class="alert alert-danger alert-dismissable" style="margin: 15px;">
                        <a href="#" style="color:red !important" class="close" data-dismiss="alert"
                            aria-label="close">&times;</a>
                        <strong> <?php echo e(session('password_confirmation')); ?> </strong>
                    </div>
                <?php endif; ?>
                <div class="tr-regi-form">
                    <h4>Create an <span>Account</span></h4>
                    <form method="post" action="<?php echo e(url('saveregister')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" class="validate form-control" name="full_name"
                                    placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="number" class="validate form-control" name="phone" placeholder="Mobile" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" class="validate form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="password" class="validate form-control" name="password" id="password"
                                    placeholder="Password" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn">
                                <span id='message'></span>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>
 
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/auth/register.blade.php ENDPATH**/ ?>