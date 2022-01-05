<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\FaqComment;
use App\Models\Backend\FaqCommentLike;
use App\Models\Backend\FaqsLike;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SelectedFaq extends Component
{
  #public variables
  public $faq, $faq_poster, $comment, $total_comments;
  public $pagination_page = 6;

  /**
   * Mount function
   */
  public function mount($faq)
  {
    $this->faq = $faq;
    $this->faq_poster = User::where('username', $faq->username)->first();
    $this->total_comments = FaqComment::where('faq_id', $faq->id)->latest()->get();
  }
  
  public function comments()
  {
    $this->total_comments = FaqComment::where('faq_id', $this->faq->id)->latest()->get();
  }

  /**
   * Faq like function
   */
  public function like($faq_id)
  {
    $like = new FaqsLike();
    $checkExist = FaqsLike::where('username', Auth::user()->username)->where('faq_id', $faq_id)->first();
    if ($checkExist) {
      if ($checkExist->action == 'dislike') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->faq_id = $faq_id;
        $like->action = 'like';
        $like->save();
      }elseif ($checkExist->action == 'like') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->faq_id = $faq_id;
      $like->action = 'like';
      $like->save();
    }
  }

  /**
   * Forum dislike function
   */
  public function dislike($faq_id)
  {
    $like = new FaqsLike();
    $checkExist = FaqsLike::where('username', Auth::user()->username)->where('faq_id', $faq_id)->first();
    if ($checkExist) {
      if ($checkExist->action == 'like') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->faq_id = $faq_id;
        $like->action = 'dislike';
        $like->save();
      }elseif ($checkExist->action == 'dislike') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->faq_id = $faq_id;
      $like->action = 'dislike';
      $like->save();
    }
  }

  /**
   * Post comment function
   */
  public function PostComment($faq_id)
  {
    $this->validate([
      'comment' => 'required'
    ]);
    $comment = new FaqComment();
    $comment->faq_id = $faq_id;
    $comment->username = Auth::user()->username;
    $comment->comment = $this->comment;
    $comment->save();
  }

  /**
   * Comment like function
   */
  public function commentLike($comment_id)
  {
    $like = new FaqCommentLike();
    $checkExist = FaqCommentLike::where('username', Auth::user()->username)->where('faq_id', $this->faq->id)->where('comment_id', $comment_id)->first();
    if ($checkExist) {
      if ($checkExist->action == 'dislike') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->faq_id = $this->faq->id;
        $like->comment_id = $comment_id;
        $like->action = 'like';
        $like->save();
      }elseif ($checkExist->action == 'like') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->faq_id = $this->faq->id;
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
    $like = new FaqCommentLike();
    $checkExist = FaqCommentLike::where('username', Auth::user()->username)->where('faq_id', $this->faq->id)->where('comment_id', $comment_id)->first();
    if ($checkExist) {
      if ($checkExist->action == 'like') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->faq_id = $this->faq->id;
        $like->comment_id = $comment_id;
        $like->action = 'dislike';
        $like->save();
      }elseif ($checkExist->action == 'dislike') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->faq_id = $this->faq->id;
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
    return view('livewire.backend.selected-faq', [
      'comments'=> FaqComment::where('faq_id', $this->faq->id)->latest()->paginate($this->pagination_page)
    ]);
  }
}
