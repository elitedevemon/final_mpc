@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.calendar.partials.calendar-styles')
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('to-do-calendar')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.calendar.partials.calendar-scripts')
  <script>
    window.addEventListener('TaskListModal', event => {
        $("#taskModal").modal('hide');                
    });
    window.addEventListener('TaskEditModal', event => {
        $("#TaskEditModal").modal('hide');                
    })
  </script>
@endsection