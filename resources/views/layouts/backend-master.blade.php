<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    @include('styles.bootstrap')
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
<link href="{{ asset('backend/main.d810cf0ae7f39f28f336.css') }}" rel="stylesheet"></head>

<body>
  <div class="preloader" style="background-color: rgba(253, 253, 253, 0.664) !important; height: 100vh !important; width: 100%; z-index: 20; ">
    <div class="loader">
        <div class="ball-grid-pulse">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
  </div>
  @yield('backend-content')
  
  @include('scripts.jquery')
  @include('scripts.bootstrap-bundle')
  <script type="text/javascript" src="{{ asset('backend/scripts/main.d810cf0ae7f39f28f336.js') }}"></script>
  <script>
    $(window).on('load', function(){
      $('.preloader').addClass('d-none');
    })
  </script>
</body>
</html>