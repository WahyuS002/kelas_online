<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kelas = Kelas::where('status', 'publish')->take(4)->get();

        return view('public.home', compact('kelas'));
    }
}
