<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\VendorController;

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

Route::get('/vendor', function () {
    return view('vendor');
});

Route::get('/admin', function () {
    return view('admin', [
        'dude' => [
            'gambar' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwODZ-msfh5mYs7LmWCY3tWtF8vmH-RMwSOC8KM_am2w&s.jpg",
            'nLengkap' => 'John Everest',
            'nickname' => 'John',
            'jabatan' => 'Senior Manager',
            'ruang' => '3315'
        ]
    ]);
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/employee', EmployeeController::class);
Route::resource('/vendor', VendorController::class);
