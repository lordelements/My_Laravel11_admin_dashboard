<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('admin.dashboard');
    }

    // public function user_dashboard() 
    // {
    //     return view('dashboard');
    // }

    public function welcome() 
    {
        return view('welcome');
    }

}
