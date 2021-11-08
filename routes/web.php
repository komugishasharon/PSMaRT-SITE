<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PSMaRTController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login1', function () {
    return view('login1');
});

Route::get('/schoolsignup', function () {
    return view('schoolsignup');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/student', function () {
    return view('student');
});

Route::get('/officialssignup', function () {
    return view('officialssignup');
});

Route::get('/position', function () {
    return view('position');
});
Route::get('/teacher', function () {
    return view('teacher');
});
Route::get('/class', function () {
    return view('class');
});
Route::get('/attendance', function () {
    return view('attendance');
});
Route::get('/report', function () {
    return view('report');
});
Route::get('/library', function () {
    return view('library');
});

Route::get('/login1', [PSMaRTController::class,'login1'])->middleware('alreadyLoggedIn');
Route::get('/officialssignup', [PSMaRTController::class,'officialssignup'])->middleware('alreadyLoggedIn');
Route::get('/schoolsignup', [PSMaRTController::class,'schoolsignup'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [PSMaRTController::class,'registerUser'])->name('register-user');
Route::post('/login-user', [PSMaRTController::class,'loginUser'])->name('login-user');
Route::get('/dashboard', [PSMaRTController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[PSMaRTController::class,'logout']);
Route::get('/student',[PSMaRTController::class,'student'])->name('student');
Route::get('/teacher',[PSMaRTController::class,'teacher'])->name('teacher');
Route::get('/class',[PSMaRTController::class,'class'])->name('class');
Route::get('/attendance',[PSMaRTController::class,'attendance'])->name('attendance');
Route::get('/report',[PSMaRTController::class,'report'])->name('report');
Route::get('/library',[PSMaRTController::class,'library'])->name('library');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
