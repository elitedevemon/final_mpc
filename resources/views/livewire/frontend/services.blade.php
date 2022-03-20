<div>
  <!-- title -->
  <x-slot name="title">Services|MPC Method</x-slot>

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
  <div class="container py-4">
    <h3 class="text-center text-danger">Our Services:</h3>
    <div class="col-md-12 pt-3">
        <div class="row">
            <div class="col-12 col-md-4">
                <div style="font-size: 20px; font-family: lucida bright;">
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Speaking English Lessons Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">English Speaking Basics Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Regular English Lessons Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Business English Lessons Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Interview English Lessons Course</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div style="font-size: 20px; font-family: lucida bright;">
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Travel English Lessons Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Idoms and Phrases Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Special Topics Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">English Video Lessons Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">English Listening Lessons Course</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div style="font-size: 20px; font-family: lucida bright;">
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Extra Dictionary Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Extra English Lessons Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Online Examination Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">IELTS Course</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><i class="fa fa-check text-info"></i></div>
                        <div class="col-11">Job Exam Course</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
