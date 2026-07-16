@extends('layouts.page')

@section('title', 'Fasilitas Sekolah')

@section('page_content')
    <div class="mb-8">
        <p class="text-ink-muted leading-relaxed">
            SMP Negeri 8 Padang menyediakan berbagai fasilitas yang representatif untuk mendukung kenyamanan dan kelancaran
            proses belajar mengajar, baik di bidang akademik maupun ekstrakurikuler.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Fasilitas 1 -->
        <a href="/profil/fasilitas/ruang-kelas" class="border border-border rounded-xl overflow-hidden shadow-sm group">
            <div class="aspect-video bg-surface-2 relative">
                <!-- Image Placeholder -->
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto Kelas</div>
            </div>
            <div class="p-5 bg-canvas">
                <h3 class="font-bold text-lg text-ink mb-1 group-hover:text-primary transition-colors">Ruang Kelas</h3>
                <p class="text-sm text-ink-muted mb-3">Terdapat 27 Ruang Kelas yang nyaman dan representatif untuk mendukung
                    fokus belajar siswa.</p>
                <span
                    class="inline-flex items-center gap-1 text-xs font-semibold bg-surface-1 border border-border px-2 py-1 rounded text-ink">
                    <span class="text-primary">•</span> 27 Ruangan
                </span>
            </div>
        </a>

        <!-- Fasilitas 2 -->
        <a href="/profil/fasilitas/laboratorium" class="border border-border rounded-xl overflow-hidden shadow-sm group">
            <div class="aspect-video bg-surface-2 relative">
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto Laboratorium</div>
            </div>
            <div class="p-5 bg-canvas">
                <h3 class="font-bold text-lg text-ink mb-1 group-hover:text-primary transition-colors">Laboratorium</h3>
                <p class="text-sm text-ink-muted mb-3">Fasilitas praktikum lengkap mulai dari lab IPA hingga lab Komputer
                    untuk penguasaan IT.</p>
                <span
                    class="inline-flex items-center gap-1 text-xs font-semibold bg-surface-1 border border-border px-2 py-1 rounded text-ink">
                    <span class="text-primary">•</span> 6 Ruangan
                </span>
            </div>
        </a>

        <!-- Fasilitas 3 -->
        <a href="/profil/fasilitas/perpustakaan" class="border border-border rounded-xl overflow-hidden shadow-sm group">
            <div class="aspect-video bg-surface-2 relative">
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto Perpustakaan</div>
            </div>
            <div class="p-5 bg-canvas">
                <h3 class="font-bold text-lg text-ink mb-1 group-hover:text-primary transition-colors">Perpustakaan</h3>
                <p class="text-sm text-ink-muted mb-3">Pusat literasi dengan koleksi buku pelajaran dan fiksi yang terus
                    diperbarui.</p>
                <span
                    class="inline-flex items-center gap-1 text-xs font-semibold bg-surface-1 border border-border px-2 py-1 rounded text-ink">
                    <span class="text-primary">•</span> 1 Ruangan
                </span>
            </div>
        </a>

        <!-- Fasilitas 4 -->
        <a href="/profil/fasilitas/sarana-abadah" class="border border-border rounded-xl overflow-hidden shadow-sm group">
            <div class="aspect-video bg-surface-2 relative">
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto Sarana Ibadah</div>
            </div>
            <div class="p-5 bg-canvas">
                <h3 class="font-bold text-lg text-ink mb-1 group-hover:text-primary transition-colors">Masjid / Mushola</h3>
                <p class="text-sm text-ink-muted mb-3">Sarana ibadah yang luas untuk mendukung kegiatan keagamaan dan
                    penanaman <em>Good Attitude</em>.</p>
            </div>
        </a>

    </div>
@endsection
