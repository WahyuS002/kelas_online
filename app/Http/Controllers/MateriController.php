<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        return view('pages.frontend.materi.detail');
    }

    public function show()
    {
        return view('pages.frontend.materi.show');
    }
}
