@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.dashboard.partials.dashboard-styles')
@endsection
@section('student-content')
      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      {{-- @include('backend.partials.dashboard.dashboard') --}}


      <!--app-content open-->
      <div class="app-content main-content">
        <div class="side-app">

            
            <!--Page header-->
            <div class="page-header">
                <div class="page-leftheader">
                    <h4 class="page-title mb-0 text-primary">Analysis Dashboard</h4>
                </div>
            </div>
            <h1 class="text-center text-primary">Complete version is coming soon..</h1>
            <h3 class="text-center text-primary">Thanks for your patience</h3>
        </div>
      </div>

      <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.dashboard.partials.dashboard-scripts')
@endsection