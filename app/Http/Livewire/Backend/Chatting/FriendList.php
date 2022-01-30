<?php

namespace App\Http\Livewire\Backend\Chatting;

use App\Models\User;
use Livewire\Component;

class FriendList extends Component
{
  public function render()
  {
    return view('livewire.backend.chatting.friend-list',[
      'messagedFriendList' => User::all(),
    ]);
  }
}
