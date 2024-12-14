<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Investment;
use App\Models\Currency;
use App\Models\UnderLaying;
use App\Models\Payment;
use App\Models\notification;
use App\Models\Beneficiaries;
use Illuminate\Http\Request;
use App\Mail\ConfirmInvest;
use App\Mail\OrderFilled;
use App\Mail\OrderUpdate;
use App\Mail\PaymentUpdate;
use App\Mail\PaymentApproved;
use App\Mail\PaymentConfirmation;
use App\Mail\InvestmentApproved;
use App\Mail\StatusUpdate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{

    public function dashboard() {
        $counttotalorders = Order::where('status', 1)
            ->where('filled', 'No')
            ->count();
    
        $countfilledorders = Order::where('filled', 'YES')
            ->where('status', 1)
            ->count();
    
        $sumfilledorders = Order::where('status', 1)
            ->sum('converted');
        $sumfilledordersFormatted = number_format($sumfilledorders, 2, '.', ' ');
    
        $ordersPerMonth = Order::selectRaw('MONTH(created_at) as month, sum(converted) as totalConverted, count(*) as totalOrders')
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
        $data = Order::where('status', 1)->orderBy('id', 'desc')->paginate(5);
        $counttotalorders = Order::where('status', 1)
        ->where('filled', 'No')
        ->count();

        $countfilledorders = Order::where('filled', 'YES')
            ->where('status', 1)
            ->count();

        $previousMonthTotalOrders = Order::where('status', 1)
            ->whereMonth('created_at', now()->subMonth()->month)
            ->count();

        $previousMonthFilledOrders = Order::where('filled', 'YES')
            ->where('status', 1)
            ->whereMonth('created_at', now()->subMonth()->month)
            ->count();

        $totalOrdersChange = $previousMonthTotalOrders ? (($counttotalorders - $previousMonthTotalOrders) / $previousMonthTotalOrders) * 100 : 0;
        $filledOrdersChange = $previousMonthFilledOrders ? (($countfilledorders - $previousMonthFilledOrders) / $previousMonthFilledOrders) * 100 : 0;

        $totalOrdersChangeFormatted = round($totalOrdersChange, 2);
        $filledOrdersChangeFormatted = round($filledOrdersChange, 2);

        return view('Admin.dashboard', [
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
        $data = notification::leftjoin('users','notifications.userid','=','users.id')
        ->select('users.fname','notifications.*')
        ->orderBy('id', 'desc')->get();
        return view('Admin.notifications', ['notifications' => $data]);
    }


    public function currency(){
        $data = Currency::orderBy('currency', 'asc')->get();
        return view('Admin.currency', ['currencies' => $data]);
    }
    public function addCurrency(){
        return view('Admin.addCurrency');
    }
    public function saveCurrency(Request $request){
        $currency = $request->all();
        Currency:: create($currency);

        $userid = auth()->user()->id;
        $msg = "Added a new Currency";
        notification::create([
        'message' => $msg,
        'userid' => $userid,
        ]);
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

        $userid = auth()->user()->id;
        $msg = "Updated a Currency";
        notification::create([
        'message' => $msg,
        'userid' => $userid,
        ]);
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

        $userid = auth()->user()->id;
        $msg = "Added a new Commodity";
        notification::create([
        'message' => $msg,
        'userid' => $userid,
        ]);
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
        $userid = auth()->user()->id;
        $msg = "Updated a Commodity";
        notification::create([
        'message' => $msg,
        'userid' => $userid,
        ]);
        return redirect()->route('admin.underlaying')->with ('update','Commodity Updated Successfully');
    }


    public function orders(){
        $data =Order::leftjoin('users','orders.userid','=','users.id')->where('orders.status', 1)
        ->select('users.fname','orders.*')
        ->orderBy('id', 'desc')->get();
        return view('Admin.orders', ['orders' => $data]);
    }
    public function editorders($id){
        $oil  = UnderLaying::where('Type', 'Oil and oil Derivatives')->orderBy('id', 'desc')->get();
        $soft = UnderLaying::where('Type', 'Soft Commodities')->orderBy('id', 'desc')->get();
        $metal = UnderLaying::where('Type', 'Metals and Precious Metals')->orderBy('id', 'desc')->get();
        $currency = Currency::orderBy('currency', 'asc')->get();
        $data['orders'] =Order::find($id);
        return view('Admin.editorders',$data,['oils' => $oil,'softs' => $soft,'metals' => $metal,'currencies' => $currency]);
    }

    public function updateorder(Request $request) {
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
            $to_email = $orderDetails->email;
            $to_emailAdmin = env('ADMIN_EMAIL');
            $to_emailAdmin2 = env('ADMIN2_EMAIL');
            $to_emailAdmin3 = env('ADMIN3_EMAIL');

            $requestMail['updateby'] = "admin";
            $requestMail['id'] = $request->id;
            $requestMail['role'] = "user";
            $requestMail['username'] =$orderDetails->fname;
            $requestMail['created_at'] =$orderDetails->created_at;
            $requestMail['FundType'] =$orderDetails->FundType;
            if ($request->filled == 'Yes') {
                Mail::to($to_email)->send(new OrderFilled($requestMail));
            }
            else {
                Mail::to($to_email)->send(new OrderUpdate($requestMail));
            }

            $requestMail['role'] = "admin";
            if ($request->filled == 'Yes') {
                Mail::to($to_emailAdmin)
                    ->cc([$to_emailAdmin2, $to_emailAdmin3])
                    ->send(new OrderFilled($requestMail));
                }
            else {
                Mail::to($to_emailAdmin)
                    ->cc([$to_emailAdmin2, $to_emailAdmin3])
                    ->send(new OrderUpdate($requestMail));
                }
            }
    
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

            if ($order->filled === 'Yes') {
                if ($order->currencytb && $order->amountb) {
                    $this->convertAmount($order->currencytb, $order->amountb, $order);
                } elseif ($order->currencyts && $order->amountts) {
                    $this->convertAmount($order->currencyts, $order->amountts, $order);
                }
            }
    
            return redirect()->route('admin.orders')->with('update', 'Order Updated Successfully');
        }
 
    public function convertAmount($currency, $amount, $order) {
        $amount = str_replace([' ', ','], '', $amount);
        $amount = (float)$amount;
        $currency = strtoupper($currency);
        $apiKey = env('EXCHANGE_RATE_API_KEY');
        $exchangeRateAPI = "https://v6.exchangerate-api.com/v6/{$apiKey}/latest/{$currency}";
    
        $response = Http::get($exchangeRateAPI);
    
        if ($response->successful()) {
            $rate = isset($response->json()['conversion_rates']['USD']) ? $response->json()['conversion_rates']['USD'] : 0;
    
            if (is_numeric($rate)) {
                $convertedAmount = bcmul($amount, $rate, 2);
                $order->converted = $convertedAmount;
                $order->save();
            } else {
                Log::error('Invalid exchange rate for currency ' . $currency);
            }
        } else {
            Log::error('Exchange Rate API failed for currency ' . $currency);
        }
    }
    
    
    public function orderdeatils($id){
        $data['orderData'] =Order::find($id);
        return view('Admin.orderdetail',$data);
    }
    public function orderemail(Request $request){
        $order = Order::find($request->id);
      
        $data1 = Order::leftjoin('users','orders.userid','=','users.id')
        ->where('orders.id',$request->id)->first();
        if ($data1) {
            $requestMail = $data1;
            $to_email = $data1->email;
            $to_emailAdmin = env('ADMIN_EMAIL');
            $to_emailAdmin2 = env('ADMIN2_EMAIL');
            $to_emailAdmin3 = env('ADMIN3_EMAIL');
            $mail = new OrderFilled($requestMail);
            Mail::to($to_email)->send($mail);

            $mail2 = new OrderFilled($requestMail);
            Mail::to($to_emailAdmin)
            ->cc([$to_emailAdmin2, $to_emailAdmin3])
                ->send($mail2);
        }
        return redirect()->route('admin.orders')->with('update', 'Email Sent Successfully');
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


        $data = Investment::leftJoin('users', 'investments.userid', '=', 'users.id')
        ->select('users.fname', 'users.email', 'investments.*')
        ->where('investments.id', $request->id)
        ->first();

        if ($data) {
            $username = $data->fname;
            $status = $data->status;
            $requestMail = $data;
            $requestMail['fname'] = $username;
            $requestMail['status'] = $status;
            $to_email = $data->email;

            $requestMail['role'] = "user";
            $mail = new InvestmentApproved($requestMail);
            $data = Mail::to($to_email)
            ->send($mail);

            $requestMail['role'] = "admin";
            $to_emailAdmin = env('ADMIN_EMAIL');
            $to_emailAdmin2 = env('ADMIN2_EMAIL');
            $to_emailAdmin3 = env('ADMIN3_EMAIL');
            $mail2 = new InvestmentApproved($requestMail);
            Mail::to($to_emailAdmin)
            ->cc([$to_emailAdmin2, $to_emailAdmin3])
                ->send($mail2);

        }
        return redirect()->route('admin.investment')->with('update', 'Investment Updated Successfully');
    }
    public function investmentemail(Request $request){
        $order = Investment::find($request->id);
        $data = Investment::leftJoin('users', 'investments.userid', '=', 'users.id')
            ->select('users.fname', 'users.email', 'investments.*')
            ->where('investments.id', $order->id)
            ->first();

        if ($data) {
            $username = $data->fname;
            $email = $data->email;
            $status = $data->status;
            $requestMail = $request->all();
            $requestMail['username'] = $username;
            $requestMail['status'] = $status;
            $to_email = $email;
            $mail = new ConfirmInvest($requestMail);
            Mail::to($to_email)
                ->send($mail);

        }

        return redirect()->route('admin.investment')->with('update', 'Email Sent Successfully');
    }


    public function clients(){
        $data = User::where('role', 1)
        ->whereIn('status', [1, 2, 3])
        ->orderBy('id', 'desc')
        ->get();
        return view('Admin.clients', ['users' => $data]);
    }
    public function addclient(){
        return view('Admin.addclient');
    }
    public function editclient($id){
        $data['user'] =User::find($id);
        return view('Admin.editclient',$data);
    }
    public function saveclient(Request $Request){
        User::create($Request->all());
        return redirect()->route('admin.clients')->with('success', 'User Created successfully.');
    }
    public function Deleteuser($id){
        $data =User::find($id);
        $data->delete();
        return redirect()->route('admin.clients')->with ('Delete','User Deleted Successfully');;
    }
    public function updateclient(Request $request){
        $request->validate([
            '*' => 'required',
        ]);
        $data = User::find($request->id);

        if ($data) {
            $data->update($request->all());
        }
        $requestMail = $request->all();
        $to_email =  $data->email;
        if($request->status==3){
            $mailstatus = "rejected";
        }
        else{
            $mailstatus = "approved";
        }
        $requestMail['mailstatus'] = $mailstatus;
        $mail = new StatusUpdate($requestMail);
        $data = Mail::to($to_email)->send($mail);
        return redirect()->route('admin.clients')->with('update', 'Clients Updated Successfully');
    }

    public function payments(){
        $data = Payment::leftjoin('users','payments.customer','=','users.id')
        ->leftjoin('beneficiaries','payments.Beneficiary','=','beneficiaries.id')
        ->select('payments.*','users.fname','beneficiaries.accountname','beneficiaries.accountnumber')->orderBy('id', 'desc')->get();
        return view('Admin.payments', ['payments' => $data]);
    }
    public function addpayment(){
        $users = User::where('status',2)->orderBy('id', 'desc')->get();
        return view('Admin.addpayment',['users'=>$users]);
    }
    public function getBeneficiary($id){
        $Beneficiaries = Beneficiaries::where('userid',$id)->get();
        return response()->json($Beneficiaries,200);
    }
    public function getOrder($id){
        $Orders = Order::where('userid',$id)->get();
        return response()->json($Orders,200);
    }
    public function getCurrency($id, $bid){
        $Beneficiaries = Beneficiaries::where('userid', $id)
        ->where('id', $bid)
        ->get();
        return response()->json($Beneficiaries, 200);
    }
    public function savepayment(Request $request){
        $userid=auth()->user()->id;
        $request['userid'] = $userid;
        $payments = $request->all();
        Payment:: create($payments);

        $requestMail = $payments;
        
        $beneficiary = Beneficiaries::find($request->Beneficiary);
        if ($beneficiary) {
            $requestMail['accountname'] = $beneficiary->accountname;
            $requestMail['accountnumber'] = $beneficiary->accountnumber;
        }

        $user = User::find($request->customer);
        if ($user) {
            $requestMail['fname'] = $user->fname;
            $to_email = $user->email;
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
        return redirect()->route('admin.payments')->with ('success','Payment Added Successfully');
    }
    public function deletePayment($id){
        $data =Payment::find($id);
        $data->delete();
        return redirect()->route('admin.payments')->with ('Delete','Payment Deleted Successfully');
    }
    public function editpayment($id){
        $users = User::where('status',2)->orderBy('id', 'desc')->get();
        $data['payment'] =Payment::leftjoin('beneficiaries','payments.Beneficiary','=','beneficiaries.id')
        ->select('payments.*', 'beneficiaries.*', 'payments.id as pid')
        ->where('payments.id',$id)->first();
        return view('Admin.editpayment',$data,['users'=>$users]);
    }
    public function updatepayment(Request $request)
    {
       
        $payment = Payment::find($request->id);
        $getOldbeneficiary=Beneficiaries::find($payment->Beneficiary);
       
        if($getOldbeneficiary){
          
            Session::put('old_accountname', $getOldbeneficiary->accountname);
            Session::put('old_accountnumber', $getOldbeneficiary->accountnumber);

        }
        if ($payment) {
        
            $oldStatus = $payment->status; 
            $newStatus = $request->status;
            Session::put('old_amount', $payment->amount);
            Session::put('old_currency', $payment->currency);

        
            $payment->update($request->all());

            if ($oldStatus === $newStatus) {
            
                $mypayment = Payment::where('id', $request->id)->first();
                $requestMail = $mypayment;

            
                $beneficiary = Beneficiaries::find($mypayment->Beneficiary);
                if ($beneficiary) {
                    $requestMail['accountname'] = $beneficiary->accountname;
                    $requestMail['accountnumber'] = $beneficiary->accountnumber;
                }

            
                $user = User::find($mypayment->customer);
                if ($user) {
                    $requestMail['fname'] = $user->fname;
                    $to_email = $user->email;

                    
                    $requestMail['role'] = "user";
                    $mail = new PaymentUpdate($requestMail);
                    Mail::to($to_email)->send($mail);
                }

        
                $requestMail['role'] = "admin";
                $to_emailAdmin = env('ADMIN_EMAIL');
                $to_emailAdmin2 = env('ADMIN2_EMAIL');
                $to_emailAdmin3 = env('ADMIN3_EMAIL');
                $mail2 = new PaymentUpdate($requestMail);
                Mail::to($to_emailAdmin)
                ->cc([$to_emailAdmin2, $to_emailAdmin3])
                    ->send($mail2);
            }
        
        }

        return redirect()->route('admin.payments')->with('update', 'Payment Updated Successfully');
    }
    public function paymentemail($id){
        $payment = Payment::find($id);
        $data1 = Payment::leftJoin('users', 'payments.customer', '=', 'users.id')
        ->leftJoin('beneficiaries', 'payments.Beneficiary', '=', 'beneficiaries.id')
        ->select('users.fname', 'users.email', 'payments.*','payments.id as pid','payments.created_at as pdate','beneficiaries.*' )
        ->where('payments.id',$id)
        ->first();

        if ($data1) {
            $requestMail = $data1;
            $requestMail['role']="admin";
            $to_email = env('ADMIN_EMAIL');
            $to_emailAdmin2 = env('ADMIN2_EMAIL');
            $to_emailAdmin3 = env('ADMIN3_EMAIL');
            $mail = new PaymentApproved($requestMail);
            Mail::to($to_email)
            ->cc([$to_emailAdmin2, $to_emailAdmin3])
                ->send($mail);
        }

        $data2 = Payment::leftJoin('users', 'payments.customer', '=', 'users.id')
        ->leftJoin('beneficiaries', 'payments.Beneficiary', '=', 'beneficiaries.id')
        ->select('users.fname', 'users.email', 'payments.*','payments.id as pid','payments.created_at as pdate','beneficiaries.*' )
        ->where('payments.id',$id)
        ->first();

        if ($data2) {
            $username=auth()->user()->fname;
            $status = $data2->status;
            $requestMail = $data2;
            $requestMail['role']="user";
            $to_useremail = $data2->email;
            $mail = new PaymentApproved($requestMail);
            Mail::to($to_useremail)
                ->send($mail);

        }

        return redirect()->route('admin.payments')->with ('update','Mail Sent Successfully');
    }

}