<?php

namespace App\Http\Livewire\Backend\Exam;

use App\Models\Backend\Exam\ExamResult;
use App\Models\Superadmin\Exam\ExamTopic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
    $this->examTopicId = $questionId;
    # save a default value into database
    $result = new ExamResult();
    $result->username = Auth::user()->username;
    $result->topic_id = $questionId;
    $result->save();
    
    # create session for exit exam
    $getTime = ExamTopic::find($questionId);
    $now = date('Y-m-d H:i:s');
    $endTime =  date('Y-m-d H:i:s', strtotime('+'.$getTime->time.'minutes', strtotime($now)));
    Session::put('exitTime', $endTime);
    $this->emit('queryId', $this->examTopicId);
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
