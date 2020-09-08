<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // validasi
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        // percobaan login
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // jika berhasil
            return redirect()->route('admin.dashboard');
        }

        // jika gagal
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
