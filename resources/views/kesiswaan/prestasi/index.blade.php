@extends('layouts.page')

@section('title', 'Prestasi')

@section('page_content')
    <div class="mb-10 text-center md:text-left">
        <h2 class="text-2xl font-bold text-ink mb-2">Pencapaian Gemilang</h2>
        <p class="text-ink-muted">Daftar torehan prestasi membanggakan yang diraih oleh siswa-siswi dan tenaga pendidik SMPN 8 Padang.</p>
    </div>

    <!-- Filter/Kategori Tingkat Prestasi -->
    <div class="flex flex-wrap gap-2 mb-8">
        <a href="{{ route('kesiswaan.prestasi') }}" class="px-4 py-2 {{ !request('tingkat') ? 'bg-primary text-white' : 'bg-surface-1 border border-border text-ink hover:text-primary' }} text-sm font-medium rounded-pill shadow-sm transition-colors">Semua Prestasi</a>

        @foreach(['Kota', 'Provinsi', 'Nasional', 'Internasional'] as $tk)
            <a href="{{ route('kesiswaan.prestasi', ['tingkat' => $tk]) }}"
               class="px-4 py-2 {{ request('tingkat') == $tk ? 'bg-primary text-white' : 'bg-surface-1 border border-border text-ink hover:text-primary hover:border-primary' }} text-sm font-medium rounded-pill transition-colors">
                Tingkat {{ $tk }}
            </a>
        @endforeach
    </div>

    <!-- Grid List Prestasi -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse ($prestasis as $item)
            <a href="{{ url('/kesiswaan/prestasi/' . $item->slug) }}" class="block border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group bg-canvas flex flex-col">

                <!-- Image Section -->
                <div class="aspect-video bg-surface-2 relative overflow-hidden">
                    <div class="absolute top-3 right-3 bg-ink text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded shadow-sm z-10">
                        Tingkat {{ $item->tingkat }}
                    </div>

                    @if($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center text-ink-muted text-sm">Tidak Ada Foto</div>
                    @endif
                    <div class="absolute inset-0 bg-ink/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>

                <!-- Content Section -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                        <span class="text-xs font-semibold text-primary">{{ $item->juara }}</span>
                        <span class="text-xs text-ink-muted border-l border-border pl-2">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('F Y') }}</span>
                    </div>
                    <h3 class="font-bold text-lg text-ink mb-2 group-hover:text-primary transition-colors line-clamp-2 leading-snug">{{ $item->judul }}</h3>
                    <p class="text-sm text-ink-muted line-clamp-2 flex-grow">{{ Str::limit(strip_tags($item->deskripsi), 120) }}</p>
                </div>
            </a>
        @empty
            <div class="col-span-full py-16 text-center border border-dashed border-border rounded-xl bg-surface-1">
                <p class="text-ink-muted text-sm">Belum ada data prestasi yang ditambahkan.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        {{ $prestasis->links('pagination::tailwind') }}
    </div>
@endsection
