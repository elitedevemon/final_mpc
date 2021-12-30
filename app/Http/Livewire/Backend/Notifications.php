<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\Faqs;
use Livewire\Component;

class Notifications extends Component
{
  #public variables

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.notifications', [
      'faqs_notification' => Faqs::orderBy('id', 'DESC')->get(),
    ]);
  }
}
