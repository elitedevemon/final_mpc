@extends('layouts.superadmin-master')
@section('superadmin-title', 'SuperAdmin Dashboard')
@section('superadmin-styles')
  @include('superadmin.partials.dashboard.partials.dashboard-styles')
@endsection
@section('superadmin-content')
  @livewire('superadmin.dashboard')
@endsection
@section('superadmin-scripts')
  @include('superadmin.partials.dashboard.partials.dashboard-scripts')
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  @stack('js')
@endsection