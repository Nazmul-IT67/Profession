<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Meteor | Login - Sign up</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />

        <!-- Styles -->
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="assets/css/meteor.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/layers/light-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
    </head>
    <body class="page-register">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-4 center">
                            <div class="panel panel-white" id="js-alerts">
                                <div class="panel-body">
                                    <div class="register-box">
                                        <a href="{{ url('register') }}" class="logo-name text-lg text-center m-t-xs">METEOR</a>
                                        <p class="text-center m-t-md">Create an account.</p>
                                        <form class="m-t-md" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Name" >
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" >
                                            </div>
                                            <div class="form-group">
                                                <input type="phone" name="phone" class="form-control" placeholder="Phone" >
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="password form-control" placeholder="Password" >
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password_confirmation" class="password form-control" placeholder="Password" >
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="image" class="password form-control">
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block m-t-xs">REGISTER</button>
                                            <p class="text-center m-t-xs text-sm">Already have an account?</p>
                                            <a href="{{ url('login') }}" class="btn btn-default btn-block m-t-xs">Login</a>
                                        </form>
                                        <p class="text-center m-t-xs text-sm">2022 &copy; Nazmul</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->


        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/js/meteor.min.js"></script>

    </body>
</html>
