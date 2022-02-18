<?php

namespace App\Http\Livewire\Superadmin\Create;

use App\Models\frontend\Post;
use App\Models\Superadmin\Blog\BlogRejectMail;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPost extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  /**
   * Approve blog post
   */
  public function approvePost($postId)
  {
    $post = Post::find($postId);
    $post->action = 'publish';
    $post->update();
  }

  /**
   * Show reject modal and assign value
   */
  public $postInfo;
  public function showRejectModal($postId)
  {
    $this->postInfo = Post::find($postId);
    $this->dispatchBrowserEvent('showPostRejectModal');
  }

  /**
   * Reject post function
   */
  # public variable
  public $rejectionMail;

  # reject post function
  public function rejectPost($postId)
  {
    $this->validate([
      'rejectionMail' => 'required',
    ]);
    $post = Post::find($postId);
    $post->action = 'reject';
    $post->update();
    $this->sendRejectionMail($post->username, $postId);
    $this->dispatchBrowserEvent('closeRejectModal');
  }

  # send mail to teacher
  public function sendRejectionMail($username, $postId)
  {
    $mail = new BlogRejectMail();
    $mail->username = $username;
    $mail->post_id = $postId;
    $mail->message = $this->rejectionMail;
    $mail->save();
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.create.blog-post', [
      'inProcessPost' => Post::where('action', 'in-process')->paginate(10),
    ]);
  }
}
