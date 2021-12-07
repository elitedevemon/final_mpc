@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.settings.partials.settings-style')
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @include('backend.partials.settings.settings')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.settings.partials.settings-script')
@endsection