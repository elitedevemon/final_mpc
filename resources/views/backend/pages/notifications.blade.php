@extends('layouts.student-master')
@section('student-title', 'Notifications')
@section('student-master-styles')
  @include('backend.partials.notifications.partials.notification-style')
  @livewireStyles()
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.notifications')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.notifications.partials.notification-script')
  @livewireScripts()
@endsection