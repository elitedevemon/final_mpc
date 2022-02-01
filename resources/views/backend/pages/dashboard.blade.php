@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.dashboard.partials.dashboard-styles')
  @livewireStyles
@endsection
@section('student-content')
      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      @livewire('backend.dashboard')
      <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.dashboard.partials.dashboard-scripts')
  @livewireScripts
@endsection