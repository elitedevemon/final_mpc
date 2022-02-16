<?php

namespace App\Http\Controllers\backend\teacher;

use App\Http\Controllers\Controller;
use App\Models\Backend\Faqs;
use App\Models\Backend\FaqsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqsController extends Controller
{
  /**
   * Construct method for auth
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show all frequently asked questions
   *
   * @return void
   */
  public function index()
  {
    FaqsNotification::where('notification_receiver', Auth::user()->username)->delete();
    return view('backend.pages.teacher.faqs');
  }

  /**
   * View selected faq
   */
  public function viewFaq($language, $faq_id)
  {
    $faq = Faqs::where('id', $faq_id)->first();
    return view('backend.pages.teacher.selected-faq', compact('faq'));
  }
}
