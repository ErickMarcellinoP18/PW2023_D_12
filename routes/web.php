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
    return view('admin', [
        'dude' => [
            'gambar' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwODZ-msfh5mYs7LmWCY3tWtF8vmH-RMwSOC8KM_am2w&s.jpg",
            'nLengkap' => 'Admin Ganteng Sejagat',
            'nickname' => 'Bapak Admin',
            'jabatan' => 'Manager',
            'ruang' => '3315'
        ]
    ]);
});


Route::get('/editAdmin', function () {
    return view('editAdmin', [
        'dude' => [
            'gambar' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwODZ-msfh5mYs7LmWCY3tWtF8vmH-RMwSOC8KM_am2w&s.jpg",
            'nLengkap' => 'John Everest',
            'nickname' => 'John',
            'jabatan' => 'Senior Manager',
            'ruang' => '3315',
            'password' => 'bekerjaYuk1!'
        ]
    ]);
});

Route::get('/editKaryawan', function () {
    return view('editKaryawan');
});

Route::get('/vendor', function () {
    return view('vendor',  [
        'vendor' => [
            [
                'nama' => 'Club Kelapa Gading',
                'gambar' => 'images\logo vendor2.jpg',
            ],
            [
                'nama' => 'Conrad Hotels & Resorts',
                'gambar' => 'images\logo vendor1.jpg',
            ],
            [
                'nama' => 'JHL Collections',
                'gambar' => 'images\kogo vendor2.jpg',
            ],
            [
                'nama' => 'MDC Hall',
                'gambar' => 'https://images.weddingku.com/images/upload/partners/pp/38532-m52tkx7jje4g.jpeg',
            ],
            [
                'nama' => 'Raffles Hotels & Resorts',
                'gambar' => 'images\logo2.jpg',
            ],
            [
                'nama' => 'Ayana Midplaza Jakarta',
                'gambar' => 'images\logo3.jpg',
            ],
            [
                'nama' => 'Silver Dust Decoration',
                'gambar' => 'images\logo4.jpg',
            ],
            [
                'nama' => 'Kana Entertainment',
                'gambar' => 'images\logo5.jpg'
            ]
        ]
    ]);
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

Route::get('/tambahPegawai', function () {
    return view('tambahPegawai');
});

// Login route
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Logout route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('/employee', EmployeeController::class);
