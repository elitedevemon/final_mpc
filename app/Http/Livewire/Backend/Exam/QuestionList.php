<?php

namespace App\Http\Livewire\Backend\Exam;

use App\Models\Backend\Exam\ExamResult;
use App\Models\Superadmin\Exam\ExamTopic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class QuestionList extends Component
{
  # query string variable
  protected $queryString = ['examTopicId'];
  public $examTopicId = 'all';

  /**
   * Start Exam function
   */
  public function startExam($questionId)
  {
    if (ExamResult::where('username', Auth::user()->username)->where('topic_id', $questionId)->first()) {
      return false;
    }
    # save a default value into database
    $result = new ExamResult();
    $result->username = Auth::user()->username;
    $result->topic_id = $questionId;
    $result->save();
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.exam.question-list',[
      'allQuestion' => ExamTopic::orderBy('id', 'DESC')->where('status', true)->get(),
    ]);
  }
}
