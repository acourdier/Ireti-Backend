<?php

namespace App\Http\Controllers;
use App\Models\Investment;
use App\Models\BankAccount;
use App\Models\Beneficiaries;
use App\Models\Order;
use App\Models\UnderLaying;
use App\Models\Currency;
use App\Models\User;
use App\Mail\OrderConfirmed;
use App\Mail\OrderUpdate;
use App\Mail\PaymentConfirmation;
use App\Mail\PaymentUpdate;
use App\Mail\InvestmentConfirmation;
use App\Mail\InvestmentApproved;
use Illuminate\Support\Facades\Mail;
use App\Models\notification;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    public function dashboard() {
        $userId = auth()->id();
    
        $counttotalorders = Order::where('status', 1)
            ->where('filled', 'No')
            ->where('userid', $userId)
            ->count();
    
        $countfilledorders = Order::where('filled', 'YES')
            ->where('status', 1)
            ->where('userid', $userId)
            ->count();
    
            $sumFilledorders = Order::where('status', 1)
                    ->where('userid', $userId)
                    ->get(['converted']);

                $sum = 0;

                foreach ($sumFilledorders as $order) {
                    
                    $cleanedConverted = (float) str_replace(' ', '', $order->converted);
                    
                   
                    $sum += $cleanedConverted;

                   
                    // var_dump($cleanedConverted);
                }

              
              
           
        $sumfilledordersFormatted = number_format($sum, 2, '.', ' ');
     
        $ordersPerMonth = Order::selectRaw('MONTH(created_at) as month, sum(converted) as totalConverted, count(*) as totalOrders')
            ->where('userid', $userId)
            ->where('status', 1)
            ->groupBy('month')
            ->orderBy('month')
            ->get();
    
        $totalOrdersData = array_fill(0, 12, null); 
        $totalConvertedData = array_fill(0, 12, null); 
        $monthsData = [
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ];
    
        foreach ($ordersPerMonth as $order) {
            $monthIndex = $order->month - 1; 
            $totalOrdersData[$monthIndex] = $order->totalOrders;
            $totalConvertedData[$monthIndex] = $order->totalConverted;
        }
        $data = Order::where('userid', $userId)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        $counttotalorders = Order::where('status', 1)
        ->where('filled', 'No')
        ->where('userid', $userId)
        ->count();

        $countfilledorders = Order::where('filled', 'YES')
            ->where('status', 1)
            ->where('userid', $userId)
            ->count();

        $previousMonthTotalOrders = Order::where('status', 1)
            ->where('userid', $userId)
            ->whereMonth('created_at', now()->subMonth()->month)
            ->count();

        $previousMonthFilledOrders = Order::where('filled', 'YES')
            ->where('status', 1)
            ->where('userid', $userId)
            ->whereMonth('created_at', now()->subMonth()->month)
            ->count();

        $totalOrdersChange = $previousMonthTotalOrders ? (($counttotalorders - $previousMonthTotalOrders) / $previousMonthTotalOrders) * 100 : 0;
        $filledOrdersChange = $previousMonthFilledOrders ? (($countfilledorders - $previousMonthFilledOrders) / $previousMonthFilledOrders) * 100 : 0;

        $totalOrdersChangeFormatted = round($totalOrdersChange, 2);
        $filledOrdersChangeFormatted = round($filledOrdersChange, 2);

        return view('User.dashboard', [
            'orders' => $data,
            'totalorders' => $counttotalorders,
            'filledorders' => $countfilledorders,
            'totalOrdersChange' => $totalOrdersChangeFormatted,
            'filledOrdersChange' => $filledOrdersChangeFormatted,
            'sumfilledordersFormatted' => $sumfilledordersFormatted,
            'totalOrdersData' => $totalOrdersData,
            'totalConvertedData' => $totalConvertedData,
            'monthsData' => $monthsData
        ]);
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
        return view('User.orders', ['orders' => $data]);
    }
    public function editorders($id){
        $oil  = UnderLaying::where('Type', 'Oil and oil Derivatives')->orderBy('id', 'desc')->get();
        $soft = UnderLaying::where('Type', 'Soft Commodities')->orderBy('id', 'desc')->get();
        $metal = UnderLaying::where('Type', 'Metals and Precious Metals')->orderBy('id', 'desc')->get();
        $currency = Currency::orderBy('currency', 'asc')->get();
        $data['orders'] =Order::find($id);
        return view('User.editorders',$data,['oils' => $oil,'softs' => $soft,'metals' => $metal,'currencies' => $currency]);
    }

    public function updateorder(Request $request){
        $order = Order::find($request->id);
        if (!$order) {
            return redirect()->route('admin.orders')->withErrors('Order not found');
        }
        $data = $request->all();
    
        $orderDetails = Order::leftJoin('users', 'orders.userid', '=', 'users.id')
        ->where('orders.id', $request->id)
        ->first();

        if ($orderDetails) {
            $requestMail = $data;

            $requestMail['id'] = $request->id;
            $requestMail['username'] =$orderDetails->fname;
            $requestMail['created_at'] =$orderDetails->created_at;
            $requestMail['FundType'] =$orderDetails->FundType;
            $requestMail['updateby'] = 'user';

            // $to_email = $orderDetails->email;
            // $to_emailAdmin = env('ADMIN_EMAIL');
            // $to_emailAdmin2 = env('ADMIN2_EMAIL');
            // $to_emailAdmin3 = env('ADMIN3_EMAIL');
            // $requestMail['role'] = "user";
            // Mail::to($to_email)->send(new OrderUpdate($requestMail));

            // $requestMail['role'] = "admin";
            // Mail::to($to_emailAdmin)
            //     ->cc([$to_emailAdmin2, $to_emailAdmin3])
            //     ->send(new OrderUpdate($requestMail));
            if (isset($data['quantity']) && $data['quantity'] != null) {
                $quantity = str_replace(' ', '', $data['quantity']);
                $targetPrice = str_replace(' ', '', $data['targetp']);
                $data['quantity'] = (string)$quantity;
                $data['targetPrice'] = (string)$targetPrice;
        
                if ($data['buysell'] == 'Buy') {
                    $amountbRaw = bcmul($data['targetPrice'], $data['quantity'], 10);
                    $data['amountb'] = number_format($amountbRaw, 2, '.', ' ');
                    $data['currencyts'] = '';
                    $data['amountts'] = '';
                    $data['buysell'] = 'Buy';
                    $order->update($data);
                    
                } elseif ($data['buysell'] == 'Sell') {
                    $amounttsRaw = bcmul($data['targetPrice'],  $data['quantity'], 10);
                    $data['amountts'] = number_format($amounttsRaw, 2, '.', ' ');
                    $data['amountb'] = '';
                    $data['currencytb'] = '';
                    $data['buysell'] = 'Sell';

                    $order->update(
                        $data
                    );
                }
            }
            else {
                $order->update($data);
            }

    
            return redirect()->route('user.orders')->with('update', 'Order Updated Successfully');
        }
    
        return redirect()->route('user.orders')->with('error', 'Order not found.');
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
        $requestMail['role'] = "user";
        $requestMail['username'] = $username;
        $requestMail['id'] = $orderData->id;
        $requestMail['created_at'] = $orderData->created_at;
        $to_email = auth()->user()->email;
        $mail = new OrderConfirmed($requestMail);
        Mail::to($to_email)
            ->send($mail);

        $requestMail['role'] = "admin";
        $to_emailAdmin = env('ADMIN_EMAIL');
        $to_emailAdmin2 = env('ADMIN2_EMAIL');
        $to_emailAdmin3 = env('ADMIN3_EMAIL');
        $mail2 = new OrderConfirmed($requestMail);
        Mail::to($to_emailAdmin)
        ->cc([$to_emailAdmin2, $to_emailAdmin3])
            ->send($mail2);
        return redirect()->route('user.orders')->with('success', 'Product validate successfully.');
    }

    public function UserCancelOrder(Request $request){

        $order = Order::find($request->id);
        if (!$order) {
            return redirect()->route('user.orders')->withErrors('Order not found');
        }
        
        $order->filled = 'Cancel';
        $order->save();

        return redirect()->route('user.orders')->with('update', 'Order cancelled  Successfully');

    }
    public function UserDeleteOrder(Request $request){

        $order = Order::find($request->id)->delete();
        

        return redirect()->route('user.orders')->with('update', 'Order cancelled  Successfully');

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
        $userid = auth()->user()->id;
        $investment['userid'] = $userid;
        Investment:: create($investment);
            
        $msg = "Added a new Investment";
        notification::create([
        'message' => $msg,
        'userid' => $userid,
        ]);

        $requestMail = $investment;
        $username=auth()->user()->fname;
        $to_email = auth()->user()->email;
        $requestMail['fname'] = $username;

        $requestMail['role'] = "user";
        $mail = new InvestmentConfirmation($requestMail);
        $data = Mail::to($to_email)
            ->send($mail);

        $requestMail['role'] = "admin";
        $to_emailAdmin = env('ADMIN_EMAIL');
        $to_emailAdmin2 = env('ADMIN2_EMAIL');
        $to_emailAdmin3 = env('ADMIN3_EMAIL');
        $mail2 = new InvestmentConfirmation($requestMail);
        Mail::to($to_emailAdmin)
        ->cc([$to_emailAdmin2, $to_emailAdmin3])
            ->send($mail2);

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

        // $username=auth()->user()->fname;
        // $requestMail = $request->all();
        // $requestMail['username'] = $username;
        // $to_email = auth()->user()->email;
        // $mail = new BankAccountMail($requestMail);
        // Mail::to($to_email)
        //     ->send($mail);

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

        $userid = auth()->user()->id;
        $msg = "Added a new Beneficiary";
        notification::create([
        'message' => $msg,
        'userid' => $userid,
        ]);
        return redirect()->route('user.beneficiaries')->with ('success','Beneficiary Added Successfully');
    }
    public function payments(){
        $userid=auth()->user()->id;
        $data = Payment::leftjoin('users','payments.customer','=','users.id')
        ->leftjoin('beneficiaries','payments.Beneficiary','=','beneficiaries.id')
        ->select('payments.*','users.fname','beneficiaries.accountname','beneficiaries.accountnumber')
        ->where('payments.customer',$userid)
        ->orderBy('id', 'desc')->get();
        return view('User.payments', ['payments' => $data]);
    }
    
    public function getCurrency($bid){
        $userid=auth()->user()->id;
        $Beneficiaries = Beneficiaries::where('userid', $userid)
        ->where('id', $bid)
        ->get();
        return response()->json($Beneficiaries, 200);
    }

    public function addpayment(){
        $userid=auth()->user()->id;
        $Beneficiaries = Beneficiaries::where('userid',$userid)->get();
        return view('User.addpayment',['Beneficiaries'=>$Beneficiaries]);
    }
    public function savepayment(Request $request){
        $userid=auth()->user()->id;
        $request['userid'] = $userid;
        $request['customer'] = $userid;
        $request['status'] = "Pending";
        $payments = $request->all();
        Payment:: create($payments);

        $requestMail = $payments;
        $username=auth()->user()->fname;
        $to_email = auth()->user()->email;
        $requestMail['fname'] = $username;

        $beneficiary = Beneficiaries::find($request->Beneficiary);
        if ($beneficiary) {
            $requestMail['accountname'] = $beneficiary->accountname;
            $requestMail['accountnumber'] = $beneficiary->accountnumber;
        }

        $requestMail['role'] = "user";
        $mail = new PaymentConfirmation($requestMail);
        $data = Mail::to($to_email)
            ->send($mail);

        $requestMail['role'] = "admin";
        $to_emailAdmin = env('ADMIN_EMAIL');
        $to_emailAdmin2 = env('ADMIN2_EMAIL');
        $to_emailAdmin3 = env('ADMIN3_EMAIL');
        $mail2 = new PaymentConfirmation($requestMail);
        Mail::to($to_emailAdmin)
        ->cc([$to_emailAdmin2, $to_emailAdmin3])
            ->send($mail2);
        return redirect()->route('user.payments')->with ('success','Payment Added Successfully');
    }
    public function deletePayment($id){
        $data =Payment::find($id);
        $data->delete();
        return redirect()->route('user.payments')->with ('Delete','Payment Deleted Successfully');
    }
    public function editpayment($id){
        $userid=auth()->user()->id;
        $Beneficiaries = Beneficiaries::where('userid',$userid)->get();
        $data['payment'] =Payment::leftjoin('beneficiaries','payments.Beneficiary','=','beneficiaries.id')
        ->select('payments.*', 'beneficiaries.*', 'payments.id as pid')
        ->where('payments.id',$id)->first();
        return view('User.editpayment',$data,['Beneficiaries'=>$Beneficiaries]);
    }
    public function updatepayment(Request $request){
        $payment = Payment::find($request->id);
        $getOldbeneficiary=Beneficiaries::find($payment->Beneficiary);
       
        if($getOldbeneficiary){
          
            Session::put('old_accountname', $getOldbeneficiary->accountname);
            Session::put('old_accountnumber', $getOldbeneficiary->accountnumber);

        }
        if ($payment) {
            Session::put('old_amount', $payment->amount);
            Session::put('old_currency', $payment->currency);
            $payment->update($request->all());
        }

        $requestMail = $payment;
        
        $beneficiary = Beneficiaries::find($request->Beneficiary);
        if ($beneficiary) {
            $requestMail['accountname'] = $beneficiary->accountname;
            $requestMail['accountnumber'] = $beneficiary->accountnumber;
        }

        $username=auth()->user()->fname;
        $to_email = auth()->user()->email;
        $requestMail['fname'] = $username;

        $requestMail['role'] = "user";
        $mail = new PaymentUpdate($requestMail);
        $data = Mail::to($to_email)
            ->send($mail);

        $requestMail['role'] = "admin";
        $to_emailAdmin = env('ADMIN_EMAIL');
        $to_emailAdmin2 = env('ADMIN2_EMAIL');
        $to_emailAdmin3 = env('ADMIN3_EMAIL');
        $mail2 = new PaymentUpdate($requestMail);
        Mail::to($to_emailAdmin)
        ->cc([$to_emailAdmin2, $to_emailAdmin3])
            ->send($mail2);
        return redirect()->route('user.payments')->with ('update','Payment Updated Successfully');
    }
    // public function paymentemail($id){
    //     $payment = Payment::find($id);
    //     $data1 = Payment::leftJoin('users', 'payments.customer', '=', 'users.id')
    //     ->leftJoin('orders', 'payments.orderid', '=', 'orders.id')
    //     ->select('users.fname', 'users.email', 'payments.*','payments.id as pid','payments.created_at as pdate','orders.*','orders.id as oid','orders.created_at as orderdate' )
    //     ->where('payments.orderid',$id)
    //     ->first();

    //     if ($data1) {
    //         $requestMail = $data1;
    //         $to_email = env('ADMIN_EMAIL');
    //         $to_emailAdmin2 = env('ADMIN2_EMAIL');
    //         $to_emailAdmin3 = env('ADMIN3_EMAIL');
    //         $mail = new PaymentUpdate($requestMail);
    //         Mail::to($to_email)
    //         ->cc([$to_emailAdmin2, $to_emailAdmin3])
    //             ->send($mail);
    //     }

    //     $data2 = Payment::leftJoin('users', 'payments.customer', '=', 'users.id')
    //     ->leftJoin('orders', 'payments.orderid', '=', 'orders.id')
    //     ->select('users.fname', 'users.email', 'payments.*','payments.id as pid','payments.created_at as pdate','orders.*','orders.id as oid','orders.created_at as orderdate' )
    //     ->where('payments.orderid',$id)
    //     ->first();

    //     if ($data2) {
    //         $username=auth()->user()->fname;
    //         $status = $data2->status;
    //         $requestMail = $data2;
    //         $to_useremail = $data2->email;
    //         $mail = new PaymentApproved($requestMail);
    //         Mail::to($to_useremail)
    //             ->send($mail);

    //     }

    //     return redirect()->route('admin.payments')->with ('update','Mail Sent Successfully');
    // }
}
