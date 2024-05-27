<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function orders(){
        
        $data =Order::leftjoin('users','orders.userid','=','users.id')
        ->select('users.fname','orders.*')
        ->orderBy('id', 'desc')->get();


        // $data = Order::orderBy('id', 'desc')->get();
        return view('Admin.orders', ['orders' => $data]);
    }
    public function clients(){
        $data = User::where('role', 1)->orderBy('id', 'desc')->get();
        return view('Admin.clients', ['users' => $data]);
    }
    public function Deleteuser($id){
        $data =User::find($id);
        $data->delete();
        return redirect()->route('admin.clients');
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
