@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.chatting.partials.chatting-styles')
  @livewireStyles()
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.chatting')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.chatting.partials.chatting-scripts')
  @livewireScripts()
@endsection