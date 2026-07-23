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
        @forelse ($fasilitas as $item)
            <a href="{{ url('/profil/fasilitas/' . $item->slug) }}"
                class="border border-border rounded-xl overflow-hidden shadow-sm group bg-canvas flex flex-col">
                <div class="aspect-video bg-surface-2 relative overflow-hidden">
                    @if ($item->foto_utama)
                        <img src="{{ asset('storage/' . $item->foto_utama) }}" alt="{{ $item->judul }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Belum ada foto</div>
                    @endif
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="font-bold text-lg text-ink mb-1 group-hover:text-primary transition-colors">
                        {{ $item->judul }}</h3>
                    <p class="text-sm text-ink-muted flex-grow">{{ $item->deskripsi_singkat }}</p>
                </div>
            </a>
        @empty
            <div class="col-span-full py-10 text-center border border-dashed border-border rounded-lg bg-surface-1">
                Data fasilitas belum tersedia.
            </div>
        @endforelse
    </div>
@endsection
