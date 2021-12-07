@extends('layouts.student-master')
@section('student-title', 'Profile')
@section('student-master-styles')
  @include('backend.partials.student-profile.partials.student-profile-style')
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @include('backend.partials.student-profile.student-profile')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.student-profile.partials.student-profile-script')
@endsection