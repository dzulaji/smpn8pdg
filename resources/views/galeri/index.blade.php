@extends('layouts.page')

@section('title', 'Galeri Sekolah')

@section('page_content')
    <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold text-ink mb-2">Dokumentasi Kegiatan</h2>
            <p class="text-ink-muted">Kumpulan momen, foto, dan video kegiatan di lingkungan SMP Negeri 8 Padang.</p>
        </div>

        <!-- Filter Tabs ala HP -->
        <div class="flex bg-surface-1 p-1 rounded-lg border border-border self-start">
            <button class="px-4 py-1.5 bg-canvas shadow-sm rounded-md text-sm font-bold text-primary transition-all">Semua</button>
            <button class="px-4 py-1.5 text-sm font-medium text-ink-muted hover:text-ink transition-all">Foto</button>
            <button class="px-4 py-1.5 text-sm font-medium text-ink-muted hover:text-ink transition-all">Video</button>
        </div>
    </div>

    <!-- Grid Galeri -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4">

        <!-- Item Foto 1 -->
        <a href="#" class="aspect-square bg-surface-2 rounded-lg border border-border overflow-hidden relative group cursor-pointer shadow-sm">
            <div class="absolute inset-0 flex items-center justify-center text-xs text-ink-muted">Foto MPLS</div>
            <div class="absolute inset-0 bg-ink/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                <span class="text-white text-xs font-bold text-center px-2 line-clamp-2">Kegiatan MPLS 2026</span>
            </div>
        </a>

        <!-- Item Foto 2 -->
        <a href="#" class="aspect-square bg-surface-2 rounded-lg border border-border overflow-hidden relative group cursor-pointer shadow-sm">
            <div class="absolute inset-0 flex items-center justify-center text-xs text-ink-muted">Foto Upacara</div>
            <div class="absolute inset-0 bg-ink/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                <span class="text-white text-xs font-bold text-center px-2 line-clamp-2">Upacara Bendera Senen</span>
            </div>
        </a>

        <!-- Item VIDEO 1 -->
        <a href="#" class="aspect-square bg-surface-2 rounded-lg border border-border overflow-hidden relative group cursor-pointer shadow-sm col-span-2 row-span-2 md:col-span-1 md:row-span-1">
            <div class="absolute inset-0 flex items-center justify-center text-xs text-ink-muted">Thumbnail Video Profil</div>
            <!-- Ikon Play Video -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-10 h-10 bg-black/50 backdrop-blur-sm rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                </div>
            </div>
            <div class="absolute bottom-2 right-2 bg-black/60 text-white text-[10px] px-1.5 py-0.5 rounded">03:45</div>
        </a>

        <!-- Item Foto 3 -->
        <a href="#" class="aspect-square bg-surface-2 rounded-lg border border-border overflow-hidden relative group cursor-pointer shadow-sm">
            <div class="absolute inset-0 flex items-center justify-center text-xs text-ink-muted">Foto Pramuka</div>
            <div class="absolute inset-0 bg-ink/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                <span class="text-white text-xs font-bold text-center px-2 line-clamp-2">Persami 2026</span>
            </div>
        </a>

        <!-- Item Foto 4 -->
        <a href="#" class="aspect-square bg-surface-2 rounded-lg border border-border overflow-hidden relative group cursor-pointer shadow-sm">
            <div class="absolute inset-0 flex items-center justify-center text-xs text-ink-muted">Foto Porseni</div>
            <div class="absolute inset-0 bg-ink/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                <span class="text-white text-xs font-bold text-center px-2 line-clamp-2">Porseni Antar Kelas</span>
            </div>
        </a>

        <!-- Item Foto 5 -->
        <a href="#" class="aspect-square bg-surface-2 rounded-lg border border-border overflow-hidden relative group cursor-pointer shadow-sm">
            <div class="absolute inset-0 flex items-center justify-center text-xs text-ink-muted">Foto Guru</div>
        </a>

        <!-- Item VIDEO 2 -->
        <a href="#" class="aspect-square bg-surface-2 rounded-lg border border-border overflow-hidden relative group cursor-pointer shadow-sm">
            <div class="absolute inset-0 flex items-center justify-center text-xs text-ink-muted">Tari Pasambahan</div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-10 h-10 bg-black/50 backdrop-blur-sm rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                </div>
            </div>
            <div class="absolute bottom-2 right-2 bg-black/60 text-white text-[10px] px-1.5 py-0.5 rounded">05:12</div>
        </a>

        <!-- Item Foto 6 -->
        <a href="#" class="aspect-square bg-surface-2 rounded-lg border border-border overflow-hidden relative group cursor-pointer shadow-sm">
            <div class="absolute inset-0 flex items-center justify-center text-xs text-ink-muted">Foto Prestasi</div>
        </a>

    </div>

    <div class="mt-8 text-center">
        <button class="px-6 py-2 bg-surface-1 border border-border text-ink hover:text-primary hover:border-primary rounded-lg text-sm font-medium transition-colors">Muat Lebih Banyak</button>
    </div>
@endsection
