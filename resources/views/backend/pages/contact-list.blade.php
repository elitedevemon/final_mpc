@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.contact.partials.contact-list-styles')
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @include('backend.partials.contact.contact-list')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.contact.partials.contact-list-scripts')
@endsection