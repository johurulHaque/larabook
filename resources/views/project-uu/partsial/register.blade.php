{{-- Start registation modal --}}
<div class="modal fade regitation-modal">
    <div class="modal-dialog modal-lg">
        {{-- model content --}}
        <div class="modal-content">
            <div class="container register">
                <div class="row">
                    {{-- left_part model content --}}
                    <div class="col-md-4 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                        <h3>Welcome To Join With US </h3>
                    </div>       
                    {{-- right_part model content --}}
                    <div class="col-md-8 register-right">
                        <div id="tabs">
                            <div id="tabs-1">
                                <h3 class="register-heading">Register here</h3>
                                <div class="row register-form">

                                    <form name="user_reg_form" id="user_reg_form" action="" method="" onsubmit="return pass_validation()">
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter your name" value="" />

                                                <span id="name_msg" class="text-danger font-weight-bold"></span>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="user_email" id="user_email" class="form-control" placeholder="Your email address" value="" />

                                                <span id="email_msg" class="text-danger font-weight-bold"></span>
                                             </div>

                                             <div class="form-group">
                                                <input type="text" name="user_phone" id="user_phone" class="form-control" placeholder="Your Phone number" value="" />

                                                <span id="phone_msg" class="text-danger font-weight-bold"></span>
                                            </div>
                                                                
                                            <div class="form-group">
                                                <label>Male</label>
                                                <input type="radio" name="gender" value="male" checked>

                                                <label>Female</label>
                                                <input type="radio" name="gender" value="male">
                                             </div>
                                        </div>
                                        <!--Reg_form for buyer 2nd part-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="reg_psw" id="reg_psw" placeholder="Password" onkeyup="pass_validation()" />

                                                <input type="checkbox" onclick="myFunction()">Show Password <br>
                                                <span id="psw_msg"></span>
                                            </div>
                                                
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="com_psw" id="con_psw" placeholder="Confirm Password" value="" onkeyup="confirm_psw()" />
                                                <span id="con_msg"></span>
                                            </div>

                                            <input type="submit" class="btn btn-primary" value="Register" />
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end of registation modal --}}

{{-- Start sign in modal                 --}}
<div class="modal fade sign-in-modal">
    <div class="modal-dialog modal-lg">
        <!-- model content-->
        <div class="modal-content">
            <div class="container register">
                <div class="row">
                    <div class="sign-modal">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                        <h3>Connect With US</h3>
                    </div>

                    <div class="col-md-4 col-md-offset-4">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" value="" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Password" value="" />
                            </div>

                            <div class="form-group">
                                <input type="submit" class="brn btn-success" value="Sign In" />
                            </div>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
{{-- end of sign in modal --}}
                 