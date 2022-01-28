<?php

namespace App\Http\Livewire\Backend\Calendar;

use App\Models\Backend\TaskList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ImportantTask extends Component
{
  #public variables
  public $title, $date, $description, $test, $tab = 'important-task', $checkbox;
  protected $queryString = ['tab'];


  /**
   * Save new task
   */
  public function saveTask()
  {
    $this->validate([
      'title'=>'required|max:150',
      'date'=>'required',
      'description'=>'required|max:255'
    ]);
    $task = new TaskList();
    $task->username = Auth::user()->username;
    $task->title = $this->title;
    $task->date = $this->date;
    $task->description = $this->description;
    $task->save();
    $this->dispatchBrowserEvent('TaskListModal');
    $this->tab = 'important-task';
    //return redirect()->route('show.calendar.page', app()->getLocale());
  }

  /**
   * View task item details
   */
  
  # variables
  public $taskItemDetails;

  # function
  public function taskDetailsView($taskId)
  {
    $this->taskItemDetails = TaskList::where('id', $taskId)->first();
    $this->tab = 'important-task';
  }

  /**
   * Edit the selected task
   */
  # variables
  public $taskEditItemDetails, $TaskEditTitle, $TaskEditDescription, $TaskEditDate;

  # function
  public function taskEditView($taskId)
  {
    $this->taskEditItemDetails = TaskList::where('id', $taskId)->first();
    $this->TaskEditTitle = $this->taskEditItemDetails->title;
    $this->TaskEditDate = $this->taskEditItemDetails->date;
    $this->TaskEditDescription = $this->taskEditItemDetails->description;
    $this->tab = 'important-task';
  }

  # save function
  public function taskEditSave($taskId)
  {
    $task = TaskList::where('id', $taskId)->first();

    //Save edited task
    $task->title = $this->TaskEditTitle;
    $task->date = $this->TaskEditDate;
    $task->description = $this->TaskEditDescription;
    $task->update();
    $this->dispatchBrowserEvent('TaskEditModal');
    $this->tab = 'important-task';
  }

  /**
   * Task item delete function
   */
  public function TaskItemDelete($taskId)
  {
    TaskList::where('id', $taskId)->delete();
    $this->tab = 'important-task';
  }

  /**
   * Render function
   */
  # public varable
  public $paginationPage = 6;

  # Load more function
  public function loadMore()
  {
    $this->paginationPage += 5;
    $this->tab = 'important-task';
  }

  public function render()
  {
    $this->tab = 'important-task';
    return view('livewire.backend.calendar.important-task',[
      'taskList' => TaskList::where('username', Auth::user()->username)->orderBy('id', 'DESC')->paginate($this->paginationPage),
    ]);
  }
}
