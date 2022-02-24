<?php

namespace App\Http\Livewire\Superadmin\Create;

use App\Models\frontend\Post;
use App\Models\Superadmin\Blog\RejectionMail;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPost extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  /**
   * Approve blog post
   * @param postId
   * * public variable $postId
   * * public function approvePostModal
   */
  public $postId;
  # show approve modal function
  public function approvePostModal($postId)
  {
    $this->postId = $postId;
    $this->dispatchBrowserEvent('showApproveBlogPostModal');
  }

  # approve post function
  public function approvePost($postId)
  {
    $post = Post::find($postId);
    $post->action = 'publish';
    $post->update();
    $this->dispatchBrowserEvent('hideModal');
  }

  /**
   * Show reject modal and assign value
   */
  public $postInfo;
  public function showRejectModal($postId)
  {
    $this->postInfo = Post::find($postId);
    $this->dispatchBrowserEvent('showRejectBlogPostModal');
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
    $this->sendRejectionMail($postId);
    $this->dispatchBrowserEvent('hideModal');
  }

  # send mail to teacher
  public function sendRejectionMail($postId)
  {
    $mail = new RejectionMail();
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
