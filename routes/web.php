<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'HOME']);
});

Route::get('/sekretariat', function () {
    return view('sekretariat', ['title' => 'SEKRETARIAT']);
});

Route::get('/dasarhukum', function () {
    return view('dasarhukum', ['title' => 'DASAR HUKUM']);
});

Route::get('/datakepegawaian', function () {
    return view('datakepegawaian', ['title' => 'DATA KEPEGAWAIAN']);
});

Route::get('/programunggulan', function () {
    return view('programunggulan', ['title' => 'PROGRAM UNGGULAN']);
});

Route::get('/kontakkami', function () {
    return view('kontakkami', ['title' => 'KONTAK KAMI']);
});

Route::get('/kepemudaan', function () {
    return view('kepemudaan', ['title' => 'KEPEMUDAAN']);
});

Route::get('/olahraga', function () {
    return view('olahraga', ['title' => 'OLAHRAGA']);
});

Route::get('/berita', function () {
    return view('berita', ['title' => 'BERITA']);
});
