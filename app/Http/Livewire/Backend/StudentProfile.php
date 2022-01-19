<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\Faqs;
use App\Models\Backend\FaqsLike;
use App\Models\Backend\UserEducationalInfo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class StudentProfile extends Component
{
  use WithPagination, WithFileUploads;
  #public variables
  public $question, $faq_id, $faq_image;
  #variable with value
  public $pagination_page = 7;
  #public variables
  public $userEduDetails;

  /**
   * Mount function
   */
  public function mount()
  {
    $this->userEduDetails = UserEducationalInfo::where('username', Auth::user()->username)->first();
  }

  /**
   * Save educational informations
   */
  #public variables
  public $workPlace, $startWorking, $endWorking, $pastWork, $educationalInstitute, $startReading, $endReading, $graduateInstitute;

  public function saveEduInfo()
  {
    $userExist = UserEducationalInfo::where('username', Auth::user()->username)->first();
    if ($userExist) {
      $userExist->username = Auth::user()->username;
      $userExist->work_place = $this->workPlace;
      $userExist->start_working = $this->startWorking;
      $userExist->end_working = $this->endWorking;
      $userExist->past_work = $this->pastWork;
      $userExist->educational_institute = $this->educationalInstitute;
      $userExist->start_reading = $this->startReading;
      $userExist->end_reading = $this->endReading;
      $userExist->graduate_institute = $this->graduateInstitute;
      $userExist->save();
    }else {
      $details = new UserEducationalInfo();
      $details->username = Auth::user()->username;
      $details->work_place = $this->workPlace;
      $details->start_working = $this->startWorking;
      $details->end_working = $this->endWorking;
      $details->past_work = $this->pastWork;
      $details->educational_institute = $this->educationalInstitute;
      $details->start_reading = $this->startReading;
      $details->end_reading = $this->endReading;
      $details->graduate_institute = $this->graduateInstitute;
      $details->save();
    }
    return redirect()->route('show.profile.page', app()->getLocale());
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
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.student-profile', [
      'all_questions' => Faqs::where('username', Auth::user()->username)->orderBy('id', 'DESC')->paginate($this->pagination_page)
    ]);
  }
}
