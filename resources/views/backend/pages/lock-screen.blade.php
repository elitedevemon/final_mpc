<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta content="Azea – Laravel Admin & Dashboard Template" name="description">
<meta content="Spruko Private Limited" name="author">
<meta name="keywords" content="laravel ui admin template, laravel admin template, laravel dashboard template,laravel ui template, laravel ui, livewire, laravel, laravel admin panel, laravel admin panel template, laravel blade, laravel bootstrap5, bootstrap admin template, admin, dashboard, admin template">

<!-- Title -->
<title>Lock Screen</title>

<!--Favicon -->
<link rel="shortcut icon" href="{{ asset('logo/MPC.png') }}">

<!--Bootstrap css -->
<link href="{{ asset('superadmin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Style css -->
<link href="{{ asset('superadmin/assets/css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('superadmin/assets/css/dark.css') }}" rel="stylesheet" />
<link href="{{ asset('superadmin/assets/css/skin-modes.css') }}" rel="stylesheet" />

<!-- Animate css -->
<link href="{{ asset('superadmin/assets/css/animated.css') }}" rel="stylesheet" />

<!---Icons css-->
<link href="{{ asset('superadmin/assets/plugins/icons/icons.css') }}" rel="stylesheet" />

<!-- Color Skin css -->
<link id="theme" href="{{ asset('superadmin/assets/colors/color1.css') }}" rel="stylesheet" type="text/css"/>
@livewireStyles
</head>
<body class="h-100vh error-bg">
  <div class="register-2">
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('superadmin/assets/images/svgs/loader.svg') }}" alt="loader">
    </div>
    <!-- End GLOBAL-LOADER -->

    @livewire('lock-screen')
    <!-- Jquery js-->
    <script src="{{ asset('superadmin/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap5 js-->
    <script src="{{ asset('superadmin/assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('superadmin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--Othercharts js-->
    <script src="{{ asset('superadmin/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

    <!-- Circle-progress js-->
    <script src="{{ asset('superadmin/assets/plugins/circle-progress/circle-progress.min.js') }}"></script>

    <!-- Jquery-rating js-->
    <script src="{{ asset('superadmin/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!-- Show Password -->
    <script src="{{ asset('superadmin/assets/plugins/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>

    <!-- Custom js-->
    <script src="{{ asset('superadmin/assets/js/custom.js') }}"></script>
  </div>
@livewireScripts
</body>
</html>
