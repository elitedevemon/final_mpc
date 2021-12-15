<?php

namespace App\Http\Livewire\Superadmin\Update;

use App\Models\frontend\Marquee as FrontendMarquee;
use Livewire\Component;

class Marquee extends Component
{
  /**
   * Public variables
   */
  public $marqueeText, $edited_text;

  /**
   * Mount function
   */
  public function mount()
  {
    $this->marqueeText = FrontendMarquee::first();
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.update.marquee');
  }
}
