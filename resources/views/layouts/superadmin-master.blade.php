<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>@yield('superadmin-title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Murad Private Center" name="description" />
<meta content="Mahfuz Ahmed Murad" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('logo/MPC.png') }}">
@yield('superadmin-styles')

</head>
<body class="sidebar-enable">
  <div id="layout-wrapper">
    @include('layouts.partials.superadmin.header')
    @include('layouts.partials.superadmin.left-sidebar')
    @yield('superadmin-content')
  </div>
  @include('layouts.partials.superadmin.right-sidebar')

  @include('layouts.partials.session-timeout-message')

@yield('superadmin-scripts')

@if (Auth::check())
<script src="{{ asset('assets/js/activitychecker.js') }}"></script> 
@endif

</body>
</html>