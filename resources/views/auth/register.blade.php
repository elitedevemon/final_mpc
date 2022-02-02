@extends('layouts.master')
@section('title', 'Register | MPC')
@section('styles')
  @livewireStyles()
@endsection
@section('main-content')
  @livewire('backend.auth.register')
@endsection
@section('scripts')
  @livewireScripts()
@endsection