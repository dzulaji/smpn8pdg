@extends('layouts.page')

@section('title', 'Ekstrakurikuler')

@section('page_content')
    <div class="mb-8 text-center md:text-left">
        <h2 class="text-2xl font-bold text-ink mb-2">Program Ekstrakurikuler</h2>
        <p class="text-ink-muted">Wadah penyaluran bakat, minat, dan pembentukan karakter (Good Attitude) siswa di luar jam pelajaran akademik.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Ekskul 1: Paskibra -->
        <a href="/kesiswaan/ekstrakurikuler/paskibra" class="block border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group">
            <div class="aspect-video bg-surface-2 relative">
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto Paskibra</div>
            </div>
            <div class="p-5 bg-canvas">
                <h3 class="font-bold text-lg text-ink mb-1 group-hover:text-primary transition-colors">Paskibra</h3>
                <p class="text-sm text-ink-muted mb-3 line-clamp-2">Melatih kedisiplinan, ketahanan fisik, dan rasa cinta tanah air melalui baris-berbaris.</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold bg-surface-1 border border-border px-2 py-1 rounded text-ink">
                    <span class="text-primary">•</span> Wajib & Pilihan
                </span>
            </div>
        </a>

        <!-- Ekskul 2: Pramuka -->
        <a href="/kesiswaan/ekstrakurikuler/pramuka" class="block border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group">
            <div class="aspect-video bg-surface-2 relative">
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto Pramuka</div>
            </div>
            <div class="p-5 bg-canvas">
                <h3 class="font-bold text-lg text-ink mb-1 group-hover:text-primary transition-colors">Pramuka</h3>
                <p class="text-sm text-ink-muted mb-3 line-clamp-2">Membentuk kemandirian, gotong royong, dan keterampilan bertahan hidup di alam.</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold bg-surface-1 border border-border px-2 py-1 rounded text-ink">
                    <span class="text-primary">•</span> Ekstrakurikuler Wajib
                </span>
            </div>
        </a>

        <!-- Ekskul 3: Voli -->
        <a href="/kesiswaan/ekstrakurikuler/voli" class="block border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group">
            <div class="aspect-video bg-surface-2 relative">
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto Voli</div>
            </div>
            <div class="p-5 bg-canvas">
                <h3 class="font-bold text-lg text-ink mb-1 group-hover:text-primary transition-colors">Bola Voli</h3>
                <p class="text-sm text-ink-muted mb-3 line-clamp-2">Pengembangan bakat olahraga, kerja sama tim, dan kebugaran jasmani.</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold bg-surface-1 border border-border px-2 py-1 rounded text-ink">
                    <span class="text-primary">•</span> Olahraga
                </span>
            </div>
        </a>

        <!-- Ekskul 4: English Club -->
        <a href="/kesiswaan/ekstrakurikuler/english-club" class="block border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-ghost-elevated hover:border-primary/50 transition-all group">
            <div class="aspect-video bg-surface-2 relative">
                <div class="absolute inset-0 flex items-center justify-center text-ink-muted">Foto English Club</div>
            </div>
            <div class="p-5 bg-canvas">
                <h3 class="font-bold text-lg text-ink mb-1 group-hover:text-primary transition-colors">English Club</h3>
                <p class="text-sm text-ink-muted mb-3 line-clamp-2">Meningkatkan kemampuan bahasa asing untuk mempersiapkan siswa berdaya saing global.</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold bg-surface-1 border border-border px-2 py-1 rounded text-ink">
                    <span class="text-primary">•</span> Akademik
                </span>
            </div>
        </a>

    </div>
@endsection
