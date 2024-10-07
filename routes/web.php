<?php

use Illuminate\Support\Facades\Route;




//Route::get('/', function () {return view('login');});

Route::get('/login', function () {return view('login');})->name('loginpage');




Route::get('/registration', function () {return view('registration');})->name('registrationpage');



Route::get('/test', function () { return response()->json(['message' => 'API is working!']);});
 

