@extends('layouts.student-master')
@section('student-title', 'Student Dashboard')
@section('student-master-styles')
  @include('backend.partials.settings.partials.settings-style')
  @livewireStyles()
@endsection
@section('student-content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  @livewire('backend.settings')
  <!-- end main content-->
@endsection
@section('student-master-scripts')
  @include('backend.partials.settings.partials.settings-script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  @livewireScripts()
@endsection