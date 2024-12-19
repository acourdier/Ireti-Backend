<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Director;
use App\Models\Owner;
use App\Models\Ubo;
use Illuminate\Http\Request;
use App\Mail\InquiryMail;
use App\Mail\InquiryConfirmation;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function fxMmanagement(){
        return view('fxMmanagement');
    }
    public function liquidityProvider(){
        return view('liquidityProvider');
    }
    public function NgoFlowOptimization(){
        return view('NgoFlowOptimization');
    }
    public function ESGInvestments(){
        return view('ESGInvestments');
    }
    public function onlineInquiry(){
        $userId = session('userId');
        return view('onlineInquiry', compact('userId'));
    }
    public function platform(){
        return view('platform');
    }
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }
    public function createuser(Request $Request){
        $Request->validate([
            'fname' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'username' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        $user = User::create($Request->all());
        return redirect()->route('onlineInquiry')->with('userId', $user->id);
    }
    public function saveInquiry(Request $request){

       
        $request->validate([
            'in_fullname' => 'required',
            'in_position' => 'required',
            'in_email' => 'required',
            'in_phone' => 'required',
            'legalname' => 'required',
            'tradingname' => 'required',
            'regNmber' => 'required',
            'regDate' => 'required',
            'vat' => 'required',
            'companylink' => 'required',
            'corWeb' => 'required',
            'companyEmail' => 'required',
            'directors' => 'required',
            'emp' => 'required',
            'incorporationCountry' => 'required',
            'regAdd' => 'required',
            'regCity' => 'required',
            'regState' => 'required',
            'regPostCode' => 'required',
            'opCountry' => 'required',
            'opAdd' => 'required',
            'opCity' => 'required',
            'opState' => 'required',
            'opPostCode' => 'required',
            'industry' => 'required',
            'serviceDes' => 'required',
            'salesChannel' => 'required',
            'webURL1' => 'required',
            'webURL2' => 'required',
            'webURL3' => 'required',
            'other' => 'required',
            'businessYears' => 'required',
            'licence' => 'required',
            'regAuthCountry' => 'required',
            'regAuthNmbr' => 'required',
            'regAuthNmbr' => 'required',
            'refName' => 'required',
            'idFile' => 'required',
            'billFile' => 'required',
            'incorporationFile' => 'required',
            'memorandumFile' => 'required',
            'resolutionFile' => 'required',
            'sign' => 'required',
            'position' => 'required',
            'dateAndPlace' => 'required',
             ], [
            'refName.required' => 'Please select at least one referral source.',
        ]);

        $user = User::find($request->id);
          
       
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
    
        if ($request->hasFile('idFile')) {
            $photo1 = $request->file('idFile');
            $photo_name1 = time() . "-" . $photo1->getClientOriginalName();
            $photo_destination = public_path('uploads');
            $photo1->move($photo_destination, $photo_name1);
            $user->idFile = $photo_name1;
           
        }
    
        if ($request->hasFile('billFile')) {
            $photo2 = $request->file('billFile');
            $photo2_name = time() . "-" . $photo2->getClientOriginalName();
            $photo2_destination = public_path('uploads');
            $photo2->move($photo2_destination, $photo2_name);
            $user->billFile = $photo2_name;
           
        }
       
        if ($request->hasFile('incorporationFile')) {
            $photo3 = $request->file('incorporationFile');
            $photo3_name = time() . "-" . $photo3->getClientOriginalName();
            $photo3_destination = public_path('uploads');
            $photo3->move($photo3_destination, $photo3_name);
            $user->incorporationFile = $photo3_name;
            
        }
        
        if ($request->hasFile('memorandumFile')) {
            $photo4 = $request->file('memorandumFile');
            $photo4_name = time() . "-" . $photo4->getClientOriginalName();
            $photo4_destination = public_path('uploads');
            $photo4->move($photo4_destination, $photo4_name);
            $user->memorandumFile = $photo4_name;
            
        }
        
        if ($request->hasFile('resolutionFile')) {
            $photo5 = $request->file('resolutionFile');
            $photo5_name = time() . "-" . $photo5->getClientOriginalName();
            $photo5_destination = public_path('uploads');
            $photo5->move($photo5_destination, $photo5_name);
            $user->resolutionFile = $photo5_name;
           
        }
        
        $user->fill($request->except([
            'idFile', 
            'billFile', 
            'incorporationFile', 
            'memorandumFile', 
            'resolutionFile'
        ]));
    
        $user->save();
       
        $userid = $user->id;
        
        $dirNames = $request->input('dirName');
        $dirCountries = $request->input('dirCountry');
        $dirAddresses = $request->input('dirAddress');
        $dirCities = $request->input('dirCity');
        $dirPostcodes = $request->input('dirPostcode');
        $dirDOBs = $request->input('dirDOB');
        $dirPassports = $request->input('dirPassport');
        $dirExps = $request->input('dirExp');
        $dirNationalities = $request->input('dirNationality');
    
        if (is_array($dirNames)) {
            foreach ($dirNames as $index => $dirName) {
                Director::create([
                    'userid' => $userid,
                    'dirName' => $dirName,
                    'dirCountry' => $dirCountries[$index],
                    'dirAddress' => $dirAddresses[$index],
                    'dirCity' => $dirCities[$index],
                    'dirPostcode' => $dirPostcodes[$index],
                    'dirDOB' => $dirDOBs[$index],
                    'dirPassport' => $dirPassports[$index],
                    'dirExp' => $dirExps[$index],
                    'dirNationality' => $dirNationalities[$index],
                ]);
            }
        }
        
        $ownerNames = $request->input('ownerName');
        $ownerCountries = $request->input('ownerCountry');
        $ownerAddresses = $request->input('ownerAddress');
        $ownerCities = $request->input('ownerCity');
        $ownerPostcodes = $request->input('ownerPostcode');
        $ownerDOBs = $request->input('ownerDOB');
        $ownerPassports = $request->input('ownerPassport');
        $ownerExps = $request->input('ownerExp');
        $ownerNationalities = $request->input('ownerNationality');
        $ownerShares = $request->input('ownerShare');
        if (is_array($ownerNames)) {
            foreach ($ownerNames as $index => $ownerName) {
                Owner::create([
                    'userid' => $userid,
                    'ownerName' => $ownerName,
                    'ownerCountry' => $ownerCountries[$index],
                    'ownerAddress' => $ownerAddresses[$index],
                    'ownerCity' => $ownerCities[$index],
                    'ownerPostcode' => $ownerPostcodes[$index],
                    'ownerDOB' => $ownerDOBs[$index],
                    'ownerPassport' => $ownerPassports[$index],
                    'ownerExp' => $ownerExps[$index],
                    'ownerNationality' => $ownerNationalities[$index],
                    'ownerShare' => $ownerShares[$index],
                ]);

            
            }
        }
        
        $uboNames = $request->input('uboName');
        $uboCountries = $request->input('uboCountry');
        $uboAddresses = $request->input('uboAddress');
        $uboCities = $request->input('uboCity');
        $uboPostcodes = $request->input('uboPostcode');
        $uboDOBs = $request->input('uboDOB');
        $uboPassports = $request->input('uboPassport');
        $uboExps = $request->input('uboExp');
        $uboNationalities = $request->input('uboNationality');
        $uboShares = $request->input('uboShare');
        if (is_array($uboNames)) {
            foreach ($uboNames as $index => $uboName) {
                ubo::create([
                    'userid' => $userid,
                    'uboName' => $uboName,
                    'uboCountry' => $uboCountries[$index],
                    'uboAddress' => $uboAddresses[$index],
                    'uboCity' => $uboCities[$index],
                    'uboPostcode' => $uboPostcodes[$index],
                    'uboDOB' => $uboDOBs[$index],
                    'uboPassport' => $uboPassports[$index],
                    'uboExp' => $uboExps[$index],
                    'uboNationality' => $uboNationalities[$index],
                    'uboShare' => $uboShares[$index],
                ]);
            }
        }
       
        $requestMail = $request->all();
        $requestMail['fname'] = $user->fname;
        $to_email = $user->email;

        $mail = new InquiryConfirmation($requestMail);
        $data = Mail::to($to_email)
            ->send($mail);

        // $to_email = env('ADMIN_EMAIL');
        // $to_emailAdmin2 = env('ADMIN2_EMAIL');
        // $to_emailAdmin3 = env('ADMIN3_EMAIL');
        // $mail = new InquiryMail($requestMail);
        // Mail::to($to_email)
        // ->cc([$to_emailAdmin2, $to_emailAdmin3])
        //     ->send($mail);
        return redirect('/login')->with('success', 'We will get back to you soon to finalize your onboarding.');
    }
    public function terms(){
        return view('terms');
    }
    
}
