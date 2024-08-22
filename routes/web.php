<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    // Route::group(['middleware'=>'user'],function(){
        Route::get('/dashboard', 'dashboard')->name('user.dashboard');
        Route::get('/logout', 'logout')->name('logout');
    // });
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/',function(){
        return redirect()->route('login.form');
    });
    Route::get('login',[AdminController::class,'login_form'])->name('login.form');
    Route::post('login-functionality',[AdminController::class,'login_functionality'])->name('login.functionality');
    Route::group(['middleware'=>'admin'],function(){
        Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    });
});