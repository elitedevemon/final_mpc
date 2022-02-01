<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\Exam\ExamResult;
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
    $this->resultId = $resultId;
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
