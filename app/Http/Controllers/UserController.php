<?php

namespace App\Http\Controllers;
use App\Models\Investment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function bank(){
        return view('User.bank');
    }
    public function beneficiaries(){
        return view('User.beneficiaries');
    }
    public function dashboard(){
        return view('User.dashboard');
    }
    public function investment(){
        return view('User.investment');
    }
    public function createinvestment(Request $Request){
        $Request->validate([
            '*'=>'required'
        ]);
        $investment = $Request->all();
        $userId = auth()->id();
        $investment['userid'] = $userId;
        Investment:: create($investment);
        return redirect()->route('user.investment');
    }
    public function notifications(){
        return view('User.notifications');
    }
    public function orderdetail(){
        return view('User.orderdetail');
    }
    public function products(){
        return view('User.products');
    }
    public function profile(){
        return view('User.profile');
    }
}
