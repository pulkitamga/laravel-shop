<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\AdminLoginController;
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
Route::group(['middleware'=>'isLoggedin'],function()
{
    Route::controller(AuthController::class)->group(function(){
        //routes then function name
        // Route::get('/register','Register')->name('register');
        // Route::get('/login','Login')->name('login');
        // Route::post('register-user','RegisterUser')->name('register-user');
        // Route::post('/login-user','Loginuser')->name('login-user');
        Route::get('dashboard','Dashboard')->name('dashboard');
        Route::get('user','user')->name('user');
        Route::get('/logout','Logout')->name('logout');
    });
});
Route::controller(AuthController::class)->group(function(){
    //routes then function name
    Route::get('/register','Register')->name('register')->middleware('alreadyLoggedIn');
    Route::get('/login','Login')->name('login')->middleware('alreadyLoggedIn');
    Route::post('register-user','RegisterUser')->name('register-user');
    Route::post('/login-user','Loginuser')->name('login-user');
    
   // Route::get('user','user')->name('user');
    Route::get('/logout','Logout')->name('logout');
});

