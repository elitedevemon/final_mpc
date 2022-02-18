<?php

namespace App\Http\Controllers\adminpanel\create;

use App\Http\Controllers\Controller;
use App\Models\frontend\Post;
use App\Models\PostDraft;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class BlogPost extends Controller
{
  public function index()
  {
    return view('superadmin.pages.create.blog-post');
  }
}
