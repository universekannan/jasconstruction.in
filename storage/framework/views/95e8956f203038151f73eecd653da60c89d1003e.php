
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Change Password</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success alert-dismissable" style="margin: 15px;">
                                    <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                        aria-label="close">&times;</a>
                                    <strong> <?php echo e(session('success')); ?> </strong>
                                </div>
                            <?php endif; ?>
                            <?php if(session()->has('error')): ?>
                                <div class="alert alert-danger alert-dismissable" style="margin: 15px;">
                                    <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                        aria-label="close">&times;</a>
                                    <strong> <?php echo e(session('error')); ?> </strong>
                                </div>
                            <?php endif; ?>
                            <form action="<?php echo e(url('/updatepassword')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Old Password</label>
                                            <input type="text" class="form-control" name="oldpassword"
                                                required="required" id="oldpassword" placeholder="Enter Old Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="new_password">New Password</label>
                                            <input type="text" class="form-control" name="new_password"
                                                required="required" id="password" placeholder="Enter New Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password</label>
                                            <input type="text" class="form-control" name="confirm_password"
                                                required="required" id="password" placeholder="Enter Confirm Password">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 text-center">
                                                <a href="" class="btn btn-info">Back</a>
                                                <input id="save" class="btn btn-info" type="submit" name="submit"
                                                    value="Submit" />
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/admin/users/changepassword.blade.php ENDPATH**/ ?>