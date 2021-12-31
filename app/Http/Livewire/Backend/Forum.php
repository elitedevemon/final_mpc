<?php

namespace App\Http\Livewire\Backend;

use App\Models\Admin;
use App\Models\Backend\ForumLike;
use App\Models\frontend\Post;
use Illuminate\Support\Facades\Auth;
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
   * Forum like function
   */
  public function like($slug)
  {
    $like = new ForumLike();
    $checkExist = ForumLike::where('username', Auth::user()->username)->where('slug', $slug)->first();
    if ($checkExist) {
      if ($checkExist->action == 'dislike') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->slug = $slug;
        $like->action = 'like';
        $like->save();
      }elseif ($checkExist->action == 'like') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->slug = $slug;
      $like->action = 'like';
      $like->save();
    }
  }

  /**
   * Forum dislike function
   */
  public function dislike($slug)
  {
    $like = new ForumLike();
    $checkExist = ForumLike::where('username', Auth::user()->username)->where('slug', $slug)->first();
    if ($checkExist) {
      if ($checkExist->action == 'like') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->slug = $slug;
        $like->action = 'dislike';
        $like->save();
      }elseif ($checkExist->action == 'dislike') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->slug = $slug;
      $like->action = 'dislike';
      $like->save();
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.forum', [
      'forum_post' => Post::latest()->paginate($this->paginate_page)
    ]);
  }
}
