@extends('layouts.master')
@section('title', 'Welcome to Murad Private Center')
@section('main-content')
  @include('frontend.partials.header')
  @include('frontend.partials.slider')
  {{-- Download the app --}}
  @if (!Auth::check())
    @include('frontend.partials.download-app') 
  @endif
  {{-- End downloading app --}}
  @include('frontend.partials.offer-section')
  @include('frontend.partials.recent-blog')
  @include('frontend.partials.testimonial')
  @include('frontend.partials.media')
  @include('frontend.partials.footer')
@endsection