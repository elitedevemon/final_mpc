<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
  public function index()
  {
    return view('backend.pages.faqs');
  }

  /**
   * View selected faq
   */
  public function viewFaq($language, $faq_id)
  {
    $faq = Faqs::where('id', $faq_id)->first();
    return view('backend.pages.selected-faq', compact('faq'));
  }
}
