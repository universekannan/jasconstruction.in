
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content-header">
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Projects Details</h3>
                    </div>
                    <div class="card-body">
                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-success alert-dismissable" style="margin: 15px;">
                                <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                    aria-label="close">&times;</a>
                                <strong> <?php echo e(session('success')); ?> </strong>
                            </div>
                        <?php endif; ?>
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Project Name</th>
                                    <th>Project Amount</th>
                                    <th>Project Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($pro->id); ?></td>
                                        <td><?php echo e($pro->project_name); ?></td>
                                        <td><?php echo e($pro->project_amount); ?></td>
                                        <td><?php echo e($pro->project_status_id); ?></td>
                                        <td>
                                        <a class="btn btn-primary btn-sm"
                                            href="<?php echo e(url('admin/editproject', $pro->id)); ?>"><i class="fa fa-edit"> Edit</i></a>

                                        <a onclick="return confirm('Do you want to perform delete operation?')"
                                            href="<?php echo e(url('/dropproject', $pro->id)); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Delete</i></a>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page_scripts'); ?>
    <script>
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jasconstruction.in\01-11-2024\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>