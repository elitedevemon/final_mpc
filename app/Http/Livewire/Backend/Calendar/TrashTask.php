<?php

namespace App\Http\Livewire\Backend\Calendar;

use App\Models\Backend\TaskList;
use App\Models\Backend\TaskListTrash;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TrashTask extends Component
{
  #public variables
  public $title, $date, $description, $test, $tab='trash-task';
  protected $queryString = ['tab'];

  /**
   * Mount function
   */
  public function mount()
  {
    # Delete 2 months older trash tasks
    $afterTwoMonths = date('Y-m-d', strtotime('+2 month ago'));
    $taskListTrash = TaskListTrash::all();
    foreach ($taskListTrash as $taskItem ) {
      if (date('Y-m-d', strtotime($taskItem->created_at)) <= $afterTwoMonths) {
        $taskItem->delete();
      }
    }
  }

  /**
   * Task item delete function
   */
  public function TaskItemDelete($taskId)
  {
    TaskListTrash::where('id', $taskId)->delete();
    $this->tab = 'trash-task';
  }

  /**
   * Task item restore to the all task tab
   */
  public function TaskItemRestore($taskId)
  {
    $trash = TaskListTrash::where('id', $taskId)->first();
    $taskList = new TaskList();
    $taskList->username = $trash->username;
    $taskList->title = $trash->title;
    $taskList->date = $trash->date;
    $taskList->description = $trash->description;
    $taskList->save();
    $trash->delete();
    $this->tab = 'trash-task';
  }

  /**
   * Delete all trash tasks
   */
  public function deleteAllTrash()
  {
    TaskListTrash::truncate();
    $this->tab = 'trash-task';
  }

  /**
   * Render function
   */
  # public varable
  public $paginationPage = 5, $searchTerm;

  # Load more function
  public function loadMore()
  {
    $this->paginationPage += 5;
    $this->tab = 'trash-task';
  }

  public function render()
  {
    $this->tab = 'trash-task';
    return view('livewire.backend.calendar.trash-task',[
      'trashTaskList' => TaskListTrash::where('username', Auth::user()->username)->orderBy('id', 'DESC')->paginate($this->paginationPage),
      'searchResult' => TaskListTrash::where('title', 'like', "%$this->searchTerm%")
                      ->where('username', Auth::user()->username)
                      ->orWhere('description', 'like', "%$this->searchTerm%")
                      ->where('username', Auth::user()->username)
                      ->orWhere('date', 'like', "%$this->searchTerm%")
                      ->where('username', Auth::user()->username)
                      ->orderBy('id', 'DESC')
                      ->paginate($this->paginationPage),
    ]);
  }
}
