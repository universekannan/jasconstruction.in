
<?php $__env->startSection('admin.content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content-header">
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Bookings</h3>
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
                                        <th>ID</th>
                                        <th>Package Name</th>
                                        <th>Pax</th>
                                        <th>Price</th>
                                        <th>Tour Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $userbookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($b->id); ?></td>
                                            <td><?php echo e($b->packages_name); ?></td>
                                            <td><?php echo e($b->no_of_person); ?></td>
                                            <td><?php echo e($b->price); ?></td>
                                            <td><?php echo e($b->tour_date); ?></td>
                                            <td>
                                                <?php if($b->order_status == "Paid"): ?>
                                                <i class="btn btn-success btn-sm col-sm-4">Paid</i>
                                                    <?php if (! ($b->complete == "1")): ?>
                                                        <a onclick="return confirm('Are You Sure to proceed with approval?')" href="<?php echo e(url('/statusaproved', $b->order_id)); ?>"
                                                        class="btn btn-success btn-sm col-sm-4">Approve</a>
                                                    <?php else: ?>
                                                    <i class="btn btn-success btn-sm col-sm-4">Approved</i>
                                                    <?php endif; ?>
                                                <?php endif; ?>
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
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page_scripts'); ?>
    <script>
        function edit_tour(id, packages_name, price, tour_date, status, description) {
            $('#editid').val(id);
            $("#editpackage").val(packages_name);
            $("#editprice").val(price);
            $("#editdate").val(tour_date);
            $("#editstatus").val(status);
            $("#editdescription").val(description);
            $("#edittour").modal("show");
        }
    </script>
    <script>
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/admin/booking.blade.php ENDPATH**/ ?>