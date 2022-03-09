<div class="register-3">
  <!-- Title -->
  <x-slot name="title">Login | MPC Method</x-slot>
  <!-- Styles -->
  <x-slot name="styles">
    <link href="{{ asset('superadmin/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('superadmin/assets/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('superadmin/assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('superadmin/assets/css/animated.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet" />
    <link id="theme" href="{{ asset('superadmin/assets/colors/color1.css') }}" rel="stylesheet" type="text/css"/>
  </x-slot>

  <!--Session timeout-->
  <x-slot name="sessionTimeOut"></x-slot>
  <!--end session-->

  <!-- Scripts -->
  <x-slot name="scripts">
    <!-- Jquery js-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap5 js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('superadmin/assets/plugins/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>
    <script src="{{ asset('superadmin/assets/js/custom.js') }}"></script>
    <script>
      window.addEventListener('loginSuccess', event=>{
        setTimeout(function () {    
            window.location.href = '/'; 
        },1000);
      })
    </script>
  </x-slot>

  <!-- Main content -->
  <div class="page">
    <div class="page-content">
      <div class="container">
        <div class="row">
          <div class="col mx-auto">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-xl-4 col-md-7 col-sm-12 col-xs-12 ">
                <div class="text-center mb-5 mt-0">
                  <a href="{{ route('welcome', app()->getLocale()) }}">
                    <img src="https://drive.google.com/uc?id=1H7kPBkQsmvA2mXGGeYBEf95UvuHse2Kg&export=media" class="" alt="MPC Method Logo" width="80" height="80">
                  </a>
                </div>
                <div class="card-group mb-0">
                  <div class="card bg-primary text-white br-7 p-2">
                    <div class="card-body mb-0">
                      <div class="text-center mb-3">
                        <h1 class="mb-2">Log In</h1>
                        <a href="javascript:void(0);" class="text-white">Welcome Back !</a>
                      </div>
                    <hr class="hrregister3">
                    <div class="text-center small mt-3">Sign in with</div>
                    <div class="btn-list text-center mb-3 mt-2">
                      <a href="javascript:void(0);" class="btn   m-0 me-2 p-2 mb-2"><i class="fab fa-google"></i> Google</a>
                      <a href="javascript:void(0);" class="btn  m-0 me-2 p-2 mb-2"><i class="fab fa-twitter"></i> twitter</a>
                      <a href="javascript:void(0);" class="btn  m-0 p-2 mb-2"><i class="fab fa-facebook"></i> facebook</a>
                    </div>
                    <hr class="divider my-6 text-primary">
                    @livewire('offline')
                    <form wire:submit.prevent='login'>
                      @error('loginFailed')
                        <small class="invalid-feedback d-block text-warning mb-1">{{ $message }}</small>
                      @enderror
                      @if(Session::has('loginSuccess'))
                        <small class="valid-feedback d-block mb-1">{{ session()->get('loginSuccess') }}</small>
                      @endif
                      <div class="input-group mb-4">
                        <div class="input-group-text">
                          <i class="fas fa-user-alt"></i>
                        </div>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email or Username" wire:model.defer='email'/>
                        <!-- email error message-->
                        @error('email')
                          <small class="invalid-feedback d-block text-warning">{{ $message }}</small>
                        @enderror
                      </div>
                      <div class="input-group mb-4">
                        <div class="input-group" id="Password-toggle">
                          <a href="#" class="input-group-text">
                            <i class="fas fa-eye" aria-hidden="true"></i>
                          </a>
                          <input type="password" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror form-control" name="password" autocomplete="current-password" wire:model.defer='password'/>
                          <!--password error message-->
                          @error('password')
                            <small class="invalid-feedback d-block text-warning">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" name="remember" id="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }} wire:model.defer='remember_me' />
                          <span class="custom-control-label text-white-50">Remember Me <a href="{{ route('reset.forgotten.password', app()->getLocale()) }}" class="btn-link text-white float-end">Forget password ?</a></span>

                        </label>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <button type="submit" class="btn btn-white text-primary btn-block d-grid px-4 font-weight-bold" wire:loading.attr='disabled'>Log In <i class="fa fa-spinner fa-spin" wire:loading wire:target='login'></i></button>
                          </div>
                      </div>
                    </form>
                    <div class="text-center pt-4">
                        <div class="font-weight-normal fs-14 text-white-50">Don't have an account ?  <a class="btn-link font-weight-bold anchors text-white" href="{{ route('register', app()->getLocale()) }}">Sign Up</a></div>
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
