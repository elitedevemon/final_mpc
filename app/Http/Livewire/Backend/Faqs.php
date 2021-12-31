<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\Faqs as BackendFaqs;
use App\Models\Backend\FaqsLike;
use App\Models\Backend\FaqsNotification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Faqs extends Component
{
  use WithPagination;
  #public variables
  public $question, $faq_id;
  #variable with value
  public $pagination_page = 15;

  #input filter
  protected $rules=[
    'question' => 'required|min:10'
  ];

  /**
   * Reset function
   */
  public function erase()
  {
    $this->reset('question');
  }

  /**
   * Post Question function
   */
  public function PostQuestion()
  {
    $this->validate();
    $faqs = new BackendFaqs();
    $faqs->username = Auth::user()->username;
    $faqs->question = $this->question;
    $faqs->save();
    session()->flash('question_posted', 'Your question has been submitted successfuly');
    $this->erase();
    $this->faq_id = $faqs->id;
    $this->SendFaqsNotification();
  }

  /**
   * Send notification
   */
  public function SendFaqsNotification()
  {
    $users = User::all();
    foreach ($users as $user ) {
      $notification = new FaqsNotification();
      $notification->questioner = Auth::user()->username;
      $notification->notification_receiver = $user->username;
      $notification->question_id = $this->faq_id;
      $notification->save();
    }
  }

  /**
   * Load more function
   */
  public function LoadMore()
  {
    $this->pagination_page += 10;
  }

  /**
   * Forum like function
   */
  public function like($faq_id)
  {
    $like = new FaqsLike();
    $checkExist = FaqsLike::where('username', Auth::user()->username)->where('faq_id', $faq_id)->first();
    if ($checkExist) {
      if ($checkExist->action == 'dislike') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->faq_id = $faq_id;
        $like->action = 'like';
        $like->save();
      }elseif ($checkExist->action == 'like') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->faq_id = $faq_id;
      $like->action = 'like';
      $like->save();
    }
  }

  /**
   * Forum dislike function
   */
  public function dislike($faq_id)
  {
    $like = new FaqsLike();
    $checkExist = FaqsLike::where('username', Auth::user()->username)->where('faq_id', $faq_id)->first();
    if ($checkExist) {
      if ($checkExist->action == 'like') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->faq_id = $faq_id;
        $like->action = 'dislike';
        $like->save();
      }elseif ($checkExist->action == 'dislike') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->faq_id = $faq_id;
      $like->action = 'dislike';
      $like->save();
    }
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.faqs', [
      'all_questions' => BackendFaqs::orderBy('id', 'DESC')->paginate($this->pagination_page)
    ]);
  }
}
