<?php

namespace App\Http\Controllers\Socialite\GetInfo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
  public function redirectToFacebook()
  {
    return Socialite::driver('facebook')->redirect();
  }

  public function handleFacebookCallback()
  {
    $user = Socialite::driver('facebook')->user();
    print_r($user);
  }
}
