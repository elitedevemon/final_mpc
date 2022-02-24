<?php

namespace App\Http\Livewire\Backend\Teacher\Create;

use Alaouy\Youtube\Facades\Youtube;
use App\Models\YtVideos;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BlogVideo extends Component
{
  # public variables
  public $youtubeUrl, $embedCode, $videoDetails;

  /**
   * Show preview funtion
   */
  public function showPreview()
  {
    $argument = parse_url($this->youtubeUrl, PHP_URL_QUERY);
    parse_str($argument, $embedCode);
    if ($embedCode) {
      $this->embedCode = $embedCode['v'];
    }else{
      return false;
    }
    $videoDetails = Youtube::getVideoInfo($this->embedCode);
    $this->videoDetails = json_decode(json_encode($videoDetails), true);
    //$channel = Youtube::getChannelById($this->videoDetails['snippet']['channelId']);
    // dd($this->videoDetails);
  }

  /**
   * Save blog video
   */
  public function saveVideo()
  {
    $checkExist = YtVideos::where('embed_code', $this->videoDetails['id'])->first();

    if ($checkExist) {
      session()->flash('alreadySaved', 'This video is already saved');
    } else {
      $youtubeVideo = new YtVideos();
      $youtubeVideo->username = Auth::user()->username;
      $youtubeVideo->title = $this->videoDetails['snippet']['title'];
      $youtubeVideo->embed_code = $this->videoDetails['id'];
      $youtubeVideo->save();
      session()->flash('videoSaved', "Your video has been saved successfuly, it'll be published in short");
      $this->reset('embedCode', 'youtubeUrl', 'videoDetails');
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.teacher.create.blog-video');
  }
}
