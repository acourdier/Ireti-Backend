<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Investment;
use App\Models\Currency;
use App\Models\UnderLaying;
use App\Models\Payment;
use App\Models\notification;
use App\Models\Director;
use App\Models\Owner;
use App\Models\Ubo;
use App\Models\Beneficiaries;
use Illuminate\Http\Request;
use App\Mail\ConfirmInvest;
use App\Mail\OrderFilled;
use App\Mail\OrderFilledConfirmation;
use App\Mail\OrderUpdate;
use App\Mail\OrderUpdateConfirmation;
use App\Mail\PaymentMail;
use App\Mail\PaymentUpdate;
use App\Mail\PaymentConfirmation;
use Illuminate\Support\Facades\Mail;
class AdminController extends Controller
{

    public function dashboard(){
        $counttotalorders = Order::where('status', 1)
        ->where('filled', 'No')
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
    public function updateorder(Request $request){
        $order = Order::find($request->id);
        if ($order) {
            $data1 = Order::leftjoin('users','orders.userid','=','users.id')
            ->where('orders.id',$request->id)->first();
            if ($data1) {
                $requestMail = $data1;
                $to_email = $data1->email;
                $to_emailAdmin = "mehakamir187@gmail.com";
                $to_emailAdmin2 = "Gabriel.olugbenga@ireticapital.com";

                $mail = new OrderUpdateConfirmation($requestMail);
                Mail::to($to_email)
                    ->send($mail);
                
                $mail2 = new OrderUpdate($requestMail);
                Mail::to($to_emailAdmin)
                    ->cc($to_emailAdmin2)
                    ->send($mail2);
                $order->update($request->all());
            }
        }
        return redirect()->route('admin.orders')->with ('update','Order Updated Successfully');
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
            $to_emailAdmin = "mehakamir187@gmail.com";
            $to_emailAdmin2 = "Gabriel.olugbenga@ireticapital.com";
            $mail = new OrderFilledConfirmation($requestMail);
            Mail::to($to_email)->send($mail);

            $mail2 = new OrderFilled($requestMail);
            Mail::to($to_emailAdmin)
                ->cc($to_emailAdmin2)
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

        // $data = Investment::leftJoin('users', 'investments.userid', '=', 'users.id')
        //     ->select('users.fname', 'users.email', 'investments.*')
        //     ->where('investments.id', $order->id)
        //     ->first();

        // if ($data) {
        //     $username = $data->fname;
        //     $email = $data->email;
        //     $requestMail = $request->all();
        //     $requestMail['username'] = $username;
        //     $to_email = $email;
        //     $mail = new ConfirmInvest($requestMail);
        //     Mail::to($to_email)
        //         ->send($mail);
        // }

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
    public function viewuser($id){
        $data['user'] =User::find($id);
        $data['directors'] =Director::where('userid',$id)->get();
        $data['owners'] =Owner::where('userid',$id)->get();
        $data['ubos'] =Ubo::where('userid',$id)->get();
        return view('Admin.viewuser',$data);
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

        $username=auth()->user()->fname;
        $requestMail = $request->all();
        $requestMail['username'] = $username;
        $to_email = "Sullivan.joubert@ireticapital.com";
        $to_email1 = "Gabriel.olugbenga@ireticapital.com";
        $mail = new PaymentMail($requestMail);
        Mail::to($to_email)
            ->cc($to_email1)
            ->send($mail);

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
        ->where('payments.id',$id)->first();
        return view('Admin.editpayment',$data,['users'=>$users]);
    }
    public function updatepayment(Request $request){
        $payment = Payment::find($request->id);
        if ($payment) {
            $payment->update($request->all());
        }
        return redirect()->route('admin.payments')->with ('update','Payment Updated Successfully');
    }
    public function paymentemail($id){
        $payment = Payment::find($id);
        $data1 = Payment::leftJoin('users', 'payments.customer', '=', 'users.id')
        ->leftJoin('orders', 'payments.orderid', '=', 'orders.id')
        ->select('users.fname', 'users.email', 'payments.*','payments.id as pid','payments.created_at as pdate','orders.*','orders.id as oid','orders.created_at as orderdate' )
        ->where('payments.orderid',$id)
        ->first();

        if ($data1) {
            $requestMail = $data1;
            $to_email = "mehakamir187@gmail.com";
            $to_email1 = "Gabriel.olugbenga@ireticapital.com";
            $mail = new PaymentUpdate($requestMail);
            Mail::to($to_email)
                ->cc($to_email1)
                ->send($mail);
        }

        // -----for user-------
        $data2 = Payment::leftJoin('users', 'payments.customer', '=', 'users.id')
        ->leftJoin('orders', 'payments.orderid', '=', 'orders.id')
        ->select('users.fname', 'users.email', 'payments.*','payments.id as pid','payments.created_at as pdate','orders.*','orders.id as oid','orders.created_at as orderdate' )
        ->where('payments.orderid',$id)
        ->first();
        // print_r($data2); die();

        if ($data2) {
            $username=auth()->user()->fname;
            $status = $data2->status;
            $requestMail = $data2;
            // $requestMail['username'] = $username;
            // $requestMail['status'] = $status;

            $to_useremail = $data2->email;
            $mail = new PaymentConfirmation($requestMail);
            Mail::to($to_useremail)
                ->send($mail);

        }

        return redirect()->route('admin.payments')->with ('update','Mail Sent Successfully');
    }

}