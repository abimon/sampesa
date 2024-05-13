<?php

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
            return view('layouts.dashboard');
        }
    });
    Route::resources([
        'user'=>UserController::class,
    ]);
});
Route::get('/log', function(){
    return url()->previous();
});