      <section>
          <div class="ed-mob-menu">
              <div class="ed-mob-menu-con">
                  <div class="ed-mm-left">
                      <div class="wed-logo">
                          <a href="<?php echo e(url('/')); ?>"><img src="<?php echo asset('assets/images/header.png'); ?>" alt="" />
                          </a>
                      </div>

                  </div>


                  <div class="">
                      <div class="ed-mm-menu">
                          <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                          <div class="ed-mm-inn">

                              <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                              <ul>
                                  <ul>
                                      <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
                                      <li><a href="<?php echo e(url('about_us')); ?>">About Us</a></li>
                                      <li><a href="<?php echo e(url('our_service')); ?>">Tour Packages</a></li>
                                      
                                      <li><a href="<?php echo e(url('contact')); ?>">Contact us</a></li>
                                  </ul>
                              </ul>
                              <div class="al">
                                  <div class="head-pro pop-ini" data-pop="pop-advi">
                                      <?php if(Auth::user()): ?>
                                          <img
                                              src="<?php echo e(URL::to('/')); ?>/upload/user_profile/<?php echo e(Auth::user()->user_photo); ?>">
                                          <div>
                                              <h4><?php echo e(Auth::user()->full_name); ?></h4>
                                          </div>
                                      <?php else: ?>
                                      <?php endif; ?>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section>
          <div class="ed-top mobile-top-header">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="ed-com-t1-left">
                              <ul>
                                  <li><a href="#">Contact:
                                          Thirupparankundram, Madurai-625005, Tamilnadu, India</a>
                                  </li>
                                  <li><a href="#">Phone:
                                    +91 7358531873</a>
                                  </li>
                              </ul>
                          </div>
                          <div class="ed-com-t1-right">
                              <ul>
                                  <?php if(Auth::user()): ?>
                                      <li><a href="<?php echo e(url('bookings')); ?>" class="top-sign"><i class="fa fa-cart-plus"
                                                  aria-hidden="true"></i></a>
                                      </li>&nbsp;
                                      <li><a href="<?php echo e(url('logout')); ?>" class="top-sign"><i class="fa fa-sign-out"
                                                  aria-hidden="true"></i></a>
                                      </li>
                                  <?php else: ?>
                                      <li><a type="button" class="top-sign" data-toggle="modal"
                                              data-target="#login">Login</a></li>
                                      <li><a href="<?php echo e(url('register')); ?>" class="top-regi">Sign Up</a></li>
                                  <?php endif; ?>
                              </ul>
                          </div>
                          <div class="ed-com-t1-social">
                              <ul>
                                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"
                                              aria-hidden="true"></i></a>
                                  </li>
                                  <li><a href="https://www.whatsapp.com/" target="_blank"><i class="fa fa-whatsapp"
                                              aria-hidden="true"></i></a>
                                  </li>
                                  <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"
                                              aria-hidden="true"></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="top-logo" data-spy="affix" data-offset-top="250">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="wed-logo">
                              <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('assets/images/header.png')); ?>"
                                      alt="" />
                              </a>
                          </div>
                          <div class="main-menu">
                              <ul>
                                  <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                  <li><a href="<?php echo e(url('about_us')); ?>">About Us</a></li>
                                  <li><a href="<?php echo e(url('our_service')); ?>">Tour Packages</a></li>
                                  <li><a href="<?php echo e(url('travels')); ?>">Travels</a></li>
                                   <li><a href="<?php echo e(url('testimonials')); ?>">Testimonials</a></li>
                                  <li><a href="<?php echo e(url('contact')); ?>">Contact us</a></li>
                              </ul>
                          </div>

                          <div class="al">
                              <div class="head-pro pop-ini" data-pop="pop-advi">
                                  <?php if(Auth::user()): ?>
                                      <img
                                          src="<?php echo e(URL::to('/')); ?>/upload/user_profile/<?php echo e(Auth::user()->user_photo); ?>">
                                      <div>
                                          <h4><?php echo e(Auth::user()->full_name); ?></h4>
                                      </div>
                                  <?php else: ?>
                                  <?php endif; ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <div class="menu-pop menu-pop2 pop pop-advi">
          <span class="menu-pop-clo pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>

          <div class="db-2">
              <div class="db-2-com db-2-main p-update">
                  <h4>My Profile</h4>
                  <div class="db-2-main-com db-2-main-com-table">
                      <form action="<?php echo e(url('updateprofile')); ?>" method="post" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>
                          <input type="hidden" name="user_id" id="id" value="<?php echo e(Auth::user()->id ?? ''); ?>">
                          <div class="menu-pop-help">
                              
                              <div class="user-pro">
                                  <img src="<?php echo e(URL::to('/')); ?>/upload/user_profile/<?php echo e(Auth::user()->user_photo ?? ''); ?>"
                                      alt="" loading="lazy">
                              </div>

                          </div>
                          <table class="responsive-table">
                              <tbody>
                                  <tr>
                                      <td>Full Name</td>
                                      <td>:</td>
                                      <td>
                                          <input type="text" maxlength="50" class="input-text" name="full_name"
                                              placeholder="Full Name" value="<?php echo e(Auth::user()->full_name ?? ''); ?>" />
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Email</td>
                                      <td>:</td>
                                      <td>
                                          <input type="text" maxlength="50" class="input-text" name="email"
                                              placeholder="Email" value="<?php echo e(Auth::user()->email ?? ''); ?>" />
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Phone</td>
                                      <td>:</td>
                                      <td>
                                          <input type="text" maxlength="12" class="input-text number"
                                              name="phone" placeholder="Phone"
                                              value="<?php echo e(Auth::user()->phone ?? ''); ?>" />
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Profile</td>
                                      <td>:</td>
                                      <td><input type="file" maxlength="20" class="input-text"
                                              name="user_photo" /></td>
                                  </tr>
                              </tbody>
                          </table>

                          <div class="modal-footer">
                              <button type="submit" id="subbtn"
                                  class="btn btn-success btn-sm col-2">Submit</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          
      </div>


      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="login-form" id="loginformdiv">
              <form action="" method="">
                  <?php echo e(csrf_field()); ?>

                  <div class="tr-regi-form">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <h4>Qick<span> Login</span></h4>
                      <label id="errormessage" class="text-center" style="color:red"></label>
                      <div class="row">
                          <div class="input-field col s12">
                              <input type="email" id="email" name="email" class="validate form-control"
                                  placeholder="Email">
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                              <input type="password" name="password" id="password" class="validate form-control"
                                  placeholder="Password">
                          </div>
                      </div>
                      <button id="loginsubmit" type="button" class="btn btn-info">Click to Login</button>

                      <p>Are you a new user ? <a href="<?php echo e(url('register')); ?>">Register</a>
                  </div>
              </form>
          </div>
      </div>
<?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/layouts/header.blade.php ENDPATH**/ ?>