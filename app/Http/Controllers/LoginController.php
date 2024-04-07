<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function fromlogin()
    {
        return view('layout.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|max:100',
            'password' => 'required|string|max:100',
        ]);
        if ($credentials) {
            $user = Admin::where('username', $request->username)->where('password', $request->password)->first();
            if ($user) {
                return redirect()->intended('/index');
            } else {
                Session::put('alert_status', 2);
                return redirect('/');
            }
        }
    }

    public function logout(Request $request)
    {
        // Auth::logout();
        Session::flush();

        return redirect('/');
    }

    public function index()
    {
        $all_users = User::all()->count();
        return view('dashboard.dashboard', ['all_users' => $all_users]);
    }
}
