<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\Faqs;
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
    ]);
  }
}
