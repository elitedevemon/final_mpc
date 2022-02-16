@extends('layouts.teacher-master')
@section('teacher-title', 'MPC Method | Blog Posts')
@section('teacher-master-styles')
  @include('backend.partials.forum.partials.forum-style')
  @livewireStyles()
@endsection
@section('teacher-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.teacher.forum')
  <!-- end main content-->
@endsection
@section('teacher-master-scripts')
  @include('backend.partials.forum.partials.forum-script')
  @livewireScripts()
@endsection