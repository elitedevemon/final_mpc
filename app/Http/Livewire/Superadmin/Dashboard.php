<?php

namespace App\Http\Livewire\Superadmin;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
  /**
   * mount function
   */
  #public variables
  public $registeredUsers=[];
  public function mount()
  {
    $total = User::all()->count();
    $teacher = User::where('role', 'Teacher')->count();
    $student = User::where('role', 'Student')->count();
    array_push($this->registeredUsers, $total, $teacher, $student);
  }


  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.dashboard');
  }
}
