<?php

namespace App\Http\Livewire\Backend\Teacher;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
  /**
   * Auth logout function
   */
  public function logout()
  {
    Auth::logout();
    return redirect()->route('login', app()->getLocale());
  }

  /**
   * Render function
   */
  public function render()
  {
      return view('livewire.backend.teacher.header');
  }
}
