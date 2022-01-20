<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\Faqs;
use App\Models\Backend\FriendRequest;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Notifications extends Component
{
  #public variables

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.notifications', [
      'faqs_notification' => Faqs::orderBy('id', 'DESC')->where('username', '!=', Auth::user()->username)->get(),
      'friend_request_notification' => FriendRequest::where('receiver_username', Auth::user()->username)->where('action', 'in-process')->orderBy('id', 'DESC')->get(),
    ]);
  }
}
