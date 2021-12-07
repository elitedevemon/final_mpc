@extends('layouts.student-master')
@section('student-title', 'Blog Posts')
@section('student-master-styles')
  @include('backend.partials.forum.partials.forum-style')
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @include('backend.partials.forum.forum')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.forum.partials.forum-script')
@endsection