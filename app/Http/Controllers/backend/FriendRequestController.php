<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Notification\FriendRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendRequestController extends Controller
{
  public function index()
  {
    FriendRequestNotification::where('receiver_username', Auth::user()->username)->where('action', 'sent')->delete();
    return view('backend.pages.friend-request');
  }
}
