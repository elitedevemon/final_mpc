<?php

namespace App\Http\Livewire\Backend\Calendar;

use App\Models\Backend\TaskList;
use App\Models\Backend\TaskListTrash;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PendingTask extends Component
{
  #public variables
  public $title, $date, $description, $test, $tab="pending-task";
  protected $queryString = ['tab'];

  /**
   * Mount function
   */
  public function mount()
  {
    # delete task which is older than 2 months
    $afterTwoMonths = date('Y-m-d', strtotime('+2 month ago'));
    $taskList = TaskList::all();
    foreach ($taskList as $taskItem ) {
      if ($taskItem->date <= $afterTwoMonths) {
        $taskItem->delete();
      }
    }
  }


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
    $this->tab = 'pending-task';
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
    $this->tab = 'pending-task';
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
    $this->tab = 'pending-task';
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
    $this->tab = 'pending-task';
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
    $this->tab = 'pending-task';
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
    $this->tab = 'pending-task';
  }
  public function render()
  {
    $this->tab = 'pending-task';
    $today = date('Y-m-d');
    return view('livewire.backend.calendar.pending-task',[
      'taskList' => TaskList::where('username', Auth::user()->username)->where('date', '<', $today)->orderBy('id', 'DESC')->paginate($this->paginationPage),
      'searchResult' => TaskList::where('username', Auth::user()->username)
                      ->where('date', '<', $today)
                      ->where('title', 'like', "%$this->searchTerm%")
                      ->orWhere('description', 'like', "%$this->searchTerm%")
                      ->where('username', Auth::user()->username)
                      ->where('date', '<', $today)
                      ->orWhere('date', 'like', "%$this->searchTerm%")
                      ->where('date', '<', $today)
                      ->where('username', Auth::user()->username)
                      ->orderBy('id', 'DESC')
                      ->paginate($this->paginationPage),
    ]);
  }
}
