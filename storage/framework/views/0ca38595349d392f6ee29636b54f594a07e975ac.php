
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content-header">
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Category</h3>
                        <button type="button" class="btn btn-sm btn-secondary float-right" data-toggle="modal"
                            data-target="#addcategory"><i class="fa fa-plus"> </i> Add Category</button>
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
                                    <th>Category Name</th>
                                    <th>Category Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($cate->id); ?></td>
                                        <td><?php echo e($cate->category_name); ?></td>
                                        <td><img src="../upload/catimage/<?php echo e($cate->photo); ?>"
                                            width="50"
                                            height="50"></td>
                                        <?php if($cate->status == 1): ?>
                                            <td>Active</td>
                                        <?php else: ?>
                                            <td>Inactive</td>
                                        <?php endif; ?>
                                        </td>
                                        <td>
                                            <a onclick="edit_category('<?php echo e($cate->id); ?>','<?php echo e($cate->category_name); ?>','<?php echo e($cate->photo); ?>','<?php echo e($cate->status); ?>')"
                                                href="#" class="btn btn-sm btn-primary"><i
                                                    class="fa fa-edit"></i>Edit</a>

                                            <a href="<?php echo e(url('/admin/subcategory', $cate->id)); ?>"
                                                class="btn btn-warning btn-sm"><i class="fas fa-arrow-circle-right"></i> Sub
                                                Category</a>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <div class="modal fade" id="addcategory">
                            <form action="<?php echo e(url('addcategory')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add Category</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for="category_name" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Category Name</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="text" class="form-control"
                                                                name="category_name" id="category_name" maxlength="50"
                                                                placeholder="Category Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for="photo" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Category Image</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="file" class="form-control"
                                                                name="photo" maxlength="100">
                                                        </div>
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

                        <div class="modal fade" id="editcategory" tabindex="-1" aria-hidden="true">
                            <form action="<?php echo e(url('updatecategory')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollable">Edit Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="Hidden" name="cat_id" id="category_id">
                                                    <div class="form-group row">
                                                        <label for="category_name" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Category Name</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="text"
                                                                class="form-control" name="category_name"
                                                                id="editcategoryname" maxlength="50"
                                                                placeholder="Category Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="photo" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Category Image</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="file"
                                                                class="form-control" name="photo" maxlength="50"
                                                                placeholder="Category Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Status</label>
                                                        <div class="col-sm-8">
                                                            <select name="status" class="form-control" id="editstatus">
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
        function edit_category(id, category_name, photo, status, ) {
            $("#editcategoryname").val(category_name);
            $("#editstatus").val(status);
            $("#category_id").val(id);
            $("#editcategory").modal("show");
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/admin/category/index.blade.php ENDPATH**/ ?>