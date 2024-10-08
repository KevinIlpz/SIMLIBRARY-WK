<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogAdminController extends Controller
{
    public function index()
    {
        return view('admin.blog');
    }
}
