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
            <div class="rows inner_banner inner_banner_2">
                <div class="container">
                    <div class="spe-title tit-inn-pg">
                        <h1>Contact <span>Us</span> </h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        <p>World's leading Travel Booking website</p>
                        <ul>
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li><a href="#" class="bread-acti">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--====== ABOUT CONTENT ==========-->
        <section class="tourb2-ab-p-2 com-colo-abou">
            <div class="container">
                <div class="row tourb2-ab-p1">
                    <div class="col-md-6 col-sm-6">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62883.09595735833!2d78.12282365!3d9.91783685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c582b1189633%3A0xdc955b7264f63933!2sMadurai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1714039331892!5m2!1sen!2sin" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <h3 style="text-align: center" style="color: rgb(26, 165, 216)">Get In Touch</h3>
                    <div class="col-md-6 col-sm-6">
                        <form method="" id="contactForm" name="contactForm" class="contactForm" action="#">

                            <div class="row float-left">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="name">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="phone">Phone</label>
                                        <input type="phone" class="form-control" name="phone" id="phone"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="email">Email Address</label>
                                        <input type="email" class="form-control" name="subject" id="subject"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label" for="#">Message</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-center">
                                        <input type="submit" value="Send Message" class="btn btn-info">
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="form form-spac "></div>


        
        <!--====== TIPS BEFORE TRAVEL ==========-->
        <section>
            <div class="rows tips tips-home tb-space home_title">
                <div class="container tips_1">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12 d-flex-this">

                        
                        <div class="tips_left tips_left_2">
                            <h5>Address</h5>
                            <p>Prahanaa Tours
                                <br>21/18,Natarajar Main Street<br>Balajinagar<br>Thirupparankundram<br> Madurai-625005
                            </p>
                        </div>
                        <div class="tips_left tips_left_3 web_site">
                            <h5>Contact info</h5>
                            <p> <a href="tel://0099999999" class="contact-icon">Phone: +917358531873</a>
                                <br> <a href="tel://0099999999" class="contact-icon">Mobile: +9173585 31873</a>
                                <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email:
                                    prahanaatours1976@gmail.com</a>
                            </p>
                            
                        </div>

                        <div class="tips_left tips_left_4 web_site">
                            <h5>Website</h5>

                            <p> <a href="https://prahanaatours.com//">Website: https://prahanaatours.com/</a>
                                <br> <a href="https://www.facebook.com/" target="_blank">Facebook: www.facebook/my</a>
                                
                            </p>
                        </div>
                    </div>

                    
                </div>
            </div>
        </section>


    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prahanaatours.com\resources\views/contact.blade.php ENDPATH**/ ?>