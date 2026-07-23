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
        @forelse ($beritas as $item)
            <article
                class="group flex flex-col bg-canvas border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all">
                <a href="{{ url('/informasi/berita/' . $item->slug) }}"
                    class="relative aspect-video bg-surface-2 overflow-hidden block">
                    @if ($item->thumbnail)
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->judul }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <span class="absolute inset-0 flex items-center justify-center text-ink-muted text-sm">Tidak Ada
                            Gambar</span>
                    @endif

                    <div
                        class="absolute top-3 left-3 bg-primary text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded shadow-sm z-10">
                        {{ $item->kategori }}
                    </div>
                    <div class="absolute inset-0 bg-ink/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </a>

                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-3 text-xs text-ink-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>{{ $item->tanggal->format('d M Y') }}</span>
                        <span class="px-2">•</span>
                        <span>Oleh {{ $item->penulis ?? 'Admin' }}</span>
                    </div>

                    <a href="{{ url('/informasi/berita/' . $item->slug) }}">
                        <h3
                            class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                            {{ $item->judul }}
                        </h3>
                    </a>

                    <!-- Menggunakan strip_tags agar tag HTML dari Trix Editor tidak mentah tampil di ringkasan -->
                    <p class="text-sm text-ink-muted line-clamp-3 mb-4 flex-grow">
                        {{ Str::limit(strip_tags($item->isi_berita), 120) }}
                    </p>

                    <a href="{{ url('/informasi/berita/' . $item->slug) }}"
                        class="inline-flex items-center text-primary font-medium text-sm hover:text-primary-hover group/link">
                        Baca selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 ml-1 transform group-hover/link:translate-x-1 transition-transform"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </article>
        @empty
            <div class="col-span-full py-16 text-center border border-dashed border-border rounded-xl bg-surface-1">
                <p class="text-ink-muted text-sm">Belum ada berita atau artikel yang diterbitkan.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-12 flex justify-center">
        {{ $beritas->links('pagination::tailwind') }}
    </div>
@endsection
