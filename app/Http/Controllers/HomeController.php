<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function devProfile()
    {
        return view('superadmin.backend.manage_profile.dev.dev_profile');  
    }
    public function superadminindex()
    {
        return view('superadmin.index');
    }
    public function adminindex()
    {
        return view('admin.index');
    }
    public function teacherindex()
    {
        return view('teacherhome');
    }
}
