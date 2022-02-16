<?php

namespace App\Http\Livewire\Backend\Teacher;

use Livewire\Component;

class ToDoCalendar extends Component
{
  #public variables
  public $tab;
  protected $queryString = ['tab'];

  /**
   * Important task query string
   */
  public function importantTask($queryText)
  {
    $this->tab = $queryText;
  }
  
  /**
   * Render function
   */
  public function render()
  {
      return view('livewire.backend.teacher.to-do-calendar');
  }
}
