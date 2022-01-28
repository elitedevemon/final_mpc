<?php

namespace App\Http\Livewire\Backend\Calendar;

use App\Models\Backend\TaskList;
use App\Models\Backend\TaskListTrash;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InprocessTask extends Component
{
  #public variables
  public $title, $date, $description, $test, $tab='in-process-task';
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
    $this->tab = 'in-process-task';
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
    $this->tab = 'in-process-task';
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
    $this->tab = 'in-process-task';
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
    $this->tab = 'in-process-task';
  }

  /**
   * Task item delete function
   */
  public function TaskItemDelete($taskId)
  {
    $taskList = TaskList::where('id', $taskId)->first();
    $trash = new TaskListTrash();
    $trash->username = $taskList->username;
    $trash->title = $taskList->title;
    $trash->date = $taskList->date;
    $trash->description = $taskList->description;
    $trash->save();
    $taskList->delete();
    $this->tab = 'in-process-task';
  }

  /**
   * Render function
   */
  # public varable
  public $paginationPage = 4, $searchTerm;

  # Load more function
  public function loadMore()
  {
    $this->paginationPage += 5;
    $this->tab = 'in-process-task';
  }
  public function render()
  {
    $this->tab = 'in-process-task';
    $today = date('Y-m-d');
    return view('livewire.backend.calendar.inprocess-task',[
      'taskList' => TaskList::where('username', Auth::user()->username)->where('date', $today)->orderBy('id', 'DESC')->paginate($this->paginationPage),
      'searchResult' => TaskList::where('username', Auth::user()->username)
                      ->where('date', $today)
                      ->where('title', 'like', "%$this->searchTerm%")
                      ->orWhere('description', 'like', "%$this->searchTerm%")
                      ->where('username', Auth::user()->username)
                      ->where('date', $today)
                      ->orWhere('date', 'like', "%$this->searchTerm%")
                      ->where('date', $today)
                      ->where('username', Auth::user()->username)
                      ->orderBy('id', 'DESC')
                      ->paginate($this->paginationPage),
    ]);
  }
}
