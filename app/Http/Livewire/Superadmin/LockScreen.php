<?php

namespace App\Http\Livewire\Superadmin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LockScreen extends Component
{
  #public variables
  public $showPass, $password;

  /**
     * Required rule
     *
     * @var array
     */
    protected $rules = [
      'password' => 'required|min:6'
    ];

    /**
     * Required Messages
     */
    protected $messages = [
      'password.required' => "Password field can't be empty",
      'password.min' => "Password should be at least 6 chars.",
    ];

    /**
     * Unlock function
     *
     * @return $password
     */
    public function unlock()
    {
      $this->validate();
      if (Hash::check($this->password, Auth::guard('admin')->user()->password)) {
        Admin::where('id', Auth::guard('admin')->user()->id)->update([
          'active_status' => true
        ]);
        return redirect()->route('superadmin.dashboard', app()->getLocale());
      }else{
        $this->addError('password', 'You have entered an wrong password');
      }
    }

    /**
     * Auth::logout() function
     *
     * @return welcome
     */
    public function logout()
    {
      Auth::guard('admin')->logout();
      return redirect()->route('superadmin.login', app()->getLocale());
    }


  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.lock-screen');
  }
}
