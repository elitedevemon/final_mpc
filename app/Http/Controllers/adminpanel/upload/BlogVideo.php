<?php

namespace App\Http\Controllers\adminpanel\upload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogVideo extends Controller
{
  public function index()
  {
    return view('superadmin.pages.upload.blog-video');
  }
}
