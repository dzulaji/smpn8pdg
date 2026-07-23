@extends('layouts.page')

@section('title', $pengumuman->judul)

@section('parent_breadcrumb')
    <a href="/informasi/pengumuman" class="hover:text-primary transition-colors">Pengumuman</a>
@endsection

@section('page_content')
    <!-- Meta Pengumuman -->
    <div class="mb-8 border-b border-border pb-6">
        <div class="flex items-center gap-3 mb-4">
            @php
                $badgeColor = match ($pengumuman->kategori) {
                    'Penting' => 'bg-red-100 text-red-600 border-red-200',
                    'Akademik' => 'bg-blue-100 text-blue-600 border-blue-200',
                    default => 'bg-surface-2 text-ink border-border',
                };
            @endphp
            <span class="px-3 py-1 {{ $badgeColor }} border text-xs font-bold rounded-pill uppercase tracking-wider">
                {{ $pengumuman->kategori }}
            </span>
            <span class="text-sm text-ink-muted flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                {{ $pengumuman->tanggal->translatedFormat('d F Y') }}
            </span>
        </div>

        <h1 class="text-3xl font-bold text-ink leading-tight mb-2">
            {{ $pengumuman->judul }}
        </h1>
        @if ($pengumuman->nomor_surat)
            <p class="text-sm text-ink-muted">Nomor Surat: {{ $pengumuman->nomor_surat }}</p>
        @endif
    </div>

    <!-- Isi Pengumuman -->
    <div class="prose prose-ink max-w-none mb-10">
        {!! $pengumuman->isi_pengumuman !!}
    </div>

    <!-- Lampiran (Kalau Ada) -->
    @if ($pengumuman->lampiran)
        <div class="border-t border-border pt-6 mt-8">
            <h4 class="font-bold text-ink mb-3 text-sm">Lampiran File:</h4>
            <a href="{{ asset('storage/' . $pengumuman->lampiran) }}" target="_blank"
                class="inline-flex items-center gap-3 p-3 bg-surface-1 border border-border rounded-lg hover:border-primary hover:bg-primary/5 transition-colors group">
                <div class="w-8 h-8 bg-red-100 text-red-600 rounded flex items-center justify-center shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-bold text-ink group-hover:text-primary transition-colors">Unduh Berkas Lampiran
                    </p>
                    <p class="text-xs text-ink-muted">Klik untuk mengunduh</p>
                </div>
            </a>
        </div>
    @endif
@endsection
