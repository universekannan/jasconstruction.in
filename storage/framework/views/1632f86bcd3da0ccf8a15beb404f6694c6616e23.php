<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="col-sm-12 ml-auto mr-auto">
                <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill"
                            onclick="showlogin()" role="tab" aria-controls="pills-signin" aria-selected="true">User
                            Login</a> </li>
                    <li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill"
                            onclick="showregister()" role="tab" aria-controls="pills-signup"
                            aria-selected="false">User
                            Registration</a> </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-signin" role="tabpanel"
                        aria-labelledby="pills-signin-tab">
                        <input id="device_token" type="hidden" name="device_token" readonly class="form-control">
                        <div class="col-sm-12 border-primary shadow rounded pt-2">
                            <div class="container">
                                <form method="post" id="singninFrom">
                                    <div class="form-group">
                                        <label id="failmsg" class="text-center" style="color:red"></label>
                                    </div>
                                    <div class="form-group">

                                        <label class="font-weight-bold">Mobile No<span
                                                class="text-danger">*</span></label>
                                        <input id="logmob" type="tel" maxlength="10" name="phone"
                                            placeholder="Enter Mobile No" class="form-control number">
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
                                        <input type="password" name="logpassword" id="logpassword" class="form-control" placeholder="Password" required>
                                    </div>
                                </BR>
                                    <div class="form-group text-center">
                                        <input id="regsubmit" type="button" name="submit" value="Login" class="btn btn-block btn-primary">
                                            <div class="btn btn-primary" onclick="showcontact()"
                                            aria-controls="exampleModal">
                                            <div>Forgot Password</div>
                                        </div>
                                    </div>

                                </form>
                                </BR>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                        <div class="col-sm-12 border-primary shadow rounded pt-2">
                            <input value="c4ca4238a0b923820dcc509a6f75849b" type="hidden" name="refftoken"
                                id="empreftoken">
                            <input value="3" type="hidden" name="usertype" id="usertypeid">
                            <input type="hidden" id="device_token2" name="device_token2">
                            <div class="container">
                                <form method="post">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Name <span
                                                class="text-danger">*</span></label>&nbsp;<label id="reqname"
                                            style="color:red"></label>
                                        <input maxlength="30" type="text" name="name" id="registername"
                                            class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Mobile No <span
                                                class="text-danger">*</span></label>&nbsp;<label id="reqphone"
                                            style="color:red"></label>
                                        <input maxlength="10" type="text" onkeyup="duplicatephone(0)" name="phone" id="phone"
                                            class="form-control number" placeholder="Mobile No" required>
                                            <span id="dupmobile" style="color:red"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Email <span
                                                class="text-danger">*</span></label>&nbsp;<label id="reqemail"
                                            style="color:red"></label>
                                        <input maxlength="50" onkeyup="duplicateemail(0)" type="text" name="email"  id="email"
                                            class="form-control" placeholder="Email">
                                            <span id="dupemail" style="color:red"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Password <span
                                                class="text-danger">*</span></label>&nbsp;<label id="reqpassword"
                                            style="color:red"></label>
                                        <input maxlength="15" type="password" name="password" id="registerpassword"
                                            class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Confirm Password <span
                                                class="text-danger">*</span></label>&nbsp;
                                        <label id="reqpassword2" style="color:red"></label>
                                        <input maxlength="15" type="password" name="password2" id="reqconfirmpassword"
                                            class="form-control" placeholder="Confirm Password" required>
											<input type="checkbox" onclick="myFunction()">Show Password

                                    </div>
                                    <div class="form-group">
                                        <label id="verify" style="color:red"></label>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" id="joinnewregister"
                                            class="btn btn-primary">Register</button>
                                        <div class="btn btn-primary" onclick="showcontact()"
                                            aria-controls="exampleModal">
                                            <div>Forgot Password</div>
                                        </div>
                                    </div>
                                    </br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myMapModaltop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Contact Admin</h5>
            </div>
            <center>
                <div class="modal-body">
                    <h6 style="color: green"><a href="tel:7550086190">Call us at +91 7550086190</a>

</h6>
                </div>
            </center>
            <div class="modal-footer">
                <button style="text-center" onclick="closecontact()" type="button" class="btn btn-primary"
                    data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("reqconfirmpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php /**PATH C:\xampp\htdocs\vijayhardwares.in\resources\views/web/layouts/login_registration.blade.php ENDPATH**/ ?>