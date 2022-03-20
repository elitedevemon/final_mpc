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
  <div class="container contact-form-shadow my-2">
    <div class="row">
        @php
            $contacts = DB::table('contacts')->where('id', '1')->get()
        @endphp
        @foreach ($contacts as $contact)
            <div class="col-md-5 bg-primary py-3 px-3 py-md-5 px-md-5" style="border-radius: 5px 0px 0px 5px">
                <h3 class="text-light">Let's Get Into Touch</h3>
                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, vitae.</p>
                <div class="d-flex">
                    <div class="col-2 contact-icon"><i class="fas fa-map-marker-alt    "></i></div>
                    <div class="col-10 ps-3 text-light"><span style="font-size: 20px;">Address: </span><span style="color: rgba(236, 228, 228, 0.849)">{{ $contact->address }}</span></div>
                </div>
                <div class="d-flex pt-2">
                    <div class="col-2 contact-icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="col-10 ps-3 text-light mt-2"><span style="font-size: 20px;">Phone: </span><span style="color: rgba(236, 228, 228, 0.849)">{{ $contact->phone }}</span></div>
                </div>
                <div class="d-flex pt-2">
                    <div class="col-2 contact-icon"><i class="fas fa-paper-plane"></i></div>
                    <div class="col-10 ps-3 text-light"><span style="font-size: 20px;">Email: </span><span style="color: rgba(236, 228, 228, 0.849)">{{ $contact->email }}</span></div>
                </div>
                <div class="d-flex pt-2">
                    <div class="col-2 contact-icon"><i class="fas fa-globe    "></i></div>
                    <div class="col-10 ps-3 text-light mt-2"><span style="font-size: 20px;">Website: </span><a href="https://www.mpcmethod.com" target="_blank"><span style="color: rgba(236, 228, 228, 0.849)">www.mpcmethod.com</span></a></div>
                </div>
            </div>
        @endforeach
        <div class="col-md-7 bg-light py-3 px-3 py-md-5 px-md-5" style="border-radius: 5px">
            <h3>Get In Touch</h3>
            <form action="/send-email" method="get" class="pt-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">FULL NAME</label>
                        <input type="text" name="full_name" id="" placeholder="Name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">EMAIL ADDRESS</label>
                        <input type="email" name="email" id="" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="col-12 py-4">
                    <label for="">SUBJECT</label>
                    <input type="text" name="subject" id="" placeholder="Subject" class="form-control">
                </div>
                <div class="col-12">
                    <label for="">MESSAGE</label>
                    <textarea name="message" class="form-control" placeholder="Message" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-3">
                    <input type="submit" value="SEND MESSAGE" class="btn btn-info w-100 text-light mt-4">
                </div>
            </form>
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
