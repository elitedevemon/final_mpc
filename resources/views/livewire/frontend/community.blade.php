<div>
  <!-- title -->
  <x-slot name="title">Contact|MPC Method</x-slot>

  <!--styles-->
  <x-slot name="styles">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('superadmin/assets/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('superadmin/assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('superadmin/assets/css/animated.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('assets/style.css') }}">
  </x-slot>

  <!--Scripts-->
  <x-slot name="scripts">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script> --}}<!--custom js-->
      <script src="{{ asset('superadmin/assets/js/custom.js') }}"></script>
  </x-slot>

  <x-slot name="sessionTimeOut"></x-slot>

  {{-- Main section start --}}
  @livewire('frontend.pages.welcome.header')
  {{-- Download the app --}}
  @if (!Auth::check())
    @livewire('frontend.pages.welcome.download-app')
  @endif
  <div class="container text-muted py-5" style="font-size: 20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    <h5 class="text-danger text-center text-md-start">Blog:</h5>
    Wondering what it’s like to study at university? Want advice on how to survive studying abroad? Read first-hand accounts of student life and get study abroad tips with the Top Universities Student Blog. Interested in contributing? Read about our student bloggers, and find out how to contribute. <br><br>
    <h5 class="text-danger text-center text-md-start">Videos:</h5>
    Watch the latest videos from Top Murad Private Center YouTube channel, covering the world's top educational institutions, student life, student stereotypes, advice about studying abroad and more! For more videos, check out our YouTube channel. <br><br>
    <h5 class="text-danger text-center text-md-start">Latest News:</h5>
    Get all the latest educational news from around the globe, including current trends, international reports and student initiatives.
  </div>
  @livewire('frontend.pages.welcome.footer')
</div>
@push('js')
  <script>
    $(document).ready(function(){
      $('#liveToast').toast('show');
    });
  </script>
@endpush
