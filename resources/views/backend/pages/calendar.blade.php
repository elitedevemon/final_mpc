@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.calendar.partials.calendar-styles')
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('to-do-calendar')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.calendar.partials.calendar-scripts')
@endsection