@extends('layouts.page')

@section('title', 'Pengumuman Resmi')

@section('page_content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-ink mb-2">Papan Pengumuman</h2>
        <p class="text-ink-muted">Informasi resmi, edaran, dan pemberitahuan penting dari pihak sekolah.</p>
    </div>

    <!-- Kategori Filter (Opsional UI) -->
    <div class="flex flex-wrap gap-2 mb-8">
        <button class="px-4 py-1.5 bg-primary text-white text-sm font-medium rounded-pill shadow-sm">Semua</button>
        <button class="px-4 py-1.5 bg-surface-1 border border-border text-ink hover:text-primary text-sm font-medium rounded-pill transition-colors">Akademik</button>
        <button class="px-4 py-1.5 bg-surface-1 border border-border text-ink hover:text-primary text-sm font-medium rounded-pill transition-colors">Penting</button>
    </div>

    <!-- List Pengumuman -->
    <div class="space-y-4">

        <!-- Pengumuman 1 -->
        <a href="/informasi/pengumuman/jadwal-pembagian-rapor-genap" class="flex flex-col sm:flex-row gap-6 md:gap-8 p-5 bg-canvas border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group">
            <!-- Blok Tanggal -->
            <div class="w-16 h-16 rounded-lg bg-surface-2 border border-border flex flex-col justify-center items-center flex-shrink-0 group-hover:bg-primary/10 group-hover:border-primary/30 transition-colors">
                <span class="text-[10px] font-bold text-primary uppercase tracking-wider">Jul</span>
                <span class="text-2xl font-bold text-ink">10</span>
            </div>

            <!-- Konten -->
            <div class="flex-grow">
                <div class="flex items-center gap-2 mb-1">
                    <span class="px-2 py-0.5 bg-red-100 text-red-600 border border-red-200 text-[10px] font-bold rounded uppercase tracking-wider">Penting</span>
                    <span class="text-xs text-ink-muted flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        Diunggah 2 hari yang lalu
                    </span>
                </div>
                <h3 class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors leading-snug">Jadwal Pembagian Rapor Semester Genap Tahun Ajaran 2025/2026</h3>
                <p class="text-sm text-ink-muted line-clamp-2">Diberitahukan kepada seluruh orang tua/wali murid bahwa pembagian rapor akan dilaksanakan secara tatap muka dengan mematuhi protokol yang berlaku.</p>
            </div>
        </a>

        <!-- Pengumuman 2 -->
        <a href="/informasi/pengumuman/libur-idul-adha-1447" class="flex flex-col sm:flex-row gap-6 md:gap-8 p-5 bg-canvas border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group">
            <div class="w-16 h-16 rounded-lg bg-surface-2 border border-border flex flex-col justify-center items-center flex-shrink-0 group-hover:bg-primary/10 group-hover:border-primary/30 transition-colors">
                <span class="text-[10px] font-bold text-primary uppercase tracking-wider">Jun</span>
                <span class="text-2xl font-bold text-ink">25</span>
            </div>
            <div class="flex-grow">
                <div class="flex items-center gap-2 mb-1">
                    <span class="px-2 py-0.5 bg-surface-2 text-ink border border-border text-[10px] font-bold rounded uppercase tracking-wider">Umum</span>
                </div>
                <h3 class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors leading-snug">Pemberitahuan Libur Hari Raya Idul Adha 1447 H</h3>
                <p class="text-sm text-ink-muted line-clamp-2">Menindaklanjuti kalender akademik kota, kegiatan belajar mengajar diliburkan selama 4 hari dan siswa kembali masuk pada tanggal 29 Juni 2026.</p>
            </div>
        </a>

        <!-- Pengumuman 3 -->
        <a href="/informasi/pengumuman/pengambilan-ijazah-alumni-2025" class="flex flex-col sm:flex-row gap-6 md:gap-8 p-5 bg-canvas border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group">
            <div class="w-16 h-16 rounded-lg bg-surface-2 border border-border flex flex-col justify-center items-center flex-shrink-0 group-hover:bg-primary/10 group-hover:border-primary/30 transition-colors">
                <span class="text-[10px] font-bold text-primary uppercase tracking-wider">Jun</span>
                <span class="text-2xl font-bold text-ink">15</span>
            </div>
            <div class="flex-grow">
                <div class="flex items-center gap-2 mb-1">
                    <span class="px-2 py-0.5 bg-blue-100 text-blue-600 border border-blue-200 text-[10px] font-bold rounded uppercase tracking-wider">Akademik</span>
                </div>
                <h3 class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors leading-snug">Informasi Pengambilan Ijazah Lulusan Tahun 2025</h3>
                <p class="text-sm text-ink-muted line-clamp-2">Ijazah asli untuk alumni kelulusan tahun 2025 sudah dapat diambil di ruang Tata Usaha (TU) setiap jam kerja dengan membawa bukti tanda lunas administrasi.</p>
            </div>
        </a>

    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        <nav class="flex gap-2">
            <button class="w-10 h-10 flex items-center justify-center rounded-md border border-border text-ink hover:bg-surface-1 transition-colors">1</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-md border border-border text-ink hover:bg-surface-1 transition-colors">2</button>
        </nav>
    </div>
@endsection
