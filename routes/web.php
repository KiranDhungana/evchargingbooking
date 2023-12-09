<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


// Route::get('/test', [UserController::class, 'test']);

Route::get('/register', [UserController::class, 'loadRegister']);
Route::post('/register', [UserController::class, 'studentRegister'])->name('studentRegister');
Route::get('/', [UserController::class, 'loadLogin']);
Route::get('/login', function () {
    return redirect('/');
});
Route::get('/test', function () {
    return redirect('/test');
});


Route::post('/login', [UserController::class, 'userLogin'])->name('userLogin');

Route::get('/verification/{id}', [UserController::class, 'verification']);
Route::post('/verified', [UserController::class, 'verifiedOtp'])->name('verifiedOtp');
Route::get('/dashboard', [UserController::class, 'loadDashboard']);

Route::get('/resend-otp', [UserController::class, 'resendOtp'])->name('resendOtp');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/test', [UserController::class, 'test'])->name('test');