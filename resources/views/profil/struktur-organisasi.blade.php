@extends('layouts.page')

@section('title', 'Struktur Organisasi')

@section('page_content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-ink mb-2">Bagan Struktur Organisasi</h2>
        <p class="text-ink-muted">Susunan kepengurusan dan tenaga pendidik SMP Negeri 8 Padang.</p>
    </div>

    <!-- Container Gambar Bagan -->
    <div class="bg-surface-1 border border-border rounded-xl p-4 md:p-8 flex items-center justify-center shadow-sm">

        <!-- Nanti saat data dari database sudah siap, panggil gambarnya seperti ini: -->
        <!-- <img src="{{ asset('storage/images/struktur-organisasi.webp') }}" alt="Struktur Organisasi SMPN 8 Padang" class="w-full h-auto rounded-lg shadow-ghost-card"> -->

        <!-- Placeholder visual sebelum gambar diupload -->
        <div
            class="aspect-video w-full bg-surface-2 border-2 border-dashed border-border rounded-lg flex flex-col items-center justify-center text-ink-muted p-6 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mb-4 text-border" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="font-medium text-ink">Gambar Bagan Struktur Organisasi</span>
            <span class="text-xs mt-2 max-w-xs">Area ini akan menampilkan gambar struktur organisasi yang diunggah melalui
                panel Admin.</span>
        </div>

    </div>
@endsection
