<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',function(){
    return view('guest.home');
});

Route::get('/home',function(){
    return view('guest.home');
});


Route::get('/about',function(){
    return view('guest.aboutus');
});


Route::get('/contact',[ContactController::class,'index']);
Route::post('/save-contact',[ContactController::class,'create']);


Route::get('/login',function(){
    return view('guest.login');
});

Route::get('/signup',function(){
    return view('guest.signup');
});

Route::get('/services',function(){
    return view('guest.services');
});

Route::get('/ijtamai-shaadi', function () {
    return view('guest.ijtamaiShadi');
});