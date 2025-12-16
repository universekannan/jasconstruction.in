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
        <br>
        <br>
        <?php $__currentLoopData = $tourPackage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourPackageList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section>
                <div class="rows inn-page-bg com-colo">
                    <div class="container inn-page-con-bg tb-space">
                        <div class="col-md-8 tour_lhs">
                            <div class="tour_head">
                                <h3><?php echo e($tourPackageList['packages_name']); ?></h3>
                            </div>
                            <div class="tour_head1 hotel-book-room">
                                <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner carousel-inner1" role="listbox">
                                        <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $eventlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item <?php if($key == 0): ?> active <?php endif; ?>"> <img
                                                    src="../upload/package_images/<?php echo e($eventlist->photo); ?>" alt="Chania"
                                                    width="460" height="345"> </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                                        <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i>
                                        </span> </a>
                                    <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                                        <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1"
                                                aria-hidden="true"></i>
                                        </span> </a>
                                </div>
                            </div>
                            <div class="tour_head1">
                                <h3>Description</h3>
                                <h4><?php echo $tourPackageList['description']; ?></h4>
                            </div>
                        </div>
                        <div class="col-md-4 tour_rhs">
                            <div class="tour_right tour_offer">
                                <div class="band1"><img src="images/offer.png" alt="" /> </div>
                                <p>Special Offer</p>
                                <h4>₹ <?php echo e($tourPackageList['price']); ?><span class="n-td">
                                    </span>
                                </h4>
                                <?php if(Auth::user()): ?>
                                    <a type="button" class="link-btn" data-toggle="modal" data-target="#exampleModal">Book
                                        Now</a>
                                <?php else: ?>
                                    <a type="button" class="link-btn" data-toggle="modal" data-target="#login">Login</a>
                                <?php endif; ?>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <form onsubmit="return validatedata(event)" action="<?php echo e(url('saveorders')); ?>"
                                        method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="tour_id" value="<?php echo e($tourPackageList['id']); ?>">
                                        <input type="hidden" name="tour_date" value="<?php echo e($tourPackageList['tour_date']); ?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Person</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <i class="fa fa-times" aria-hidden="true" style="color: black"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="tow">
                                                        <div class="col-md-12">
                                                            <div class="input-field">
                                                                <label for="exampleInputEmail1">Pick up Point</label>
                                                                <select required name="pickup_location"
                                                                    class="chosen-select">
                                                                    <option value="">Pickup location</option>
                                                                    <?php $__currentLoopData = $getlocation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($loc->id); ?>">
                                                                            <?php echo e($loc->pickup_location_name); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="tow" id="newinput">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-field">
                                                                <button id="rowAdder" type="button"
                                                                    class="btn btn-info bookings">
                                                                    <span class="bi bi-plus-square-dotted">
                                                                    </span> ADD
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary ">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tour_right tour_incl tour-ri-com">
                                <h3>Trip Information</h3>
                                <ul>
                                    <li>Location : <?php echo e($tourPackageList['packages_name']); ?></li>
                                    <li>Arrival Date: <?php echo e($tourPackageList['tour_date']); ?></li>
                                    <li>Free Sightseeing & Hotel</li>
                                </ul>
                            </div>
                            <div class="tour_right head_right tour_social tour-ri-com">
                                <h3>Share This Package</h3>
                                <ul>
                                    <li><a href="#" type="button" id="facebook-share"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a> </li>
                                    
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                    
                                    <li><a href="#" type="button" id="whatsapp-share"><i class="fa fa-whatsapp"
                                                aria-hidden="true"></i></a> </li>
                                </ul>
                            </div>
                            <!--====== HELP PACKAGE ==========-->
                            <div class="tour_right head_right tour_help tour-ri-com">
                                <h3>Help & Support</h3>
                                <div class="tour_help_1">
                                    <h4 class="tour_help_1_call">Call Us Now</h4>
                                    <h4><i class="fa fa-phone" aria-hidden="true"></i> +32(0)465669964</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('page_scripts'); ?>
        <script>
            $("#rowAdder").click(function() {
                newRowAdd =

                    '<div class="tow1">' +
                    '<div class="col-md-6">' +
                    '<div class="input-field">' +
                    '<label for="exampleInputEmail1">Select Age Range</label>' +
                    '<select required name="details[]" class="chosen-select">' +
                    '<option value="" disabled selected>Select Age Details</option>' +
                    '<?php $__currentLoopData = $pricelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>' +
                    '<option value="<?php echo e($price->id); ?>~<?php echo e($price->price); ?>"><?php echo e($price->age_type_name); ?></option>' +
                    '<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>' +
                    '</select>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-3">' +
                    '<div class="input-field">' +
                    '<label for="exampleInputEmail1">Persons</label>' +
                    '<input required maxlength="2" type="number" name="counts[]" class="form-control number paxcount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Persons">' +
                    '</div>' +
                    ' </div>' +
                    '<div class="col-md-3">' +
                    '<div class="input-field">' +
                    ' <button class="btn btn-danger" id="DeleteRow" type="button"><i class="bi bi-trash"></i> Delete </button>' +
                    '</div>' +
                    '</div>' +

                    '</div>';

                $('#newinput').append(newRowAdd);
            });

            $("body").on("click", "#DeleteRow", function() {
                $(this).parents(".tow1").remove();
            })

            $('.number').keypress(function(event) {
                var keycode = event.which;
                if (!(event.shiftKey == false && (keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 &&
                        keycode <= 57)))) {
                    event.preventDefault();
                }
            });

            function validatedata(e) {
                if ($('.paxcount').length < 1) {
                    alert("Please select a age range");
                    return false;
                }
            }
            var url1 = "<?php echo e(url('/')); ?>";
           



            $(document).ready(function() {
                // WhatsApp Sharing
                $('#whatsapp-share').click(function() {
                    var message = "Check out this awesome tour package:" + url1 + '/boonknow' 
                    + id;
                    var url = "whatsapp://send?text=" + encodeURIComponent(message);
                    window.location.href = url;
                });

                // Instagram Sharing
                $('#instagram-share').click(function() {
                    var caption = "Check out this awesome tour package: [insert package details here]";
                    var url = "instagram://library?Caption=" + encodeURIComponent(caption);
                    window.location.href = url;
                });

                // Facebook Sharing
                $('#facebook-share').click(function() {
                    var url = "https://www.facebook.com/sharer/sharer.php?u=[insert_package_url_here]";
                    window.open(url, "_blank",
                        "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
                });
            });
        </script>
    <?php $__env->stopPush(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/booknow.blade.php ENDPATH**/ ?>