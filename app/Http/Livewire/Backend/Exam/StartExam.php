<?php

namespace App\Http\Livewire\Backend\Exam;

use App\Models\Backend\Exam\ExamAnswer;
use App\Models\Backend\Exam\ExamResult;
use App\Models\Superadmin\Exam\ExamQuestion;
use App\Models\Superadmin\Exam\ExamTopic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class StartExam extends Component
{
  # query string variable
  protected $queryString = ['examTopicId'];
  public $examTopicId, $getQuestionAnswer, $endExamTime;

  /**
   * Mount function
   */
  public function mount($examTopicId)
  {
    $this->examTopicId = $examTopicId;
    $topic = ExamTopic::findOrFail($this->examTopicId);
    $this->minutes = $topic->time;
    $this->endExamTime = Session::get('exitTime');
  }

  /**
   * Submit answer function
   */
  # submit answer function
  public function submitAnswer()
  {
    $this->validate([
      'getQuestionAnswer'=>'required'
    ]);
    foreach ($this->getQuestionAnswer as $questionId => $givenAnswer) {
      $examAnswer = new ExamAnswer();
      $examAnswer->username = Auth::user()->username;
      $examAnswer->topic_id = $this->examTopicId;
      $examAnswer->question_id = $questionId;
      $examAnswer->answer = $givenAnswer;
      $getCorrectAns = ExamQuestion::find($questionId);
      if ($getCorrectAns->correct_answer == $givenAnswer) {
        $examAnswer->is_correct = true;
      }else {
        $examAnswer->is_correct = false;
      }
      $examAnswer->save();
    }
    $this->updateResult();
    session()->forget('exitTime');
    return redirect()->route('show.exam.page', ['language'=>app()->getLocale(), 'examTopicId'=>'all']);
  }

  # update result function
  public function updateResult()
  {
    $result = ExamResult::where('username', Auth::user()->username)->where('topic_id', $this->examTopicId)->first();
    $totalResult = ExamAnswer::where('username', Auth::user()->username)->where('topic_id', $this->examTopicId)->sum('is_correct');
    $result->result = $totalResult;
    $result->save();
  }

  /**
   * Timer function
   */
  # variable
  public $minutes, $second = 2;
  public function examTimer()
  {
    $this->second--;
    if (date('Y-m-d H:i:s') == $this->endExamTime) {
      $this->submitAnswer();
      session()->forget('exitTime');
    }
    if ($this->second<10) {
      $this->second = "0$this->second";
    }
    if ($this->second == 0) {
      if ($this->minutes>0) {
        $this->minutes--;
        $this->second = 59;
      }else{
        $this->minutes = false;
        $this->second = false;
      }
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.exam.start-exam',[
      'topic' => ExamTopic::findOrFail($this->examTopicId),
      'questions' => ExamQuestion::where('topic_id', $this->examTopicId)->get(),
    ]);
  }
}
