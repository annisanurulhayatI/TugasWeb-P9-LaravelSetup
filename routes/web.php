<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $mahasiswa = [
        'nama' => 'Annisa',
        'prodi' => 'Ilmu Komputer',
        'semester' => 3
    ];

    return view('home', compact('mahasiswa'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello/{nama}', function ($nama) {
    return "Halo, $nama!";
});