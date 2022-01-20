<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\FriendRequest as BackendFriendRequest;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FriendRequest extends Component
{
  #public variables
  public $friendRequests;

  /**
   * Mount function
   */
  public function mount()
  {
    $this->friendRequests = BackendFriendRequest::where('receiver_username', Auth::user()->username)->where('action', 'in-process')->get();
  }

  /**
   * Confirm friend request function
   */

  # confirm friend request
  public function confirmReceivedRequest($username)
  {
    BackendFriendRequest::where('sender_username', $username)->where('receiver_username', Auth::user()->username)->where('action', 'in-process')->update([
      'action'=>'success'
    ]);
    // $this->confirmReceivedRequestNotification($username);
  }

  # received friend request notification
  // public function confirmReceivedRequestNotification($username)
  // {
  //   $notify = new FriendRequestNotification();
  //   $notify->sender_username = $username;
  //   $notify->receiver_username = Auth::user()->username;
  //   $notify->action = "received";
  //   $notify->save();
  // }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.friend-request');
  }
}
