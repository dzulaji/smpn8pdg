@extends('layouts.page')

@section('title', $berita->judul)

@section('parent_breadcrumb')
    <a href="/informasi/berita" class="hover:text-primary transition-colors">Berita Sekolah</a>
@endsection

@section('page_content')
    <!-- Meta Info Berita -->
    <div class="mb-6 border-b border-border pb-6">
        <div class="flex items-center gap-2 mb-3 text-xs font-bold uppercase tracking-wider text-primary">
            <span class="bg-primary/10 px-2 py-1 rounded text-primary">{{ $berita->kategori }}</span>
        </div>

        <h1 class="text-3xl md:text-4xl font-bold text-ink leading-tight mb-4">
            {{ $berita->judul }}
        </h1>

        <div class="flex items-center gap-4 text-sm text-ink-muted">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-surface-2 border border-border flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7-7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <span>Oleh <strong>{{ $berita->penulis ?? 'Admin Sekolah' }}</strong></span>
            </div>
            <div class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span>{{ $berita->tanggal->format('d M Y') }}</span>
            </div>
        </div>
    </div>

    <!-- Gambar Utama Berita -->
    @if ($berita->thumbnail)
        <div class="w-full bg-surface-2 rounded-xl border border-border mb-8 overflow-hidden shadow-sm">
            <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}"
                class="w-full max-h-[450px] object-cover">
        </div>
    @endif

    <!-- Konten Teks Berita (Render HTML dari Trix Editor) -->
    <div class="prose prose-ink max-w-none mb-10 leading-relaxed">
        {!! $berita->isi_berita !!}
    </div>

    <!-- Tombol Share -->
    <div class="border-t border-border pt-6 mt-10">
        <span class="text-sm font-bold text-ink mb-3 block">Bagikan Artikel:</span>
        <div class="flex gap-2">
            <button onclick="navigator.clipboard.writeText(window.location.href); alert('Link berhasil disalin!');"
                class="px-4 py-2 bg-surface-1 border border-border rounded-md text-sm text-ink hover:text-white hover:bg-ink transition-colors cursor-pointer">
                Salin Link
            </button>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank"
                class="w-10 h-10 rounded-md bg-surface-1 border border-border flex items-center justify-center text-ink hover:text-white hover:bg-[#1877F2] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                </svg>
            </a>
            <a href="https://api.whatsapp.com/send?text={{ urlencode($berita->judul . ' ' . request()->url()) }}"
                target="_blank"
                class="w-10 h-10 rounded-md bg-surface-1 border border-border flex items-center justify-center text-ink hover:text-white hover:bg-[#25D366] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z" />
                </svg>
            </a>
        </div>
    </div>
@endsection
