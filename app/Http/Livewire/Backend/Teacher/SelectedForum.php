<?php

namespace App\Http\Livewire\Backend\Teacher;

use App\Models\Admin;
use App\Models\Backend\ForumComment;
use App\Models\Backend\ForumCommentLike;
use App\Models\Backend\ForumLike;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SelectedForum extends Component
{
  #public variables
  public $post, $superadamin_name, $comment, $total_comments;
  public $pagination_page = 6;
  
  /**
   * Mount function
   */
  public function mount($post)
  {
    $this->post = $post;
    $this->superadamin_name = Admin::first();
    $this->total_comments = ForumComment::where('post_id', $post->id)->latest()->get();
  }

  public function comments()
  {
    $this->total_comments = ForumComment::where('post_id', $this->post->id)->latest()->get();
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
   * Post comment function
   */
  public function PostComment($post_id)
  {
    $this->validate([
      'comment' => 'required'
    ]);
    $comment = new ForumComment();
    $comment->post_id = $post_id;
    $comment->username = Auth::user()->username;
    $comment->comment = $this->comment;
    $comment->save();
    $this->reset('comment');
  }

  /**
   * Comment like function
   */
  public function commentLike($comment_id)
  {
    $like = new ForumCommentLike();
    $checkExist = ForumCommentLike::where('username', Auth::user()->username)->where('post_id', $this->post->id)->where('comment_id', $comment_id)->first();
    if ($checkExist) {
      if ($checkExist->action == 'dislike') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->post_id = $this->post->id;
        $like->comment_id = $comment_id;
        $like->action = 'like';
        $like->save();
      }elseif ($checkExist->action == 'like') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->post_id = $this->post->id;
      $like->comment_id = $comment_id;
      $like->action = 'like';
      $like->save();
    }
  }

  /**
   * Comment dislike function
   */
  public function commentDislike($comment_id)
  {
    $like = new ForumCommentLike();
    $checkExist = ForumCommentLike::where('username', Auth::user()->username)->where('post_id', $this->post->id)->where('comment_id', $comment_id)->first();
    if ($checkExist) {
      if ($checkExist->action == 'like') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->post_id = $this->post->id;
        $like->comment_id = $comment_id;
        $like->action = 'dislike';
        $like->save();
      }elseif ($checkExist->action == 'dislike') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->post_id = $this->post->id;
      $like->comment_id = $comment_id;
      $like->action = 'dislike';
      $like->save();
    }
  }

  /**
   * Load more function
   */
  public function loadMore()
  {
    $this->pagination_page += 5;
  }

  /**
   * Render function
   */
  public function render()
  {
      return view('livewire.backend.teacher.selected-forum', [
        'comments'=> ForumComment::where('post_id', $this->post->id)->latest()->paginate($this->pagination_page)
      ]);
  }
}
