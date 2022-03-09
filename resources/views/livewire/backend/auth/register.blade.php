<div>
  <x-slot name="title">MPC Method | Register</x-slot>
  <x-slot name="styles">
    <link rel="icon" href="https://drive.google.com/uc?id=1H7kPBkQsmvA2mXGGeYBEf95UvuHse2Kg&export=media" type="image/x-icon"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="{{ asset('superadmin/assets/css/style.css') }}" rel="stylesheet" />
		<link href="{{ asset('superadmin/assets/css/dark.css') }}" rel="stylesheet" />
		<link href="{{ asset('superadmin/assets/css/skin-modes.css') }}" rel="stylesheet" />
		<link href="{{ asset('superadmin/assets/css/animated.css') }}" rel="stylesheet" />
		<link href="{{ asset('superadmin/assets/plugins/icons/icons.css') }}" rel="stylesheet" />
		<link id="theme" href="{{ asset('superadmin/assets/colors/color1.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  </x-slot>
  <x-slot name="sessionTimeOut"></x-slot>
  <x-slot name="scripts">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="{{ asset('superadmin/assets/plugins/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>
		<script src="{{ asset('superadmin/assets/js/custom.js') }}"></script>
  </x-slot>

  <!--main content-->
  <div class="bg-white register-3">
    <div class="page">
      <div class="page-content">
          <div class="container">
              <div class="row">
                  <div class="col mx-auto">
                      <div class="row justify-content-center">
                          <div class="col-lg-6 col-xl-5 col-md-7 col-sm-12 col-xs-12 ">
                              <div class="text-center mb-5 mt-0">
                                <a href="{{ route('welcome', app()->getLocale()) }}">
                                  <img src="https://drive.google.com/uc?id=1H7kPBkQsmvA2mXGGeYBEf95UvuHse2Kg&export=media" class="" alt="MPC Method Logo" width="80" height="80">
                                </a>
                              </div>
                              <div class="card-group mb-0">
                                <div class="card bg-primary text-white br-7 p-2">
                                    <div class="card-body mb-0">
                                        <div class="text-center mb-3">
                                            <h1 class="mb-2">Register</h1>
                                            <a href="javascript:void(0);" class="text-white">Create New Account</a>
                                        </div>
                                    <hr class="hrregister3">
                                    <div class="text-center small mt-3">Sign up with</div>
                                    <div class="btn-list text-center mb-3 mt-2">
                                        <a href="javascript:void(0);" class="btn   m-0 me-2 p-2 mb-2"><i class="fa fa-google"></i> Google</a>
                                        <a href="javascript:void(0);" class="btn  m-0 me-2 p-2 mb-2"><i class="fa fa-twitter"></i> twitter</a>
                                        <a href="javascript:void(0);" class="btn  m-0 p-2 mb-2"><i class="fa fa-facebook"></i> facebook</a>
                                    </div>
                                    <hr class="divider my-6 text-primary">
                                    @error('exception')
                                      <small class="text-warning invalid-feedback d-block">{{ $message }}</small>
                                    @enderror
                                    @livewire('offline')
                                    <form wire:submit.prevent>
                                      <!-- Name input field -->
                                      <div class="input-group mb-4">
                                        <div class="input-group-text"><i class="fe fe-user"></i></div>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" wire:model.defer='name'>
                                      </div>
  
                                      <!-- Username input field -->
                                      <div class="input-group mb-4">
                                        <div class="input-group-text"><i class="fe fe-user"></i></div>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Enter username" wire:model.defer='username'>
                                        @error('username')
                                          <small class="text-warning invalid-feedback">{{ $message }}</small>
                                        @enderror
                                      </div>
  
                                      <!-- Email input field -->
                                      <div class="input-group mb-4">
                                        <div class="input-group-text">
                                            <i class="fe fe-mail"></i>
                                        </div>
                                        <input type="email" placeholder="Enter your email" class="form-control @error('email') is-invalid @enderror" wire:model.defer='email'>
                                        @error('email')
                                          <small class="text-warning invalid-feedback">{{ $message }}</small>
                                        @enderror
                                      </div>
                                      
                                      <!-- Phone number input field -->
                                      <div class="input-group mb-4">
                                        <div class="input-group-text">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="number" placeholder="Enter phone number" class="form-control @error('number') is-invalid @enderror" wire:model.defer='number'>
                                        @error('number')
                                          <small class="text-warning invalid-feedback">{{ $message }}</small>
                                        @enderror
                                      </div>
  
                                      <!-- Password input field -->
                                      <div class="input-group mb-4">
                                        <div class="input-group" id="Password-toggle1">
                                          <a href="#" class="input-group-text"><i class="fe fe-eye" aria-hidden="true"></i></a>
                                          <input type="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" wire:model.defer='password'>
                                        </div>
                                      </div>
  
                                      <!-- Confirm password field -->
                                      <div class="input-group mb-4">
                                        <div class="input-group" id="Password-toggle">
                                          <a href="#" class="input-group-text"><i class="fe fe-eye" aria-hidden="true"></i></a>
                                          <input type="password" placeholder="Re-type password" class="form-control @error('reTypePassword') is-invalid @enderror" wire:model.defer='reTypePassword'>
                                        </div>
                                      </div>
  
                                      <!-- Register type -->
                                      <div class="row my-3">
                                        <div class="col-6">
                                          <div class="form-check">
                                            <input type="radio" name="get_role" id="student" value="Student" class="form-check-input @error('getRole') is-invalid @enderror" wire:model.defer='getRole'>
                                            <label for="student" class="form-check-label">Student</label>
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-check">
                                            <input type="radio" name="get_role" id="teacher" value="Teacher" class="form-check-input @error('getRole') is-invalid @enderror" wire:model.defer='getRole'>
                                            <label for="teacher" class="form-check-label">Teacher</label>
                                          </div>
                                        </div>
                                      </div>
  
                                      <!-- Terms and conditions -->
                                      <div class="form-group">
                                          <label class="custom-control custom-checkbox">
                                              <input type="checkbox" wire:model='checkTerms' class="custom-control-input @error('checkTerms') is-invalid @enderror" />
                                              <span class="custom-control-label text-white-50">I Agree For  <a href="javascript:void(0);" wire:click="termsAndConditions" class="ms-1 anchors font-weight-bold text-white">Terms & Conditions <i class="fa fa-spinner fa-spin text-light" wire:loading wire:target='termsAndConditions'></i></a></span>
                                          </label>
                                      </div>
                                      
                                      <button class="btn btn-white text-primary btn-block d-grid px-4 font-weight-bold" wire:click='register' wire:loading.attr='disabled' wire:target='register'>
                                        <span wire:target='register' wire:loading.class='d-none'>Create New Account</span>
                                        <span wire:target='register' wire:loading>Loading <i class="fa fa-spinner fa-spin"></i></span>
                                      </button>
                                      <div class="text-center pt-4">
                                          <div class="font-weight-normal fs-14 text-white-50">Already have an account ?<a class="btn-link font-weight-bold anchors text-white ms-2" href="{{ route('login', app()->getLocale()) }}">Login Here</a></div>
                                      </div>
                                    </form>
                                    </div>
                                </div>
                              </div>
  
                              <!-- Terms of Condition modal -->
                              <div class="modal fade" wire:ignore.self id="termsAndConditions" aria-labelledby="termsAndConditionsLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="termsAndConditionsLabel">Terms and Conditions</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      @include('frontend.partials.terms-and-condition')
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
  
                              <!-- Teacher registration modal -->
                              <div class="modal fade" wire:ignore.self id="teacherRegistration" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="teacherRegistrationLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="teacherRegistrationLabel">Register as Teacher <span class="text-info" wire:loading wire:target='teacherRegistration'>Please Wait.. PROCESSING <i class="fa fa-spinner fa-spin text-danger"></i></span></h5>
                                      <button type="button" class="btn-close" wire:loading.class='d-none' wire:target='teacherRegistration' data-bs-dismiss="modal" aria-label="Close">&times;</button>
                                    </div>
                                    <h6 class="text-info p-3" wire:loading wire:target='teacherRegistration'>It will take some time to process your data. Please don't close your internet connection and wait for the confirmation. Thank you.</h6>
                                    <div class="modal-body">
                                      @include('frontend.partials.teacher-additional-info')
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:loading.attr='disabled'>Close</button>
                                      <button type="button" class="btn btn-primary" wire:click='teacherRegistration' wire:loading.attr='disabled'>Register <i class="fa fa-spinner fa-spin" wire:loading wire:target='teacherRegistration'></i></button>
                                    </div>
                                  </div>
                                </div>
                              </div>
  
                              <!-- Confirm teacher registration modal -->
                              <div class="modal fade" id="confirmTeacherRegistration" tabindex="-1" aria-labelledby="confirmTeacherRegistrationLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="confirmTeacherRegistrationLabel">Account In-Process</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      Your account is in process. You will notified as soon as your account accepted by author. Thanks for your patience.
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

@push('js')
<script>
  // Terms and conditions modal
  window.addEventListener('showTermsAndConditionsModal', event=>{
    $('#termsAndConditions').modal('show');
  });
  // Teacher registration modal
  window.addEventListener('showTeacherRegistrationModal', event=>{
    $('#teacherRegistration').modal('show');
  });
  // Confirm teacher registration
  window.addEventListener('confirmTeacherRegistration', event=>{
    $('#teacherRegistration').modal('hide');
    $('#confirmTeacherRegistration').modal('show');
  })
</script>
@endpush

@push('css')
<style>
  /* page loader*/
  #global-loader{
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    text-align: center;
    opacity: 0.7;
    background-color: #fff;
    z-index: 99;
  }

  #global-loader-image {
    position: absolute;
    z-index: 100;
  }
</style>
@endpush