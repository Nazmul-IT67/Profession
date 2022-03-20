<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Meteor | Login - Sign in</title>

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

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-4 center">
                            <div class="panel panel-white" id="js-alerts">
                                <div class="panel-body">
                                    <div class="login-box">
                                        <a href="{{ url('login') }}" class="logo-name text-lg text-center m-t-xs">METEOR</a>
                                        <p class="text-center m-t-md">Please login into your account.</p>
                                        <form class="m-t-md" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="password form-control" placeholder="Password" required>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block">Login</button>
                                            <div class="flex items-center justify-end mt-4">
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                            <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                            <a href="{{ url('register') }}" class="btn btn-default btn-block m-t-md">Create an account</a>
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
