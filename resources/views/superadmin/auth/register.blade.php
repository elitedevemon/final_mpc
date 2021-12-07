@extends('layouts.master')
@section('title', 'Register | MPC')
@section('styles')
  @include('styles.material-design')
  @include('styles.auth-style')
@endsection
@section('main-content')
<section class="signup">
  <div class="container my-md-2">
      <div class="signup-content">
          <div class="signup-form">
              <h2 class="form-title">Sign up</h2>
              <form method="POST" class="register-form" id="register-form" action="{{ route('register', app()->getLocale()) }}">
                @csrf
                  <div class="form-group">
                      <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                      <input type="text" class="@error('name') is-invalid @enderror" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                      
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="email"><i class="zmdi zmdi-email"></i></label>
                      <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="email"/>
                      
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                      <input type="number" class="@error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Your Phone" value="{{ old('phone') }}" required autocomplete="phone"/>
                      
                      @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="reffer_code"><i class="zmdi zmdi-code"></i></label>
                      <input type="text" class="@error('reffer_code') is-invalid @enderror" name="reffer_code" id="reffer_code" placeholder="Refferal Code" value="{{ old('reffer_code') }}" required autocomplete="reffer_code"/>
                      
                      @error('reffer_code')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                      <input type="password" id="pass"  class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password"/>
                      
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                      <input type="password" name="password_confirmation" required autocomplete="new-password" id="re_pass" placeholder="Repeat your password"/>
                  </div>
                  <div class="form-group form-button">
                      <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                  </div>
              </form>
          </div>
          <div class="signup-image">
              <figure class="d-none d-md-block"><img src="{{ asset('auth-form/images/signup-image.jpg') }}" alt="sing up image"></figure>
              <a href="{{ route('login', app()->getLocale()) }}" class="signup-image-link"><u>I am already member</u></a>
          </div>
      </div>
  </div>
</section>
@endsection