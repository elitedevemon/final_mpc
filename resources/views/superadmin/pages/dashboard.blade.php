@extends('layouts.superadmin-master')
@section('superadmin-title', 'SuperAdmin Dashboard')
@section('superadmin-styles')
  @include('superadmin.partials.dashboard.partials.dashboard-styles')
@endsection
@section('superadmin-content')
  @include('superadmin.partials.dashboard.dashboard')
@endsection
@section('superadmin-scripts')
  @include('superadmin.partials.dashboard.partials.dashboard-scripts')
@endsection