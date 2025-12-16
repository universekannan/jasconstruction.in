
<?php $__env->startSection('admin.content'); ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="content-header">
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Price by Age</h3>
                        <?php if((Auth::user()->user_type_id == 1)): ?>
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><button type="button" class="btn btn-sm btn-secondary float-right" data-toggle="modal" data-target="#ageprice"><i class="fa fa-plus"> Add </i></button></li>
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
                             <th>Agewise Price Details</th>
                             <th>Status</th>
                             <th>Action</th>
                            </tr>
                       </thead>
                       <tbody>
                       <?php $__currentLoopData = $agetype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agetypelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($agetypelist->id); ?></td>
                           <td><?php echo e($agetypelist->age_type_name); ?></td>
                           <td><?php echo e($agetypelist->status); ?></td>
                           <td width="10%" style="white-space: nowrap">
                               <a data-toggle="modal" data-target="#EditAgeprice<?php echo e($agetypelist->id); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"title="Edit"> Edit </i></a>
                               <div class="modal fade" id="EditAgeprice<?php echo e($agetypelist->id); ?>">
                                  <div class="modal-dialog modal-md">
                                     <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title">Edit Price by Age</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="<?php echo e(url('/updateageprice')); ?>" method="post">
                                             <?php echo e(csrf_field()); ?>

                                                <input type="hidden" value="<?php echo e($agetypelist->id); ?>" name="ageprice_id">
                                                    <div class="modal-body">
                                                        
                                                        <div class="form-group">
                                                            <label for="age_type_name"> Agewise Price Details</label>
                                                            <input type="text" value="<?php echo e($agetypelist->age_type_name); ?>" class="form-control"  name="age_type_name" id="age_type_name" placeholder="Enter Agewise price details">
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

                                        <a onclick="return confirm('Do you want to perform delete operation?')" href="<?php echo e(url('/deleteageprice' , $agetypelist->id)); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"title="Delete"> Delete</i></a>
                                    
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
<div class="modal fade" id="ageprice">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
             <div class="modal-header">
                    <h4 class="modal-title"> Add Age Prices</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
             </div>
             <form action="<?php echo e(url('/addagetype')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="modal-body">
                      
                        <div class="form-group">
                            <label for="age_type_name"> Agewise Price Details</label>
                            <input type="text" class="form-control"  name="age_type_name" id="age_type_name" placeholder="Enter Agewise price details">
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
                                        
                                        
                        
                                       
                                                   
                                                    
                   

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/ageprice.blade.php ENDPATH**/ ?>