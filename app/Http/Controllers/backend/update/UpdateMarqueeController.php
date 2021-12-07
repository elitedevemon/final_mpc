<?php

namespace App\Http\Controllers\backend\update;

use App\Http\Controllers\Controller;
use App\Models\frontend\Marquee;
use Illuminate\Http\Request;

class UpdateMarqueeController extends Controller
{
  public function index()
  {
    $marquee = Marquee::first();
    return view('backend.pages.change-marquee', compact('marquee'));
  }
  public function update(Request $request)
  {
    Marquee::first()->update([
      'text' => $request->text,
    ]);
    return back();
  }
}
