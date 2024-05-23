<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function orders(){
        return view('Admin.orders');
    }
    public function clients(){
        return view('Admin.clients');
    }
    public function dashboard(){
        return view('Admin.dashboard');
    }
    public function payments(){
        return view('Admin.payments');
    }
    public function notifications(){
        return view('Admin.notifications');
    }
}
