<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LockScreen extends Component
{
    public $password;

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
      if (Hash::check($this->password, Auth::user()->password)) {
        User::where('id', Auth::user()->id)->update([
          'active_status' => true
        ]);
        if (Auth::user()->role == 'Teacher') {
          return redirect()->route('teacher.home', app()->getLocale());
        }elseif(Auth::user()->role == 'Student') {
          return redirect()->route('home', app()->getLocale());
        }
      }else{
        $this->addError('wrong_pass', 'You have entered an wrong password');
      }
    }

    /**
     * Auth::logout() function
     *
     * @return welcome
     */
    public function logout()
    {
      Auth::logout();
      return redirect()->route('welcome', app()->getLocale());
    }

    /**
     * Render function
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.lock-screen');
    }
}
