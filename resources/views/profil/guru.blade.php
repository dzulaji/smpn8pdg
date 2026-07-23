@extends('layouts.page')

@section('title', 'Data Guru & Tenaga Kependidikan')

@section('page_content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-ink mb-2">Tenaga Pendidik SMPN 8 Padang</h2>
        <!-- Jumlah total guru dibikin dinamis menyesuaikan isi database -->
        <p class="text-ink-muted">Didukung oleh {{ $gurus->total() }} tenaga pendidik profesional dan berdedikasi tinggi
            dalam membimbing siswa-siswi meraih prestasi.</p>
    </div>

    <!-- Grid Guru -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse ($gurus as $guru)
            <!-- Card Guru Dinamis -->
            <div
                class="bg-surface-1 border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated transition-all duration-300 overflow-hidden text-center group">
                <div
                    class="aspect-[3/4] bg-surface-2 relative overflow-hidden flex items-center justify-center border-b border-border">
                    @if ($guru->foto)
                        <!-- Jika ada foto, tampilkan dari storage dengan efek zoom saat di hover -->
                        <img src="{{ asset('storage/' . $guru->foto) }}" alt="{{ $guru->nama }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <!-- Jika foto kosong, tampilkan placeholder bawaan lu -->
                        <span class="text-ink-muted text-sm">Foto Belum Tersedia</span>
                    @endif
                </div>
                <div class="p-4 bg-canvas flex flex-col items-center">
                    <h3 class="font-bold text-ink text-sm mb-1 line-clamp-1">{{ $guru->nama }}</h3>
                    <span
                        class="inline-block px-3 py-1 bg-primary/10 text-primary text-[10px] font-semibold rounded-pill mt-1">
                        {{ $guru->jabatan }}
                    </span>
                </div>
            </div>
        @empty
            <!-- Tampilan jika admin belum menginput data guru sama sekali -->
            <div class="col-span-full py-12 text-center border border-dashed border-border rounded-xl bg-surface-1">
                <p class="text-ink-muted text-sm">Data guru belum tersedia.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        <!-- Menggunakan sistem pagination bawaan Laravel -->
        {{ $gurus->links('pagination::tailwind') }}
    </div>
@endsection
