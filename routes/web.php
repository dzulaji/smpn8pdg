<?php

use Illuminate\Support\Facades\Route;

// Beranda
Route::get('/', function () {
    return view('home.index');
});

// Grup Menu Profil
Route::prefix('profil')->group(function () {
    Route::get('/sejarah', function () {
        return view('profil.sejarah');
    });

    Route::get('/visi-misi', function () {
        return view('profil.visi-misi');
    });

    Route::get('/kepala-sekolah', function () {
        return view('profil.kepala-sekolah');
    });

    Route::get('/guru', function () {
        return view('profil.guru');
    });

    Route::get('/struktur-organisasi', function () {
        return view('profil.struktur-organisasi');
    });

    Route::get('/fasilitas', function () {
        return view('profil.fasilitas');
    });

    Route::get('/fasilitas/{slug}', function ($slug) {
    return view('profil.fasilitas-detail', ['slug' => $slug]);
    });
});

Route::prefix('kesiswaan')->group(function () {

    Route::get('/ekstrakurikuler', function () {
        return view('kesiswaan.ekstrakurikuler.index');
    });

    Route::get('/ekstrakurikuler/{slug}', function ($slug) {
        return view('kesiswaan.ekstrakurikuler.detail', ['slug' => $slug]);
    });

    Route::get('/prestasi', function () {
        return view('kesiswaan.prestasi.index');
    });

    Route::get('/prestasi/{slug}', function ($slug) {
        return view('kesiswaan.prestasi.detail', ['slug' => $slug]);
    });

    Route::get('/alumni', function () {
        return view('kesiswaan.alumni');
    });
});

Route::prefix('informasi')->group(function () {

    Route::get('/berita', function () {
        return view('informasi.berita.index');
    });

    Route::get('/berita/{slug}', function ($slug) {
        return view('informasi.berita.detail', ['slug' => $slug]);
    });

    Route::get('/pengumuman', function () {
        return view('informasi.pengumuman.index');
    });

    Route::get('/pengumuman/{slug}', function ($slug) {
        return view('informasi.pengumuman.detail', ['slug' => $slug]);
    });

    Route::get('/agenda', function () {
        return view('informasi.agenda.index');
    });

    Route::get('/download', function () {
        return view('informasi.download');
    });

});

Route::get('/galeri', function () {
    return view('galeri.index');
});

Route::get('/kontak', function () {
    return view('kontak.index');
});
