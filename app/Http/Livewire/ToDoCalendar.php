<?php

namespace App\Http\Livewire;

use App\Models\Backend\TaskList;
use Illuminate\Support\Facades\Auth;
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
  
  public function render()
  {
    return view('livewire.to-do-calendar');
  }
}
