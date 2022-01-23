<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }

    // public function profile()
    // {
    //     return view('profile');
    // }

    // public function about()
    // {
    //     return view('about');
    // }

    // public function skills()
    // {
    //     return view('skills');
    // }

    // public function contact()
    // {
    //     return view('contact');
    // }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    
}
