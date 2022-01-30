<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class Chatting extends Component
{
  # public variables
  public $receiver_username;

  # protected variavles for query string
  protected $queryString = ['receiver_username'];

  /**
   * Mount function
   */
  public function mount()
  {
    // $this->receiver_username = 'elitedev_emon';
  }

  public function render()
  {
    return view('livewire.backend.chatting');
  }
}
