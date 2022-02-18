@extends('layouts.student-master')
@section('student-title', 'MPC Method | Result not published')
@section('student-master-styles')
  @include('backend.partials.result.partials.result-styles')
  @livewireStyles()
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.exam.result-not-published')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.result.partials.result-scripts')
  @livewireScripts()
@endsection