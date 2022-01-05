<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LeftSidebar extends Component
{
  #public variables
  public $modal_title, $modal_message, $toggle_name, $toggle_target;

  /**
   * Mount function
   */
  public function mount()
  {
    if (!Auth::user()->email_verified_at) {
      $this->toggle_name = "modal";
      $this->toggle_target = "#exampleModal";
    }
  }

  /**
   * Set modal id using function
   *
   * @return modal_id
   */
  public function modalId($modal_target)
  {
    $this->modal_title = "Enable $modal_target";
    $this->modal_message = "To enable $modal_target tab, please <span class='text-success'>verify your email</span> address";
  }

  /**
   * Render function
   *
   * @return void
   */
  public function render()
  {
    return view('livewire.backend.left-sidebar');
  }
}
