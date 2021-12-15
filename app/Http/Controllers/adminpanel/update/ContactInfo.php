<?php

namespace App\Http\Controllers\adminpanel\update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactInfo extends Controller
{
  public function index()
  {
    return view('superadmin.pages.update.contact-info');
  }
}
