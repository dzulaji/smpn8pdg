@extends('layouts.page')

@section('title', 'Ekstrakurikuler')

@section('page_content')
    <div class="mb-8 text-center md:text-left">
        <h2 class="text-2xl font-bold text-ink mb-2">Program Ekstrakurikuler</h2>
        <p class="text-ink-muted">Wadah penyaluran bakat, minat, dan pembentukan karakter (Good Attitude) siswa di luar jam
            pelajaran akademik.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse ($ekstrakurikuler as $item)
            <a href="{{ url('/kesiswaan/ekstrakurikuler/' . $item->slug) }}"
                class="block border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group flex flex-col h-full">
                <div class="aspect-video bg-surface-2 relative overflow-hidden">
                    @if ($item->foto_utama)
                        <img src="{{ asset('storage/' . $item->foto_utama) }}" alt="{{ $item->judul }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center text-ink-muted text-sm">Belum ada foto
                        </div>
                    @endif
                </div>
                <div class="p-5 bg-canvas flex flex-col flex-grow">
                    <h3 class="font-bold text-lg text-ink mb-1 group-hover:text-primary transition-colors">
                        {{ $item->judul }}</h3>
                    <p class="text-sm text-ink-muted mb-3 line-clamp-2 flex-grow">{{ $item->deskripsi_singkat }}</p>
                </div>
            </a>
        @empty
            <div class="col-span-full py-10 text-center border border-dashed border-border rounded-lg bg-surface-1">
                Data ekstrakurikuler belum tersedia.
            </div>
        @endforelse
    </div>
@endsection
