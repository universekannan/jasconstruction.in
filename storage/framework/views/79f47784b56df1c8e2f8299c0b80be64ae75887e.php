<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php echo e(config('app.name')); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/fav.ico">

    
    <?php $__env->startSection('content'); ?>
    </head>

    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <div class="pop-bg"></div>

        <section>
            <div class="db">
                <div class="db-l">
                    <div class="db-l-1">
                        <ul>
                            <li><img src="images/db-profile.jpg" alt="" />
                            </li>
                            <li><span>80%</span> profile compl</li>
                            <li><span>18</span> Notifications</li>
                        </ul>
                    </div>
                    <div class="db-l-2">
                        <?php echo $__env->make('layouts.leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>
                </div>

                <div class="db-2">
                    <div class="db-2-com db-2-main">
                        <h4>Travel Booking</h4>
                        <div class="db-2-main-com db-2-main-com-table">
                            <table class="responsive-table">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Package Name</th>
                                        <th>Price</th>
                                        <th>Pax
                                        <th>Tour Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $userbookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userbookingslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($userbookingslist->order_id); ?></td>
                                            <td><?php echo e($userbookingslist->packages_name); ?></td>
                                            <td><?php echo e($userbookingslist->total_price); ?></td>
                                            <td><?php echo e($userbookingslist->no_of_person); ?></td>
                                            <td><?php echo e(date("d-M-Y",strtotime($userbookingslist->tour_date))); ?></td>
                                            <?php
                                                $persons = json_encode($userbookingslist->persons);
                                            ?>
                                            <td>
                                                <a onclick="showbook('<?php echo e($persons); ?>','<?php echo e($userbookingslist->total_price); ?>','<?php echo e($userbookingslist->order_id); ?>','<?php echo e($userbookingslist->order_status); ?>')"
                                                    href="#" class="btn btn-warning btn-sm col-sm-3 fa fa-eye"></a>
                                                    &nbsp; &nbsp; &nbsp;
                                                <?php if($userbookingslist->order_status == "Paid"): ?>
                                                    <i class="btn btn-success btn-sm col-sm-4">Paid</i>
                                                <?php else: ?>
                                                <a class="btn btn-primary btn-sm col-sm-5"
                                                    href="<?php echo e(url('/checkout', $userbookingslist->order_id)); ?>">CheckOut<a>
                                                <?php endif; ?>
                                                <?php if($userbookingslist->order_status != "Paid"): ?>
                                                <a onclick="return confirm('Do you want to proceed with delete booking?')"
                                                href="<?php echo e(url('/deletebooking', $userbookingslist->order_id)); ?>"
                                                class="btn btn-danger btn-sm col-sm-2"><i class="fa fa-trash"></i> </a>
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
        </section>

        <div class="modal" tabindex="-1" role="dialog" id="showbooking">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bookings</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>AgeWise Details
                                            <th>Count</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody id="followup_tbody">

                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
        </div>
        </div>
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('page_scripts'); ?>
        <script>
            function showbook(persons, total, order_id, status) {
                $("#subbtn").prop('disabled', false);
                var persons = JSON.parse(persons);
                $("#followup_tbody").html('');
                $("#amounttotal").val(total);
                $("#hiddenid").val(order_id);
                if (status == "Paid") {
                    $("#subbtn").prop('disabled', true);
                    $('#subbtn').text('Waiting for approval');

                }

                $.each(persons, function(key, value) {
                    $("#followup_tbody").append('<tr><td>' + value
                        .agewise_price_details + '</td><td>' + value
                        .agewise_count + '</td><td>' + value
                        .price + '</td></tr>');
                });
                $("#followup_tbody").append('<tr><td align="center">Total</td><td colspan=2 align="center">' + total +
                    '</td></tr>');
                $("#showbooking").modal("show");
            }
        </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/bookings.blade.php ENDPATH**/ ?>