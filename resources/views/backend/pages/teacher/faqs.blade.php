@extends('layouts.teacher-master')
@section('teacher-title', 'MPC Method | FAQ')
@section('teacher-master-styles')
  @include('backend.partials.faqs.partials.faqs-style')
  @livewireStyles()
@endsection
@section('teacher-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.teacher.faqs')
  <!-- end main content-->
@endsection
@section('teacher-master-scripts')
  @include('backend.partials.faqs.partials.faqs-scripts')
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @livewireScripts()
@endsection