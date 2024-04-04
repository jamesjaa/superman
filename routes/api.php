<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\passwordController;
use App\Http\Controllers\websettingController;
use App\Http\Controllers\smsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resource('dashboard', dashboardController::class)->except(['create', 'edit']);
Route::resource('users', UserController::class)->except(['create', 'edit']);
Route::resource('password', passwordController::class)->except(['create', 'edit']);
Route::resource('websetting', websettingController::class)->except(['create', 'edit']);
Route::resource('sms', smsController::class)->except(['create', 'edit']);
// Route::resource('bank', BankController::class)->except(['create', 'edit']);
