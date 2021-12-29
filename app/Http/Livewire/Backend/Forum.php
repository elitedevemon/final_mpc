<?php

namespace App\Http\Livewire\Backend;

use App\Models\Admin;
use App\Models\frontend\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Forum extends Component
{
  use WithPagination;

  #public variables
  public $superadmin_info;

  /**
   * Mount function
   */
  public function mount()
  {
    $this->superadmin_info = Admin::first();
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.forum', [
      'forum_post' => Post::paginate(9)
    ]);
  }
}
