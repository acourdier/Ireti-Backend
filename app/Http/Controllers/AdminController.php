<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function bank(){
        return view('Admin.bank');
    }
    public function beneficiaries(){
        return view('Admin.beneficiaries');
    }
    public function dashboard(){
        return view('Admin.dashboard');
    }
    public function investment(){
        return view('Admin.investment');
    }
    public function notifications(){
        return view('Admin.notifications');
    }
    public function orderdetail(){
        return view('Admin.orderdetail');
    }
    public function products(){
        return view('Admin.products');
    }
    public function profile(){
        return view('Admin.profile');
    }
}
