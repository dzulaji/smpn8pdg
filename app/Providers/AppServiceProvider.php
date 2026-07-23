<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Berita;
use App\Models\Pengumuman;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Menyuntikkan data ke layouts.page setiap kali dipanggil
        View::composer('layouts.page', function ($view) {
            // Ambil 3 berita terbaru untuk widget
            $sidebarBerita = Berita::latest('tanggal')->take(3)->get();

            // Ambil 1 pengumuman terbaru (bisa diatur yang kategori 'Penting' kalau mau)
            $sidebarPengumuman = Pengumuman::latest('tanggal')->first();

            $view->with(compact('sidebarBerita', 'sidebarPengumuman'));
        });
    }
}
