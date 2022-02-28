<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Superadmin\Exam\ExamTopic;
use Livewire\Component;

class Welcome extends Component
{
  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.frontend.welcome')
            ->layout('layouts.master');
  }
}
