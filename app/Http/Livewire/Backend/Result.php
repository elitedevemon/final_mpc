<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\Exam\ExamResult;
use App\Models\Superadmin\Exam\ExamTopic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Result extends Component
{
  # query string variable
  protected $queryString = ['resultId'];
  public $resultId;
  /**
   * view result function
   */
  public function viewResult($resultId)
  {
    $resultPublished = ExamResult::where('id', $resultId)->first();
    if ($resultPublished->getTopic->publish_status == true) {
      return $this->resultId = $resultId;
    }else{
      return $this->addError('notPublished', "This exam result isn't published yet.");
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.result', [
      'allResult' => ExamResult::where('username', Auth::user()->username)->get(),
    ]);
  }
}
