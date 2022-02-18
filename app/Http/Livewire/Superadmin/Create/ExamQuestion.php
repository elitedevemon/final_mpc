<?php

namespace App\Http\Livewire\Superadmin\Create;

use App\Models\Superadmin\Exam\ExamTopic;
use Livewire\Component;

class ExamQuestion extends Component
{
  /**
   * Query string method
   */
  # variables
  protected $queryString = ['topicId'];
  public $topicId;

  # function
  public function questionView($topicId)
  {
    $this->topicId = $topicId;
  }

  /**
   * Edit selected topic
   */
  # variables
  public $editedName, $editedDate, $editedTime, $editedTopicId, $editedExamPublishDate, $editedExamPublishTime;

  # function
  public function editTopicShow($topicId)
  {
    $editableTopic = ExamTopic::where('id', $topicId)->first();
    $this->editedName = $editableTopic->name;
    $this->editedDate = $editableTopic->date;
    $this->editedTime = $editableTopic->time;
    $this->editedTopicId = $editableTopic->id;
    $this->editedExamPublishDate = date('Y-m-d', strtotime($editableTopic->publish_date));
    $this->editedExamPublishTime = date('h:i a', strtotime($editableTopic->publish_date));
    $this->dispatchBrowserEvent('editTopics');
  }
  # function
  public function editedTopicSave($topicId)
  {
    $this->validate([
      'editedName' => 'required',
      'editedDate' => 'required',
      'editedTime' => 'required',
      'editedExamPublishDate' => 'required',
      'editedExamPublishTime' => 'required'
    ]);
    $editedTopic = ExamTopic::find($topicId);
    $editedTopic->name = $this->editedName;
    $editedTopic->date = $this->editedDate;
    $editedTopic->time = $this->editedTime;
    $editedTopic->publish_date = $this->editedExamPublishDate.' '.$this->editedExamPublishTime;
    $editedTopic->update();
    $this->dispatchBrowserEvent('editedTopics');
  }

  /**
   * publish the selected topic
   */
  # variables

  # function
  public function publishTopic($topicId)
  {
    $topic = ExamTopic::find($topicId);
    if ($topic->status == true) {
      $topic->status = false;
      $topic->update();
    }else{
      $topic->status = true;
      $topic->update();
    }
  }

  /**
   * publish the exam result
   */
  public function publishResult($topicId)
  {
    $topic = ExamTopic::find($topicId);
    if ($topic->publish_status == true) {
      $topic->publish_status = false;
      $topic->update();
    }else{
      $topic->publish_status = true;
      $topic->update();
    }
  }

  /**
   * Delete selected topic
   */
  public function deleteSelectedTopic($topicId)
  {
    ExamTopic::where('id', $topicId)->delete();
  }

  /**
   * Save topics
   */
  # variables
  public $topicName, $examTime, $examDate, $examPublishDate, $examPublishTime;

  # function
  public function save()
  {
    # validate inputs
    $this->validate([
      'topicName' => 'required',
      'examTime' => 'required',
      'examDate' => 'required',
      'examPublishDate' => 'required'
    ]);

    $topic = new ExamTopic();
    $topic->name = $this->topicName;
    $topic->date = $this->examDate;
    $topic->time = $this->examTime;
    $topic->publish_date = $this->examPublishDate.' '.$this->examPublishTime;
    $topic->save();
    $this->reset('topicName', 'examTime', 'examDate', 'examPublishDate');
    $this->dispatchBrowserEvent('addTopics');
  }

  /**
   * Render function
   */
  # variables
  public $pagination_page = 10;

  # function
  public function render()
  {
    return view('livewire.superadmin.create.exam-question', [
      'topics' => ExamTopic::orderBy('id', 'DESC')->paginate($this->pagination_page),
    ]);
  }
}
