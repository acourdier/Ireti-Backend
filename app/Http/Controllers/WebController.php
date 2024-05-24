<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function fxMmanagement(){
        return view('fxMmanagement');
    }
    public function liquidityProvider(){
        return view('liquidityProvider');
    }
    public function NgoFlowOptimization(){
        return view('NgoFlowOptimization');
    }
    public function onlineInquiry(){
        return view('onlineInquiry');
    }
    public function platform(){
        return view('platform');
    }
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }
    public function createuser(Request $Request){
        $Request->validate([
            '*'=>'required'
        ]);
        $user = $Request->all();
        User::create($user);
        return redirect()->route('login');
    }
}
