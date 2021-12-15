<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Login | SuperAdmin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Murad Private Center" name="description" />
<meta content="Mahfuz Ahmed Murad" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('logo/MPC.png') }}">

<!-- preloader css -->
<link rel="stylesheet" href="{{ asset('adminpanel/assets/css/preloader.min.css') }}" type="text/css" />

<!-- Bootstrap Css -->
<link href="{{ asset('adminpanel/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('adminpanel/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('adminpanel/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@livewireStyles
</head>

<body>

<!-- <body data-layout="horizontal"> -->
@livewire('superadmin.auth.superadmin-login')


<!-- JAVASCRIPT -->
<script src="{{ asset('adminpanel/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminpanel/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminpanel/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('adminpanel/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('adminpanel/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('adminpanel/assets/libs/feather-icons/feather.min.js') }}"></script>
<!-- pace js -->
<script src="{{ asset('adminpanel/assets/libs/pace-js/pace.min.js') }}"></script>
<!-- password addon init -->
<script src="{{ asset('adminpanel/assets/js/pages/pass-addon.init.js') }}"></script>
@livewireScripts
</body>
</html>