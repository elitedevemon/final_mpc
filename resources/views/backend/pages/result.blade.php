@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
@include('backend.partials.result.partials.result-styles')
@endsection
@section('student-content')
      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      @include('backend.partials.result.result')
      <!-- end main content-->
@endsection
@section('student-master-scripts')
@include('backend.partials.result.partials.result-scripts')
@endsection