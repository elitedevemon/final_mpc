<?php

namespace App\Http\Livewire\Superadmin\Upload;

use App\Models\YtVideos;
use Livewire\Component;

class BlogVideo extends Component
{
  /**
   * public function
   */
  public $embed_code, $yt_title;

  #filter input
  protected $rules = [
    'embed_code' => 'required|min:8|max:15|unique:yt_videos',
    'yt_title' => 'required|min:10|max:500'
  ];

  /**
   * Preview function
   */
  public function preview()
  {
    #preview function
  }

  /**
   * Upload videos function
   */
  public function upload()
  {
    $this->validate();
    $upload = new YtVideos();
    $upload->embed_code = $this->embed_code;
    $upload->title = $this->yt_title;
    $upload->save();
    session()->flash('success', 'Blog video has been uploaded successfuly');
  }

  /**
   * render function
   */
  public function render()
  {
    return view('livewire.superadmin.upload.blog-video');
  }
}
