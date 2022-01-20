<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\FriendRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ContactList extends Component
{
  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.contact-list', [
      'contacts' => FriendRequest::orderBy('sender_username', 'ASC')->where('receiver_username', Auth::user()->username)->where('action', 'success')->orWhere('sender_username', Auth::user()->username)->where('action', 'success')->get(),
    ]);
  }
}
