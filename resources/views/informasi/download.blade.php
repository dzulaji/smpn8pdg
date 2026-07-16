@extends('layouts.page')

@section('title', 'Pusat Unduhan')

@section('page_content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-ink mb-2">Dokumen & Berkas Penting</h2>
        <p class="text-ink-muted">Unduh berbagai dokumen resmi, formulir, dan materi panduan dari SMP Negeri 8 Padang.</p>
    </div>

    <!-- Search Bar & Filter (UI Dummy) -->
    <div class="flex flex-col md:flex-row gap-4 mb-8">
        <div class="relative flex-grow">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-ink-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input type="text"
                class="block w-full pl-10 pr-3 py-2 border border-border rounded-lg bg-canvas text-ink focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors text-sm"
                placeholder="Cari nama dokumen...">
        </div>
        <div class="flex-shrink-0">
            <select
                class="block w-full py-2 pl-3 pr-8 border border-border rounded-lg bg-canvas text-ink focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors text-sm appearance-none cursor-pointer">
                <option>Semua Kategori</option>
                <option>Akademik</option>
                <option>Formulir</option>
                <option>Surat Edaran</option>
            </select>
        </div>
    </div>

    <!-- List File Unduhan -->
    <div class="space-y-4">

        <!-- Item Dokumen 1 (PDF) -->
        <div
            class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 p-4 sm:p-5 bg-canvas border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated transition-all group">
            <div class="flex items-start gap-4 flex-grow">
                <!-- Icon PDF -->
                <div class="w-12 h-12 rounded-lg bg-red-100 text-red-600 flex items-center justify-center flex-shrink-0">
                    <span class="text-xs font-bold tracking-wider">PDF</span>
                </div>
                <div>
                    <h3 class="font-bold text-ink text-base mb-1 group-hover:text-primary transition-colors">Kalender
                        Akademik TP 2026/2027</h3>
                    <p class="text-xs text-ink-muted mb-2">Kategori: Akademik • Diunggah: 12 Juli 2026</p>
                    <span class="text-xs font-medium text-ink bg-surface-2 px-2 py-1 rounded border border-border">1.2
                        MB</span>
                </div>
            </div>
            <a href="#"
                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2 bg-surface-1 border border-border hover:border-primary hover:bg-primary hover:text-white text-ink text-sm font-medium rounded-lg transition-colors shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                Unduh
            </a>
        </div>

        <!-- Item Dokumen 2 (PDF) -->
        <div
            class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 p-4 sm:p-5 bg-canvas border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated transition-all group">
            <div class="flex items-start gap-4 flex-grow">
                <!-- Icon PDF -->
                <div class="w-12 h-12 rounded-lg bg-red-100 text-red-600 flex items-center justify-center flex-shrink-0">
                    <span class="text-xs font-bold tracking-wider">PDF</span>
                </div>
                <div>
                    <h3 class="font-bold text-ink text-base mb-1 group-hover:text-primary transition-colors">Tata Tertib
                        Siswa SMPN 8 Padang</h3>
                    <p class="text-xs text-ink-muted mb-2">Kategori: Edaran Resmi • Diunggah: 01 Juli 2026</p>
                    <span class="text-xs font-medium text-ink bg-surface-2 px-2 py-1 rounded border border-border">850
                        KB</span>
                </div>
            </div>
            <a href="#"
                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2 bg-surface-1 border border-border hover:border-primary hover:bg-primary hover:text-white text-ink text-sm font-medium rounded-lg transition-colors shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                Unduh
            </a>
        </div>

        <!-- Item Dokumen 3 (DOCX) -->
        <div
            class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 p-4 sm:p-5 bg-canvas border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated transition-all group">
            <div class="flex items-start gap-4 flex-grow">
                <!-- Icon DOCX (Biru) -->
                <div class="w-12 h-12 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                    <span class="text-xs font-bold tracking-wider">DOCX</span>
                </div>
                <div>
                    <h3 class="font-bold text-ink text-base mb-1 group-hover:text-primary transition-colors">Formulir
                        Pendaftaran Mutasi Siswa Pindahan</h3>
                    <p class="text-xs text-ink-muted mb-2">Kategori: Formulir • Diunggah: 25 Juni 2026</p>
                    <span class="text-xs font-medium text-ink bg-surface-2 px-2 py-1 rounded border border-border">210
                        KB</span>
                </div>
            </div>
            <a href="#"
                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-4 py-2 bg-surface-1 border border-border hover:border-primary hover:bg-primary hover:text-white text-ink text-sm font-medium rounded-lg transition-colors shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                Unduh
            </a>
        </div>

    </div>

    <!-- Pagination Dummy -->
    <div class="mt-8 flex justify-center">
        <nav class="flex gap-2">
            <button
                class="px-4 py-2 rounded-md border border-border text-ink-muted cursor-not-allowed opacity-50 text-sm font-medium">Sebelumnya</button>
            <button
                class="px-4 py-2 rounded-md border border-border text-ink hover:bg-surface-1 transition-colors text-sm font-medium">Selanjutnya</button>
        </nav>
    </div>
@endsection
