<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Community extends Component
{
  public function render()
  {
    return view('livewire.frontend.community')
          ->layout('layouts.master');
  }
}
