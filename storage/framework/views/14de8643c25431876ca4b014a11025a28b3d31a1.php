
<?php $__env->startSection('admin.content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-header">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Travel Details</h3>
                            <?php if(Auth::user()->user_type_id == 1): ?>
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><button type="button"
                                            class="btn btn-sm btn-secondary float-right" data-toggle="modal"
                                            data-target="#addtravels"><i class="fa fa-plus"> Add </i></button></li>
                                </ol>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                    </div>
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
                            <div class="table-responsive" style="overflow-x: auto; ">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Travel Name</th>
                                            <th>Travel No</th>
                                            <th>Travel Price</th>
                                            <th>Colour</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $traveling; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($tra->id); ?></td>
                                                <td><?php echo e($tra->travel_name); ?></td>
                                                <td><?php echo e($tra->travel_no); ?></td>
                                                <td><?php echo e($tra->travel_price); ?></td>
                                                <td><?php echo e($tra->colour); ?></td>
                                                <td><?php echo e($tra->status); ?></td>

                                                <td width="10%" style="white-space: nowrap">
                                                    <a onclick="edittravel('<?php echo e($tra->id); ?>','<?php echo e($tra->ac); ?>','<?php echo e($tra->travel_name); ?>','<?php echo e($tra->travel_no); ?>','<?php echo e($tra->travel_price); ?>','<?php echo e($tra->colour); ?>','<?php echo e($tra->seats); ?>','<?php echo e($tra->status); ?>')"
                                                        href="#" class="btn btn-sm btn-primary"><i
                                                            class="fa fa-edit"></i>
                                                    </a>

                                                    <a class="btn btn-primary btn-sm fa fa-image" href=""
                                                        data-toggle="modal"
                                                        data-target="#addmoretravel<?php echo e($tra->id); ?>"></a>

                                                    <div class="modal fade" id="addmoretravel<?php echo e($tra->id); ?>">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Travel Images</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <table id="example2"
                                                                                class="table table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>ID</th>
                                                                                        <th>Images</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php $__currentLoopData = $tra->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $mem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <tr>
                                                                                            <td><?php echo e($key2 + 1); ?></td>
                                                                                            <td><img src="<?php echo e(URL::to('/')); ?>/upload/travelmoreimage/<?php echo e($mem->photo); ?>"
                                                                                                    width="50"
                                                                                                    height="50">
                                                                                            </td>
                                                                                            <td><a onclick="return confirm('Do you want to delete?')"
                                                                                                    href="<?php echo e(url('/deletetravelimage', $mem->travelid)); ?>"
                                                                                                    class="btn btn-danger btn-sm"><i
                                                                                                        class="fa fa-trash"></i></a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </tbody>
                                                                            </table>
                                                                            <form action="<?php echo e(url('/addmoretravel')); ?>"
                                                                                method="post"
                                                                                enctype="multipart/form-data">
                                                                                <?php echo e(csrf_field()); ?>

                                                                                <input type="hidden" name="id"
                                                                                    value="<?php echo e($tra->id); ?>">
                                                                                <div class="form-group row">
                                                                                    <label for="photo"
                                                                                        class="col-sm-4 col-form-label"><span
                                                                                            style="color:red"></span>Photo</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input
                                                                                            accept="image/png, image/gif, image/jpeg"
                                                                                            multiple="multiple"
                                                                                            required="required"
                                                                                            type="file"
                                                                                            class="form-control"
                                                                                            name="photo[]"
                                                                                            placeholder="Photo">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="modal-footer justify-content-between">
                                                                                    <button type="button"
                                                                                        class="btn btn-default"
                                                                                        data-dismiss="modal">Close</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Submit</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a onclick="return confirm('Do you want to perform delete operation?')"
                                                        href="<?php echo e(url('/deletetravel', $tra->id)); ?>"
                                                        class="btn btn-danger btn-sm"><i class="fa fa-trash"title="Delete">
                                                        </i></a>

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
    </section>
    <div class="modal fade" id="addtravels">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Add Travels</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(url('/addtravel')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="travel_name">Travel Name</label>
                            <input type="text" maxlength="20" class="form-control" name="travel_name"
                                placeholder="Travel Name">
                        </div>

                        <div class="form-group">
                            <label for="travel_no">Travel No</label>
                            <input type="text" maxlength="10" class="form-control" name="travel_no"
                                placeholder="Travel No">
                        </div>

                        <div class="form-group">
                            <label for="travel_price">Travel Price</label>
                            <input type="text" maxlength="5" class="form-control number" name="travel_price"
                                placeholder="Travel Price">
                        </div>

                        <div class="form-group">
                            <label for="colour">Travel Colour</label>
                            <input type="text" maxlength="6" class="form-control" name="colour"
                                placeholder="Travel Colour">
                        </div>

                        <div class="form-group">
                            <label for="seats">Travel Seat</label>
                            <input type="text" class="form-control number" maxlength="2" name="seats"
                                placeholder="Travel Seats">
                        </div>
                        <div class="form-group">
                            <label for="ac">Ac</label>
                            <div class="radio">
                                <label>
                                    Select
                                    <l /abel>
                                        &nbsp;
                                        <label>
                                            <input type="radio" name="ac" id="ac" value="1">
                                            Ac
                                        </label>
                                        <label>
                                            <input type="radio" name="ac" id="non_ac" value="2">
                                            Non A/c
                                        </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="travel_image">Travel Image</label>
                            <input type="file" class="form-control" name="travel_image">
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="save" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updatetravels">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Travels</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(url('/updatetravel')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="modal-body">
                        <input type="hidden" name="travel_id" id="editid">
                        <div class="form-group">
                            <label for="travel_name">Travel Name</label>
                            <input type="text" id="edittra" maxlength="20" class="form-control" name="travel_name"
                                placeholder="Travel Name">
                        </div>

                        <div class="form-group">
                            <label for="travel_no">Travel No</label>
                            <input type="text" maxlength="10" id="editno" class="form-control" name="travel_no"
                                placeholder="Travel No">
                        </div>

                        <div class="form-group">
                            <label for="travel_price">Traveling Price</label>
                            <input type="text" maxlength="5" id="editprice" class="form-control number"
                                name="travel_price" placeholder="Travel Price">
                        </div>

                        <div class="form-group">
                            <label for="colour">Travel Colour</label>
                            <input type="text" id="editcolour" maxlength="6" class="form-control" name="colour"
                                placeholder="Travel Colour">
                        </div>

                        <div class="form-group">
                            <label for="seats">Travel Seat</label>
                            <input type="text" id="editseats" class="form-control number" maxlength="2"
                                name="seats" placeholder="Travel Seats">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select type="text" id="editstatus" class="form-control" name="status">
                                <option>Active</option>
                                <option>InActive</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ac">Ac</label>
                            <div class="radio">
                                <label>
                                    Select
                                    <label>
                                        &nbsp;
                                        <label>
                                            <input type="radio" name="ac" id="editac" value="1">
                                            Ac
                                        </label>
                                        <label>
                                            <input type="radio" name="ac" id="editnonac" value="2">
                                            Non A/c
                                        </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="travel_image">Travel Image</label>
                            <input type="file" class="form-control" name="travel_image">
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="save" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('page_scripts'); ?>
    <script>
        function edittravel(id, ac, travel_name, travel_no, travel_price, colour, seats, status) {
            $("#id").val(id);
            $("#ac").prop("checked", false);
            $("#edittra").val(travel_name);
            $("#editno").val(travel_no);
            $("#editprice").val(travel_price);
            $("#editcolour").val(colour);
            $("#editseats").val(seats);
            $("#editstatus").val(status);
            $('#editid').val(id);
            if (ac == 1) {
                $("#editac").prop("checked", true);
            } else {
                $("#editnonac").prop("checked", true);
            }
            $("#updatetravels").modal("show");
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/admin/travel/travel.blade.php ENDPATH**/ ?>