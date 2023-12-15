<?php

use App\Http\Controllers\loginsignup;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
// Route::get('/', [UserController::class, 'loadLogin']);
Route::get('/', function () {
    return view('homepage.landingpage');
});

Route::get('/logout', function () {
    Session::flush();
    redirect('/');
})->name('logout');

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/login', [UserController::class, 'loadLogin']);


Route::get('/forgetpassword', function () {
    return view('forgetpassword');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/otp', function () {
    return view('otp');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/superadmin', function () {
    return view('superadmin');
});

Route::get('/home', function () {
    return view('homepage.landingpage');
});

// Auth::route();

Route::get('/homepage', function () {
    return view('homepage.landingpage');
})->name('login');



Route::post('/login', [loginsignup::class, 'userLogin'])->name('userLogin');

Route::get('/verification/{id}', [UserController::class, 'verification']);
Route::post('/verified', [UserController::class, 'verifiedOtp'])->name('verifiedOtp');
Route::get('/dashboard', [UserController::class, 'loadDashboard'])->middleware('auth');

Route::get('/resend-otp', [UserController::class, 'resendOtp'])->name('resendOtp');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/test', [UserController::class, 'test'])->name('test');
Route::get('/location', [UserController::class, 'getUserLocation'])->name('getUserLocation');
Route::post('/save-location', [UserController::class, 'savelocation'])->name('getUserLocation');
Route::post('/location', [UserController::class, 'handleData'])->name('store');

// change password
Route::get('/forgetpassword', [UserController::class, 'changepassword'])->name('changepassword');
Route::post('/forgetpassword', [UserController::class, 'resetpassword'])->name('resetpassword');
Route::get('/changepasswordnew/{id}', [UserController::class, 'changepasswordnew'])->name('changepasswordnew');
Route::post('/checkotp', [UserController::class, 'checkotp'])->name('checkotp');
Route::get('/setnewpassword/{id}', [UserController::class, 'setnewpassword'])->name('setnewpassword');
Route::post('/setnewpassword', [UserController::class, 'setnewpasswordpost'])->name('setnewpasswordpost');

// super admin routing 

Route::get('/superadmin/dashboard', function () {
    $data = user::all();
    return view('superadmin.homepage')->with('users', $data);
})->name('login')->middleware('super-admin-check');


Route::get('/superadmin', function () {
    return view('superadmin.homepage');
});


// profile routing 
Route::get("/profile/{id}/{name}", [UserController::class, 'userprofile'])->name('userprofile')->middleware('auth');

// upload image 