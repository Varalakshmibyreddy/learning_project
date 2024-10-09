<?php

use App\Http\Controllers\Members;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list',[MemberController::class,'operations']);