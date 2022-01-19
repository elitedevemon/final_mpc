<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\UserEducationalInfo;
use App\Models\User;
use Livewire\Component;

class SelectedProfile extends Component
{
  #public variables
  public $selected_username, $user, $userEduDetails;

  /**
   * Mount function
   */
  public function mount($username)
  {
    $this->selected_username = $username;
    $this->user = User::where('username', $this->selected_username)->first();
    $this->userEduDetails = UserEducationalInfo::where('username', $this->selected_username)->first();
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.selected-profile');
  }
}
