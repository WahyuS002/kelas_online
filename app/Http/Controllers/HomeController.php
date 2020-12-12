<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $kelas = Kelas::where('status', 'publish')->take(4)->get();

        // dd($kelas[3]->getFirstMedia()->getUrl());
        $kelas = Kelas::find(7)->getFirstMedia();

        return view('welcome', compact('kelas'));
    }
}
