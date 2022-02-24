<?php

namespace App\Http\Livewire\Backend\Teacher;

use App\Models\Backend\Exam\ExamResult;
use App\Models\frontend\Post;
use App\Models\PostDraft;
use App\Models\Superadmin\Exam\ExamQuestion;
use App\Models\YtVideos;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
  # pagination
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  # query string
  protected $queryString = ['post', 'videos'=>['except'=>''], ];
  public $post, $videos = '';

  /**
   * Mount function
   */
  public function mount()
  {
    $this->post = 'published';
    $this->videos = 'published';
  }

  /**
   * show selected post function
   */
  public function showPost($postLabelName)
  {
    $this->post = $postLabelName;
  }

  /**
   * show selected videos function
   */
  public function showVideo($videoLabelName)
  {
    $this->videos = $videoLabelName;
  }

  /**
   * show drafted video delete modal
   * @param postId
   * * public variable $postInfo
   * ? public function showDraftDeleteModal
   * ? public function deleteDraftedPost
   */
  public $postInfo;
  # show modal
  public function showDraftDeleteModal($postId)
  {
    $this->postInfo = PostDraft::find($postId);
    $this->dispatchBrowserEvent('showDeleteDraftModal');
  }
  # delete draft
  public function deleteDraftedPost($postId)
  {
    $post = PostDraft::find($postId);
    $post->delete();
    $this->dispatchBrowserEvent('closeModal');
    return redirect()->route('teacher.home', app()->getLocale());
  }

  /**
   * Delete inprocess post funtion
   * @param postId
   * * public variable $inprocessPostInfo
   * ? public function deleteInprocessPostModal
   * ? public function deleteInprocessPost
   */
  public $inprocessPostInfo;
  # show modal for confirming delete inprocess post
  public function deleteInprocessPostModal($postId)
  {
    $this->inprocessPostInfo = Post::find($postId);
    $this->dispatchBrowserEvent('showDeleteInprocessPostModal');
  }
  # delete inprocess post
  public function deleteInprocessPost($postId)
  {
    $post = Post::find($postId);
    $post->delete();
    $this->dispatchBrowserEvent('closeDeleteInprocessPostModal');
    return redirect()->route('teacher.home', app()->getLocale());
  }

  /**
   * Rejected post modal function
   * @param postid
   * * public variable $postInfo
   * ? public function rejectedPostDeleteModal
   * ? public function deleteRejectedPost
   */
  # show rejected blog post delete confirmation popup
  public function rejectedPostDeleteModal($postId)
  {
    $this->postInfo = Post::find($postId);
    $this->dispatchBrowserEvent('showRejectedPostDeleteModal');
  }
  # delete rejected post
  public function deleteRejectedPost($postId)
  {
    Post::find($postId)->delete();
    $this->dispatchBrowserEvent('closeRejectedPostModal');
  }

  /**
   * Delete published post
   * @param postId
   * * public variable postInfo
   * ? function deletePublishedPostModal
   * ? function deletePublishedPost
   */
  # show published post delete confirmation modal
  public function deletePublishedPostModal($postId)
  {
    $this->postInfo = Post::find($postId);
    $this->dispatchBrowserEvent('showPublishedPostModal');
  }

  # delete published post
  public function deletePublishedPost($postId)
  {
    Post::find($postId)->delete();
    $this->dispatchBrowserEvent('closeModal');
  }

  /**
   * Delete video modal
   * @param videoId
   * * public variable videoInfo
   * ? function deleteVideoModal
   * ? function deleteSelectedVideo
   */
  public $videoInfo;
  # show delete video confirmation modal
  public function deleteVideoModal($videoId)
  {
    $this->videoInfo = YtVideos::find($videoId);
    $this->dispatchBrowserEvent('showConfirmationDeleteVideoModal');
  }

  # delete selected video
  public function deleteSelectedVideo($videoId)
  {
    YtVideos::find($videoId)->delete();
    $this->dispatchBrowserEvent('closeModal');
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.teacher.dashboard', [
      'givenExam' => ExamResult::where('username', Auth::user()->username)->count(),
      'totalNumber'=>ExamQuestion::all()->count(),
      'getNumber'=>ExamResult::where('username', Auth::user()->username)->sum('result'),
      //**? videos */
      #count of total published videos
      'totalVideos' => YtVideos::where('permission', 'publish')->where('username', Auth::user()->username)->count(),
      # published videos
      'publishedVideos' => YtVideos::where('permission', 'publish')->where('username', Auth::user()->username)->paginate(10, ['*'], 'publishedVideosPage'),
      # inprocess videos
      'inProcessVideos' => YtVideos::where('username', Auth::user()->username)->where('permission', 'in-process')->paginate(10, ['*'], 'inprocessVideosPage'),
      # rejected videos
      'rejectedVideos' => YtVideos::where('username', Auth::user()->username)->where('permission', 'reject')->paginate(10, ['*'], 'rejectedVideosPage'),
      //**? Post */
      # count of total published posts
      'totalPosts'=>Post::where('username', Auth::user()->username)->where('action', 'publish')->count(),
      # published posts
      'publishedPosts'=>Post::where('username', Auth::user()->username)->orderBy('id', 'DESC')->where('action', 'publish')->paginate(10, ['*'], 'publishedPostPage'),
      # inprocess post
      'inProcessPosts'=>Post::where('username', Auth::user()->username)->orderBy('id', 'DESC')->where('action', 'in-process')->paginate(10, ['*'], 'inprocessPostPage'),
      # rejected post
      'rejectedPosts'=>Post::where('username', Auth::user()->username)->orderBy('id', 'DESC')->where('action', 'reject')->paginate(10, ['*'], 'rejectedPostPage'),
      # drafted post
      'draftedPosts'=>PostDraft::where('username', Auth::user()->username)->orderBy('id', 'DESC')->paginate(10, ['*'], 'draftedPostPage'),
      # all posts
      'allPosts'=>Post::where('username', Auth::user()->username)->orderBy('id', 'DESC')->paginate(10),
    ]);
  }
}
