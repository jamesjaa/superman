<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\passwordController;
use App\Http\Controllers\websettingController;
use App\Http\Controllers\smsController;
use App\Http\Controllers\DownloadController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'fromlogin']);
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);

Route::get('index', [LoginController::class, 'index']);
Route::get('users', [UserController::class, 'index']);
Route::get('dashboard', [dashboardController::class, 'index']);
Route::get('password', [passwordController::class, 'index']);
Route::get('websetting', [websettingController::class, 'index']);
Route::get('sms', [smsController::class, 'index']);

Route::get('/download-csv', [DownloadController::class, 'downloadCSV'])->name('download.csv');


// Route::resource('dashboard', dashboardController::class)->only(['create', 'edit']);
// Route::resource('users', UserController::class)->only(['create', 'edit']);
// Route::resource('password', passwordController::class)->only(['create', 'edit']);
// Route::resource('websetting', websettingController::class)->only(['create', 'edit']);
// Route::resource('sms', smsController::class)->only(['create', 'edit']);
