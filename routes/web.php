<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\EkstrakurikulerController;
use App\Models\Guru;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Agenda;
use App\Models\Download;
use App\Models\Galeri;
use App\Models\Prestasi;
use App\Models\Fasilitas;
use App\Models\Ekstrakurikuler;

Route::post('/portal-admin', [AuthController::class, 'authenticate']);

Route::get('/portal-admin', function () {
    return view('auth.login');
})->name('login');


// Rute Logout (Harus POST untuk keamanan)
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->group(function () {

   Route::get('/dashboard', function () {
        $data = [
            'total_guru'      => Guru::count(),
            'total_berita'    => Berita::count(),
            'total_pengumuman'=> Pengumuman::count(),
            'total_agenda'    => Agenda::count(),
            'total_prestasi'  => Prestasi::count(),
            'total_fasilitas' => Fasilitas::count(),
            'total_ekskul'    => Ekstrakurikuler::count(),
            'total_galeri'    => Galeri::count(),
        ];

        return view('admin.dashboard', $data);
    })->name('admin.dashboard');

    // CRUD Guru
    Route::get('/guru', [GuruController::class, 'index'])->name('admin.guru.index');
    Route::get('/guru/tambah', [GuruController::class, 'create'])->name('admin.guru.create');
    Route::post('/guru', [GuruController::class, 'store'])->name('admin.guru.store');
    Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('admin.guru.edit');
    Route::put('/guru/{id}', [GuruController::class, 'update'])->name('admin.guru.update');
    Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('admin.guru.destroy');

    // CRUD Fasilitas
    Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('admin.fasilitas.index');
    Route::get('/fasilitas/tambah', [FasilitasController::class, 'create'])->name('admin.fasilitas.create');
    Route::post('/fasilitas', [FasilitasController::class, 'store'])->name('admin.fasilitas.store');
    Route::get('/fasilitas/{id}/edit', [FasilitasController::class, 'edit'])->name('admin.fasilitas.edit');
    Route::put('/fasilitas/{id}', [FasilitasController::class, 'update'])->name('admin.fasilitas.update');
    Route::delete('/fasilitas/{id}', [FasilitasController::class, 'destroy'])->name('admin.fasilitas.destroy');

    // CRUD Berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/berita/tambah', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');

    // CRUD Pengumuman
    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('admin.pengumuman.index');
    Route::get('/pengumuman/tambah', [PengumumanController::class, 'create'])->name('admin.pengumuman.create');
    Route::post('/pengumuman', [PengumumanController::class, 'store'])->name('admin.pengumuman.store');
    Route::get('/pengumuman/{id}/edit', [PengumumanController::class, 'edit'])->name('admin.pengumuman.edit');
    Route::put('/pengumuman/{id}', [PengumumanController::class, 'update'])->name('admin.pengumuman.update');
    Route::delete('/pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('admin.pengumuman.destroy');

    // CRUD Agenda
    Route::get('/agenda', [App\Http\Controllers\Admin\AgendaController::class, 'index'])->name('admin.agenda.index');
    Route::get('/agenda/tambah', [App\Http\Controllers\Admin\AgendaController::class, 'create'])->name('admin.agenda.create');
    Route::post('/agenda', [App\Http\Controllers\Admin\AgendaController::class, 'store'])->name('admin.agenda.store');
    Route::get('/agenda/{id}/edit', [App\Http\Controllers\Admin\AgendaController::class, 'edit'])->name('admin.agenda.edit');
    Route::put('/agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'update'])->name('admin.agenda.update');
    Route::delete('/agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'destroy'])->name('admin.agenda.destroy');

    // CRUD Download
    Route::get('/download', [DownloadController::class, 'index'])->name('admin.download.index');
    Route::get('/download/tambah', [DownloadController::class, 'create'])->name('admin.download.create');
    Route::post('/download', [DownloadController::class, 'store'])->name('admin.download.store');
    Route::get('/download/{id}/edit', [DownloadController::class, 'edit'])->name('admin.download.edit');
    Route::put('/download/{id}', [DownloadController::class, 'update'])->name('admin.download.update');
    Route::delete('/download/{id}', [DownloadController::class, 'destroy'])->name('admin.download.destroy');

    // CRUD Prestasi
    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('admin.prestasi.index');
    Route::get('/prestasi/tambah', [PrestasiController::class, 'create'])->name('admin.prestasi.create');
    Route::post('/prestasi', [PrestasiController::class, 'store'])->name('admin.prestasi.store');
    Route::get('/prestasi/{id}/edit', [PrestasiController::class, 'edit'])->name('admin.prestasi.edit');
    Route::put('/prestasi/{id}', [PrestasiController::class, 'update'])->name('admin.prestasi.update');
    Route::delete('/prestasi/{id}', [PrestasiController::class, 'destroy'])->name('admin.prestasi.destroy');

    // CRUD Galeri
    Route::get('/galeri', [GaleriController::class, 'index'])->name('admin.galeri.index');
    Route::get('/galeri/tambah', [GaleriController::class, 'create'])->name('admin.galeri.create');
    Route::post('/galeri', [GaleriController::class, 'store'])->name('admin.galeri.store');
    Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
    Route::put('/galeri/{id}', [GaleriController::class, 'update'])->name('admin.galeri.update');
    Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy');

    // CRUD Ekstrakurikuler
    Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('admin.ekstrakurikuler.index');
    Route::get('/ekstrakurikuler/tambah', [EkstrakurikulerController::class, 'create'])->name('admin.ekstrakurikuler.create');
    Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])->name('admin.ekstrakurikuler.store');
    Route::get('/ekstrakurikuler/{id}/edit', [EkstrakurikulerController::class, 'edit'])->name('admin.ekstrakurikuler.edit');
    Route::put('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'update'])->name('admin.ekstrakurikuler.update');
    Route::delete('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'destroy'])->name('admin.ekstrakurikuler.destroy');
});


Route::get('/', function () {
    // Ambil 3 berita terbaru berdasarkan tanggal
    $beritaTerbaru = Berita::latest('tanggal')->take(3)->get();
    $guruDepan = Guru::latest()->take(4)->get();
    $galeriDepan = Galeri::latest()->take(4)->get();

    return view('home.index', compact('beritaTerbaru', 'guruDepan', 'galeriDepan'));
});

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
        $gurus = Guru::latest()->paginate(12);
        return view('profil.guru', compact('gurus'));
    });

    Route::get('/struktur-organisasi', function () {
        return view('profil.struktur-organisasi');
    });

    Route::get('/fasilitas', function () {
        $fasilitas = Fasilitas::latest()->get();
        return view('profil.fasilitas', compact('fasilitas'));
    });

    Route::get('/fasilitas/{slug}', function ($slug) {
        $fasilitas = Fasilitas::where('slug', $slug)->firstOrFail();
        return view('profil.fasilitas-detail', compact('fasilitas'));
    });
});

