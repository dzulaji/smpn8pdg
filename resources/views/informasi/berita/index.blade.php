@extends('layouts.page')

@section('title', 'Berita Sekolah')

@section('page_content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-ink mb-2">Berita & Kabar Terbaru</h2>
        <p class="text-ink-muted">Ikuti terus perkembangan, kegiatan, dan informasi terkini seputar lingkungan SMP Negeri 8
            Padang.</p>
    </div>

    <!-- Grid List Berita -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- Artikel 1 -->
        <article
            class="group flex flex-col bg-canvas border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all">
            <a href="/informasi/berita/kunjungan-dinas-pendidikan"
                class="relative aspect-video bg-surface-2 overflow-hidden block">
                <span class="absolute inset-0 flex items-center justify-center text-ink-muted text-sm">Foto Kunjungan</span>
                <div
                    class="absolute top-3 left-3 bg-primary text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded shadow-sm z-10">
                    Liputan
                </div>
                <!-- Efek hover zoom tipis pada gambar -->
                <div class="absolute inset-0 bg-ink/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </a>
            <div class="p-5 flex flex-col flex-grow">
                <div class="flex items-center gap-2 mb-3 text-xs text-ink-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>14 Juli 2026</span>
                    <span class="px-2">•</span>
                    <span>Oleh Admin</span>
                </div>
                <a href="/informasi/berita/kunjungan-dinas-pendidikan">
                    <h3
                        class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                        Kunjungan Kepala Dinas Pendidikan Kota Padang Tinjau Kesiapan Lab Komputer</h3>
                </a>
                <p class="text-sm text-ink-muted line-clamp-3 mb-4 flex-grow">Dalam rangka memastikan kesiapan sarana
                    prasarana penunjang ujian berbasis komputer, rombongan Dinas Pendidikan Kota Padang melakukan monitoring
                    langsung ke SMPN 8...</p>
                <a href="/informasi/berita/kunjungan-dinas-pendidikan"
                    class="inline-flex items-center text-primary font-medium text-sm hover:text-primary-hover group/link">
                    Baca selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 ml-1 transform group-hover/link:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </article>

        <!-- Artikel 2 -->
        <article
            class="group flex flex-col bg-canvas border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all">
            <a href="/informasi/berita/pelaksanaan-qurban-1447"
                class="relative aspect-video bg-surface-2 overflow-hidden block">
                <span class="absolute inset-0 flex items-center justify-center text-ink-muted text-sm">Foto Penyembelihan
                    Qurban</span>
                <div
                    class="absolute top-3 left-3 bg-primary text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded shadow-sm z-10">
                    Kegiatan
                </div>
            </a>
            <div class="p-5 flex flex-col flex-grow">
                <div class="flex items-center gap-2 mb-3 text-xs text-ink-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>29 Juni 2026</span>
                    <span class="px-2">•</span>
                    <span>Oleh Humas</span>
                </div>
                <a href="/informasi/berita/pelaksanaan-qurban-1447">
                    <h3
                        class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                        Penanaman Karakter Melalui Pelaksanaan Qurban Idul Adha 1447 H</h3>
                </a>
                <p class="text-sm text-ink-muted line-clamp-3 mb-4 flex-grow">Alhamdulillah, tahun ini keluarga besar SMPN 8
                    Padang kembali menyembelih hewan qurban sebanyak 3 ekor sapi. Daging qurban didistribusikan kepada warga
                    sekitar dan siswa kurang mampu...</p>
                <a href="/informasi/berita/pelaksanaan-qurban-1447"
                    class="inline-flex items-center text-primary font-medium text-sm hover:text-primary-hover group/link">
                    Baca selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 ml-1 transform group-hover/link:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </article>

    </div>

    <!-- Pagination Placeholder -->
    <div class="mt-12 flex justify-center">
        <nav class="flex gap-2">
            <button
                class="w-10 h-10 flex items-center justify-center rounded-md border border-border text-ink-muted cursor-not-allowed opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <a href="#"
                class="w-10 h-10 flex items-center justify-center rounded-md border border-primary bg-primary text-white shadow-sm">1</a>
            <a href="#"
                class="w-10 h-10 flex items-center justify-center rounded-md border border-border text-ink hover:bg-surface-1 hover:text-primary transition-colors">2</a>
            <a href="#"
                class="w-10 h-10 flex items-center justify-center rounded-md border border-border text-ink hover:bg-surface-1 hover:text-primary transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </nav>
    </div>
@endsection
