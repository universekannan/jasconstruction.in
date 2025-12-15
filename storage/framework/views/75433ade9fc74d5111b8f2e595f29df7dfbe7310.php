
<?php $__env->startSection('content'); ?>
<style type="text/css">
    .input-group {
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <h1 class="card-title">Edit product Details</h1>
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
                        <form action="<?php echo e(url('/updateproduct')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="hidden" name="product_id" value="<?php echo e($product['id']); ?>">

                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-2 col-form-label"><span
                                            style="color:red">*</span>Category</label>
                                    <div class="col-sm-4">
                                        <select name="cat_id" id="cat_id" required="required"
                                            class="form-control select2">
                                            <option value="">Select Category</option>

                                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($cat_id == $cat->id): ?> selected <?php endif; ?>
                                                    value="<?php echo e($cat->id); ?>"><?php echo e($cat->category_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="sub_cat_id" id="sub_cat_id" required="required"
                                            class="form-control select2">

                                            <?php $__currentLoopData = $sub_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($sub_cat_id == $cat->id): ?> selected <?php endif; ?>
                                                    value="<?php echo e($cat->id); ?>"><?php echo e($cat->category_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input required="required" value="<?php echo e($product['price']); ?>" type="text"
                                            class="form-control" name="price" maxlength="200" placeholder="price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-2 col-form-label"><span
                                            style="color:red">*</span>Product Name</label>
                                    <div class="col-sm-8">
                                        <input required="required" value="<?php echo e($product['product_name']); ?>"
                                            type="text" class="form-control" name="product_name" maxlength="200"
                                            placeholder="Product Name">
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control select2bs4" name="status" style="width: 100%;"
                                            required="required">

                                            <option value="Active"
                                                <?php if($product['status'] == 'Active'){ echo "selected"; } ?>>
                                                Active</option>
                                            <option value="Inactive"
                                                <?php if($product['status'] == 'Inactive'){ echo "selected"; } ?>>
                                                Inactive</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="short_description" class="col-sm-2 col-form-label"><span
                                            style="color:red">*</span>Short Description</label>
                                    <div class="col-sm-10">
                                        <textarea rows="2" required="required" class="form-control" name="short_description" maxlength="50"
                                            placeholder="Short Description"><?php echo e($product['short_description']); ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label"><span
                                            style="color:red">*</span>Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor1" rows="5" required="required" class="form-control" name="description" maxlength="5000"
                                            placeholder="Description"><?php echo e($product['description']); ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label>Related Product</label>
                                        <select name="related[]" class="select2" multiple="multiple"
                                            data-placeholder="Select a Product" style="width: 100%;">

                                            <?php $__currentLoopData = $relatedproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    <?php $__currentLoopData = $product['related']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($related->related_id == $prod->id): ?> selected <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    value="<?php echo e($prod->id); ?>"><?php echo e($prod->product_name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group row">
                                <div class="col-md-12 text-center">
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#addimage"> Add Image</button>

                                    <a class="btn btn-primary" href="<?php echo e(URL::previous()); ?>">Back</a>
                                    <input class="btn btn-info" type="submit" name="submit" value="Submit" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="modal fade" id="addimage">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Product Price</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(url('saveproductimage')); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="product_id" value="<?php echo e($product['id']); ?>">
                        <input type="hidden" name="product_name" value="<?php echo e($product['product_name']); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="card-body">
                            <table id="pricetable" class="table table-bordered" align="center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $productimage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productimagelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($productimagelist->id); ?></td>
                                            <td><img src="<?php echo e(URL::to('/')); ?>/upload/product/<?php echo e($productimagelist->phone); ?>" width="50" height="50"></td>

                                            <td>
                                                <a onclick="return confirm('Do you want to Confirm delete operation?')"
                                                href="<?php echo e(url('/deleteimage', $productimagelist->id)); ?>"
                                                class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="phone" class="custom-file-input"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('page_scripts'); ?>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/ckeditor/ckeditor.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
<script>
    $('#cat_id').on('change', function() {
        var cat_id = this.value;
        $("#sub_cat_id").html('');
        $.ajax({
            url: "<?php echo e(url('/getcat')); ?>",
            type: "POST",
            data: {
                cat_id: cat_id,
                _token: '<?php echo e(csrf_token()); ?>'
            },
            dataType: 'json',
            success: function(result) {
                $('#sub_cat_id').html('<option value="">Select Sub Category</option>');
                $.each(result, function(key, value) {
                    $("#sub_cat_id").append('<option value="' + value
                        .id + '">' + value.category_name + '</option>');
                });
            }
        });
    });
</script>

<script>
    $('#dist_id').on('change', function() {
        var idTaluk = this.value;
        $("#taluk").html('');
        $.ajax({
            url: "<?php echo e(url('/gettaluk')); ?>",
            type: "POST",
            data: {
                taluk_id: idTaluk,
                _token: '<?php echo e(csrf_token()); ?>'
            },
            dataType: 'json',
            success: function(result) {
                $('#taluk').html('<option value="">-- Select Taluk Name --</option>');
                $.each(result, function(key, value) {
                    $("#taluk").append('<option value="' + value
                        .id + '">' + value.taluk_name + '</option>');
                });
                $('#panchayath').html('<option value="">-- Select Panchayath --</option>');
            }
        });
    });

    function show_price() {
        $("#addprices").modal("show");
    }

    $("#pricetable").on('click', '.btnDelete', function() {
        $(this).closest('tr').remove();
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/admin/products/editproduct.blade.php ENDPATH**/ ?>