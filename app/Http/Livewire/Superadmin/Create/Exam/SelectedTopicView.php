<?php

namespace App\Http\Livewire\Superadmin\Create\Exam;

use App\Models\Superadmin\Exam\ExamQuestion;
use App\Models\Superadmin\Exam\ExamTopic;
use Livewire\Component;

class SelectedTopicView extends Component
{
  # public variables
  public $selectedTopicId;

  /**
   * Query string method
   */
  # variables
  protected $queryString = ['topicId'];
  public $topicId;

  /**
   * Mount function
   */
  public function mount($selectedTopicId)
  {
    # fetch variable data
    $this->selectedTopicId = $selectedTopicId;

    # intiate query data
    $this->topicId = $this->selectedTopicId;
  }

  /**
   * Add question to the selected topics
   */
  # variable
  public $question, $correctAnswer, $firstAnswer, $secondAnswer, $thirdAnswer, $lastAnswer;

  # function
  public function addQuestion()
  {
    $this->validate([
      'question'=>'required',
      'correctAnswer'=>'required',
      'firstAnswer'=>'required',
      'secondAnswer'=>'required',
      'thirdAnswer'=>'required',
      'lastAnswer'=>'required',
    ]);
    $question = new ExamQuestion();
    $question->topic_id = $this->selectedTopicId;
    $question->question = $this->question;
    $question->first_answer = $this->firstAnswer;
    $question->second_answer = $this->secondAnswer;
    $question->third_answer = $this->thirdAnswer;
    $question->fourth_answer = $this->lastAnswer;
    $question->correct_answer = $this->correctAnswer;
    $question->save();
    $this->dispatchBrowserEvent('addQuestion');
  }

  /**
   * Render function
   */
  public function render()
  {
    $this->topicId = $this->selectedTopicId;
    return view('livewire.superadmin.create.exam.selected-topic-view', [
      'topicDetails' => ExamTopic::find($this->selectedTopicId),
      'allQuestion' => ExamQuestion::where('topic_id', $this->selectedTopicId)->get(),
    ]);
  }
}
