
<div>
  <!--title-->
  <x-slot name="title">Welcome to Murad Private Center</x-slot>

  <!--styles-->
  <x-slot name="styles">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('superadmin/assets/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('superadmin/assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('superadmin/assets/css/animated.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('assets/style.css') }}">
  </x-slot>

  <!--session timeout message-->
  <x-slot name="sessionTimeOut">
    <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body text-center" style="padding: 2rem 0 2rem 0">
            <i class="fa fa-exclamation-triangle fs-1"></i>
            <h4 class="text-primary fs-2 font-weight-semibold mt-2">Session Timeout</h4>
            <div class="loading_bar">
            </div>
            <p class="mb-4 mx-4 fs-6">You're being timed out due to inactivity. Please choose <code>Stay LoggedIn</code> or <code>Log Out</code>. Otherwise, your <code>Lock Screen</code> mode will be enabled automatically in 5 minutes.</p>
            <a class="btn btn-danger px-5" href="{{ route('logout', app()->getLocale()) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
            <a class="btn btn-primary px-5 text-white" href="{{ url()->current() }}">Stay Loggedin</a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
          </div>
        </div>
      </div>
    </div>
  </x-slot>

  <!--Scripts-->
  <x-slot name="scripts">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script> --}}<!--custom js-->
      <script src="{{ asset('superadmin/assets/js/custom.js') }}"></script>
  </x-slot>

  <!--main content-->
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
</div>
@push('js')
  <script>
    $(document).ready(function(){
      $('#liveToast').toast('show');
    });
  </script>
@endpush
