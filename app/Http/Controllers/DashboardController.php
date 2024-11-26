<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view('dashboard.admin.index');
        }elseif(Auth::user()->role == 'user') {
            return view('dashboard.user.index');
        }
    }
}
