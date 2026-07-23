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
            <a href="{{ route('galeri.index') }}"
                class="px-4 py-1.5 {{ !request('filter') ? 'bg-canvas shadow-sm text-primary' : 'text-ink-muted hover:text-ink' }} rounded-md text-sm font-bold transition-all">Semua</a>
            <a href="{{ route('galeri.index', ['filter' => 'Foto']) }}"
                class="px-4 py-1.5 {{ request('filter') == 'Foto' ? 'bg-canvas shadow-sm text-primary' : 'text-ink-muted hover:text-ink' }} rounded-md text-sm font-medium transition-all">Foto</a>
            <a href="{{ route('galeri.index', ['filter' => 'Video']) }}"
                class="px-4 py-1.5 {{ request('filter') == 'Video' ? 'bg-canvas shadow-sm text-primary' : 'text-ink-muted hover:text-ink' }} rounded-md text-sm font-medium transition-all">Video</a>
        </div>
    </div>

    <!-- Grid Galeri -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4">
        @forelse ($galeris as $item)
            @if ($item->tipe == 'Foto')
                <!-- Item Foto -->
                <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank"
                    class="aspect-square bg-surface-2 rounded-lg border border-border overflow-hidden relative group cursor-pointer shadow-sm">
                    <img src="{{ asset('storage/' . $item->file_path) }}" alt="Galeri"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <!-- Efek Gelap saat Hover -->
                    <div
                        class="absolute inset-0 bg-ink/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg>
                    </div>
                </a>
            @else
                <!-- Item Video (YouTube) -->
                @php
                    // Ekstrak ID YouTube dari URL (Contoh URL: https://www.youtube.com/watch?v=dQw4w9WgXcQ)
                    preg_match(
                        '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i',
                        $item->file_path,
                        $match,
                    );
                    $youtube_id = $match[1] ?? null;
                    $thumbnail_url = $youtube_id ? "https://img.youtube.com/vi/{$youtube_id}/maxresdefault.jpg" : '';
                @endphp

                <a href="{{ $item->file_path }}" target="_blank"
                    class="aspect-square bg-surface-2 rounded-lg border border-border overflow-hidden relative group cursor-pointer shadow-sm">
                    @if ($youtube_id)
                        <img src="{{ $thumbnail_url }}" alt="Video" class="w-full h-full object-cover">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center text-xs text-ink-muted bg-gray-900">
                            Video</div>
                    @endif

                    <!-- Ikon Play Video -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/40 transition-colors">
                        <div
                            class="w-12 h-12 bg-red-600/90 backdrop-blur-sm rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-transform shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                </a>
            @endif
        @empty
            <div class="col-span-full py-16 text-center border border-dashed border-border rounded-xl bg-surface-1">
                <p class="text-ink-muted text-sm">Belum ada dokumentasi media.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-8 flex justify-center">
        {{ $galeris->links('pagination::tailwind') }}
    </div>
@endsection
