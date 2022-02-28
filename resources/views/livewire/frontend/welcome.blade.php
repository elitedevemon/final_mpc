<div>
  @section('title', 'Welcome to Murad Private Center')
  @section('main-content')
    @livewire('frontend.pages.welcome.header')
    @livewire('frontend.pages.welcome.slider')
    {{-- Download the app --}}
    @if (!Auth::check())
      @livewire('frontend.pages.welcome.download-app')
    @endif
    {{-- End downloading app --}}
    @livewire('frontend.pages.welcome.offer-section')
    @livewire('frontend.pages.welcome.recent-blog')
    @livewire('frontend.pages.welcome.testimonial')
    @livewire('frontend.pages.welcome.media')
    @livewire('frontend.pages.welcome.footer')
  @endsection
</div>
