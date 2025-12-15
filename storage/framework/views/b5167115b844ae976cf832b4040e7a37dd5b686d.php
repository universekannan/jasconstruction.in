
<?php $__env->startSection('admin.content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content-header">
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tour Packages</h3>
                        <button type="button" class="btn btn-sm btn-secondary float-right" data-toggle="modal"
                            data-target="#addtour"><i class="fa fa-plus"> </i> Add Tour</button>
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
                                        <th>Packages Name</th>
                                        <th>Price</th>
                                        <th>Tour Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $tourpackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourpackageslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($tourpackageslist['id']); ?></td>
                                            <td><?php echo e($tourpackageslist['packages_name']); ?></td>
                                            <td><?php echo e($tourpackageslist['price']); ?></td>
                                            <td><?php echo e($tourpackageslist['tour_date']); ?></td>
                                            <td><?php echo e($tourpackageslist['status']); ?></td>
                                            <td width="10%" style="white-space: nowrap">
                                                <a onclick="edit_tour('<?php echo e($tourpackageslist['id']); ?>','<?php echo e($tourpackageslist['packages_name']); ?>','<?php echo e($tourpackageslist['price']); ?>','<?php echo e($tourpackageslist['tour_date']); ?>','<?php echo e($tourpackageslist['status']); ?>','<?php echo e($tourpackageslist['description']); ?>','<?php echo e($tourpackageslist['tour_type']); ?>')"
                                                    href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>
                                                    Edit </a>
                                                    <a class="btn btn-primary btn-sm fa fa-image" href="" data-toggle="modal" data-target="#add_moreimage<?php echo e($tourpackageslist['id']); ?>"></a>
													
                                                    <a class="btn btn-primary btn-sm fa fa-user" href="" data-toggle="modal" data-target="#ageprice<?php echo e($tourpackageslist['id']); ?>"></a>

                                                <a onclick="return confirm('Do you want to Confirm delete operation?')"
                                                    href="<?php echo e(url('/deletecenter', $tourpackageslist['id'])); ?>"
                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>

                                    <div class="modal fade" id="add_moreimage<?php echo e($tourpackageslist['id']); ?>">
                                    <div class="modal-dialog modal-lg">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h4 class="modal-title">Add More Images</h4>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <table id="example2" class="table table-bordered table-hover">
                                                      <thead>
                                                         <tr>
                                                            <th>ID</th>
                                                            <th>Images</th>
                                                            <th>Action</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <?php $__currentLoopData = $tourpackageslist['details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=>$packages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <tr>
                                                            <td><?php echo e($key2 + 1); ?></td>
                                                            <td><img src="upload/package_images/<?php echo e($packages['photo']); ?>" width="50" height="50"></td>
                                                            <td><a onclick="return confirm('Do you want to perform delete operation?')"  href="<?php echo e(url('/deleteimage' ,$packages['tours_imageid'])); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                                         </tr>
                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </tbody>
                                                   </table>
                                                   <form action="<?php echo e(url('/addmoreimages')); ?>" method="post" enctype="multipart/form-data">
                                                      <?php echo e(csrf_field()); ?>

                                                      <input type="hidden" name="id" value="<?php echo e($tourpackageslist['id']); ?>">
                                                      <div class="form-group row">
                                                         <label for="photo" class="col-sm-4 col-form-label"><span style="color:red"></span>Photo</label>
                                                         <div class="col-sm-8">
                                                            <input accept="image/png, image/gif, image/jpeg" multiple="multiple" required="required" type="file" class="form-control" name="photo[]"  placeholder="Photo">
                                                         </div>
                                                      </div>
                                                      <div class="modal-footer justify-content-between">
                                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                         <button type="submit" class="btn btn-primary">Submit</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								 <div class="modal fade" id="ageprice<?php echo e($tourpackageslist['id']); ?>">
                                    <div class="modal-dialog modal-lg">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h4 class="modal-title">Price by Age</h4>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <table id="example2" class="table table-bordered table-hover">
                                                      <thead>
                                                         <tr>
                                                            <th>ID</th>
                                                            <th>Agewise</th>
                                                            <th>Price</th>
                                                            <th>Action</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                        <?php $__currentLoopData = $tourpackageslist['ageprice']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3=>$ageprice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <tr>
                                                            <td><?php echo e($key3 + 1); ?></td>
                                                            <td><?php echo e($ageprice['age_type_name']); ?></td>
															<td><?php echo e($ageprice['price']); ?></td>
                                                            <td><a onclick="return confirm('Do you want to perform delete operation?')"  href="<?php echo e(url('/delete_ageprice' ,$ageprice['age_price_id'])); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                                         </tr>
                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </tbody>
                                                   </table>
                                                   <form action="<?php echo e(url('/addageprice')); ?>" method="post" enctype="multipart/form-data">
                                                      <?php echo e(csrf_field()); ?>

                                                      <input type="hidden" name="tour_id" value="<?php echo e($tourpackageslist['id']); ?>">
                                                      <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>District Name</label>
                                    <select class="form-control select2" name="age_type_id" id="age_type_id" style="width: 100%;">
                                        <option value="">Select District Name</option>
                                        <?php $__currentLoopData = $agetype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agetypelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($agetypelist->id); ?>"><?php echo e($agetypelist->age_type_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control"
                                        name="price" id="price" placeholder="price">
                                    <span id="price" style="color:red"></span>
                                </div>
                               
                            </div>
                        </div>
                                                      <div class="modal-footer justify-content-between">
                                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                         <button type="submit" class="btn btn-primary">Submit</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="modal fade" id="addtour">
                            <form action="<?php echo e(url('/addtours')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tour Details</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for="packages_name" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Packages Name</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="text" class="form-control"
                                                                name="packages_name" maxlength="200"
                                                                placeholder="Packages Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="price" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Price</label>
                                                        <div class="col-sm-3">
                                                            <input required="required" type="price"
                                                                class="form-control number" name="price" maxlength="10"
                                                                placeholder="Price">
                                                        </div>
														 <div class="col-sm-5">
                                                             <label>
                                            Select Tour Type
                                            <label>
                                                <label>
                                                    <input type="radio" required="required"  name="tour_type" id="tour_type" value="1">
                                                    Normal
                                                </label>
                                                <label>
                                                    <input type="radio" required="required"  name="tour_type" id="tour_type" value="2">
                                                    Populer
                                                </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="price" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Tour Date</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="date" class="form-control"
                                                                name="tour_date">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="photo" class="col-sm-4 col-form-label"><span style="color:red">*</span>Photo</label>
                                                        <div class="col-sm-8">
                                                           <input required="required" type="file" class="form-control" accept="image/png, image/gif, image/jpeg" multiple="multiple" name="photo"  placeholder="Photo">
                                                        </div>
                                                     </div>
                                                    <div class="form-group row">
                                                        <label for="description" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Description</label>
                                                        <div class="col-sm-8">
                                                            <textarea rows="5" id="editor1" required="required" class="form-control" name="description" maxlength="5000"
                                                                placeholder="Description"></textarea>
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
                        <div class="modal fade" id="edittour" aria-hidden="true">
                            <form action="<?php echo e(url('/updatetour')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollable">Tour Package Details</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <input type="hidden" name="user_id" id="editid">
                                                        <label for="packages_name" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span> Package Name</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="text"
                                                                class="form-control" name="packages_name" maxlength="200"
                                                                placeholder="Package Name" id="editpackage">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="price" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Price</label>
                                                        <div class="col-sm-3">
                                                            <input required="required" type="text"
                                                                class="form-control" name="price" maxlength="10"
                                                                placeholder="Price" id="editprice">
                                                        </div>
														 <div class="col-sm-5">
                                                             <label>
                                            Select Tour Type
                                            <label>
                                                <label>
                                                    <input type="radio" name="tour_type" id="tour_type1" value="1">
                                                    Normal
                                                </label>
                                                <label>
                                                    <input type="radio" name="tour_type" id="tour_type2" value="2">
                                                    Populer
                                                </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tour_date" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Tour Date</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="date"
                                                                class="form-control" name="tour_date" maxlength="15"
                                                                id="editdate">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="photo" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Photo</label>
                                                        <div class="col-sm-8">
                                                            <input required="required" type="file"
                                                                class="form-control"  name="photo">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="status" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Status</label>
                                                        <div class="col-sm-8">
                                                            <select required="required" type="text"
                                                                class="form-control" name="status" id="editstatus">
                                                 <option value="Active"> Active</option>
                                                 <option value="InActive"> InActive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="description" class="col-sm-4 col-form-label"><span
                                                                style="color:red">*</span>Description</label>
                                                        <div class="col-sm-8">
                                                            <textarea rows="5" id="editdescription" required="required" class="form-control" name="description"
                                                                maxlength="5000" placeholder="Description"></textarea>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page_scripts'); ?>
    <script>
        function edit_tour(id, packages_name, price, tour_date, status, description,tourtype) {
			$("#tour_type1").prop("checked", false);
			$("#tour_type2").prop("checked", false);
			if(tourtype == 1){
				$("#tour_type1").prop("checked", true);
			}else if (tourtype == 2){
				$("#tour_type2").prop("checked", true);
			}
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/admin/tour/index.blade.php ENDPATH**/ ?>