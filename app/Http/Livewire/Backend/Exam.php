<?php

namespace App\Http\Livewire\Backend;

use App\Models\Superadmin\Exam\ExamTopic;
use Livewire\Component;

class Exam extends Component
{
  # query string variable
  protected $queryString = ['examTopicId'];
  public $examTopicId;

  # listeners
  protected $listeners = [
    'queryId'
  ];

  /**
   * Listeners function
   */
  # queryId listener function
  public function queryId($value)
  {
    $this->examTopicId = $value;
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.exam');
  }
}
