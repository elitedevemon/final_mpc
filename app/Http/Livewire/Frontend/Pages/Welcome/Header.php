<?php

namespace App\Http\Livewire\Frontend\Pages\Welcome;

use Livewire\Component;

class Header extends Component
{
  
  /**
   * Redirect pages
   */
  # redirect to login page
  public function loginPage()
  {
    return redirect()->route('login', app()->getLocale());
  }

  # redirect to register page
  public function registerPage()
  {
    return redirect()->route('register', app()->getLocale());
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.frontend.pages.welcome.header');
  }
}
