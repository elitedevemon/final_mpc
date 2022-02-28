<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Style css -->
  <link href="{{ asset('superadmin/assets/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('superadmin/assets/css/dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('superadmin/assets/css/skin-modes.css') }}" rel="stylesheet" />

  <!-- Animate css -->
  <link href="{{ asset('superadmin/assets/css/animated.css') }}" rel="stylesheet" />

  <!---Icons css-->
  <link href="{{ asset('superadmin/assets/plugins/icons/icons.css') }}" rel="stylesheet" />

  <!-- Color Skin css -->
  <link id="theme" href="{{ asset('superadmin/assets/colors/color1.css') }}" rel="stylesheet" type="text/css"/>

  <title>Login|MPC Method</title>
</head>
<body class="h-100vh error-bg">
  <div class="register-3">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
      <img src="{{ asset('superadmin/assets/images/svgs/loader.svg') }}" alt="loader">
    </div>
    <!-- End GLOBAL-LOADER -->

    <div class="page">
      <div class="page-content">
        <div class="container">
          <div class="row">
            <div class="col mx-auto">
              <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-4 col-md-7 col-sm-12 col-xs-12 ">
                  <div class="text-center mb-5 mt-0">
                    <img src="https://drive.google.com/uc?id=1H7kPBkQsmvA2mXGGeYBEf95UvuHse2Kg&export=media" class="" alt="MPC Method Logo" width="80" height="80">
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
                        <a href="javascript:void(0);" class="btn   m-0 me-2 p-2 mb-2"><i class="fa fa-google"></i> Google</a>
                        <a href="javascript:void(0);" class="btn  m-0 me-2 p-2 mb-2"><i class="fa fa-twitter"></i> twitter</a>
                        <a href="javascript:void(0);" class="btn  m-0 p-2 mb-2"><i class="fa fa-facebook"></i> facebook</a>
                      </div>
                      <hr class="divider my-6 text-primary">
                      <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                        @csrf
                        <div class="input-group mb-4">
                          <div class="input-group-text">
                            <i class="fe fe-user"></i>
                          </div>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email or Username" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                          <!-- email error message-->
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="input-group mb-4">
                          <div class="input-group" id="Password-toggle">
                            <a href="#" class="input-group-text">
                            <i class="fe fe-eye" aria-hidden="true"></i>
                            </a>
                            <input type="password" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror form-control" name="password" required autocomplete="current-password"/>
                            <!--password error message-->
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" id="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }} />
                            <span class="custom-control-label text-white-50">Remember Me <a href="{{ route('reset.forgotten.password', app()->getLocale()) }}" class="btn-link text-white float-end">Forget password ?</a></span>

                          </label>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-white text-primary btn-block d-grid px-4 font-weight-bold">Log In</button>
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
  <!-- Jquery js-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Bootstrap5 js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!--Othercharts js-->
  <script src="{{ asset('superadmin/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

  <!-- Circle-progress js-->
  <script src="{{ asset('superadmin/assets/plugins/circle-progress/circle-progress.min.js') }}"></script>

  <!-- Jquery-rating js-->
  <script src="{{ asset('superadmin/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

  <!-- Show Password -->
  <script src="{{ asset('superadmin/assets/plugins/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>

  

  <!-- Custom js-->
  <script src="{{ asset('superadmin/assets/js/custom.js') }}"></script>
</body>
</html>