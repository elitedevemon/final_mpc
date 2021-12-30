<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LockScreenController extends Controller
{
  public function index()
  {
    Admin::where('id', Auth::guard('admin')->user()->id)->update([
      'active_status' => false
    ]);
    return view('superadmin.pages.lock-screen');
  }
}
