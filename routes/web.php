<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CustomerController;
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
    return view('home', [
        'agenda' => [
            [
                'venue' => asset('images/Venue2.jpeg'),
                'package' => asset('images/Package2.jpeg'),
            ],
            [
                'venue' => asset('images/Venue3.jpeg'),
                'package' => asset('images/Package3.jpeg'),
            ],
            [
                'venue' => asset('images/Venue4.jpeg'),
                'package' => asset('images/Package4.jpeg'),
            ],
            [
                'venue' => asset('images/Venue6.jpeg'),
                'package' => asset('images/Package.jpeg'),
            ],
            [
                'venue' => asset('images/Venue5.jpeg'),
                'package' => asset('images/Package5.jpeg'),
            ]
        ]
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'agenda' => [
            [
                'venue' => asset('images/Venue2.jpeg'),
                'package' => asset('images/Venue2.jpeg'),
            ],
            [
                'venue' => asset('images/Venue3.jpeg'),
                'package' => asset('images/Venue3.jpeg'),
            ],
            [
                'venue' => asset('images/Venue4.jpeg'),
                'package' => asset('images/Venue4.jpeg'),
            ],
            [
                'venue' => asset('images/Venue6.jpeg'),
                'package' => asset('images/Pacakge.jpeg'),
            ],
            [
                'venue' => asset('images/Venue5.jpeg'),
                'package' => asset('images/Venue5.jpeg'),
            ]
        ]
    ]);
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

Route::get('register', [CustomerController::class, 'register']);
Route::post('register/action', [CustomerController::class, 'store'])->name('store');

Route::get('/vendor', function () {
    return view('vendor');
});

Route::get('/event', function () {
    return view('event');
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

Route::post('login', [CustomerController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/employee', EmployeeController::class);
Route::resource('/vendor', VendorController::class);
Route::resource('/event', EventController::class);
Route::resource('/customer', CustomerController::class);
