<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::controller(WebController::class)->group(function(){
    Route::get('/','index')->name('/');
    Route::get('about','about')->name('about');
    Route::get('signup','signup')->name('signup');
    Route::get('platform','platform')->name('platform');
    Route::post('createuser','createuser')->name('createuser');
    Route::post('saveInquiry','saveInquiry')->name('saveInquiry');
    Route::get('fxMmanagement','fxMmanagement')->name('fxMmanagement');
    Route::get('onlineInquiry','onlineInquiry')->name('onlineInquiry');
    Route::get('onlineInquiry','onlineInquiry')->name('onlineInquiry');
    Route::get('liquidityProvider','liquidityProvider')->name('liquidityProvider');
    Route::get('NgoFlowOptimization','NgoFlowOptimization')->name('NgoFlowOptimization');


});


Route::group(['middleware' => ['AdminMiddleware']], function () {
    Route::prefix('admin')->group(function(){
        Route::controller(AdminController::class)->group(function(){

            Route::get('dashboard','dashboard')->name('admin.dashboard');
            Route::get('notifications','notifications')->name('admin.notifications');


            Route::get('currency','currency')->name('admin.currency');
            Route::get('addCurrency','addCurrency')->name('admin.addCurrency');
            Route::post('saveCurrency','saveCurrency')->name('admin.saveCurrency');
            Route::get('editCurrency/{id}','editCurrency')->name('admin.editCurrency');
            Route::post('updateCurrency','updateCurrency')->name('admin.updateCurrency');
            Route::get('deleteCurrency/{id}','deleteCurrency')->name('admin.deleteCurrency');


            Route::get('underlaying','underlaying')->name('admin.underlaying');
            Route::get('addCommodity','addCommodity')->name('admin.addCommodity');
            Route::post('saveCommodity','saveCommodity')->name('admin.saveCommodity');
            Route::get('editCommodity/{id}','editCommodity')->name('admin.editCommodity');
            Route::get('orderemail/{id}','orderemail')->name('admin.orderemail');
            Route::post('updateCommodity','updateCommodity')->name('admin.updateCommodity');
            Route::get('deleteCommodity/{id}','deleteCommodity')->name('admin.deleteCommodity');


            Route::get('orders','orders')->name('admin.orders');
            Route::post('updateorder','updateorder')->name('admin.updateorder');
            Route::get('editorders/{id}','editorders')->name('admin.editorders');
            Route::get('orderdeatils/{id}','orderdeatils')->name('admin.orderdeatils');


            Route::get('investment','investment')->name('admin.investment');
            Route::get('editinvestment/{id}','editinvestment')->name('admin.editinvestment');
            Route::get('investmentemail/{id}','investmentemail')->name('admin.investmentemail');
            Route::post('updateinvestment','updateinvestment')->name('admin.updateinvestment');


            Route::get('clients','clients')->name('admin.clients');
            Route::get('addclient','addclient')->name('admin.addclient');
            Route::get('editclient/{id}','editclient')->name('admin.editclient');
            Route::post('saveclient','saveclient')->name('admin.saveclient');
            Route::post('updateclient','updateclient')->name('admin.updateclient');
            Route::get('Deleteuser/{id}','Deleteuser')->name('admin.Deleteuser');

            Route::get('getBeneficiary/{id}','getBeneficiary')->name('admin.getBeneficiary');
            Route::get('getOrder/{id}','getOrder')->name('admin.getOrder');

            Route::get('payments','payments')->name('admin.payments');
            Route::get('addpayment','addpayment')->name('admin.addpayment');
            Route::post('savepayment','savepayment')->name('admin.savepayment');
            Route::get('editpayment/{id}','editpayment')->name('admin.editpayment');
            Route::post('updatepayment','updatepayment')->name('admin.updatepayment');
            Route::get('deletePayment/{id}','deletePayment')->name('admin.deletePayment');
            Route::get('paymentemail/{id}','paymentemail')->name('admin.paymentemail');


        });
    });
});


Route::group(['middleware' => ['UserMiddleware']], function () {
    Route::prefix('user')->group(function(){
        Route::controller(UserController::class)->group(function(){

            Route::get('dashboard','dashboard')->name('user.dashboard');
            Route::get('notifications','notifications')->name('user.notifications');


            Route::get('products','products')->name('user.products');
            Route::get('orderdetail','orderdetail')->name('user.orderdetail');
            Route::post('submitorder','submitorder')->name('user.submitorder');
            Route::get('validateOrder/{id}','validateOrder')->name('admin.validateOrder');
            
            
            
            Route::get('investment','investment')->name('user.investment');
            Route::get('makeinvestment','makeinvestment')->name('user.makeinvestment');
            Route::post('createinvestment','createinvestment')->name('user.createinvestment');
            Route::get('Deleteinvestment/{id}','Deleteinvestment')->name('user.Deleteinvestment');
            
            
            Route::get('profile','profile')->name('user.profile');
            Route::post('updateprofile','updateprofile')->name('user.updateprofile');
            

            Route::get('bank','bank')->name('user.bank');
            Route::post('addbank','addbank')->name('user.addbank');

            
            Route::get('beneficiaries','beneficiaries')->name('user.beneficiaries');
            Route::get('addbeneficiaries','addbeneficiaries')->name('user.addbeneficiaries');
            Route::post('createbeneficiaries','createbeneficiaries')->name('user.createbeneficiaries');

            Route::get('orders','orders')->name('user.orders');
            Route::post('updateorder','updateorder')->name('user.updateorder');
            Route::get('editorders/{id}','editorders')->name('user.editorders');
            Route::get('orderdeatils/{id}','orderdeatils')->name('user.orderdeatils');
            
        });
    });
});

Route::group(['middleware' => ['UserMiddleware']], function () {
    Route::controller(WebController::class)->group(function(){
         Route::get('login','login')->name('login');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
