<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  /**
   * Construct method for auth
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show student contacts page
   *
   * @return void
   */
  public function index()
  {
    return view('backend.pages.contact-list');
  }

  /**
   * Show selected profile
   */
  public function contactUserInfo($laungage, $username)
  {
    $auth_user = $username;
    return view('backend.pages.selected-profile', compact('auth_user'));
  }
}
