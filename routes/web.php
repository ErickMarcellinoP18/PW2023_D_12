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
            'telp' => '081391596012',
            'gambar' => "https://external-preview.redd.it/michael-de-santa-sigma-or-nah-v0-RCNl45rvIYyc9CZztTEHWxEUcsSvHEax9XnTIRuwMk0.png?format=pjpg&auto=webp&s=3ccd7783f2262205f32d25e09ea2c904a2ca9a02",
        ],
        [
            'nama' => 'Enrique Trisfan',
            'email'=> 'Fanfan@gmail.com',
            'telp' => '082123123123',
            'gambar'=> 'https://png.pngtree.com/png-vector/20211230/ourlarge/pngtree-cute-and-cute-chick-png-image_4106490.png',
        ],
        [
            'nama' => 'Rocky Sito Andilolo',
            'email'=> 'Sito@gmail.com',
            'telp' => '085976456777',
            'gambar'=> 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/5/28a79a48-7002-48b0-a45b-0fe8b4271118.jpg',
        ],
        [
            'nama' => 'Kiryu Kazuma',
            'email'=> 'Kazuma1@gmail.com',
            'telp' => '089765332133',
            'gambar'=> 'https://gamerwk.sgp1.cdn.digitaloceanspaces.com/2023/08/kiryukazumaa.jpg',
        ],
        [
            'nama' => 'Suko',
            'email'=> 'BonJam@gmail.com',
            'telp' => '082456763988',
            'gambar'=> 'https://image.popbela.com/content-images/post/20220217/5c3ad1afcf887dcb01e22567c5c5b4b9.jpg?width=1200&height=800',
        ],
        [
            'nama' => 'Michael David santoso',
            'email'=> 'MikeMic@gmail.com',
            'telp' => '082456311890',
            'gambar' => 'https://img.freepik.com/premium-vector/cartoon-prospector-holding-gold-nugget-pickaxe_29190-6130.jpg?w=2000',
        ],
        [
            'nama'=> 'Dita Leni Rafia',
            'email'=> 'rafiaMerah@gmail.com',
            'telp'=> '081325251642',
            'gambar'=> 'https://refeedzone.sgp1.digitaloceanspaces.com/uploads/product/3355/replasindo-29-300x300jpg-vHa2.jpg',
        ],
        [
            'nama'=> 'Mia Tia',
            'email'=> 'Silverq@gmail.com',
            'telp'=> '083116441996',
            'gambar' => 'https://i.pinimg.com/originals/63/1c/51/631c51c412aabc6240e38123e4c37fd3.jpg'
        ]
        ]
    ]);
});

Route::get('/admin', function () {
    return view('admin',[
        'dude' => [
            'gambar' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwODZ-msfh5mYs7LmWCY3tWtF8vmH-RMwSOC8KM_am2w&s.jpg",
            'nLengkap'=> 'Admin Ganteng Sejagat',
            'nickname' => 'Bapak Admin',
            'jabatan' => 'Manager',
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

Route::get('/editAdmin', function () {
    return view('editAdmin', [
        'dude' => [
            'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwODZ-msfh5mYs7LmWCY3tWtF8vmH-RMwSOC8KM_am2w&s.jpg',
            'namaLengkap'=> 'Admin Ganteng Sejagat',
            'nickname' => 'Bapak Admin',
            'jabatan' => 'Manager',
            'ruang' => '3315'
        ]
    ]);
});

Route::get('/home', function () {
    return view('home');
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
    return view('admin',[
        'dude' => [
            'gambar' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwODZ-msfh5mYs7LmWCY3tWtF8vmH-RMwSOC8KM_am2w&s.jpg",
            'nLengkap'=> 'Admin Ganteng Sejagat',
            'nickname' => 'Bapak Admin',
            'jabatan' => 'Manager',
            'ruang' => '3315'
        ]
    ]);
});