<?php

use App\Http\Controllers\adminpanel\create\BlogPost;
use App\Http\Controllers\adminpanel\create\ExamQuestionController;
use App\Http\Controllers\adminpanel\EmailMarketingController;
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
use App\Http\Controllers\backend\teacher\CalendarController as TeacherCalendarController;
use App\Http\Controllers\backend\teacher\CreateBlogPost;
use App\Http\Controllers\backend\teacher\FaqsController as TeacherFaqsController;
use App\Http\Controllers\backend\teacher\ForumController as TeacherForumController;
use App\Http\Controllers\backend\teacher\HomeController as TeacherHomeController;
use App\Http\Controllers\backend\teacher\SettingsController as TeacherSettingsController;
use App\Http\Controllers\LockScreenController;
use App\Http\Controllers\Socialite\GetInfo\FacebookController;
use App\Http\Controllers\Socialite\GetInfo\GoogleController;
use App\Http\Controllers\Socialite\GetInfo\LinkedinController;
use App\Http\Controllers\TestController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Backend\Auth\Register;
use App\Http\Livewire\Frontend\Welcome;
use App\Http\Livewire\LockScreen;
use App\Http\Livewire\Test;
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
  Route::get('/', Welcome::class)->name('welcome');
  Route::view('blog', 'livewire.frontend.blog')->name('blog');
  Route::view('videos', 'livewire.frontend.videos')->name('videos');
  Route::view('about', 'frontend.pages.about')->name('about');
  Route::view('contact', 'frontend.pages.contact')->name('contact');
  Route::view('services', 'frontend.pages.services')->name('services');
  Route::view('community', 'frontend.pages.community')->name('community');
  Route::view('privacy-policy', 'frontend.pages.privacy_policy')->name('privacy.policy');
  Route::view('terms-of-use', 'frontend.pages.terms_of_use')->name('terms.of.use');
  Route::view('reset-password', 'auth.passwords.reset')->name('reset.forgotten.password');
  Route::get('test-input', Test::class);

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

  Route::get('login', Login::class)->name('login')->middleware('guest');
  Route::get('register', Register::class)->name('register')->middleware('guest');

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
    Route::prefix('/home')->middleware('checkStudent')->group(function () {
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
          Route::get('not-published', [ResultController::class, 'notPublished'])->name('show.not-published.page');
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

    /**
     * Teacher related routes
     */
    Route::prefix('teacher')->middleware('checkTeacher')->group(function () {
        # teacher home
        Route::get('/home', [TeacherHomeController::class, 'home'])->name('teacher.home');
        
        # create blog
        Route::get('blog-post', [CreateBlogPost::class, 'index'])->name('create.blog.post');
        Route::get('edit/blog-post', [CreateBlogPost::class, 'editPost'])->name('teacher.edit.blog-post');
        Route::get('drafted', [CreateBlogPost::class, 'drafted'])->name('show.drafted.post');
        Route::get('blog-video', [CreateBlogPost::class, 'blogVideo'])->name('show.create-blog-video.page');

        # settings route
        Route::prefix('settings')->group(function () {
            Route::get('/', [TeacherSettingsController::class, 'index'])->name('show.teacher.settings.page');
        });

        # calendar page routes
        Route::prefix('/calender-page')->group(function () {
          Route::get('/', [TeacherCalendarController::class, 'index'])->name('show.teacher.calendar.page');
        });

        # faq pages routes
        Route::prefix('faqs')->group(function () {
            Route::get('/', [TeacherFaqsController::class, 'index'])->name('show.teacher.faqs.page');
            Route::get('/{faq_id}', [TeacherFaqsController::class, 'viewFaq'])->name('view.teacher.selected.faq');
        });

        # forum pages routes
        Route::prefix('/blog')->group(function () {
          Route::get('/', [TeacherForumController::class, 'index'])->name('show.teacher.blog.post');
          Route::get('/{slug}', [TeacherForumController::class, 'viewPost'])->name('view.teacher.selected.post');
        });
    });

    /**
     * Coming soon page
     */
    Route::get('coming-soon', function () {
      return view('backend.pages.coming_soon');
    })->name('coming-soon');
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
        Route::get('exam-question', [ExamQuestionController::class, 'examQuestion'])->name('show.exam.question');
        Route::get('blog-post', [BlogPost::class, 'index'])->name('superadmin.blog.post');
      });

      /**
       * Email marketing route
       */
      Route::get('/email-marketing', [EmailMarketingController::class, 'index'])->name('show.email.marketing.page');
    });
  });
});
