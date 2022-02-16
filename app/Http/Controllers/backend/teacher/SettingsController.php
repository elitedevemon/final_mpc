<?php

namespace App\Http\Controllers\backend\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
  /**
   * Construct method for auth
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show student settings page dashboard
   *
   * @return void
   */
  public function index()
  {
    return view('backend.pages.teacher.settings');
  }
}
