<?php

namespace App\Http\Livewire\Frontend\Pages\Welcome;

use App\Models\frontend\Post;
use Livewire\Component;
use Livewire\WithPagination;

class RecentBlog extends Component
{
  use WithPagination;
  
  /**
   * Render function
   * @var recentPosts
   */
  public function render()
  {
    return view('livewire.frontend.pages.welcome.recent-blog', [
      'recentPosts' => Post::orderBy('id', 'DESC')->paginate(3),
    ]);
  }
}
