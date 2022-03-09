<?php

namespace App\Http\Livewire\Backend\Auth;

use Alaouy\Youtube\Facades\Youtube;
use App\Models\Backend\UserEducationalInfo;
use App\Models\ErrorList;
use App\Models\Settings;
use App\Models\TeacherDetails;
use App\Models\User;
use ErrorException;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
  use WithFileUploads;

  /**
   * Register as student function
   */
  # variables
  public $name, $username, $email, $number, $password, $reTypePassword, $getRole, $checkTerms;

  # function
  public function register()
  {
    $this->validate([
      'name' =>'required|min:6|max:20',
      'username' => 'required|regex:/^\S*$/u|unique:users,username',
      'email' =>'required|email|unique:users,email',
      'number' => 'required|unique:users,phone',
      'password' =>'required_with:reTypePassword|same:reTypePassword|min:6|max:15',
      'reTypePassword' =>'required',
      'getRole' =>'required',
      'checkTerms' => 'required',
    ]);
    if ($this->getRole == 'Student') {
      try {
        $user = new User();
        $user->name = $this->name;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->phone = $this->number;
        $user->refer_code = $this->email;
        $user->profile_lock_date = date('Y-m-d', strtotime('+1 month'));
        $user->password = Hash::make($this->password);
        $user->role = $this->getRole;
        $user->save();
        $this->educationalInfo($user->username);
        $this->settings($user->username);
        Auth::login($user);
        return redirect()->route('welcome', app()->getLocale());
      } catch (Exception $e) {
        $error = new ErrorList();
        $error->page_url = url()->current();
        $error->error_class = get_class($e);
        $error->error_message = $e->getMessage();
        $error->save();
        $this->addError('exception', 'Something went wrong. Please try again later.');
      }
    }else {
      $this->dispatchBrowserEvent('showTeacherRegistrationModal');
    }
  }

  /**
   * Register as teacher
   * ? function previewChannelThumbnail
   */
  public $channelLink, $selfie, $documentFront, $documentBack, $screenshotYoutubeStudio, $channelId, $channelDetails, $haveYoutubeChannel, $professionalDescription;
  # Preview channel thumbnail
  public function previewChannelThumbnail()
  {
    $this->validate([
      'channelLink' => 'required|url|bail'
    ]);
    $argument = parse_url($this->channelLink, PHP_URL_PATH);
    $explodeUrl = explode('/', $argument);

    if ($explodeUrl[1]=='channel') {
      $this->channelId = $explodeUrl[2];
    }else {
      $this->addError('channelLink', "You've entered wrong url. Please copy channel link and paste it. Ex- https://www.youtube.com/channel/UCQm70LwJPcNN7FeDKeXOHxw");
      return false;
    }
    try {
      $channelDetails = Youtube::getChannelById($this->channelId);
      $this->channelDetails = json_decode(json_encode($channelDetails), true);
    } catch (ErrorException $e) {
      $error = new ErrorList();
      $error->page_url = url()->current();
      $error->error_class = get_class($e);
      $error->error_message = $e->getMessage();
      $error->save();
      $this->addError('channelLink', "You've entered wrong url. Please copy channel link and paste it. Ex- https://www.youtube.com/channel/UCQm70LwJPcNN7FeDKeXOHxw");
    }
    
  }

  # Teacher registration
  public function teacherRegistration()
  {
    $this->validate([
      'selfie' => 'required',
      'documentFront' => 'required',
      'documentBack' => 'required',
      'professionalDescription' => 'required'
    ]);
    if ($this->haveYoutubeChannel) {
      $this->validate([
        'channelLink' => 'required|url',
        'screenshotYoutubeStudio' => 'required',
      ]);
    }
    //! Register as a teacher
    try {
      $user = new User();
      $user->name = $this->name;
      $user->username = $this->username;
      $user->email = $this->email;
      $user->phone = $this->number;
      $user->refer_code = $this->email;
      $user->profile_lock_date = date('Y-m-d', strtotime('+1 month'));
      $user->password = Hash::make($this->password);
      $user->role = $this->getRole;
      $user->save();
      $this->educationalInfo($user->username);
      $this->settings($user->username);

      // teacher details
      $this->saveImages();
      $this->addTeacherDetails($user);
      $this->reset('name', 'username', 'email', 'number', 'password', 'reTypePassword', 'getRole', 'checkTerms', 'channelLink', 'selfie', 'documentFront', 'documentBack', 'screenshotYoutubeStudio', 'channelId', 'channelDetails', 'haveYoutubeChannel', 'professionalDescription');
    $this->dispatchBrowserEvent('confirmTeacherRegistration');
    } catch (Exception $e) {
      $error = new ErrorList();
      $error->page_url = url()->current();
      $error->error_class = get_class($e);
      $error->error_message = $e->getMessage();
      $error->save();
      $this->addError('exception', 'Something went wrong. Please try again later.');
    }
    
  }

  # save image to google drive function
  public $selfieUrl, $youtubeStudioUrl, $frontDocumentUrl, $backDocumentUrl;
  public function saveImages()
  {
    ini_set('max_execution_time', 2000);
    try {
      //Selfie upload
      $slefieUpload = Storage::disk('google')->put('1P7uBtB4y_XEXhmoTW-3VeBy06qIYF-Dk', $this->selfie);
      $this->selfieUrl = Storage::disk('google')->url($slefieUpload);

      //Screenshot of Youtube Studio upload
      $youtubeStudioUpload = Storage::disk('google')->put('1D-hnntCJcaPCOuQxQ4ygRQgxmTdYfnrq', $this->screenshotYoutubeStudio);
      $this->youtubeStudioUrl = Storage::disk('google')->url($youtubeStudioUpload);

      //Front document upload
      $frontDocumentUpload = Storage::disk('google')->put('1xV2zVP_YbmLSGcV_JTCOnejOELKovA1t', $this->documentFront);
      $this->frontDocumentUrl = Storage::disk('google')->url($frontDocumentUpload);

      //Back Document upload
      $backDocumentUpload = Storage::disk('google')->put('1xV2zVP_YbmLSGcV_JTCOnejOELKovA1t', $this->documentBack);
      $this->backDocumentUrl = Storage::disk('google')->url($backDocumentUpload);
    } catch (Exception $e) {
      $error = new ErrorList();
      $error->page_url = url()->current();
      $error->error_class = get_class($e);
      $error->error_message = $e->getMessage();
      $error->save();
      $this->addError('exception', 'Something went wrong. Please try again later.');
    }
    
  }

  # teacher details
  public function addTeacherDetails($user)
  {
    try {
      $teacher = new TeacherDetails();
      $teacher->teacherName = $user->username;
      $teacher->channelCode = $this->channelId;
      $teacher->selfie = $this->selfieUrl;
      $teacher->studioScreenShot = $this->youtubeStudioUrl;
      $teacher->frontDocument = $this->frontDocumentUrl;
      $teacher->backDocument = $this->backDocumentUrl;
      $teacher->professionDetails = $this->professionalDescription;
      $teacher->save();
    } catch (Exception $e) {
      $error = new ErrorList();
      $error->page_url = url()->current();
      $error->error_class = get_class($e);
      $error->error_message = $e->getMessage();
      $error->save();
      $this->addError('exception', 'Something went wrong. Please try again later.');
    }
  }

  # add educational info class
  public function educationalInfo($username)
  {
    try {
      $educationalInfo = new UserEducationalInfo();
      $educationalInfo->username = $username;
      $educationalInfo->save();
    } catch (Exception $e) {
      $error = new ErrorList();
      $error->page_url = url()->current();
      $error->error_class = get_class($e);
      $error->error_message = $e->getMessage();
      $error->save();
      $this->addError('exception', 'Something went wrong. Please try again later.');
    }
  }

  # add setting info class
  public function settings($username)
  {
    try {
      $settings = new Settings();
      $settings->username = $username;
      $settings->save();
    } catch (Exception $e) {
      $error = new ErrorList();
      $error->page_url = url()->current();
      $error->error_class = get_class($e);
      $error->error_message = $e->getMessage();
      $error->save();
      $this->addError('exception', 'Something went wrong. Please try again later.');
    }
  }

  /**
   * Terms and condition modal show
   */
  public function termsAndConditions()
  {
    $this->dispatchBrowserEvent('showTermsAndConditionsModal');
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.auth.register')->layout('layouts.master');
  }
}
