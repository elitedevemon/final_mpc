<?php

namespace App\Http\Livewire\Superadmin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SuperadminLogin extends Component
{
  /**
    * Public variables
    *
    * @var public
    */
  public $username, $password, $remember;

  /**
   * Login function
   */
  #validate input
  protected $rules= [
    'username' => 'required|min:6',
    'password' => 'required|min:6|max:10',
  ];

  public function login()
  {
    $this->validate();
    if (Auth::guard('admin')->attempt(['email' => $this->username, 'password' => $this->password], $this->remember)) {
      return redirect()->route('superadmin.dashboard', app()->getLocale());
    }elseif(Auth::guard('admin')->attempt(['username'=> $this->username, 'password' => $this->password], $this->remember)){
      return redirect()->route('superadmin.dashboard', app()->getLocale());
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.auth.superadmin-login');
  }
}
