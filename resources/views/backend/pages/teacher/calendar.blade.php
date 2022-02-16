@extends('layouts.teacher-master')
@section('teacher-title', 'MPC Method | Teacher Calendar')
@section('teacher-master-styles')
  @include('backend.partials.calendar.partials.calendar-styles')
@endsection
@section('teacher-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.teacher.to-do-calendar')
  <!-- end main content-->
@endsection
@section('teacher-master-scripts')
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