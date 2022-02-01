<?php

use App\Http\Controllers\adminpanel\create\BlogPost;
use App\Http\Controllers\adminpanel\create\ExamQuestionController;
use App\Http\Controllers\adminpanel\LockScreenController as AdminpanelLockScreenController;
use App\Http\Controllers\adminpanel\SuperAdminLoginController;
use App\Http\Controllers\adminpanel\update\ContactInfo;
use App\Http\Controllers\adminpanel\update\MarqueeController;
use App\Http\Controllers\adminpanel\upload\BlogVideo;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\backend\CalendarController;
use App\Http\Controllers\backend\ChattingController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\EmailController;
use App\Http\Controllers\backend\ExamController;
use App\Http\Controllers\backend\FaqsController;
use App\Http\Controllers\backend\ForumController;
use App\Http\Controllers\backend\FriendRequestController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\NotificationController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\ResultController;
use App\Http\Controllers\backend\SettingsController;
use App\Http\Controllers\LockScreenController;
use App\Http\Controllers\Socialite\GetInfo\FacebookController;
use App\Http\Controllers\Socialite\GetInfo\GoogleController;
use App\Http\Controllers\Socialite\GetInfo\LinkedinController;
use App\Http\Controllers\TestController;
use App\Http\Livewire\LockScreen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Main menu URI
 */
Route::redirect('/', '/en');

