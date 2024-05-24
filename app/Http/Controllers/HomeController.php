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
       if(auth()->check()){
            $role = auth()->user()->role;
            if($role == 0){
                return redirect()->route('admin.dashboard');
            }
            elseif($role == 1){
                return redirect()->route('user.dashboard');
            }
        }
        return redirect()->route('/login');
    }
}
