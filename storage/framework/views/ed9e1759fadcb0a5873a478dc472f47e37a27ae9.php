<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->

<?php $__env->startSection('content'); ?>

</head>

<body>

       <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Ui Form</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>User Details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons"></i></a>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S No</th>
                                                    <th>Packages Name</th>
                                                    <th>price</th>
                                                    <th>Status</th>

                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                      
                                            <tbody>
																																		<?php $__currentLoopData = $tourPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourPackageslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <tr>

                                                    <td><span class="list-enq-name"><?php echo e($tourPackageslist->id); ?></span>
                                                    </td>
                                                    <td><span class="list-enq-name"><?php echo e($tourPackageslist->packages_name); ?></span>
                                                    </td>
                                                   
                                                    <td><span class="list-enq-name"><?php echo e($tourPackageslist->price); ?></span>
                                                    </td>
                                                   
                                                    <td><span class="list-enq-name"><?php echo e($tourPackageslist->status); ?></span>
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
            </div>
        </div>
    </div>


</body>

</html>
<?php echo $__env->make('layouts.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/tour_packages.blade.php ENDPATH**/ ?>