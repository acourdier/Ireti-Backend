<?php

namespace App\Http\Controllers;
use App\Models\Investment;
use App\Models\BankAccount;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        return view('User.dashboard');
    }

    
    public function products(){
        return view('User.products');
    }
    public function orderdetail(){
        return view('User.orderdetail');
    }


    public function investment(){
        $data = Investment::orderBy('id', 'desc')->get();
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
        return view('User.beneficiaries');
    }
    

    public function notifications(){
        return view('User.notifications');
    }
    
}
