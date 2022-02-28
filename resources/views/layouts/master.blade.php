<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Description Meta Tag-->
  <meta name="description" content="The purpose of this study was to develop a website for Murad Private Center in order to solve its above mentioned challenges. In addition, the study explored the perspectives of MPC high officials about the content of this website and discussed the possible suggestions to finance such a website in the long run..">
  <!--End description meta tag-->
  <meta name="author" content="Mahfuz Ahmed Murad">
  <link rel="shortcut icon" href="{{ asset('logo/MPC.png') }}">
  <!--Start meta keywords section-->
  <meta name="keywords" content="<?php
      $keywords = DB::table('tags')->get();
      foreach ($keywords as $key ) {
          $value = $key->tags;
          echo $value.", ";
      }
  ?>">

  <!--End meta keywords section-->
  <title>@yield('title')</title>
  @include('styles.bootstrap')
  @include('styles.fontawesome')
  <link rel="stylesheet" href="{{ url('assets/style.css') }}">
  @livewireStyles()
</head>
<body>
  
  @yield('main-content')
  
  @include('layouts.partials.session-timeout-message')
  
  @include('scripts.jquery')
  @include('scripts.bootstrap-bundle')
  @include('scripts.fontawesome')

  <!--Get any error message-->
  @if (Session::has('err_message'))
    <script>
      swal("Sorry..!", "{!! Session::get('err_message') !!}", "error", {
          button:"OK",
      })
    </script>
  @endif 
  
  <!--User Activity checker-->
  @if (Auth::check())
    <script src="{{ asset('assets/js/activitychecker.js') }}"></script> 
  @endif
  
  <!--Download Website mobile app section-->
  <script>
    $(document).ready(function(){
        $('#liveToast').toast('show');
    })
  </script>
  @livewireScripts()
</body>
</html>