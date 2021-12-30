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
  public $superadmin_info, $paginate_page=9;

  /**
   * Mount function
   */
  public function mount()
  {
    $this->superadmin_info = Admin::first();
  }

  /**
   * Load more function
   */
  public function LoadMore()
  {
    $this->paginate_page += 9;
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.forum', [
      'forum_post' => Post::paginate($this->paginate_page)
    ]);
  }
}
