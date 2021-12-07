@extends('layouts.master')
@section('title', 'Community')
@section('main-content')
  @include('frontend.partials.header')
  <div class="container text-muted py-5" style="font-size: 20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    <h5 class="text-danger text-center text-md-start">Blog:</h5>
    Wondering what it’s like to study at university? Want advice on how to survive studying abroad? Read first-hand accounts of student life and get study abroad tips with the Top Universities Student Blog. Interested in contributing? Read about our student bloggers, and find out how to contribute. <br><br>
    <h5 class="text-danger text-center text-md-start">Videos:</h5>
    Watch the latest videos from Top Murad Private Center YouTube channel, covering the world's top educational institutions, student life, student stereotypes, advice about studying abroad and more! For more videos, check out our YouTube channel. <br><br>
    <h5 class="text-danger text-center text-md-start">Latest News:</h5>
    Get all the latest educational news from around the globe, including current trends, international reports and student initiatives.
</div>
@include('frontend.partials.footer')
@endsection