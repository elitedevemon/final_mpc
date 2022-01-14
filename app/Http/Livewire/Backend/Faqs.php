<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\FaqImages;
use App\Models\Backend\Faqs as BackendFaqs;
use App\Models\Backend\FaqsLike;
use App\Models\Backend\FaqsNotification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Faqs extends Component
{
  use WithPagination, WithFileUploads;
  #public variables
  public $question, $faq_id, $faq_image;
  #variable with value
  public $pagination_page = 7;

  #input filter
  protected $rules=[
    'question' => 'required|min:10'
  ];

  /**
   * Mount function
   */
  public function mount()
  {
    
  }

  /**
   * Check Images >3
   */
  public function moreThanThree()
  {
    
  }

  /**
   * Reset function
   */
  public function erase()
  {
    $this->reset('question');
    $this->reset('faq_image');
  }

  /**
   * Post Question function
   */
  public function PostQuestion()
  {
    $this->validate();
    if ($this->faq_image) {
      if (count($this->faq_image)>3) {
        $this->addError('faq_image_more', "More than 3 images isn't acceptable");
        return;
      }
    }
    $faqs = new BackendFaqs();
    $faqs->username = Auth::user()->username;
    $faqs->question = $this->question;
    $faqs->save();
    //save the images
    if ($this->faq_image) {
      foreach ($this->faq_image as $image ) {
        $upload = Storage::disk('google')->put('1bDEUzAcRnYTZuQAoYnWt-HJDLBRWDfah', $image);
        $url = Storage::disk('google')->url($upload);
        $faq_image = new FaqImages();
        $faq_image->faq_id = $faqs->id;
        $faq_image->image_url = $url;
        $faq_image->save();
      }
    }
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
    $users = User::where('id', '!=', Auth::user()->id)->get();
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
    $this->pagination_page += 5;
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
   * Cancel uploaded photo and clear them from storage
   */
  public function cancelPhoto()
  {
    $this->reset('faq_image');
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
