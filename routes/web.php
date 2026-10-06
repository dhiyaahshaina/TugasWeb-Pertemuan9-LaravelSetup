<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    $mahasiswa = [
        'nama' => 'Dhiya Ahshaina Fauzi Saragih',
        'nim' => '4253250018',
        'jurusan' => 'Ilmu Komputer'
    ];

    return view('about', compact('mahasiswa'));
});

Route::get('/contact', function () {
    return view('contact');
});