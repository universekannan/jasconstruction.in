

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content-header">
                </div>
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Pending Order</h3>
                    </div>
                    <div class="card-body">
                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-success alert-dismissable" style="margin: 15px;">
                                <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                    aria-label="close">&times;</a>
                                <strong> <?php echo e(session('success')); ?> </strong>
                            </div>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Mobile No</th>
                                        <th>Prodect Name</th>
                                        <th>Qity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $pendingorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $centerslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($centerslist->full_name); ?></td>
                                            <td><?php echo e($centerslist->mobile); ?></td>
                                            <td><?php echo e($centerslist->product_name); ?></td>
                                            <td><?php echo e($centerslist->qity); ?></td>
                                          <td width="10%" style="white-space: nowrap">
                                                <a onclick="edit_center('<?php echo e($centerslist->id); ?>','<?php echo e($centerslist->full_name); ?>','<?php echo e($centerslist->email); ?>','<?php echo e($centerslist->mobile); ?>','<?php echo e($centerslist->product_name); ?>','<?php echo e($centerslist->status); ?>')" href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="modal fade" id="editcenters" tabindex="-1" aria-hidden="true">
                            <form action="<?php echo e(url('/updatecenter')); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollable">Edit centerslist</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <input type="hidden" name="user_id" id="user_id">
                                                        <label for="name" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Full Name</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="text"
                                                                class="form-control" name="name" maxlength="50"
                                                                placeholder="Full Name" id="centerslistname">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="email" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Email</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="email"
                                                                class="form-control" name="email" maxlength="30"
                                                                placeholder="Email" id="centerslistemail">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="phone" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Mobile No</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="text"
                                                                class="form-control" name="mobile" maxlength="20"
                                                                placeholder="Mobile Number" id="centerslistmobile">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="email" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Status</label>
                                                        <div class="col-sm-8">
                                                            <select id="editstatus" name="status" class="form-control">
                                                                <option value="1">Active</option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <input class="btn btn-primary" type="submit" value="Submit" />
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page_scripts'); ?>
    <script>
        function edit_center(id, name, email, mobile, status) {
            $("#centerslistname").val(name);
            $("#centerslistemail").val(email);
            $("#centerslistmobile").val(mobile);
            $("#editstatus").val(status);
            $('#user_id').val(id);
            $("#editcenters").modal("show");
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/admin/users/pendingorder.blade.php ENDPATH**/ ?>