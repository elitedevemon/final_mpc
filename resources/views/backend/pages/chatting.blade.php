@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.chatting.partials.chatting-styles')
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @include('backend.partials.chatting.chatting')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.chatting.partials.chatting-scripts')
@endsection