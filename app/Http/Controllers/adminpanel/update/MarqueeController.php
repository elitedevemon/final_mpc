<?php

namespace App\Http\Controllers\adminpanel\update;

use App\Http\Controllers\Controller;
use App\Models\frontend\Marquee;
use Illuminate\Http\Request;

class MarqueeController extends Controller
{
  public function index()
  {
    return view('superadmin.pages.update.marquee');
  }
  /**
   * Update function
   */
  public function update(Request $request)
  {
    $edited_text = Marquee::first();
    $edited_text->text = $request->edited_text;
    $edited_text->save();
    return back()->with('success', 'Marquee Text has been updated successfuly');
  }
}
