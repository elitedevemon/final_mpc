<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LockScreenController extends Controller
{
    public function index()
    {
      User::where('id', Auth::user()->id)->update([
        'active_status' => false
      ]);
      return view('backend.pages.lock-screen');
    }
}
