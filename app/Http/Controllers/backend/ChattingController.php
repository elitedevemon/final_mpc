<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChattingController extends Controller
{
  /**
   * Construct method for auth
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show chatting page
   *
   * @return void
   */
  public function index()
  {
      return view('backend.pages.chatting');
  }
}
