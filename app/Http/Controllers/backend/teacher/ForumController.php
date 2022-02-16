<?php

namespace App\Http\Controllers\backend\teacher;

use App\Http\Controllers\Controller;
use App\Models\frontend\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
  /**
   * Construct method for auth
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show all forum/blog which is uploaded through superadmin and other teachers
   *
   * @return void
   */
  public function index()
  {
    return view('backend.pages.teacher.forum');
  }

  /**
   * View selected post
   */
  public function viewPost($language, $slug)
  {
    $post = Post::where('slug', $slug)->first();
    return view('backend.pages.teacher.selected-forum', compact('post'));
  }
}
