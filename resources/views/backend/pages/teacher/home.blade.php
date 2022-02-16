@extends('layouts.teacher-master')
@section('teacher-title', 'Teacher Dashboard')
@section('teacher-master-styles')
  @include('backend.partials.dashboard.partials.dashboard-styles')
  @livewireStyles
@endsection
@section('teacher-content')
      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      @livewire('backend.teacher.dashboard')
      <!-- end main content-->
@endsection
@section('teacher-master-scripts')
  @include('backend.partials.dashboard.partials.dashboard-scripts')
  @livewireScripts
@endsection