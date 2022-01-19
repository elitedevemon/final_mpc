<?php

namespace App\Http\Controllers\Socialite\GetInfo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
  public function redirectToGoogle()
  {
    return Socialite::driver('google')->redirect();
  }

  public function handleGoogleCallback()
  {
    $user = Socialite::driver('google')->user();
    print_r($user);
  }
}
