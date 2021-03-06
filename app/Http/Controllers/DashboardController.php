<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user'))
        {
            return view('userDashboard');
        }
        elseif(Auth::user()->hasRole('librarian'))
        {
            return view('librarianDashboard');
        }
        elseif(Auth::user()->hasRole('admin'))
        {
            return view('dashboard');
        }
    }

    public function profile()
    {
        return view('profile');
    }

    public function postcreate()
    {
        return view('postcreate');
    }
}
