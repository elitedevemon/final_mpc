@extends('layouts.superadmin-master')
@section('superadmin-title', 'SuperAdmin | Create blog post')
@section('superadmin-styles')
  <!-- preloader css -->
  <link rel="stylesheet" href="{{ asset('adminpanel/assets/css/preloader.min.css') }}" type="text/css" />

  <!-- Bootstrap Css -->
  <link href="{{ asset('adminpanel/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="{{ asset('adminpanel/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{ asset('adminpanel/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
  <script src="{{ asset('adminpanel/ckeditor/ckeditor.js') }}"></script>
  {{-- <script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script> --}}
  @livewireStyles()
@endsection
@section('superadmin-content')
  @livewire('superadmin.create.selected-draft-post', ['post'=>$post])
@endsection
@section('superadmin-scripts')
  <!-- JAVASCRIPT -->
  <script src="{{ asset('adminpanel/assets/libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('adminpanel/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('adminpanel/assets/libs/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('adminpanel/assets/libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('adminpanel/assets/libs/node-waves/waves.min.js') }}"></script>
  <script src="{{ asset('adminpanel/assets/libs/feather-icons/feather.min.js') }}"></script>
  <!-- pace js -->
  <script src="{{ asset('adminpanel/assets/libs/pace-js/pace.min.js') }}"></script>

  <script src="{{ asset('adminpanel/assets/js/app.js') }}"></script>
  <!--Ckeditor text-->
  <script>
    CKEDITOR.replace( 'edited_text' );
  </script>
  @livewireScripts()
@endsection