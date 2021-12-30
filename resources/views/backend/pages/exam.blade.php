@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.result.partials.result-styles')
  @livewireStyles()
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.exam')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.result.partials.result-scripts')
  @livewireScripts()
@endsection