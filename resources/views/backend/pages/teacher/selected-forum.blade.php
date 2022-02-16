@extends('layouts.teacher-master')
@section('teacher-title', $post->title)
@section('teacher-master-styles')
  <!--Bootstrap css -->
  <link href="{{ asset('superadmin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Style css -->
  <link href="{{ asset('superadmin/assets/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('superadmin/assets/css/dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('superadmin/assets/css/skin-modes.css') }}" rel="stylesheet" />
  <!-- Animate css -->
  <link href="{{ asset('superadmin/assets/css/animated.css') }}" rel="stylesheet" />
  <!--Sidemenu css -->
     <link href="{{ asset('superadmin/assets/css/sidemenu.css') }}" rel="stylesheet">
  <!-- P-scroll bar css-->
  <link href="{{ asset('superadmin/assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />
  <!---Icons css-->
  <link href="{{ asset('superadmin/assets/plugins/icons/icons.css') }}" rel="stylesheet" />
  <!-- Color Skin css -->
  <link id="theme" href="{{ asset('superadmin/assets/colors/color1.css') }}" rel="stylesheet" type="text/css"/>
  <!-- INTERNAL Switcher css -->
  <link href="{{ asset('superadmin/assets/switcher/css/switcher.css') }}" rel="stylesheet"/>
  <link href="{{ asset('superadmin/assets/switcher/demo.css') }}" rel="stylesheet"/>
  @livewireStyles()
@endsection
@section('teacher-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.teacher.selected-forum', ['post'=>$post])
  <!-- end main content-->
@endsection
@section('teacher-master-scripts')
  <!-- Jquery js-->
  <script src="{{ asset('superadmin/assets/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap5 js-->
  <script src="{{ asset('superadmin/assets/plugins/bootstrap/popper.min.js') }}"></script>
  <script src="{{ asset('superadmin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <!--Othercharts js-->
  <script src="{{ asset('superadmin/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>
  <!-- Jquery-rating js-->
  <script src="{{ asset('superadmin/assets/plugins/rating/jquery.rating-stars.js') }}"></script>
  <!--Sidemenu js-->
  <script src="{{ asset('superadmin/assets/plugins/sidemenu/sidemenu.js') }}"></script>
  <!-- P-scroll js-->
  <script src="{{ asset('superadmin/assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
  <script src="{{ asset('superadmin/assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
  <script src="{{ asset('superadmin/assets/plugins/p-scrollbar/p-scroll.js') }}"></script>
  <!-- Custom js-->
  <script src="{{ asset('superadmin/assets/js/custom.js') }}"></script>
  <!-- Switcher js -->
  <script src="{{ asset('superadmin/assets/switcher/js/switcher.js') }}"></script>
  @livewireScripts()
@endsection