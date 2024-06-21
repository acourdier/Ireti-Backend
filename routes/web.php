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
    Route::get('fxMmanagement','fxMmanagement')->name('fxMmanagement');
    Route::get('liquidityProvider','liquidityProvider')->name('liquidityProvider');
    Route::get('NgoFlowOptimization','NgoFlowOptimization')->name('NgoFlowOptimization');
    Route::get('onlineInquiry','onlineInquiry')->name('onlineInquiry');
    Route::get('platform','platform')->name('platform');
    Route::get('signup','signup')->name('signup');
    Route::post('createuser','createuser')->name('createuser');
    Route::get('onlineInquiry','onlineInquiry')->name('onlineInquiry');
    Route::post('saveInquiry','saveInquiry')->name('saveInquiry');

});
Route::group(['middleware' => ['AdminMiddleware']], function () {
    Route::prefix('admin')->group(function(){
        Route::controller(AdminController::class)->group(function(){



            Route::get('investment','investment')->name('admin.investment');
            Route::get('editinvestment/{id}','editinvestment')->name('admin.editinvestment');
            Route::post('updateinvestment','updateinvestment')->name('admin.updateinvestment');

            Route::get('clients','clients')->name('admin.clients');
            Route::get('dashboard','dashboard')->name('admin.dashboard');
            Route::get('notifications','notifications')->name('admin.notifications');
            Route::get('Deleteuser/{id}','Deleteuser')->name('admin.Deleteuser');
            
            
            Route::get('currency','currency')->name('admin.currency');
            Route::get('addCurrency','addCurrency')->name('admin.addCurrency');
            Route::post('saveCurrency','saveCurrency')->name('admin.saveCurrency');
            Route::get('editCurrency/{id}','editCurrency')->name('admin.editCurrency');
            Route::post('updateCurrency','updateCurrency')->name('admin.updateCurrency');
            Route::get('deleteCurrency/{id}','deleteCurrency')->name('admin.deleteCurrency');


            Route::get('underlaying','underlaying')->name('admin.underlaying');
            Route::get('addCommodity','addCommodity')->name('admin.addCommodity');
            Route::post('saveCommodity','saveCommodity')->name('admin.saveCommodity');
            Route::get('deleteCommodity/{id}','deleteCommodity')->name('admin.deleteCommodity');
            Route::get('editCommodity/{id}','editCommodity')->name('admin.editCommodity');
            Route::post('updateCommodity','updateCommodity')->name('admin.updateCommodity');


            Route::get('orders','orders')->name('admin.orders');
            Route::get('editorders/{id}','editorders')->name('admin.editorders');
            Route::post('updateorder','updateorder')->name('admin.updateorder');


            Route::get('payments','payments')->name('admin.payments');
            Route::get('addpayment','addpayment')->name('admin.addpayment');
            Route::post('savepayment','savepayment')->name('admin.savepayment');
            Route::get('deletePayment/{id}','deletePayment')->name('admin.deletePayment');
            Route::get('editpayment/{id}','editpayment')->name('admin.editpayment');

        });
    });
});


Route::group(['middleware' => ['UserMiddleware']], function () {
    Route::prefix('user')->group(function(){
        Route::controller(UserController::class)->group(function(){
            Route::get('dashboard','dashboard')->name('user.dashboard');

            Route::get('bank','bank')->name('user.bank');
            Route::post('addbank','addbank')->name('user.addbank');

            Route::get('beneficiaries','beneficiaries')->name('user.beneficiaries');
            Route::get('addbeneficiaries','addbeneficiaries')->name('user.addbeneficiaries');
            Route::post('createbeneficiaries','createbeneficiaries')->name('user.createbeneficiaries');

            Route::get('investment','investment')->name('user.investment');
            Route::get('makeinvestment','makeinvestment')->name('user.makeinvestment');
            Route::get('Deleteinvestment/{id}','Deleteinvestment')->name('user.Deleteinvestment');
            Route::post('createinvestment','createinvestment')->name('user.createinvestment');
            
            Route::get('orderdetail','orderdetail')->name('user.orderdetail');
            Route::get('products','products')->name('user.products');
            Route::post('submitorder','submitorder')->name('user.submitorder');

            Route::get('profile','profile')->name('user.profile');
            Route::post('updateprofile','updateprofile')->name('user.updateprofile');
            
            Route::get('notifications','notifications')->name('user.notifications');
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
