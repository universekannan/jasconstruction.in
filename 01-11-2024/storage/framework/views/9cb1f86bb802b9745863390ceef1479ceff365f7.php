
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
                <h1 class="card-title">Edit project Details</h1>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                           
                        <form action="<?php echo e(url('updateproject')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>           

                         <input  type="hidden" value="<?php echo e($projects->id); ?>" name="project_id">
                            

                        <div class="form-group">
                         <label for="project_status_id"col-form-label">Project type<span style="color:red">*</span></label>
                                <select required="required" type="text" class="form-control"
                                name="project_status_id" maxlength="50">
                            <?php $__currentLoopData = $project_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project_stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($projects->project_status_id == $project_stat->id ? 'selected' : ''); ?> value="<?php echo e($project_stat->id); ?>"><?php echo e($project_stat->project_status_name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                         </div> 	
                       
                        <div class="form-group ">
                          <label for="project_name" col-form-label">Project Name<span
                            style="color:red">*</span></label>
                            
                                <input required="required" type="text" class="form-control"
                                value="<?php echo e($projects->project_name); ?>"  name="project_name" maxlength="50" placeholder="Project Name">
                            
                        </div>

                        <div class="form-group ">
                         <label for="project_owner" class="col-sm-2 col-form-label">Project owner<span
                            style="color:red">*</span></label>
                                <input required="required" type="text" class="form-control"
								value="<?php echo e($projects->project_owner); ?>"
                                name="project_owner" maxlength="50" placeholder="Project owner">
                        </div>
                            
                        <div class="form-group ">
                               <label for="project_mobile" class="col-sm-2 col-form-label">Mobile<span
                            style="color:red">*</span></label>
                            
                                <input required="required" type="text" class="form-control"
								value="<?php echo e($projects->project_mobile); ?>"
                                name="project_mobile" maxlength="50" placeholder="Mobile number">
                            
                        </div>

                        <div class="form-group ">
                          <label for="project_email" class="col-sm-2 col-form-label">Email<span
                            style="color:red">*</span></label>
                              <input required="required" type="text" class="form-control"
								value="<?php echo e($projects->project_email); ?>"
                                name="project_email" maxlength="50" placeholder="Email address">
                        </div>

                        <div class="form-group ">
                          <label for="project_amount" class="col-sm-2 col-form-label">Project amount<span
                            style="color:red">*</span></label>
                              <input required="required" type="text" class="form-control"
								value="<?php echo e($projects->project_amount); ?>"
                                name="project_amount" maxlength="50" placeholder="Project Amount">
                           
                        </div>

                                <div class="form-group ">
                                    <label for="photo" class="col-sm-2 col-form-label"><span
                                        style="color:red">*</span>Project Image</label>
                                        
                                            <input type="file"  class="form-control" name="photo" maxlength="100" type="photo">
                                    
                                 </div>
                                        <div class="form-group ">
                                            <label for="project_address"  class="col-sm-2 col-form-label">Project address<span style="color:red">*</span></label>
                                              <textarea required="required" class="form-control"
        										name="project_address" 
                                                placeholder="project address"><?php echo e($projects->project_address); ?>

                                              </textarea>
                                        </div>
                                    <div class="col-md-12 text-center">
                                        <button type="button" class="btn btn-default" data-toggle="modal"
                                                data-target="#addimage"> Add Image</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-success" value="Save">
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
                            <h4 class="modal-title">Project Price</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo e(url('saveprojectimage')); ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="project_id" value="<?php echo e($projects->id); ?>">
                                <input type="hidden" name="project_name" value="<?php echo e($projects->project_name); ?>">
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
                                    <?php $__currentLoopData = $projectimage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projectimagelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($projectimagelist->id); ?></td>
                                            <td><img src="<?php echo e(URL::to('/')); ?>/upload/project/<?php echo e($projectimagelist->photo); ?>" width="80" height="60"></td>

                                            <td>
                                                <a onclick="return confirm('Do You want to Confirm delete operation?')"
                                                href="<?php echo e(url('/deleteimage', $projectimagelist->id)); ?>"
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
                                        <input type="file" name="photo" class="custom-file-input"
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

<?php echo $__env->make('admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jasconstruction.in\01-11-2024\resources\views/admin/projects/editproject.blade.php ENDPATH**/ ?>