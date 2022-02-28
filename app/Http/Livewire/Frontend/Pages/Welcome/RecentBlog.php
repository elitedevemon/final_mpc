<?php

namespace App\Http\Livewire\Frontend\Pages\Welcome;

use App\Models\frontend\Post;
use Livewire\Component;

class RecentBlog extends Component
{
  /**
   * Render function
   * @var recentPosts
   */
  public function render()
  {
    return view('livewire.frontend.pages.welcome.recent-blog', [
      'recentPosts' => Post::all(),
    ]);
  }
}
