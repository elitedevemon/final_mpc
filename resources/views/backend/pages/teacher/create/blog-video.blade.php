@extends('layouts.teacher-master')
@section('teacher-title', 'MPC Method | Teacher blog video')
@section('teacher-master-styles')
  @include('backend.partials.faqs.partials.faqs-style')
  <link rel="stylesheet" href="{{ asset('backend/teacher/style.css') }}">
@endsection
@section('teacher-content')
  @livewire('backend.teacher.create.blog-video')
@endsection
@section('teacher-master-scripts')
  @include('backend.partials.faqs.partials.faqs-scripts')
@endsection