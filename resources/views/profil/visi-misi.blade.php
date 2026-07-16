@extends('layouts.page')

@section('title', 'Visi & Misi')

@section('page_content')
    <div class="prose prose-ink max-w-none">

        <!-- Visi -->
        <div class="mb-10 p-8 bg-surface-1 rounded-xl border border-border text-center">
            <span
                class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-pill uppercase tracking-widest mb-4">Visi
                Utama</span>
            <h2 class="text-2xl font-bold text-ink leading-snug mb-0">
                "Mewujudkan Generasi Berkarakter, Berprestasi, dan Berdaya Saing Global yang Berlandaskan Iman dan Taqwa."
            </h2>
        </div>

        <!-- Misi -->
        <h3 class="text-xl font-bold text-ink mb-4 border-b border-border pb-2">Misi Sekolah</h3>
        <ul class="list-disc pl-5 space-y-3 text-ink-muted mb-10">
            <li>Menanamkan nilai-nilai keagamaan dan budi pekerti luhur dalam kehidupan sehari-hari (Good Attitude).</li>
            <li>Melaksanakan pembelajaran yang aktif, inovatif, kreatif, efektif, dan menyenangkan (Smart).</li>
            <li>Meningkatkan prestasi akademik dan non-akademik siswa di tingkat kota, provinsi, dan nasional.</li>
            <li>Menciptakan lingkungan sekolah yang bersih, asri, aman, dan nyaman sebagai Sekolah Adiwiyata.</li>
            <li>Membekali siswa dengan keterampilan teknologi dan literasi digital untuk menghadapi era globalisasi.</li>
        </ul>

        <!-- Nilai-Nilai -->
        <h3 class="text-xl font-bold text-ink mb-4 border-b border-border pb-2">Nilai-Nilai Inti (Core Values)</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
            <div class="bg-canvas border border-border p-4 rounded-lg text-center shadow-sm">
                <span class="block text-primary font-bold text-lg mb-1">Disiplin</span>
                <span class="text-xs text-ink-muted">Tepat waktu & patuh aturan</span>
            </div>
            <div class="bg-canvas border border-border p-4 rounded-lg text-center shadow-sm">
                <span class="block text-primary font-bold text-lg mb-1">Integritas</span>
                <span class="text-xs text-ink-muted">Jujur & dapat dipercaya</span>
            </div>
            <div class="bg-canvas border border-border p-4 rounded-lg text-center shadow-sm">
                <span class="block text-primary font-bold text-lg mb-1">Religius</span>
                <span class="text-xs text-ink-muted">Taat beribadah</span>
            </div>
            <div class="bg-canvas border border-border p-4 rounded-lg text-center shadow-sm">
                <span class="block text-primary font-bold text-lg mb-1">Kreatif</span>
                <span class="text-xs text-ink-muted">Inovatif & solutif</span>
            </div>
        </div>

    </div>
@endsection
