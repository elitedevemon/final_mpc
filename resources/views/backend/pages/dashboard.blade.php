@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.dashboard.partials.dashboard-styles')
@endsection
@section('student-content')
      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      @include('backend.partials.dashboard.dashboard')
      <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.dashboard.partials.dashboard-scripts')
@endsection