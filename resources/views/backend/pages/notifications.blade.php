@extends('layouts.student-master')
@section('student-title', 'Notifications')
@section('student-master-styles')
  @include('backend.partials.notifications.partials.notification-style')
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @include('backend.partials.notifications.notifications')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.notifications.partials.notification-script')
@endsection