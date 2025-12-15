
<?php $__env->startSection('web/content'); ?>
<div class="page-header black-overlay">
            <div class="container breadcrumb-section">
                <div class="row pad-s15">
                    <div class="col-md-12">
                        <h2>Contact us</h2>
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="active">Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="page_single">
            <div class="container">
                <div class="row contact-bottom padTB100">
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>HELLO WHATS YOUR MIND? <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>Let’s talk about you.</em>
                            <div class="clear"></div>
                        </div>
                    </div>
					 <?php if(session()->has('success')): ?>
                        <div class="alert alert-success alert-dismissable">
                            <strong> <?php echo e(session('success')); ?> </strong>
                        </div>
                    <?php endif; ?>
                    <div class="col-md-12 left-box">
                    <form action="<?php echo e(url('/addcontact')); ?>" id="fashion_contactform" method="post">
                        <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Your Name<span class="required red-text">*</span></label>
                                        <input type="text" name="full_name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Your Email<span class="required red-text">*</span></label>
                                        <input type="email"  name="email" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Your Number</label>
                                        <input type="text"  name="phone" id="exampleInputPhone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text"  name="subject" id="exampleInputWebsite">
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Your Message<span class="required red-text">*</span></label>
                                        <textarea name="message" class="textarea-message" rows="10"></textarea>	
                                    </div>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <input type="submit" class="theme-button" value="Send Message">
                                    <div class="fashion_infotext"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="row">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15796.691808975524!2d77.430657!3d8.185326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04f125da8b8ef7%3A0x67bcc13b80ef0ea8!2sVijay%20Hardware%20and%20Plywoods!5e0!3m2!1sen!2sin!4v1726126256547!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('web/layouts.other_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/web/contact.blade.php ENDPATH**/ ?>