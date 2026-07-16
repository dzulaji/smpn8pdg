@extends('layouts.page')

@section('title', Str::title(str_replace('-', ' ', $slug)))

@section('parent_breadcrumb')
    <a href="/informasi/pengumuman" class="hover:text-primary transition-colors">Pengumuman</a>
@endsection

@section('page_content')
    <!-- Meta Pengumuman -->
    <div class="mb-8 border-b border-border pb-6">
        <div class="flex items-center gap-3 mb-4">
            <span class="px-3 py-1 bg-red-100 text-red-600 border border-red-200 text-xs font-bold rounded-pill uppercase tracking-wider">
                Penting
            </span>
            <span class="text-sm text-ink-muted flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                10 Juli 2026
            </span>
        </div>

        <h1 class="text-3xl font-bold text-ink leading-tight mb-2">
            {{ Str::title(str_replace('-', ' ', $slug)) }}
        </h1>
        <p class="text-sm text-ink-muted">Nomor Surat: 421.3/SMPN8-PDG/VII/2026</p>
    </div>

    <!-- Isi Pengumuman -->
    <div class="prose prose-ink max-w-none mb-10">
        <p class="leading-relaxed mb-4">
            <em>Assalamu'alaikum Warahmatullahi Wabarakatuh,</em>
        </p>

        <p class="leading-relaxed mb-4">
            Sehubungan dengan telah berkhirnya kegiatan Belajar Mengajar (KBM) Semester Genap Tahun Ajaran 2025/2026, bersama ini kami sampaikan kepada seluruh orang tua/wali murid bahwa pembagian rapor siswa akan dilaksanakan dengan ketentuan sebagai berikut:
        </p>

        <div class="bg-surface-1 border border-border p-5 rounded-lg mb-6">
            <ul class="list-none p-0 m-0 space-y-3 text-ink">
                <li class="flex flex-col sm:flex-row gap-2 sm:gap-8">
                    <span class="font-bold sm:w-24 shrink-0">Hari/Tanggal</span>
                    <span class="text-ink-muted">: Sabtu, 18 Juli 2026</span>
                </li>
                <li class="flex flex-col sm:flex-row gap-2 sm:gap-8">
                    <span class="font-bold sm:w-24 shrink-0">Waktu</span>
                    <span class="text-ink-muted">: Pukul 08.00 WIB s.d Selesai</span>
                </li>
                <li class="flex flex-col sm:flex-row gap-2 sm:gap-8">
                    <span class="font-bold sm:w-24 shrink-0">Tempat</span>
                    <span class="text-ink-muted">: Ruang Kelas Masing-masing</span>
                </li>
            </ul>
        </div>

        <p class="leading-relaxed mb-4">
            Mengingat pentingnya acara tersebut, kami mohon kehadiran Bapak/Ibu tepat pada waktunya. Pengambilan rapor tidak dapat diwakilkan kepada siswa bersangkutan.
        </p>

        <p class="leading-relaxed mb-8">
            Demikian pengumuman ini kami sampaikan. Atas perhatian dan kerja sama Bapak/Ibu, kami ucapkan terima kasih.
        </p>

        <!-- Tanda Tangan -->
        <div class="text-right mt-10">
            <p class="text-ink mb-1">Padang, 10 Juli 2026</p>
            <p class="font-bold text-ink mb-16">Kepala Sekolah,</p>
            <p class="font-bold text-ink border-b border-ink inline-block pb-0.5">Ratnawati, S.Pd</p>
            <p class="text-sm text-ink-muted mt-1">NIP. 19700101 199512 2 001</p>
        </div>
    </div>

    <!-- Lampiran (Kalau Ada) -->
    <div class="border-t border-border pt-6 mt-8">
        <h4 class="font-bold text-ink mb-3 text-sm">Lampiran File:</h4>
        <a href="#" class="inline-flex items-center gap-3 p-3 bg-surface-1 border border-border rounded-lg hover:border-primary hover:bg-primary/5 transition-colors group">
            <div class="w-8 h-8 bg-red-100 text-red-600 rounded flex items-center justify-center shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
            </div>
            <div>
                <p class="text-sm font-bold text-ink group-hover:text-primary transition-colors">Surat_Edaran_Rapor_Genap.pdf</p>
                <p class="text-xs text-ink-muted">245 KB</p>
            </div>
        </a>
    </div>
@endsection
