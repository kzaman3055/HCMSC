<?php

namespace App\Http\Controllers\SuperAdmin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function Logout(){
        
        Auth::logout();
        return redirect()->route('login');
}
}
