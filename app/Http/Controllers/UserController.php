<?php

namespace App\Http\Controllers;
use App\Models\Investment;
use App\Models\BankAccount;
use App\Models\Beneficiaries;
use App\Models\Order;
use App\Models\UnderLaying;
use App\Models\Currency;
use App\Models\User;
use App\Mail\InvestmentMail;
use App\Mail\ProfileMail;
use App\Mail\BankAccountMail;
use App\Mail\BankAccountUpdate;
use App\Mail\BenficiaryMail;
use App\Mail\OrderMail;
use App\Mail\OrderConfirmation;
use App\Mail\OrderUpdateConfirmation;
use App\Mail\OrderUpdate;
use Illuminate\Support\Facades\Mail;
use App\Models\notification;
use App\Models\Payment;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dashboard(){
        $userId = auth()->id();

        $counttotalorders = Order::where('status', 1)
        ->where('filled', 'No')
        ->where('userid', $userId)
        ->count();

        $countfilledorders = Order::where('filled', 'YES')
        ->where('status', 1)
        ->where('userid', $userId)
        ->count();

        $sumfilledorders = Order::where('status', 1)
        ->where('userid', $userId)
        ->sum('converted');

        $data = Order::where('userid', $userId)->where('status',1)->orderBy('id', 'desc')->paginate(5);
        return view('User.dashboard', ['orders' => $data ,'totalorders'=> $counttotalorders, 'filledorders'=>$countfilledorders , 'sumfilledorders'=> $sumfilledorders]);
    }
    public function notifications(){
        $userId = auth()->id();

        $data = Notification::leftJoin('users', 'notifications.userid', '=', 'users.id')
            ->select('users.fname', 'notifications.*')
            ->where(function ($query) use ($userId) {
                $query->where('notifications.userid', $userId)
                      ->orWhere('users.role', 0);
            })
            ->orderBy('notifications.id', 'desc')
            ->get();

        return view('User.notifications', ['notifications' => $data]);

    }


    public function products(){
        $oil  = UnderLaying::where('Type', 'Oil and oil Derivatives')->orderBy('id', 'desc')->get();
        $soft = UnderLaying::where('Type', 'Soft Commodities')->orderBy('id', 'desc')->get();
        $metal = UnderLaying::where('Type', 'Metals and Precious Metals')->orderBy('id', 'desc')->get();
        $currency = Currency::orderBy('currency', 'asc')->get();
        return view('User.products',['oils' => $oil,'softs' => $soft,'metals' => $metal,'currencies' => $currency]);
    }
    public function submitorder(Request $Request){
        $Request->validate([
            'FundType'=>'required',
        ]);
        $order = $Request->all();
        $quantity = $Request->input('quantity');
        $targetPrice = $Request->input('targetp');
        $buySell = $Request->input('buysell');
        
        $amountb = 0;
        $amountts = 0;
        $userId = auth()->id();
        $order['userid'] = $userId;
       
       
        
        $fundType=$Request['FundType'];
       
       
         
        if (in_array($fundType, ['Soft Commodities','Oil and oil Derivatives','Metals'])) {
            if ($buySell == 'Buy') {
                $quantity = str_replace(' ', '', $quantity);
                $targetPrice = str_replace(' ', '', $targetPrice);
                if (!is_numeric($targetPrice)) {
                    $targetPrice = 0; 
                }
                if (!is_numeric($quantity)) {
                    $quantity = 0; 
                }         
                $targetPrice = (string)$targetPrice;
                $quantity = (string)$quantity;
                $amountbRaw = bcmul($targetPrice, $quantity, 10);
                $amountbFormatted = number_format($amountbRaw, 2, '.', ' ');
                $order['amountb'] = $amountbFormatted;
                $order['currencytb'] = $Request->input('currencytb');
            }
            
            if ($buySell == 'Sell') {
                $quantity = str_replace(' ', '', $quantity);
                $targetPrice = str_replace(' ', '', $targetPrice);
                if (!is_numeric($targetPrice)) {
                    $targetPrice = 0; 
                }
                if (!is_numeric($quantity)) {
                    $quantity = 0; 
                }           
                $targetPrice = (string)$targetPrice;
                $quantity = (string)$quantity;
                $amounttsRaw = bcmul($targetPrice, $quantity, 10);
                $amounttsFormatted = number_format($amounttsRaw, 2, '.', ' ');
                $order['amountts'] = $amounttsFormatted;
                $order['currencyts'] = $Request->input('currencyts');
            }
        }
       
        $userid = auth()->user()->id;
        $msg = "Added a new Order";
        notification::create([
        'message' => $msg,
        'userid' => $userid,
        ]);
        $orderData = Order::create($order);
        return redirect()->route('user.orderdetail')->with('orderData', $orderData);
    }
    public function orders(){
        $loginid = auth()->user()->id;
        $data =Order::leftjoin('users','orders.userid','=','users.id')->where('orders.status', 1)
        ->select('users.fname','orders.*')
        ->where('orders.userid',$loginid)
        ->orderBy('id', 'desc')->get();
        return view('user.orders', ['orders' => $data]);
    }
    public function editorders($id){
        $oil  = UnderLaying::where('Type', 'Oil and oil Derivatives')->orderBy('id', 'desc')->get();
        $soft = UnderLaying::where('Type', 'Soft Commodities')->orderBy('id', 'desc')->get();
        $metal = UnderLaying::where('Type', 'Metals and Precious Metals')->orderBy('id', 'desc')->get();
        $currency = Currency::orderBy('currency', 'asc')->get();
        $data['orders'] =Order::find($id);
        return view('user.editorders',$data,['oils' => $oil,'softs' => $soft,'metals' => $metal,'currencies' => $currency]);
    }

    public function updateorder(Request $request){
        $order = Order::find($request->id);
        if ($order) {
            $data1 = Order::leftjoin('users','orders.userid','=','users.id')
            ->where('orders.id',$request->id)->first();
            if ($data1) {
                $requestMail = $data1;
                $to_email = $data1->email;
                $mail = new OrderUpdateConfirmation($requestMail);
                Mail::to($to_email)
                    ->send($mail);
                
                $to_emailAdmin = env('ADMIN_EMAIL');
                $to_emailAdmin2 = env('ADMIN2_EMAIL');
                $mail2 = new OrderUpdate($requestMail);
                Mail::to($to_emailAdmin)
                    ->cc($to_emailAdmin2)
                    ->send($mail2);
            }
            $order->update($request->all());
        }
        return redirect()->route('user.orders')->with ('update','Order Updated Successfully');
    }
    public function orderdeatils($id){
        $data['orderData'] =Order::find($id);
        return view('User.orderdeatils',$data);
    }
    public function orderdetail(){
        $orderData = session('orderData');
        return view('User.orderdetail', compact('orderData'));
    }
    public function validateOrder($id){
        $order = Order::find($id);
        if ($order) {
            $order->status = 1;
            $order->save();
        }

        $orderData = $order;

        $username=auth()->user()->fname;
        $requestMail = $order;
        $requestMail['username'] = $username;
        $requestMail['id'] = $orderData->id;
        $requestMail['created_at'] = $orderData->created_at;
        $to_email = auth()->user()->email;
        $mail = new OrderConfirmation($requestMail);
        Mail::to($to_email)
            ->send($mail);

        $to_emailAdmin = env('ADMIN_EMAIL');
        $to_emailAdmin2 = env('ADMIN2_EMAIL');
        $mail2 = new OrderMail($requestMail);
        Mail::to($to_emailAdmin)
            ->cc($to_emailAdmin2)
            ->send($mail2);
        return redirect()->route('user.orders')->with('success', 'Product validate successfully.');
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

        $userid = auth()->user()->id;
        $msg = "Added a new Investment";

        $username=auth()->user()->fname;
        $requestMail = $Request->all();
        $requestMail['username'] = $username;
        $to_email = auth()->user()->email;
        $mail = new InvestmentMail($requestMail);
        Mail::to($to_email)
            ->send($mail);

        notification::create([
        'message' => $msg,
        'userid' => $userid,
        ]);

        return redirect()->route('user.investment')->with('success', 'Investment Added successfully.');
    }
    public function Deleteinvestment($id){
        $data =Investment::find($id);
        $data->delete();
        return redirect()->route('user.investment')->with ('Delete','Investment Deleted Successfully');
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
            $userid = auth()->user()->id;
            $msg = "updated Profile successfully";



            $username=auth()->user()->fname;
            $requestMail = $request->all();
            $requestMail['username'] = $username;
            $to_email = auth()->user()->email;
            $mail = new ProfileMail($requestMail);
            Mail::to($to_email)
                ->send($mail);

            notification::create([
            'message' => $msg,
            'userid' => $userid,
            ]);
            return redirect()->route('user.profile')->with ('update','Profile Updated Successfully');
        }
    }


    public function bank(){
        $userId = auth()->id();
        $account = BankAccount::where('userid', $userId)->first();
        $currencies = Currency::orderBy('currency', 'asc')->get();
        if (is_null($account)) {
            return view('User.bank',['account' => $account,'currencies' => $currencies]);
        }
        return view('User.bank', ['account' => $account,'currencies' => $currencies]);
    }
    public function addbank(Request $request) {
        $request->validate([
            '*' => 'required'
        ]);
        $userId = auth()->id();
            $existingAccount = BankAccount::where('userid', $userId)->first();
            if ($existingAccount) {
            $existingAccount->update($request->all());

            $username=auth()->user()->fname;
            $requestMail = $request->all();
            $requestMail['username'] = $username;
            $to_email = auth()->user()->email;
            $mail = new BankAccountUpdate($requestMail);
            Mail::to($to_email)
                ->send($mail);
            $userid = auth()->user()->id;
            $msg = "Updated Bank Account successfully";
            notification::create([
            'message' => $msg,
            'userid' => $userid,
            ]);
            return redirect()->route('user.bank')->with('success', 'Bank account updated successfully.');
        }
        $bank = $request->all();
        $bank['userid'] = $userId;
        BankAccount::create($bank);
        $userid = auth()->user()->id;
        $msg = "Added a new Bank Account";
        notification::create([
        'message' => $msg,
        'userid' => $userid,
        ]);

        $username=auth()->user()->fname;
        $requestMail = $request->all();
        $requestMail['username'] = $username;
        $to_email = auth()->user()->email;
        $mail = new BankAccountMail($requestMail);
        Mail::to($to_email)
            ->send($mail);

        return redirect()->route('user.bank')->with('success', 'Bank account added successfully.');
    }


    public function beneficiaries(){
        $userId = auth()->id();
        $beneficiaries = Beneficiaries::where('userid', $userId)->get();
        return view('User.beneficiaries', ['beneficiaries' => $beneficiaries]);
    }
    public function addbeneficiaries(){
        $currency = Currency::orderBy('id', 'desc')->get();
        return view('User.addbeneficiaries',['currencies' => $currency]);
    }
    public function createbeneficiaries(Request $Request){
        $Request->validate([
            '*'=>'required'
        ]);
        $beneficiaries = $Request->all();
        $userId = auth()->id();
        $beneficiaries['userid'] = $userId;
        Beneficiaries:: create($beneficiaries);

        $username=auth()->user()->fname;
        $requestMail = $Request->all();
        $requestMail['username'] = $username;
        $to_email = auth()->user()->email;
        $mail = new BenficiaryMail($requestMail);
        Mail::to($to_email)
            ->send($mail);

        $userid = auth()->user()->id;
        $msg = "Added a new Beneficiary";
        notification::create([
        'message' => $msg,
        'userid' => $userid,
        ]);
        return redirect()->route('user.beneficiaries')->with ('success','Beneficiary Added Successfully');
    }
    public function payments(){
        $data = Payment::leftjoin('users','payments.customer','=','users.id')
        ->leftjoin('beneficiaries','payments.Beneficiary','=','beneficiaries.id')
        ->select('payments.*','users.fname','beneficiaries.accountname','beneficiaries.accountnumber')->orderBy('id', 'desc')->get();
        return view('user.payments', ['payments' => $data]);
    }

}
