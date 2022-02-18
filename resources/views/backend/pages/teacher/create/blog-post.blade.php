@extends('layouts.teacher-master')
@section('teacher-title', 'MPC Method | Teacher Create blog post')
@section('teacher-master-styles')
  @include('backend.partials.faqs.partials.faqs-style')
  <script src="{{ asset('adminpanel/ckeditor/ckeditor.js') }}"></script>
  {{-- <script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script> --}}
@endsection
@section('teacher-content')
  @livewire('backend.teacher.create.blog-post')
@endsection
@section('teacher-master-scripts')
@include('backend.partials.faqs.partials.faqs-scripts')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@stack('js')
@endsection