<?php

namespace App\Http\Livewire\Backend\Exam;

use App\Models\Superadmin\Exam\ExamTopic;
use Livewire\Component;

class ResultNotPublished extends Component
{
  # public variables
  protected $queryString = ['resultId'];
  public $resultId;

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.exam.result-not-published', [
      'topic' => ExamTopic::find($this->resultId),
    ]);
  }
}
