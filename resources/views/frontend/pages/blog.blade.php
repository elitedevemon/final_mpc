@extends('layouts.master')
@section('title', 'Latest Post')
@section('main-content')
@livewire('frontend.pages.welcome.header')
@php
$all_posts = DB::table('posts')->orderBy('id', 'DESC')->paginate(10);
@endphp
<div class="container my-2">
@foreach ($all_posts as $rbppost)
    <div class="row mb-3 mb-md-2">
        <div class="col-md-3 mt-2 mb-2 mb-md-0">
            <a href="{{ route('view.selected.post', ['slug'=>$rbppost->slug, 'language'=>app()->getLocale()]) }}">
                <img src="{{ asset('images/post_images') }}/{{ $rbppost->cover_image }}" alt="" class="w-100" style="height: 137px;">
            </a>
        </div>
        <div class="col-md-9 ps-3">
            <a href="{{ route('view.selected.post', ['slug'=>$rbppost->slug, 'language'=>app()->getLocale()]) }}">
                <h3 class="text-dark">{{ $rbppost->title }}</h3>
            </a>
            <div class="text-muted blog_recent_post_text" style="text-align: justify">
               {{ $rbppost->short_desc }}
            </div>
            <div><i class="fa fa-calendar-alt text-danger" aria-hidden="true"></i> {{ date('d-m-Y', strtotime($rbppost->created_at)) }}</div>
        </div>
    </div>
@endforeach
<div class="text-center pagination_blog_post">
    {{ $all_posts->links() }}
</div>
</div>
@livewire('frontend.pages.welcome.footer')
@endsection