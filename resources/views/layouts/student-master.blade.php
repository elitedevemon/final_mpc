<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('student-title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Mahfuz Ahmed Murad" name="author" />
<!-- Disable tap highlight on IE -->
<meta name="msapplication-tap-highlight" content="no">
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('logo/MPC.png') }}">
@yield('student-master-styles')
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
@livewireStyles()
</head>

<!--PHP code-->
@php
  $settings = App\Models\Settings::where('username', Auth::user()->username)->first();
@endphp
<!--end PHP-->


<body class="app sidebar-mini {{ $settings->is_night == true?'dark-mode':'' }} {{ $settings->header_color }} {{ $settings->menu_color }}">
  @livewire('backend.docker-setting')
  <!---Global-loader-->
  <div id="global-loader" >
      <img src="{{ asset('superadmin/assets/images/svgs/loader.svg') }}" alt="loader">
  </div>
  <!--- End Global-loader-->
  <!-- PAGE -->
  <div class="page">
    <div class="page-main">
      @livewire('backend.left-sidebar')
      @livewire('backend.header')

      {{-- Main content --}}
      @yield('student-content')
      {{-- Main content end --}}
      
    </div>
    @include('backend.partials.footer')
  </div>
  @include('layouts.partials.session-timeout-message')

  <a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>
  @yield('student-master-scripts')

  @if (Auth::check())
  <script src="{{ asset('assets/js/activitychecker.js') }}"></script> 
  @endif
  @livewireScripts()
</body>
</html>