<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\Exam\ExamResult;
use App\Models\Superadmin\Exam\ExamQuestion;
use App\Models\Superadmin\Exam\ExamTopic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.dashboard', [
      'totalTopics'=>ExamTopic::all()->count(),
      'givenExam' => ExamResult::where('username', Auth::user()->username)->count(),
      'totalNumber'=>ExamQuestion::all()->count(),
      'getNumber'=>ExamResult::where('username', Auth::user()->username)->sum('result'),
      'recentExamResult'=>ExamResult::orderBy('id', 'DESC')->get(),
      'topResult'=>ExamResult::orderBy('result', 'DESC')->paginate(5),
      'allQuestion'=>ExamTopic::orderBy('id', 'DESC')->where('status', true)->get(),
    ]);
  }
}
