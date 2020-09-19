<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPengaturan extends Controller
{
    public function index()
    {
        return view('pages.pengaturan.index');
    }
}
