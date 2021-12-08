<?php

use App\Http\Controllers\adminpanel\SuperAdminLoginController;
use App\Http\Controllers\backend\CalendarController;
use App\Http\Controllers\backend\ChattingController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\EmailController;
use App\Http\Controllers\backend\FaqsController;
use App\Http\Controllers\backend\ForumController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\NotificationController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\ResultController;
use App\Http\Controllers\backend\SettingsController;
use App\Http\Controllers\LockScreenController;
use App\Http\Livewire\LockScreen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
  //Route::view('/custom/login', 'auth.custom-login')->name('custom.login');
  //Route::view('/custom/register', 'auth.custom-register')->name('custom.register');

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
   * Lock Screen routes
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
      Route::get('calendar-page', [CalendarController::class, 'index'])->name('show.calendar.page');
      /**
       * Email routes
       * 
       * prefix /home/email
       */
      Route::prefix('/email')->group(function () {
          Route::get('inbox', [EmailController::class, 'index'])->name('show.email.inbox');
      });
      /**
       * Result routes
       * 
       * prefix /home/result
       */
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
      });
      /**
       * Forum routes
       * 
       * prefix /home/blog
       */
      Route::prefix('/blog')->group(function () {
          Route::get('/', [ForumController::class, 'index'])->name('show.blog.post');
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
       * Login related routes
       */
      Route::get('login', [SuperAdminLoginController::class, 'index'])->name('superadmin.login');

      /**
       * Dashboard routes
       */
      Route::view('/', 'superadmin.pages.dashboard');
      Route::get('change-marquee-page', [UpdateMarqueeController::class, 'index'])->name('update.marquee.page');
      Route::get('change-contact-info-page', [ChangeContactInfoController::class, 'index'])->name('change.contact.info');
      /**
       * Update related routes
       * 
       * prefix /superadmin/update
       */
      Route::prefix('/update')->group(function () {
        Route::post('contact-info', [ChangeContactInfoController::class, 'update'])->name('update.contact.info');
        Route::post('marquee', [UpdateMarqueeController::class, 'update'])->name('update.marquee');
      });
  });
});