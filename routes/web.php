<?php

use App\Http\Controllers\HomeController;
use App\Models\Activity;
use App\Models\Employee;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $employees = Employee::take(4)->get();
    $news = News::take(3)->get();
    $activities = Activity::take(3)->get();

    return view('home', [
        'title' => 'HOME',
        'employees' => $employees,
        'news' => $news,
        'activities' => $activities,
    ]);
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
    return view('programunggulan', ['title' => 'PROGRAM UNGGULAN', 'activity' => Activity::all()]);
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
    return view('berita', ['title' => 'BERITA', 'news' => News::all()]);
});

Route::get('/berita/{news:slug}', function (News $news) {
    return view('bacaberita', [
        'title' => 'BERITA',
        'item' => $news
    ]);
});

Route::get('/programunggulan/{activity:slug}', function (Activity $activity) {
    return view('bacaprogram', [
        'title' => 'PROGRAM UNGGULAN',
        'activity' => $activity,
    ]);
});

Route::get('/calk', function () {
    return view('calk', ['title' => 'CALK']);
});

Route::get('/dataaset', function () {
    return view('dataaset', ['title' => 'DATA ASET']);
});

Route::get('/realisasianggaran', function () {
    return view('realisasianggaran', ['title' => 'REALISASI ANGGARAN']);
});

Route::get('/rkpd', function () {
    return view('rkpd', ['title' => 'RKPD']);
});

Route::get('/lkpj', function () {
    return view('lkpj', ['title' => 'LKPJ']);
});

Route::get('/sakip', function () {
    return view('sakip', ['title' => 'SAKIP']);
});

Route::get('/renja', function () {
    return view('renja', ['title' => 'RENJA']);
});

Route::get('/renstra', function () {
    return view('renstra', ['title' => 'RENSTRA']);
});

Route::get('/perbup', function () {
    return view('perbup', ['title' => 'PERBUP']);
});
Route::get('/perda', function () {
    return view('perda', ['title' => 'PERDA']);
});
