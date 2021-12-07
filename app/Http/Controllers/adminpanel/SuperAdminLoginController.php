<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminLoginController extends Controller
{
    public function index()
    {
        return view('superadmin.auth.login');
    }
}