Route::prefix('kesiswaan')->group(function () {

    Route::get('/ekstrakurikuler', function () {
        // Ambil semua data ekskul terbaru
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();
        return view('kesiswaan.ekstrakurikuler.index', compact('ekstrakurikuler'));
    });

    Route::get('/ekstrakurikuler/{slug}', function ($slug) {
        // Cari data berdasarkan slug, kalau ga ada langsung 404
        $ekstrakurikuler = Ekstrakurikuler::where('slug', $slug)->firstOrFail();
        // Return view detail, nama filenya detail.blade.php sesuai routing lu
        return view('kesiswaan.ekstrakurikuler.detail', compact('ekstrakurikuler'));
    });

    Route::get('/prestasi', function (Request $request) {
        $query = Prestasi::latest('tanggal');

        // Filter berdasarkan tingkat (opsional)
        if ($request->has('tingkat') && $request->tingkat != '') {
            $query->where('tingkat', $request->tingkat);
        }

        $prestasis = $query->paginate(6)->withQueryString();

        return view('kesiswaan.prestasi.index', compact('prestasis'));
    })->name('kesiswaan.prestasi');

    // Rute Detail Prestasi
    Route::get('/prestasi/{slug}', function ($slug) {
        $prestasi = Prestasi::where('slug', $slug)->firstOrFail();
        return view('kesiswaan.prestasi.detail', compact('prestasi'));
    });

    Route::get('/alumni', function () {
        return view('kesiswaan.alumni');
    });
});

