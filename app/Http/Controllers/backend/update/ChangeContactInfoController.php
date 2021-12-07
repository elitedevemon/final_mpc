<?php

namespace App\Http\Controllers\backend\update;

use App\Http\Controllers\Controller;
use App\Models\frontend\Contact;
use Illuminate\Http\Request;

class ChangeContactInfoController extends Controller
{
  public function index()
  {
    $contact_info = Contact::first();
    return view('backend.pages.change-contact-info', compact('contact_info'));
  }
  public function update(Request $request)
  {
    Contact::first()->update([
      'email' => $request->email,
      'phone' => $request->phone,
      'address' => $request->address
    ]);
    return back();
  }
}
