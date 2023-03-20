<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Account_User;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;

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

Route::get('/home', [App\Http\Controllers\AccountController::class, 'index'])->name('home');

Route::post('/add_accounts',[AccountController::class,'create']);

Route::view('add_accounts', 'add_accounts');

Route::post('/add_users', [Account_User::class ,'create']);
Route::view('add_users', 'add_users');

Route::get('users', [App\Http\Controllers\Account_User::class, 'index'])->name('users');


Route::get('delete/{id}',[AccountController::class, 'destroy'])->name('destroy');

Route::get('update/{id}',[AccountController::class, 'edit'])->name('edit');

Route::post('editform', [AccountController::class, 'update'])->name('update');


Route::view('editform', 'editform');

Route::view('transaction', 'transaction');

Route::get('/transaction',[TransactionController::class, 'index']);

Route::post('add_transaction',[TransactionController::class,'store']);

Route::view('dashboard', 'dashboard');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);










?>