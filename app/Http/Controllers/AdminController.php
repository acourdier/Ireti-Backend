<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Investment;
use App\Models\Currency;
use App\Models\UnderLaying;
use App\Models\Payment;
use App\Models\notification;
use Illuminate\Http\Request;
class AdminController extends Controller
{

    public function dashboard(){
        $counttotalorders = Order::where('status', 1)
        ->count();

        $countfilledorders = Order::where('filled', 'YES')
        ->count();

        $sumfilledorders = Order::where('status', 1)
        ->sum('quantity');

        $data =Order::leftjoin('users','orders.userid','=','users.id')->where('orders.status', 1)
        ->select('users.fname','orders.*')
        ->orderBy('id', 'desc')->paginate(5);
        return view('Admin.dashboard',['orders' => $data ,'totalorders'=> $counttotalorders, 'filledorders'=>$countfilledorders , 'sumfilledorders'=> $sumfilledorders]);
    }
    public function notifications(){
        $data = notification::leftjoin('users','notifications.userid','=','users.id')
        ->select('users.fname','notifications.*')
        ->orderBy('id', 'desc')->get();
        return view('Admin.notifications', ['notifications' => $data]);
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
        return redirect()->route('admin.currency')->with ('success','Currency Added Successfully');
    }
    public function deleteCurrency($id){
        $data =Currency::find($id);
        $data->delete();
        return redirect()->route('admin.currency')->with ('Delete','Currency Deleted Successfully');
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
        return redirect()->route('admin.currency')->with ('update','Currency Updated Successfully');
    }


    public function underlaying(){
        $data = UnderLaying::orderBy('id', 'desc')->get();
        return view('Admin.underlaying', ['UnderLayings' => $data]);
    }
    public function addCommodity(){
        return view('Admin.addCommodity');
    }
    public function saveCommodity(Request $request){
        $underlaying = $request->all();
        UnderLaying:: create($underlaying);
        return redirect()->route('admin.underlaying')->with ('success','Commodity Added Successfully');
    }
    public function deleteCommodity($id){
        $data =UnderLaying::find($id);
        $data->delete();
        return redirect()->route('admin.underlaying')->with ('Delete','Commodity Deleted Successfully');
    }
    public function editCommodity($id){
        $data['Commodity'] =UnderLaying::find($id);
        return view('Admin.editCommodity',$data);
    }
    public function updateCommodity(Request $request){
        $Commodity = UnderLaying::find($request->id);
        if ($Commodity) {
            $Commodity->update($request->all());
        }
        return redirect()->route('admin.underlaying')->with ('update','Commodity Updated Successfully');
    }

    
    public function orders(){
        $data =Order::leftjoin('users','orders.userid','=','users.id')->where('orders.status', 1)
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
        return redirect()->route('admin.orders')->with ('update','Order Updated Successfully');
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
        return redirect()->route('admin.investment')->with ('update','Investment Updated Successfully');
    }


    public function clients(){
        $data = User::where('role', 1)->where('status', '!=', 0)->orderBy('id', 'desc')->get();
        return view('Admin.clients', ['users' => $data]);
    }
    public function Deleteuser($id){
        $data =User::find($id);
        $data->delete();
        return redirect()->route('admin.clients');
    }
    public function approveUser($id){
        $user = User::find($id);
        if ($user) {
            $user->status = 2;
            $user->save();
        }
        return redirect()->back()->with('success', 'User approved successfully.');
    }
    public function rejectUser($id){
        $user = User::find($id);
        if ($user) {
            $user->status = 3;
            $user->save();
        }
        return redirect()->back()->with('reject', 'User rejected successfully.');
    }


    public function payments(){
        $data = Payment::orderBy('id', 'desc')->get();
        return view('Admin.payments', ['payments' => $data]);
    }
    public function addpayment(){
        return view('Admin.addpayment');
    }
    public function savepayment(Request $request){
        $payments = $request->all();
        Payment:: create($payments);
        return redirect()->route('admin.payments')->with ('success','Payment Added Successfully');
    }
    public function deletePayment($id){
        $data =Payment::find($id);
        $data->delete();
        return redirect()->route('admin.payments')->with ('Delete','Payment Deleted Successfully');
    }
    public function editpayment($id){
        $data['payment'] =Payment::find($id);
        return view('Admin.editpayment',$data);
    } 
    public function updatepayment(Request $request){
        $payment = Payment::find($request->id);
        if ($payment) {
            $payment->update($request->all());
        }
        return redirect()->route('admin.payments')->with ('update','Payment Updated Successfully');
    }
    
}