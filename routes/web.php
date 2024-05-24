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
    Route::get('login','login')->name('login');
    Route::get('signup','signup')->name('signup');
    Route::post('createuser','createuser')->name('createuser');
});
Route::group(['middleware' => ['AdminMiddleware']], function () {
    Route::prefix('admin')->group(function(){
        Route::controller(AdminController::class)->group(function(){
            Route::get('orders','orders')->name('admin.orders');
            Route::get('clients','clients')->name('admin.clients');
            Route::get('dashboard','dashboard')->name('admin.dashboard');
            Route::get('payments','payments')->name('admin.payments');
            Route::get('notifications','notifications')->name('admin.notifications');
            Route::get('Deleteuser/{id}','Deleteuser')->name('admin.Deleteuser');
        });
    });
});

Route::group(['middleware' => ['UserMiddleware']], function () {
    Route::prefix('user')->group(function(){
        Route::controller(UserController::class)->group(function(){
            Route::get('bank','bank')->name('user.bank');
            Route::get('beneficiaries','beneficiaries')->name('user.beneficiaries');
            Route::get('dashboard','dashboard')->name('user.dashboard');
            Route::get('investment','investment')->name('user.investment');
            Route::get('notifications','notifications')->name('user.notifications');
            Route::get('orderdetail','orderdetail')->name('user.orderdetail');
            Route::get('products','products')->name('user.products');
            Route::get('profile','profile')->name('user.profile');
        });
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