Route::prefix('informasi')->group(function () {

    Route::get('/berita', function () {
        $beritas = Berita::latest('tanggal')->paginate(6);
        return view('informasi.berita.index', compact('beritas'));
    });

    Route::get('/berita/{slug}', function ($slug) {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $beritaTerbaru = Berita::where('slug', '!=', $slug)->latest('tanggal')->take(3)->get();
        return view('informasi.berita.detail', compact('berita', 'beritaTerbaru'));
    });

    Route::get('/pengumuman', function (Request $request) {
        // Ambil data, urutkan dari tanggal terbaru
        $query = Pengumuman::latest('tanggal');

        // Jika user ngeklik filter kategori (misal: ?kategori=Penting)
        if ($request->has('kategori') && $request->kategori != '') {
            $query->where('kategori', $request->kategori);
        }

        // Paginate dan bawa parameter URL-nya
        $pengumumans = $query->paginate(6)->withQueryString();

        return view('informasi.pengumuman.index', compact('pengumumans'));
    })->name('informasi.pengumuman'); // <-- INI YANG BIKIN ERROR SEBELUMNYA HILANG

    // 2. Rute Detail Pengumuman
    Route::get('/pengumuman/{slug}', function ($slug) {
        $pengumuman = Pengumuman::where('slug', $slug)->firstOrFail();
        return view('informasi.pengumuman.detail', compact('pengumuman'));
    });

    Route::get('/agenda', function () {
        $agendas = Agenda::orderBy('tanggal_mulai', 'asc')->get();

        // Kita siapkan array khusus buat FullCalendar JS
        $events = [];
        foreach ($agendas as $agenda) {
            // Logika Warna Badge Berdasarkan Kategori
            $color = match($agenda->kategori) {
                'Pertemuan' => '#eab308', // yellow-500
                'Kegiatan Siswa' => '#3b82f6', // blue-500
                'Upacara' => '#ef4444', // red-500
                default => '#6b7280' // gray-500
            };

            $events[] = [
                'title' => $agenda->judul,
                'start' => $agenda->tanggal_mulai,
                // Fullcalendar butuh +1 hari untuk end date exclusive jika tanggalnya beda
                'end' => $agenda->tanggal_selesai ? \Carbon\Carbon::parse($agenda->tanggal_selesai)->addDay()->format('Y-m-d') : null,
                'color' => $color,
                'description' => $agenda->waktu . ' | ' . $agenda->lokasi
            ];
        }

        return view('informasi.agenda.index', [
            'agendas' => $agendas->take(5), // Ambil 5 agenda terdekat aja buat list di bawah
            'eventsJson' => json_encode($events)
        ]);
    });

    Route::get('/download', function (Request $request) {
        $query = Download::latest();

        // Fitur Pencarian Nama Dokumen
        if ($request->has('search') && $request->search != '') {
            $query->where('nama_dokumen', 'like', '%' . $request->search . '%');
        }

        // Fitur Filter Kategori
        if ($request->has('kategori') && $request->kategori != '') {
            $query->where('kategori', $request->kategori);
        }

        $downloads = $query->paginate(8)->withQueryString();
        return view('informasi.download', compact('downloads'));
    })->name('informasi.download');

});

Route::get('/galeri', function (Request $request) {
    $query = Galeri::latest();

    // Filter tipe (Foto / Video)
    if ($request->has('filter') && in_array($request->filter, ['Foto', 'Video'])) {
        $query->where('tipe', $request->filter);
    }

    $galeris = $query->paginate(12)->withQueryString();

    return view('galeri.index', compact('galeris'));
})->name('galeri.index');

Route::get('/kontak', function () {
    return view('kontak.index');
});
