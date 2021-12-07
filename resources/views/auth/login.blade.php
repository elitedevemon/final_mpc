@extends('layouts.master')
@section('title', 'Login | MPC')
@section('styles')
  @include('styles.material-design')
  @include('styles.auth-style')
@endsection
@section('main-content')
<section class="sign-in">
  <div class="container my-md-4 my-4">
      <div class="signin-content">
          <div class="signin-image">
              <figure class="d-none d-md-block"><img src="{{ asset('auth-form/images/signin-image.jpg') }}" alt="sing up image"></figure>
              <a href="{{ route('register', app()->getLocale()) }}" class="signup-image-link"><u>Create an account</u></a>
              <a href="{{ route('password.request', app()->getLocale()) }}" class="signup-image-link"><u>Forget Your Password?</u></a>
          </div>

          <div class="signin-form">
              <h2 class="form-title">Sign In</h2>
              <form method="POST" class="register-form" id="login-form" action="{{ route('login', app()->getLocale()) }}">
                @csrf
                  <div class="form-group">
                      <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                      <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                      
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="password"><i class="zmdi zmdi-lock"></i></label>
                      <input type="password" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                      
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <input type="checkbox" name="remember" id="remember" class="agree-term" {{ old('remember') ? 'checked' : '' }}/>
                      <label for="remember" class="label-agree-term"><span><span></span></span>Remember me</label>
                  </div>
                  <div class="form-group form-button">
                      <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                      
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>
@endsection