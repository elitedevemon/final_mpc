<?php

namespace App\Http\Livewire\Backend\Teacher;

use App\Models\Backend\Exam\ExamResult;
use App\Models\frontend\Post;
use App\Models\PostDraft;
use App\Models\Superadmin\Exam\ExamQuestion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';
  public function render()
  {
    return view('livewire.backend.teacher.dashboard', [
      'totalPosts'=>Post::where('action', 'publish')->count(),
      'givenExam' => ExamResult::where('username', Auth::user()->username)->count(),
      'totalNumber'=>ExamQuestion::all()->count(),
      'getNumber'=>ExamResult::where('username', Auth::user()->username)->sum('result'),
      'publishedPosts'=>Post::orderBy('id', 'DESC')->where('action', 'publish')->paginate(10, ['*'], 'publishedPostPage'),
      'inProcessPosts'=>Post::orderBy('id', 'DESC')->where('action', 'in-process')->paginate(10, ['*'], 'inprocessPostPage'),
      'rejectedPosts'=>Post::orderBy('id', 'DESC')->where('action', 'reject')->paginate(10, ['*'], 'rejectedPostPage'),
      'draftedPosts'=>PostDraft::orderBy('id', 'DESC')->paginate(10, ['*'], 'draftedPostPage'),
      'allPosts'=>Post::orderBy('id', 'DESC')->paginate(10),
    ]);
  }
}
