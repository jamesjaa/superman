<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Carbon;
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
                Session::put('login_id', $user->id);
                Session::put('login_username', $user->username);
                Session::put('login_role', $user->role);
                return redirect('/index');
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
        $maxDatetime =  Carbon::parse(User::max('created_at'))->format('Y-m-d');
        $countNewUser = User::whereDate('created_at', $maxDatetime)->count('created_at');
        return view('dashboard.dashboard', ['all_users' => $all_users, 'countNewUser' => $countNewUser]);
    }
}
