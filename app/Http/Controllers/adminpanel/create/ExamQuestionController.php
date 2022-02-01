<?php

namespace App\Http\Controllers\adminpanel\create;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamQuestionController extends Controller
{
  public function examQuestion()
  {
    return view('superadmin.pages.create.exam-question');
  }
}
