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
			<div class="tr-regi-form">
				<h4>Sign <span>In</span></h4>
				<p>It's free and always will be.</p>
				            <p class="text-center text-danger" ><?php echo e(session('message')); ?> </p>

				<form class="col s12" method="post" action="<?php echo e(url('/adminlogin')); ?>">
				 <?php echo csrf_field(); ?>
					<div class="row">
						<div class="input-field col s12">
							<input type="email" class="validate" name="email" placeholder="User Name" required>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" class="validate" name="password" placeholder="Password" required>
						</div>
					</div>
					 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error invalid-feedback"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="Sign In" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
				<p>Are you a new user ? <a href="<?php echo e(url('register')); ?>">Register</a>
				</p>

			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>

















<?php echo $__env->make('admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/auth/login.blade.php ENDPATH**/ ?>