<?php

namespace App\Http\Controllers;
use App\Models\Investment;
use App\Models\BankAccount;
use App\Models\Beneficiaries;
use App\Models\Order;
use App\Models\UnderLaying;
use App\Models\Currency;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        $userId = auth()->id();
        $data = Order::where('userid', $userId)->orderBy('id', 'desc')->get();
        return view('User.dashboard', ['orders' => $data]);
    }
    public function products(){
        $oil  = UnderLaying::where('Type', 'Oil and oil Derivatives')->orderBy('id', 'desc')->get();
        $soft = UnderLaying::where('Type', 'Soft Commodities')->orderBy('id', 'desc')->get();
        $currency = Currency::orderBy('id', 'desc')->get();
        return view('User.products',['oils' => $oil,'softs' => $soft,'currencies' => $currency]);
    }
    public function submitorder(Request $Request){
        $Request->validate([
            'FundType'=>'required',
        ]);
        $order = $Request->all();
        $userId = auth()->id();
        $order['userid'] = $userId;
        $orderData = Order::create($order);
        return redirect()->route('user.orderdetail')->with('orderData', $orderData);
    }
    public function orderdetail(){
        $orderData = session('orderData');
        return view('user.orderdetail', compact('orderData'));
    }

    public function investment(){
        $userId = auth()->id();
        $data = Investment::where('userid', $userId)->orderBy('id', 'desc')->get();
        return view('User.investment', ['investments' => $data]);
    }
    public function makeinvestment(){
        return view('User.makeinvestment');
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
    public function Deleteinvestment($id){
        $data =Investment::find($id);
        $data->delete();
        return redirect()->route('user.investment');
    }

    public function profile(){
        $userId = auth()->id();
        $profile = User::where('id', $userId)->first();
        return view('User.profile', ['profile' => $profile]);
    }
    public function updateprofile(Request $request){
        $user = auth()->user();    
        if ($user instanceof User) {
            $validatedData = $request->validate([
                '*' => 'required'
            ]);
            $user->update($validatedData);
            return redirect()->route('user.profile');
        }
    }

    public function bank(){
        $userId = auth()->id();
        $account = BankAccount::where('userid', $userId)->first();
        if (is_null($account)) {
            return view('User.bank'); 
        }
        return view('User.bank', ['account' => $account]);
    }  
    public function addbank(Request $request) {
        $request->validate([
            '*' => 'required'
        ]);
        $userId = auth()->id();
            $existingAccount = BankAccount::where('userid', $userId)->first();
            if ($existingAccount) {
            $existingAccount->update($request->all());
            return redirect()->route('user.bank')->with('success', 'Bank account updated successfully.');
        }
        $bank = $request->all();
        $bank['userid'] = $userId;
        BankAccount::create($bank);
        
        return redirect()->route('user.bank')->with('success', 'Bank account added successfully.');
    }

    
    public function beneficiaries(){
        $userId = auth()->id();
        $beneficiaries = Beneficiaries::where('userid', $userId)->get();
        return view('User.beneficiaries', ['beneficiaries' => $beneficiaries]);
    }
    public function addbeneficiaries(){
        return view('User.addbeneficiaries');
    }
    public function createbeneficiaries(Request $Request){
        $Request->validate([
            '*'=>'required'
        ]);
        $beneficiaries = $Request->all();
        $userId = auth()->id();
        $beneficiaries['userid'] = $userId;
        Beneficiaries:: create($beneficiaries);
        return redirect()->route('user.beneficiaries');
    }

    public function notifications(){
        return view('User.notifications');
    }
    public function validateOrder($id){
        $order = Order::find($id);
        if ($order) {
            $order->status = 1;
            $order->save();
        }
        return redirect()->route('user.products')->with('success', 'Product validate successfully.');
    }
    
}
