<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
  public function index($language, $username)
  {
    $auth_username = $username;
    return view('backend.pages.auth.forgot-password', compact('auth_username'));
  }
  public function forgot($language, $username)
  {
    $auth_username = $username;
    return view('backend.pages.auth.reset-password', compact('auth_username'));
  }
}
