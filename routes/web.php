<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepositController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\WithdrawController;

use App\Http\Controllers\ProfileController;

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

Auth::routes();

// Home Routes Start Here

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Home Routes End Here

// Deposit Routes Start Here

Route::get('/deposit',[DepositController::class,'deposit']);

Route::post('/upload_deposit',[DepositController::class,'upload']);

// Deposit Routes End Here

// Withdraw Routes Start Here

Route::get('/withdraw',[WithdrawController::class,'withdraw']);

Route::post('/upload_withdraw',[WithdrawController::class,'uploadWithdraw']);

Route::get('/withdraw_request',[WithdrawController::class,'withdrawRequest']);

Route::get('/cancel_withdraw/{id}',[WithdrawController::class,'cancel_withdraw']);

// Withdraw Routes End Here


// Profile routes Start Here
Route::get('/profile',[ProfileController::class,'profile']);
Route::get('/showProfile',[ProfileController::class,'showProfile']);


Route::get('/dashboard',[AdminController::class,'dashboard']);

Auth::routes();
