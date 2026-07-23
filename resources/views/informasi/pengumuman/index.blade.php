@extends('layouts.page')

@section('title', 'Pengumuman Resmi')

@section('page_content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-ink mb-2">Papan Pengumuman</h2>
        <p class="text-ink-muted">Informasi resmi, edaran, dan pemberitahuan penting dari pihak sekolah.</p>
    </div>

    <!-- Kategori Filter -->
    <div class="flex flex-wrap gap-2 mb-8">
        <a href="{{ route('informasi.pengumuman') }}"
            class="px-4 py-1.5 {{ !request('kategori') ? 'bg-primary text-white' : 'bg-surface-1 border border-border text-ink hover:text-primary' }} text-sm font-medium rounded-pill transition-colors shadow-sm">Semua</a>
        <a href="{{ route('informasi.pengumuman', ['kategori' => 'Akademik']) }}"
            class="px-4 py-1.5 {{ request('kategori') == 'Akademik' ? 'bg-primary text-white' : 'bg-surface-1 border border-border text-ink hover:text-primary' }} text-sm font-medium rounded-pill transition-colors">Akademik</a>
        <a href="{{ route('informasi.pengumuman', ['kategori' => 'Penting']) }}"
            class="px-4 py-1.5 {{ request('kategori') == 'Penting' ? 'bg-primary text-white' : 'bg-surface-1 border border-border text-ink hover:text-primary' }} text-sm font-medium rounded-pill transition-colors">Penting</a>
        <a href="{{ route('informasi.pengumuman', ['kategori' => 'Umum']) }}"
            class="px-4 py-1.5 {{ request('kategori') == 'Umum' ? 'bg-primary text-white' : 'bg-surface-1 border border-border text-ink hover:text-primary' }} text-sm font-medium rounded-pill transition-colors">Umum</a>
    </div>

    <!-- List Pengumuman -->
    <div class="space-y-4">
        @forelse ($pengumumans as $item)
            <a href="{{ url('/informasi/pengumuman/' . $item->slug) }}"
                class="flex flex-col sm:flex-row gap-6 md:gap-8 p-5 bg-canvas border border-border rounded-xl shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group">

                <!-- Blok Tanggal -->
                <div
                    class="w-16 h-16 rounded-lg bg-surface-2 border border-border flex flex-col justify-center items-center flex-shrink-0 group-hover:bg-primary/10 group-hover:border-primary/30 transition-colors">
                    <span
                        class="text-[10px] font-bold text-primary uppercase tracking-wider">{{ $item->tanggal->format('M') }}</span>
                    <span class="text-2xl font-bold text-ink">{{ $item->tanggal->format('d') }}</span>
                </div>

                <!-- Konten -->
                <div class="flex-grow">
                    <div class="flex items-center gap-2 mb-1">
                        @php
                            $badgeColor = match ($item->kategori) {
                                'Penting' => 'bg-red-100 text-red-600 border-red-200',
                                'Akademik' => 'bg-blue-100 text-blue-600 border-blue-200',
                                default => 'bg-surface-2 text-ink border-border',
                            };
                        @endphp
                        <span
                            class="px-2 py-0.5 {{ $badgeColor }} border text-[10px] font-bold rounded uppercase tracking-wider">{{ $item->kategori }}</span>
                        <span class="text-xs text-ink-muted flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Diunggah {{ $item->created_at->diffForHumans() }}
                        </span>
                    </div>
                    <h3 class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors leading-snug">
                        {{ $item->judul }}</h3>
                    <p class="text-sm text-ink-muted line-clamp-2">{{ Str::limit(strip_tags($item->isi_pengumuman), 150) }}
                    </p>
                </div>
            </a>
        @empty
            <div class="py-12 text-center border border-dashed border-border rounded-xl bg-surface-1">
                <p class="text-ink-muted text-sm">Belum ada pengumuman yang diterbitkan.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        {{ $pengumumans->links('pagination::tailwind') }}
    </div>
@endsection
