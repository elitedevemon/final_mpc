<?php

namespace App\Http\Controllers\backend\teacher;

use App\Http\Controllers\Controller;

class CreateBlogPost extends Controller
{
  /**
   * Construct method for auth
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('backend.pages.teacher.create.blog-post');
  }

  /**
   * Drafted post view
   */
  public function drafted()
  {
    return view('backend.pages.teacher.create.drafted-blog-post');
  }
}
