@extends('layouts.master')
@section('title', 'Related Videos')
@section('main-content')
  @include('frontend.partials.header')
  @php
      $video_info = DB::table('videos_information')->orderBy('id', 'DESC')->paginate('30');
      $category_info = DB::table('categories')->orderBy('id', 'DESC')->paginate(20);
  @endphp
  <div class="container py-3">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Videos</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Playlists</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row pb-2">
                @foreach ($video_info as $video)
                    <div class="col-12 col-md-3 mt-2">
                        <div>
                            <div class="video_section">
                                <a href="{{ $video->link }}" target="_blank">
                                    <img src="{{ asset('images/video_thumbnail') }}/{{ $video->thumbnail }}" alt="Video thumbnail" class="w-100">
                                </a>
                                <div class="youtube_play_button">
                                    <i class="fab fa-youtube"></i>
                                </div>
                            </div>
                            <p class="container-fluid text-center text-primary">{{ $video->title }}</p>
                        </div>
                    </div>
                @endforeach
                <!--@foreach ($video_info as $video)-->
                <!--    <div class="col-12 col-md-3 mt-3">-->
                <!--        <a href="{{ $video->link }}" target="_blank" class="video_section">-->
                <!--            <img src="{{ asset('images/video_thumbnail') }}/{{ $video->thumbnail }}" alt="hello" class="w-100 video_thumbnail">-->
                <!--            <i class="fab fa-youtube youtube_play_button"></i>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--@endforeach-->
                <div class="text-center pagination_blog_post">
                    {{ $video_info->links() }}
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row pb-2">
                @foreach ($category_info as $c_info)
                    @php
                        $selected_category_info = DB::table('videos_information')->where('category', $c_info->category)->paginate(1);
                        $selected_category_info2 = DB::table('videos_information')->where('category', $c_info->category)->get();
                    @endphp
                    <div class="col-12 col-md-3 pt-3">
                        <a href="{{ $c_info->playlist_link }}" target="_blank">
                            <div class="playlist_section">
                                @foreach ($selected_category_info as $s_c_info)
                                    <img src="{{ asset('images/video_thumbnail') }}/{{ $s_c_info->thumbnail }}" alt="" class="w-100 video_thumbnail">
                                @endforeach
                                <div class="playlist_play_button">
                                    {{ count($selected_category_info2) }}
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                            </div>
                        </a>
                        <div class="text-center text-primary">{{ $c_info->category }}</div>
                    </div>
                @endforeach
                <div class="text-center pagination_blog_post">
                    {{ $category_info->links() }}
                </div>
            </div>
        </div>
    </div>
  </div>
  @include('frontend.partials.footer')
@endsection