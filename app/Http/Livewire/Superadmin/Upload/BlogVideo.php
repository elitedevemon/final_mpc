<?php

namespace App\Http\Livewire\Superadmin\Upload;

use App\Models\Superadmin\Blog\RejectionMail;
use App\Models\YtVideos;
use Livewire\Component;
use Livewire\WithPagination;

class BlogVideo extends Component
{
  # pagination
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  /**
   * Check video content function
   * @param videoId
   * * public variables
   */
  public $videoToCheck;
  public function checkVideo($videoId)
  {
    $this->videoToCheck = YtVideos::find($videoId);
    $this->dispatchBrowserEvent('showCheckVideoModal');
  }

  /**
   * approve video function
   * @param videoId
   * * public variable $videoId
   * * public function approveVideoModal
   */
  public function approveVideoModal($videoId)
  {
    $this->videoId = $videoId;
    $this->dispatchBrowserEvent('showApproveModal');
  }

  public function approveVideo($videoId)
  {
    $video = YtVideos::find($videoId);
    $video->permission = 'publish';
    $video->save();
    session()->flash('videoApproved', 'The video has been approved');
    $this->dispatchBrowserEvent('hideApproveModal');
  }

  /**
   * show reject video modal
   * @param videoId
   */
  public $videoId;
  public function rejectVideoModal($videoId)
  {
    $this->videoId = $videoId;
    $this->dispatchBrowserEvent('rejectVideoModalShow');
  }

  /**
   * Reject video using id
   * @param videoId
   */
  public function rejectVideo($videoId)
  {
    $this->sendVideoRejectionMail($videoId);
    $video = YtVideos::find($videoId);
    $video->permission = 'reject';
    $video->save();
    $this->dispatchBrowserEvent('hideRejectionModal');
  }
  # send rejection email
  public $rejectMessage;
  public function sendVideoRejectionMail($videoId)
  {
    $this->validate([
      'rejectMessage' => 'required'
    ]);
    $mail = new RejectionMail();
    $mail->video_id = $videoId;
    $mail->message = $this->rejectMessage;
    $mail->save();
  }

  /**
   * render function
   */
  public function render()
  {
    return view('livewire.superadmin.upload.blog-video', [
      'inprocessVideos'=>YtVideos::where('permission', 'in-process')->paginate(10),
    ]);
  }
}
