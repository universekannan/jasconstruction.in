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
        <div class="tourz-search">
            <div class="container">
                <div class="row">
                    <div class="tourz-search-1">
                        <h1>Plan Your Travel Now!</h1>
                        <p>650+ Travel Agents serving 65+ Destinations worldwide</p>
                        <div class="ban-search form-select pop pop-search">
                            <form>
                                <ul>
                                    <li class="sr-look">
                                        <div class="form-group">
                                            <label>Your destination</label>
                                            <select class="chosen-select">
                                                <option>Your destination</option>
                                                <option>Any location</option>
                                                <option>Chennai</option>
                                                <option>New york</option>
                                                <option>Perth</option>
                                                <option>London</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="sr-gue">
                                        <div class="form-group">
                                            <label>Package</label>
                                            <select class="chosen-select">
                                                <option>Package</option>
                                                <option>Family Package</option>
                                                <option>Honeymoon Package</option>
                                                <option>Group Package</option>
                                                <option>WeekEnd Package</option>
                                                <option>Regular Package</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="sr-date">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="text" class="form-control datepicker" name="from" placeholder="Check in">
                                        </div>
                                    </li>
                                    <li class="sr-date">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="text" class="form-control datepicker" name="to" placeholder="Check out">
                                        </div>
                                    </li>
                                    <li class="sr-btn">
                                        <input type="submit" value="Search">
                                    </li>
                                </ul>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  

    <section>
        <div class="rows pad-bot-redu">
            <div class="container">
                <div class="spe-title">
                    <h2>Tour <span>Packages</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                </div>
                <div class="to-ho-hotel">
                    <ul class="multiple-items">
					  <?php $__currentLoopData = $tourPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tourPackageslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="col-md-4">
                            <div class="to-ho-hotel-con pack-new-box">
                                <div class="to-ho-hotel-con-1">
                                    <img src="<?php echo e(URL::to('/')); ?>/upload/user_photo/<?php echo e($tourPackageslist->photo); ?>" alt="">
                                    <div class="hom-pack-deta">
                                        <h2><?php echo e($tourPackageslist->packages_name); ?></h2>
                                        <h4><span><?php echo e($tourPackageslist->price); ?></span> <?php echo e($tourPackageslist->description); ?></h4>
                                        <span class="cta-2">Book now</span>
                                    </div>
                                </div>
                                <a href="<?php echo e(url('booknow')); ?>/<?php echo e($tourPackageslist->id); ?>" class="fclick"></a>
                            </div>
                        </li>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="rows hom-hotels tb-space pad-top-o">
            <div class="container">
                <div class="spe-title">
                    <h2>Popular <span>Destinations</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide.</p>
                </div>
                <div class="to-ho-hotel">
                    <ul class="multiple-items7">
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="<?php echo asset('assets/images/places/10.jpg'); ?>" alt="" loading="lazy">
                                    <h4>Taj Mahal</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Symbol of love</span>
                                    <span>More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="<?php echo asset('assets/images/places/11.jpg'); ?>" alt="" loading="lazy">
                                    <h4>Open House</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Beach & Historical</span>
                                    <span>More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="<?php echo asset('assets/images/places/19.jpg'); ?>" alt="" loading="lazy">
                                    <h4>Eiffel Tower</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Historical places</span>
                                    <span>More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="<?php echo asset('assets/images/places/17.jpg'); ?>" alt="" loading="lazy">
                                    <h4>Rio de Janeiro</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Historical places</span>
                                    <span class="cta-3-sml">More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="<?php echo asset('assets/images/places/18.jpg'); ?>" alt="" loading="lazy">
                                    <h4>Mauritius</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Beach places</span>
                                    <span>More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="plac-hom-box">
                                <div class="plac-hom-box-im">
                                    <img src="<?php echo asset('assets/images/places/22.jpg'); ?>" alt="" loading="lazy">
                                    <h4>Burj khalifa</h4>
                                </div>
                                <div class="plac-hom-box-txt">
                                    <span>Modern architecture</span>
                                    <span>More details</span>
                                </div>
                                <a href="destinations.html" class="fclick"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">Standardized Budget Packages</span>                            <span class="ol-3"></span> <span class="ol-5">$99/-</span>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="0.5s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="<?php echo asset('assets/images/icon/dis1.png'); ?>" alt="">
									</a><span>Free WiFi</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.7s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="<?php echo asset('assets/images/icon/dis2.png'); ?>" alt=""> </a><span>Breakfast</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="0.9s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="<?php echo asset('assets/images/icon/dis3.png'); ?>" alt=""> </a><span>Pool</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.1s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="<?php echo asset('assets/images/icon/dis4.png'); ?>" alt=""> </a><span>Television</span>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="1.3s">
                                    <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="<?php echo asset('assets/images/icon/dis5.png'); ?>" alt=""> </a><span>GYM</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-r">
                            <div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span> </div>
                            <div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span> <span class="or-23">Off</span> <span class="or-24">use code: RG5481WERQ</span> <span class="or-25"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <<section>
        <div class="rows tb-space">
            <div class="container events events-1" id="inner-page-title">
               
                <div class="spe-title">
                    <h2>Top <span>Events</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                <table id="myTable">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Event Name</th>
                            <th class="e_h1">Date</th>
                            <th class="e_h1">Time</th>
                            <th class="e_h1">Location</th>
                            <th>Book</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="<?php echo asset('assets/images/iplace-1.jpg'); ?>" alt="" /><a href="hotels-list.html" class="events-title">Taj Mahal,Agra, India</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Australia</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="<?php echo asset('assets/images/iplace-2.jpg'); ?>" alt="" /><a href="hotels-list.html" class="events-title">Salesforce Summer, Dubai</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Dubai</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="<?php echo asset('assets/images/iplace-3.jpg'); ?>" alt="" /><a href="hotels-list.html" class="events-title">God Towers, TOKYO, JAPAN</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">JAPAN</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="<?php echo asset('assets/images/iplace-4.jpg'); ?>" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE ROMANDIE, Switzerland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Switzerland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="<?php echo asset('assets/images/iplace-5.jpg'); ?>" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Poland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><img src="<?php echo asset('assets/images/iplace-6.jpg'); ?>" alt="" /><a href="hotels-list.html" class="events-title">Future of Marketing,Sydney, Australia</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Australia</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><img src="<?php echo asset('assets/images/iplace-7.jpg'); ?>" alt="" /><a href="hotels-list.html" class="events-title">Eiffel Tower, Paris</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">France</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><img src="<?php echo asset('assets/images/iplace-8.jpg'); ?>" alt="" /><a href="hotels-list.html" class="events-title">PARIS - ROUBAIX, England</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">England</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><img src="<?php echo asset('assets/images/iplace-9.jpg'); ?>" alt="" /><a href="hotels-list.html" class="events-title">Dubai Beach Resort, Dubai</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Dubai</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><img src="<?php echo asset('assets/images/iplace-4.jpg'); ?>" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                            <td class="e_h1">16.12.2016</td>
                            <td class="e_h1">10.00 PM</td>
                            <td class="e_h1">Poland</td>
                            <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section>
        <div class="rows pla pad-bot-redu tb-space">
            <div class="pla1 p-home container">
                <div class="spe-title spe-title-1">
                    <h2>Top <span>Sight Seeing</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="popu-places-home">
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="<?php echo asset('assets/images/place2.jpg'); ?>" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Honeymoon Package</span> 7 Days / 6 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="<?php echo asset('assets/images/place1.jpg'); ?>" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Family package</span> 14 Days / 13 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                </div>
                <div class="popu-places-home">
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="<?php echo asset('assets/images/place3.jpg'); ?>" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Weekend Package </span> 3 Days / 2 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="<?php echo asset('assets/images/place4.jpg'); ?>" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Group Package</span> 10 Days / 9 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="ho-popu tb-space pad-bot-redu">
            <div class="rows container">
                <div class="spe-title">
                    <h2>Top <span>Branding</span> for this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="ho-popu-bod">
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Hotels</span></h4>
                        </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/hotels/1.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Taaj Club House</h5> <span>City: illunois, United States</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.5</span> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/hotels/2.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Universal luxury Grand Hotel</h5> <span>City: Rio,Brazil</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.2</span> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/hotels/3.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Barcelona Grand Pales</h5> <span>City: Chennai,India</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/hotels/4.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Lake Palace view Hotel</h5> <span>City: Beijing,China</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>2.5</span> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/hotels/8.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>First Class Grandd Hotel</h5> <span>City: Berlin,Germany</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.0</span> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Packages</span></h4>
                        </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/trends/1.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Family Package Luxury</h5> <span>Duration: 7 Days and 6 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.1</span> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/trends/2.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Honeymoon Package Luxury</h5> <span>Duration: 14 Days and 13 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.4</span> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/trends/3.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Group Package Luxury</h5> <span>Duration: 28 Days and 29 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>3.0</span> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/trends/4.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Regular Package Luxury</h5> <span>Duration: 12 Days and 11 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>3.5</span> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/trends/1.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Custom Package Luxury</h5> <span>Duration: 10 Days and 10 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Reviewers</span></h4>
                        </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/reviewer/1.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Christopher</h5> <span>No of Reviews: 620, City: illunois</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/reviewer/2.png'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Matthew</h5> <span>No of Reviews: 48, City: Rio</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/reviewer/3.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Stephanie</h5> <span>No of Reviews: 560, City: Chennai</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/reviewer/4.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Robert</h5> <span>No of Reviews: 920, City: Beijing</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="<?php echo asset('assets/images/reviewer/5.jpg'); ?>" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Danielle</h5> <span>No of Reviews: 768, City: Berlin</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="foot-mob-sec tb-space">
            <div class="rows container">
                <div class="col-md-6 col-sm-6 col-xs-12 family"> <img src="<?php echo asset('assets/images/mobile.png'); ?>" alt="" /> </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="foot-mob-app">
                        <h2>Have you tried our mobile app?</h2>
                        <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Easy Hotel Booking</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Tour and Travel Packages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Package Reviews and Ratings</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Manage your Bookings, Enquiry and Reviews</li>
                        </ul>
                        <a href="#"><img src="<?php echo asset('assets/images/android.png'); ?>" alt=""> </a>
                        <a href="#"><img src="<?php echo asset('assets/images/apple.png'); ?>" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="form tb-space">
            <div class="rows container">
                <div class="spe-title">
                    <h2>Book your <span>favourite Package</span> Now!</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form_1">
                    <div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
                    <form id="home_form" name="home_form" action="mail/send.php">
                        <ul>
                            <li>
                                <input type="text" name="ename" value="" id="ename" placeholder="Name" required>
                            </li>
                            <li>
                                <input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required>
                            </li>
                            <li>
                                <input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required>
                            </li>
                            <li>
                                <input type="text" name="esubject" value="" id="esubject" placeholder="Subject" required>
                            </li>
                            <li>
                                <input type="text" name="ecity" value="" id="ecity" placeholder="City" required>
                            </li>
                            <li>
                                <input type="text" name="ecount" value="" id="ecount" placeholder="Country" required>
                            </li>
                            <li>
                                <textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message"></textarea>
							</li>
                            <li>
                                <input type="submit" value="Submit" id="send_button">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 family">
                    <img src="<?php echo asset('assets/images/family.png'); ?>" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="rows tips tips-home tb-space home_title">
            <div class="container tips_1">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h3>Tips Before Travel</h3>
                    <div class="tips_left tips_left_1">
                        <h5>Bring copies of your passport</h5>
                        <p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>
                    </div>
                    <div class="tips_left tips_left_2">
                        <h5>Register with your embassy</h5>
                        <p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
                    </div>
                    <div class="tips_left tips_left_3">
                        <h5>Always have local cash</h5>
                        <p>Donec et placerat ante. Etiam et velit in massa. </p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12 testi-2">
                    <h3>Customer Testimonials</h3>
                    <div class="testi">
                        <h4>John William</h4>
                        <p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p> <address>Illinois, United States of America</address> </div>
                    <h3>Arrangement & Helps</h3>
                    <div class="arrange">
                        <ul>
                            <li>
                                <a href="#"><img src="<?php echo asset('assets/images/Location-Manager.png'); ?>" alt=""> </a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo asset('assets/images/Private-Guide.png'); ?>" alt=""> </a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo asset('assets/images/Arrangements.png'); ?>" alt=""> </a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo asset('assets/images/Events-Activities.png'); ?>" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
<?php $__env->stopSection(); ?>

















<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/my_cart.blade.php ENDPATH**/ ?>