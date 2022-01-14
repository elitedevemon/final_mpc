<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
  public function index()
  {
    // $allFiles = Storage::disk('google')->allFiles();
    // dump($allFiles);
    // $file = $allFiles[0];
    // $url = Storage::disk('google')->url($file);
    // $selected_file = Storage::disk('google')->url('1nZyg0QpLoXo6rXsNBQBdoMpctJidMsVK/image.jpg');
    // dump($selected_file);
    return view('welcome');
  }

  public function upload(Request $request)
  {
    $file = Storage::disk('google')->put('1nZyg0QpLoXo6rXsNBQBdoMpctJidMsVK', $request->image);
    $url = Storage::disk('google')->url($file);
    return back()->with('url', $url);
  }
}
