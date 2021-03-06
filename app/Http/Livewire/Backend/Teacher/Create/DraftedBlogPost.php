<?php

namespace App\Http\Livewire\Backend\Teacher\Create;

use App\Models\PostDraft;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class DraftedBlogPost extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  protected $queryString = ['draftId'];
  public $draftId;

  /**
   * Edit drafted blog post
   */
  public function editDraftPost($draftId)
  {
    $this->draftId = $draftId;
    session()->flash('reloadPage', "Please reload the page to get the text editor");
  }

  /**
   * Delete drafted blog
   */
  public function deleteDraftPost($draftId)
  {
    PostDraft::where('id', $draftId)->delete();
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.teacher.create.drafted-blog-post', [
      'draftedPosts' => PostDraft::where('username', Auth::user()->username)->orderBy('id', 'DESC')->paginate(15),
    ]);
  }
}
