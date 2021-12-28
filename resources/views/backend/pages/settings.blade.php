@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.settings.partials.settings-style')
  @livewireStyles()
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.settings')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.settings.partials.settings-script')
  @livewireScripts()
@endsection