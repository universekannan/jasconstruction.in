
<?php $__env->startSection('content'); ?>
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Backup Database</h1>
         </div>
         <div class="col-sm-6">
            <?php if(Auth::user()->usertype_id == 1): ?>
            <ol class="breadcrumb float-sm-right">
               <form action="<?php echo e(url('admin/backup/create')); ?>" method="GET" enctype="multipart/form-data" id="CreateBackupForm">
                  <?php echo e(csrf_field()); ?>

                  <input type="submit" name="submit" class="btn btn-secondary btn-sm float-right"  value="Create Database Backup">
               </form>
            </ol>
            <?php else: ?>
            <?php endif; ?>
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
                  <div class="alert alert-success alert-dismissable">
                     <a href="#" style="color:white !important" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <strong> <?php echo e(session('success')); ?> </strong>
                  </div>
                  <?php endif; ?>
                  <?php if( Session::has('update') ): ?>
                  <div class="alert alert-success alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                  </div>
                  <?php endif; ?>
                  <?php if( Session::has('delete') ): ?>
                  <div class="alert alert-danger alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <?php echo e(Session::get('delete')); ?>

                  </div>
                  <?php endif; ?>
                  <?php if(count($backups)): ?>
                  <table id="example2" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>File Name</th>
                           <th>File Size</th>
                           <th>Created Date</th>
                           <th>Created Age</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $__currentLoopData = $backups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $backup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($backup['file_name']); ?></td>
                           <td><?php echo e(\App\Http\Controllers\Admin\BackupController::humanFilesize($backup['file_size'])); ?></td>
                           <td>
                              <?php echo e(date('F jS, Y, g:ia (T)',$backup['last_modified'])); ?>

                           </td>
                           <td>
                              <?php echo e(\Carbon\Carbon::parse($backup['last_modified'])->diffForHumans()); ?>

                           </td>
                           <td>
                              <a class="btn btn-success"
                                 href="<?php echo e(url('admin/backup/download/'.substr($backup['file_name'],11))); ?>"><i
                                 class="fa fa-cloud-download"></i> Download</a>
                              <a class="btn btn-danger" onclick="return confirm('Do you really want to delete this file')" data-button-type="delete"
                                 href="<?php echo e(url('admin/backup/delete/'. substr($backup['file_name'],11))); ?>"><i class="fa fa-trash-o"></i>
                              Delete</a>
                           </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                  </table>
                  <?php else: ?>
                  <div class="well">
                     <h4 class="text-center">No backups</h4>
                  </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/admin/backup/backups.blade.php ENDPATH**/ ?>