Route::prefix('{language}')->group(function () {
  /**
   * View related URI
   */
  Route::view('/', 'livewire.frontend.welcome')->name('welcome');
  Route::view('blog', 'livewire.frontend.blog')->name('blog');
  Route::view('videos', 'livewire.frontend.videos')->name('videos');
  Route::view('about', 'frontend.pages.about')->name('about');
  Route::view('contact', 'frontend.pages.contact')->name('contact');
  Route::view('services', 'frontend.pages.services')->name('services');
  Route::view('community', 'frontend.pages.community')->name('community');
  Route::view('privacy-policy', 'frontend.pages.privacy_policy')->name('privacy.policy');
  Route::view('terms-of-use', 'frontend.pages.terms_of_use')->name('terms.of.use');

  /**
   * Override routes
   */
  Route::get('verify/email-address/{username}', [VerifyEmailController::class, 'index'])->name('verify.email.address');
  Route::prefix('password')->group(function () {
    Route::get('/forget/{username}', [ForgotPasswordController::class, 'index'])->name('show.forgot.password');
    Route::get('/reset/{username}', [ForgotPasswordController::class, 'forgot'])->name('show.reset.password');
  });

  /**
   * Adding Social info using socialite
   */
  # Get google related information
  // Route::get('/login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
  // Route::get('/login/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
  // # Get facebook related information
  // Route::get('/login/facebook', [FacebookController::class, 'redirectToFacebook'])->name('login.facebook');
  // Route::get('/login/facebook/callback', [FacebookController::class, 'handleFacebookCallback'])->name('facebook.callback');
  // # Get LinkedIn related information
  // Route::get('/login/linkedin', [LinkedinController::class, 'redirectToLinkedin'])->name('login.linkedin');
  // Route::get('/login/linkedin/callback', [LinkedinController::class, 'handleLinkedinCallback'])->name('facebook.callback');


  /**
   * Logout GET URI
   * 
   * Specific logout session expiration
   * get request route of logout form URL
   */
  Route::get('/logout', function () {
    return redirect()->route('welcome', app()->getLocale());
  });
  

  /**
  * Auth URI
  */
  
  Auth::routes();

  /**
   * Lock Screen routes for user
   * 
   * route /lock-screen
   */
  Route::get('/lock-screen', [LockScreenController::class, 'index'])->name('show.lock.screen')->middleware('auth');
  
  /**
   * All authenticated user's route
   * 
   * Middleware languagehandle and lockscreen
   */
  Route::middleware(['languagehandle', 'lockscreen'])->group(function () {
    /**
     * Home related routes
     * 
     * prefix /home
     */
    Route::prefix('/home')->group(function () {
      Route::get('/', [HomeController::class, 'index'])->name('home');
      Route::get('profile-page', [ProfileController::class, 'index'])->name('show.profile.page');
      Route::get('chatting-page', [ChattingController::class, 'index'])->name('show.chatting.page');

      Route::prefix('/calender-page')->group(function () {
        Route::get('/', [CalendarController::class, 'index'])->name('show.calendar.page');
      });
      /**
       * Email routes
       * 
       * prefix /home/email
       */
      Route::prefix('/email')->group(function () {
          Route::get('inbox', [EmailController::class, 'index'])->name('show.email.inbox');
      });
      /**
       * Exam & Result routes
       * 
       * prefix /home/result
       */
      Route::prefix('exam')->group(function(){
        Route::get('/', [ExamController::class, 'index'])->name('show.exam.page');
      });
      Route::prefix('result')->group(function () {
          Route::get('/', [ResultController::class, 'index'])->name('show.result.page');
      });
      /**
       * Contact routes
       * 
       * prefix /home/contact
       */
      Route::prefix('/contact')->group(function () {
          Route::get('/', [ContactController::class, 'index'])->name('show.contact-list.page');
          Route::get('/user/{username}', [ContactController::class, 'contactUserInfo'])->name('show.selected.profile');
      });
      /**
       * Friend request related routes
       * 
       * prefix /home/friend-request
       */
      Route::prefix('/friend-request')->group(function () {
        Route::get('/', [FriendRequestController::class, 'index'])->name('show.friend.request.page');
      });
      /**
       * Settings routes
       * 
       * prefix /home/settings
       */
      Route::prefix('settings')->group(function () {
          Route::get('/', [SettingsController::class, 'index'])->name('show.settings.page');
      });
      /**
       * Notifications routes
       * 
       * prefix /home/notifications
       */
      Route::prefix('notifications')->group(function () {
          Route::get('/', [NotificationController::class, 'index'])->name('show.notifications.page');
      });
      /**
       * FAQ routes
       * 
       * prefix /home/faqs
       */
      Route::prefix('faqs')->group(function () {
          Route::get('/', [FaqsController::class, 'index'])->name('show.faqs.page');
          Route::get('/{faq_id}', [FaqsController::class, 'viewFaq'])->name('view.selected.faq');
      });
      /**
       * Forum routes
       * 
       * prefix /home/blog
       */
      Route::prefix('/blog')->group(function () {
          Route::get('/', [ForumController::class, 'index'])->name('show.blog.post');
          Route::get('/{slug}', [ForumController::class, 'viewPost'])->name('view.selected.post');
      });
    });
  });
  
    /**
     * SuperAdmin routes
     * 
     * prefix /superadmin
     */
  Route::prefix('superadmin')->group(function () {
    
    /**
     * Lock screen routes for Superadmin
     * 
     * route /superadmin/lock-screen
     */
    Route::get('/lock-screen', [AdminpanelLockScreenController::class, 'index'])->name('show.superadmin.lock-screen.page');

    /**
     * Login related routes
     */
    Route::get('login', [SuperAdminLoginController::class, 'index'])->name('superadmin.login')->middleware('superadminauthenticated');

    /**
     * Dashboard routes
     */
    Route::middleware('superadminauthcheck', 'sulockscreen')->group(function(){

      Route::view('/', 'superadmin.pages.dashboard')->name('superadmin.dashboard');
      /**
       * Update related routes
       * 
       * prefix /superadmin/update
       */
      Route::prefix('/update')->group(function () {
        Route::get('contact-info', [ContactInfo::class, 'index'])->name('update.contact.info');
        Route::get('marquee', [MarqueeController::class, 'index'])->name('show.marquee.page');
        Route::post('marquee/save', [MarqueeController::class, 'update'])->name('update.marquee.text');
      });

      /**
       * Upload related routes
       */
      Route::prefix('upload')->group(function(){
        Route::get('blog-video', [BlogVideo::class, 'index'])->name('upload.blog-video');
      });

      /**
       * Create related routes
       */
      Route::prefix('create')->group(function(){
        Route::get('blog-post', [BlogPost::class, 'index'])->name('create.blog.post');
        Route::post('blog-post/save', [BlogPost::class, 'save'])->name('save.blog.post');
        Route::get('drafted', [BlogPost::class, 'drafted'])->name('show.drafted.post');
        Route::get('drafted/{slug}', [BlogPost::class, 'draftedView'])->name('show.selected.draft.post');
        Route::post('drafted/save/{slug}', [BlogPost::class, 'saveDraftPost'])->name('save.draft.post');
        Route::get('exam-question', [ExamQuestionController::class, 'examQuestion'])->name('show.exam.question');
      });
    });
  });
});
