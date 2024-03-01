<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        return view('index');
    }
    public function signin(){
        return view('sign-in');
    }
    public function signup(){
        return view('sign-up');
    }
    public function tables(){
        return view('tables');
    }
}
