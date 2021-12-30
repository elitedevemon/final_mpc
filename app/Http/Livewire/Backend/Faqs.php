<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\Faqs as BackendFaqs;
use App\Models\Backend\FaqsNotification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Faqs extends Component
{
  #public variables
  public $question, $faq_id;

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
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.faqs', [
      'all_questions' => BackendFaqs::orderBy('id', 'DESC')->paginate(10)
    ]);
  }
}
