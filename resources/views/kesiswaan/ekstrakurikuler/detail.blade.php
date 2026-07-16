@extends('layouts.page')

@section('title', 'Detail ' . Str::title(str_replace('-', ' ', $slug)))

@section('parent_breadcrumb')
    <a href="/kesiswaan/ekstrakurikuler" class="hover:text-primary transition-colors">Ekstrakurikuler</a>
@endsection

@section('page_content')
    <!-- Header Gambar Utama -->
    <div
        class="aspect-video w-full bg-surface-2 rounded-xl border border-border mb-8 flex items-center justify-center overflow-hidden">
        <span class="text-ink-muted">Foto Utama {{ Str::title(str_replace('-', ' ', $slug)) }}</span>
    </div>

    <!-- Konten Teks -->
    <div class="prose prose-ink max-w-none mb-10">
        <h2 class="text-2xl font-bold text-ink mb-4">Tentang Kegiatan Ini</h2>
        <p class="text-ink-muted leading-relaxed">
            Halaman ini adalah rincian statis untuk kegiatan/fasilitas
            <strong>{{ Str::title(str_replace('-', ' ', $slug)) }}</strong>.
            Di sini lu bisa menuliskan deskripsi lengkap mengenai jadwal latihan, sejarah ekskul, prestasi yang pernah
            diraih, hingga pembina yang bertanggung jawab.
        </p>
        <p class="text-ink-muted leading-relaxed">
            Karena ini format MVP (Minimum Viable Product), konten ini di-hardcode langsung di dalam template. Nantinya lu
            bisa bikin if-else sederhana (contoh: <code>
                @if ($slug == 'pramuka')
                    ...
                @endif
            </code>) untuk menampilkan teks yang berbeda-beda tiap URL-nya tanpa butuh database.
        </p>
    </div>

    <!-- Galeri Tambahan -->
    <h3 class="text-xl font-bold text-ink mb-4 border-b border-border pb-2">Galeri Kegiatan</h3>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div
            class="aspect-square bg-surface-1 border border-border rounded-lg flex items-center justify-center text-xs text-ink-muted">
            Foto 1</div>
        <div
            class="aspect-square bg-surface-1 border border-border rounded-lg flex items-center justify-center text-xs text-ink-muted">
            Foto 2</div>
        <div
            class="aspect-square bg-surface-1 border border-border rounded-lg flex items-center justify-center text-xs text-ink-muted">
            Foto 3</div>
    </div>
@endsection
