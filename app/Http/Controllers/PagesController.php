<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class PagesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return redirect()->route('login');
    }

    public function dashboard() {
        $page_title = "Dashboard";
        $user_id = Auth::id();
        $user = User::find($user_id);

        return view('dashboard', compact('page_title', 'user'));
    }

    public function settings() {
        $page_title = "Account Settings";
        $user_id = Auth::id();
        $user = User::find($user_id);

        return view('account.settings', compact('page_title', 'user'));
    }

    public function changePassword() {
        $page_title = "Account Settings";
        $user_id = Auth::id();
        $user = User::find($user_id);

        return view('account.change-password', compact('page_title', 'user')); 
    }
}
