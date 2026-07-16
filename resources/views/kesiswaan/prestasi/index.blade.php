@extends('layouts.page')

@section('title', 'Prestasi')

@section('page_content')
    <div class="mb-10 text-center md:text-left">
        <h2 class="text-2xl font-bold text-ink mb-2">Pencapaian Gemilang</h2>
        <p class="text-ink-muted">Daftar torehan prestasi membanggakan yang diraih oleh siswa-siswi dan tenaga pendidik SMPN
            8 Padang.</p>
    </div>

    <!-- Filter/Kategori Sederhana (UI Only) -->
    <div class="flex flex-wrap gap-2 mb-8">
        <button class="px-4 py-2 bg-primary text-white text-sm font-medium rounded-pill shadow-sm">Semua Prestasi</button>
        <button
            class="px-4 py-2 bg-surface-1 border border-border text-ink hover:text-primary hover:border-primary text-sm font-medium rounded-pill transition-colors">Akademik</button>
        <button
            class="px-4 py-2 bg-surface-1 border border-border text-ink hover:text-primary hover:border-primary text-sm font-medium rounded-pill transition-colors">Non-Akademik</button>
    </div>

    <!-- Grid List Prestasi -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card Prestasi 1 -->
        <a href="/kesiswaan/prestasi/judul-prestasi"
            class="block border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group bg-canvas">
            <!-- Image Placeholder dengan Badge Tingkat -->
            <div class="aspect-video bg-surface-2 relative">
                <div
                    class="absolute top-3 right-3 bg-primary text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded shadow-sm z-10">
                    Tingkat Provinsi
                </div>
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto Penyerahan Piala Robotik
                </div>
            </div>

            <div class="p-5">
                <div class="flex items-center gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span class="text-xs font-semibold text-primary">Juara 1</span>
                    <span class="text-xs text-ink-muted border-l border-border pl-2">Mei 2026</span>
                </div>
                <h3 class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors line-clamp-2">Tim
                    Robotik SMPN 8 Raih Medali Emas di Ajang TechFest Sumatera Barat</h3>
                <p class="text-sm text-ink-muted line-clamp-2">Inovasi smart-trash bin otomatis karya siswa kelas VIII
                    berhasil memukau dewan juri di tingkat provinsi.</p>
            </div>
        </a>

        <!-- Card Prestasi 2 -->
        <a href="#"
            class="block border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group bg-canvas">
            <div class="aspect-video bg-surface-2 relative">
                <div
                    class="absolute top-3 right-3 bg-ink text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded shadow-sm z-10">
                    Tingkat Kota
                </div>
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto Lomba Story Telling</div>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span class="text-xs font-semibold text-primary">Juara 2</span>
                    <span class="text-xs text-ink-muted border-l border-border pl-2">April 2026</span>
                </div>
                <h3 class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors line-clamp-2">Siswi
                    SMPN 8 Sabet Juara 2 English Story Telling Competition</h3>
                <p class="text-sm text-ink-muted line-clamp-2">Penampilan memukau membawakan cerita rakyat lokal dalam
                    bahasa Inggris mendapat apresiasi tinggi.</p>
            </div>
        </a>

        <!-- Card Prestasi 3 -->
        <a href="#"
            class="block border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group bg-canvas">
            <div class="aspect-video bg-surface-2 relative">
                <div
                    class="absolute top-3 right-3 bg-primary text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded shadow-sm z-10">
                    Tingkat Nasional
                </div>
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto OSN</div>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span class="text-xs font-semibold text-primary">Medali Perunggu</span>
                    <span class="text-xs text-ink-muted border-l border-border pl-2">Februari 2026</span>
                </div>
                <h3 class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors line-clamp-2">
                    Perwakilan Sekolah Membawa Pulang Medali Perunggu OSN IPA</h3>
                <p class="text-sm text-ink-muted line-clamp-2">Bersaing dengan ribuan peserta seluruh Indonesia, siswa kita
                    berhasil membuktikan kecerdasannya (Smart).</p>
            </div>
        </a>

        <!-- Card Prestasi 4 -->
        <a href="#"
            class="block border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group bg-canvas">
            <div class="aspect-video bg-surface-2 relative">
                <div
                    class="absolute top-3 right-3 bg-ink text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded shadow-sm z-10">
                    Tingkat Kota
                </div>
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto Voli Kesiswaan</div>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span class="text-xs font-semibold text-primary">Juara 1</span>
                    <span class="text-xs text-ink-muted border-l border-border pl-2">Januari 2026</span>
                </div>
                <h3 class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors line-clamp-2">Tim Voli
                    Putra Raih Juara Pertama Liga Pelajar Kota Padang</h3>
                <p class="text-sm text-ink-muted line-clamp-2">Dengan semangat juang tinggi, piala bergilir akhirnya kembali
                    direbut oleh SMP Negeri 8.</p>
            </div>
        </a>

    </div>

    <!-- Dummy Pagination -->
    <div class="mt-10 flex justify-center">
        <nav class="flex gap-2">
            <a href="#"
                class="w-10 h-10 flex items-center justify-center rounded-md border border-border text-ink hover:bg-surface-1 hover:text-primary transition-colors">1</a>
            <a href="#"
                class="w-10 h-10 flex items-center justify-center rounded-md border border-primary bg-primary text-white shadow-sm">2</a>
            <a href="#"
                class="w-10 h-10 flex items-center justify-center rounded-md border border-border text-ink hover:bg-surface-1 hover:text-primary transition-colors">3</a>
        </nav>
    </div>
@endsection
