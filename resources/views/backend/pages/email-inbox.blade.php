@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.email.partials.email-inbox-styles')
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @include('backend.partials.email.email-inbox')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.email.partials.email-inbox-scripts')
@endsection