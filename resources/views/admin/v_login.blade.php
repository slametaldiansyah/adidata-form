<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login Form Config</title>
    <!-- Favicon-->
    {{-- <link rel="icon" href="../../favicon.ico" type="image/x-icon"> --}}

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('admin/login/')}}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('admin/login/')}}/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('admin/login/')}}/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('admin/login/')}}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style type="text/css">

        .login-page
        {
        background: url("admin/login/img/red-background2.jpg") no-repeat center center fixed;
        background-size: cover;
        }

        .card-primary.card-outline {
            border-top: none;
        }
        a
        {
            text-shadow: -2px 0 rgb(24, 7, 1), 0 2px rgb(31, 0, 0), 2px 0 black, 0 -2px rgb(3, 3, 3);
            color: #ffffff;
            font-family: sans;
        }
        small
        {
            text-shadow: -1px 0 rgb(24, 7, 1), 0 1px rgb(31, 0, 0), 1px 0 black, 0 -1px rgb(3, 3, 3);
            color: #ffffff;
            font-family: sans;
        }

	</style>
</head>

<body class="login-page w3-animate-zoom">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Adidata-<b>Form</b></a>
            <small>Delivers IT Solution</small>
        </div>
        <div class="card">
            @include('sweetalert::alert')
            <div class="body">
                <form id="sign_in" action="login" method="POST">
                    @csrf
                    {{-- <div class="msg">Sign in to start your session</div> --}}
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button id="myLogin" class="btn btn-block bg-red waves-effect" type="submit">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Jquery Core Js -->
    <script src="{{asset('admin/login/')}}/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('admin/login/')}}/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('admin/login/')}}/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="{{asset('admin/login/')}}/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    {{-- <script src="{{asset('admin/login/')}}/js/admin.js"></script> --}}
    {{-- <script src="{{asset('admin/login/')}}/js/pages/examples/sign-in.js"></script> --}}
</body>

</html>
