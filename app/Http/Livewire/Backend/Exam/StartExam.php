<?php

namespace App\Http\Livewire\Backend\Exam;

use App\Models\Backend\Exam\ExamAnswer;
use App\Models\Superadmin\Exam\ExamQuestion;
use App\Models\Superadmin\Exam\ExamTopic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StartExam extends Component
{
  # query string variable
  protected $queryString = ['examTopicId'];
  public $examTopicId, $getQuestionAnswer;

  /**
   * Mount function
   */
  public function mount($examTopicId)
  {
    $this->examTopicId = $examTopicId;
  }

  /**
   * Submit answer function
   */
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
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.exam.start-exam',[
      'topic' => ExamTopic::find($this->examTopicId),
      'questions' => ExamQuestion::where('topic_id', $this->examTopicId)->get(),
    ]);
  }
}
