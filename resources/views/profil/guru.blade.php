@extends('layouts.page')

@section('title', 'Data Guru & Tenaga Kependidikan')

@section('page_content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-ink mb-2">Tenaga Pendidik SMPN 8 Padang</h2>
        <p class="text-ink-muted">Didukung oleh 46 tenaga pendidik profesional dan berdedikasi tinggi dalam membimbing
            siswa-siswi meraih prestasi.</p>
    </div>

    <!-- Grid Guru -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <!-- Card 1 -->
        <div
            class="bg-surface-1 border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated transition-all duration-300 overflow-hidden text-center group">
            <div
                class="aspect-[3/4] bg-surface-2 relative overflow-hidden flex items-center justify-center border-b border-border">
                <span class="text-ink-muted text-sm">Foto Guru</span>
            </div>
            <div class="p-4 bg-canvas">
                <h3 class="font-bold text-ink text-sm mb-1 line-clamp-1">Mahmuda Hayati, S.Pd</h3>
                <span class="inline-block px-2 py-1 bg-primary/10 text-primary text-[10px] font-semibold rounded-pill">Wakil
                    Kurikulum</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div
            class="bg-surface-1 border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated transition-all duration-300 overflow-hidden text-center group">
            <div
                class="aspect-[3/4] bg-surface-2 relative overflow-hidden flex items-center justify-center border-b border-border">
                <span class="text-ink-muted text-sm">Foto Guru</span>
            </div>
            <div class="p-4 bg-canvas">
                <h3 class="font-bold text-ink text-sm mb-1 line-clamp-1">Hartina Tri Yuni, M.Pd</h3>
                <span class="inline-block px-2 py-1 bg-primary/10 text-primary text-[10px] font-semibold rounded-pill">Wakil
                    Kesiswaan</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div
            class="bg-surface-1 border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated transition-all duration-300 overflow-hidden text-center group">
            <div
                class="aspect-[3/4] bg-surface-2 relative overflow-hidden flex items-center justify-center border-b border-border">
                <span class="text-ink-muted text-sm">Foto Guru</span>
            </div>
            <div class="p-4 bg-canvas">
                <h3 class="font-bold text-ink text-sm mb-1 line-clamp-1">Afrizal, S.Pd</h3>
                <span class="inline-block px-2 py-1 bg-primary/10 text-primary text-[10px] font-semibold rounded-pill">Wakil
                    Humas</span>
            </div>
        </div>

        <!-- Card 4 -->
        <div
            class="bg-surface-1 border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated transition-all duration-300 overflow-hidden text-center group">
            <div
                class="aspect-[3/4] bg-surface-2 relative overflow-hidden flex items-center justify-center border-b border-border">
                <span class="text-ink-muted text-sm">Foto Guru</span>
            </div>
            <div class="p-4 bg-canvas">
                <h3 class="font-bold text-ink text-sm mb-1 line-clamp-1">Nini Nelzani, S.Si, M.Pd</h3>
                <span class="inline-block px-2 py-1 bg-primary/10 text-primary text-[10px] font-semibold rounded-pill">Wakil
                    Sarpras</span>
            </div>
        </div>

        <!-- Tambahkan card guru lainnya sesuai kebutuhan di sini -->
    </div>

    <!-- Pagination Placeholder -->
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
