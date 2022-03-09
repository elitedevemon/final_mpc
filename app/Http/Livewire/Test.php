<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
  /**
   * Login function
   *
   */
  # public variables
  public $email, $password, $remember_me;

  
  public function testing()
  {
    $this->addError('testing', "This is a testing error message");
  }
    public function render()
    {
        return view('livewire.test')->layout("layouts.master");
    }
}
