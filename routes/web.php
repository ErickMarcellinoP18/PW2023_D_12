<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/customer1', function () {
    return view('customer1');
});

Route::get('/customer2', function () {
    return view('customer2');
});

Route::get('/employee', function () {
    return view('employee');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/vendor', function () {
    return view('vendor');
});

// Login route
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Logout route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('/employee', EmployeeController::class);
