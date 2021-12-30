<?php

namespace App\Http\Livewire\Backend;

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
      'contacts' => User::orderBy('name', 'ASC')->where('id', '!=', Auth::user()->id)->get(),
    ]);
  }
}
