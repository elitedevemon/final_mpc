<?php

namespace App\Http\Livewire\Backend\Exam;

use App\Models\Backend\Exam\ExamResult;
use Livewire\Component;

class ViewResult extends Component
{
  /**
   * mount function
   */
  # variables
  public $resultId;

  # function
  public function mount($resultId)
  {
    $this->resultId = $resultId;
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.exam.view-result', [
      'resultInfo' => ExamResult::find($this->resultId),
      'allQuestion' => ExamResult::find($this->resultId)->getQuestion,
    ]);
  }
}
