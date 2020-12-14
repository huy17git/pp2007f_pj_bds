<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/applicator/dist/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:06:16 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="/assets/image/logo/apple-touch-icon.html">
    <link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon" />

    <!-- core dependcies css -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/vendor/PACE/themes/blue/pace-theme-minimal.cte:ss" />
    <link rel="stylesheet" href="/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/themify-icons.css" rel="stylesheet">
    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/assets/css/animate.min.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout bg-white full-height">
            <div class="row no-gutters">
                <div class="col-md-6 d-none d-md-block align-self-end bg-gradient-success" style="">
                    <div class="row full-height">
                        <div class="col-md-10 align-self-center">
                            <div class="m-b-50 m-l-70">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="row">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                            <div class="p-v-25">
                                <img class="img-fluid m-b-30"
                                    src="https://staticfile.batdongsan.com.vn/images/Logo/ic_logo_2.svg" alt="">
                                <h1 class="m-b-30 d-inline m-l-30">Create Your account</h1>
                                <form role="form" id="form-validation" method="post"
                                    action="{{ route('createUser') }}" enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label control-label">User Name *</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username"
                                                placeholder="Enter your user name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label control-label">Email *</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input id="password" type="password" class="form-control"
                                                name="inputPassword" placeholder="Enter your password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label control-label">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="inputPasswordConfirm"
                                                placeholder="Enter your password again">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label control-label">Full Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="fullname"
                                                placeholder="Enter your full name" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label control-label">Date 0f Birth</label>
                                        <div class="col-sm-10">
                                            <div class="icon-input">
                                                <i class="mdi mdi-timer"></i>
                                                <input id="datepicker-1" data-provide="datepicker" type="text"
                                                    class="form-control" name="dateofbirth"
                                                    placeholder="Pick your date of birth">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label control-label">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="phonenumber"
                                                placeholder="Enter your phone number">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label control-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="address"
                                                placeholder="Enter your address">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label control-label">Avatar</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="avatar">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label control-label">Gender</label>
                                        <div class="col-sm-10">
                                            <div class="radio d-inline m-r-15">
                                                <input id="basicFormRadio1" name="sex" type="radio" checked=""
                                                    value="1">
                                                <label for="basicFormRadio1">Male</label>
                                            </div>
                                            <div class="radio d-inline m-r-15">
                                                <input id="basicFormRadio2" name="sex" type="radio" value="0">
                                                <label for="basicFormRadio2">Female</label>
                                            </div>
                                        </div>
                                    </div>


                                    <input type="submit" class="btn btn-gradient-success" value="Submit">
                                    <p>Already have an account? <a href="#">Sign In</a></p>
                                    <hr>
                                    <small>By signing up you agree to out <a href="#">Terms &amp; Policy</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/vendor.js"></script>

    <script src="/assets/js/app.min.js"></script>

    <!-- page js -->
    <script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/assets/js/forms/form-validation.js"></script>
    <script src="/assets/vendor/moment/min/moment.min.js"></script>
    <script src="/assets/vendor/selectize/dist/js/standalone/selectize.min.js"></script>
    <script src="/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
    <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/forms/form-elements.js"></script>
</body>


<!-- Mirrored from themenate.com/applicator/dist/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 12:06:27 GMT -->

</html>
