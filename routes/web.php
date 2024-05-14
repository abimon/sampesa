<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',function(){
        if(Auth()->user()->fname == null){
            return view('auth.step-two');
        }
        else{
            return view('dashboard.index');
        }
    });
    Route::resources([
        'user'=>UserController::class,
        'chat'=>MessageController::class,
    ]);
    Route::get('/profile',function(){
        return view('dashboard.user.profile');
    });
});
Route::get('/log', function(){
    return url()->previous();
});