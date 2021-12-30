@extends('layouts.student-master')
@section('student-title', 'FAQ')
@section('student-master-styles')
  @include('backend.partials.faqs.partials.faqs-style')
  @livewireStyles()
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.faqs')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.faqs.partials.faqs-scripts')
  @livewireScripts()
@endsection