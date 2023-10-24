<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/karyawan', function () {
    return view('karyawan',  [
        'anggota' => [
            [
            'nama' => 'Erick Marcellino Pranata',
            'email'=> 'erickMarc18@gmail.com',
            'telp' => '081391596012'
        ],
        [
            'nama' => 'Enrique Trisfan',
            'email'=> 'Fanfan@gmail.com',
            'telp' => '082123123123'
        ],
        [
            'nama' => 'Rocky Sito Andilolo',
            'email'=> 'Sito@gmail.com',
            'telp' => '085976456777'
        ],
        [
            'nama' => 'Kiryu Kazuma',
            'email'=> 'Kazuma1@gmail.com',
            'telp' => '089765332133'
        ],
        [
            'nama' => 'Suko',
            'email'=> 'BonJam@gmail.com',
            'telp' => '082456763988'
        ],
        [
            'nama' => 'Michael David santoso',
            'email'=> 'MikeMic@gmail.com',
            'telp' => '082456311890'
        ],
        [
            'nama'=> 'Dita Leni Rafia',
            'email'=> 'rafiaMerah@gmail.com',
            'telp'=> '081325251642'
        ],
        [
            'nama'=> 'Silvia Eterna',
            'email'=> 'Silverq@gmail.com',
            'telp'=> '083116441996'
        ]
        ],

        'dude' => [
            'gambar' => "https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png",
            'nama' => "Bapak Admin",
            'jabatan' => 'Manager',
            'pegawai' => '6',
            'ruang' => '3315'
        ]
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});