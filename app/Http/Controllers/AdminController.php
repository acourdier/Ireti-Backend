<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Investment;
use App\Models\Currency;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function orders(){
        $data =Order::leftjoin('users','orders.userid','=','users.id')
        ->select('users.fname','orders.*')
        ->orderBy('id', 'desc')->get();
        return view('Admin.orders', ['orders' => $data]);
    }
    public function editorders($id){
        $data['orders'] =Order::find($id);
        return view('Admin.editorders',$data);
    }
    public function updateorder(Request $request){
        $request->validate([
        'filled' => 'required',
        ]);
        $order = Order::find($request->id);
    
        if ($order) {
            $order->update(['filled' => $request->filled]);
        }
        return redirect()->route('admin.orders');
    }

    public function investment(){
        $data =Investment::leftjoin('users','investments.userid','=','users.id')
        ->select('users.fname','investments.*')
        ->orderBy('id', 'desc')->get();
        return view('Admin.investment', ['investments' => $data]);
    }
    public function editinvestment($id){
        $data['investment'] =Investment::find($id);
        return view('Admin.editinvestment',$data);
    }
    public function updateinvestment(Request $request){
        $request->validate([
        'status' => 'required',
        ]);
        $order = Investment::find($request->id);
    
        if ($order) {
            $order->update(['status' => $request->status]);
        }
        return redirect()->route('admin.investment');
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
    public function addpayment(){
        return view('Admin.addpayment');
    }
    public function editpayment(){
        return view('Admin.editpayment');
    } 
    public function underlaying(){
        return view('Admin.underlaying');
    }
    public function currency(){
        $data = Currency::orderBy('id', 'desc')->get();
        return view('Admin.currency', ['currencies' => $data]);
    }
    public function addCurrency(){
        return view('Admin.addCurrency');
    }
    public function saveCurrency(Request $request){
        $currency = $request->all();
        Currency:: create($currency);
        return redirect()->route('admin.currency');
    }
    public function notifications(){
        return view('Admin.notifications');
    }
    public function deleteCurrency($id){
        $data =Currency::find($id);
        $data->delete();
        return redirect()->route('admin.currency');
    }
    public function editCurrency($id){
        $data['currency'] =Currency::find($id);
        return view('Admin.editCurrency',$data);
    }
    public function updateCurrency(Request $request){
        $currency = Currency::find($request->id);
        if ($currency) {
            $currency->update($request->all());
        }
        return redirect()->route('admin.currency');
    }
}