@extends('layouts.page')

@section('title', 'Sejarah Sekolah')

@section('page_content')
    <div class="mb-10 border-b border-border pb-6">
        <h2 class="text-3xl font-bold text-ink mb-2">Sejarah SMPN 8 Padang</h2>
        <p class="text-ink-muted">Jejak langkah dan dedikasi panjang dalam dunia pendidikan sejak tahun 1977.</p>
    </div>

    <!-- Narasi Sejarah (Satu Kolom, Teks Hitam Solid) -->
    <div class="prose prose-ink max-w-none mb-12">
        <p class="text-ink leading-relaxed mb-5 text-justify text-[15px] md:text-base">
            <span class="text-4xl font-bold text-primary float-left mr-2 leading-none mt-1">S</span>MP Negeri 8 Padang berdiri pada <strong>3 Januari 1977</strong> dan diresmikan tanggal <strong>17 Oktober 1978</strong> dengan kepala sekolah pertama Drs. Syahrudin. Pada saat itu, sekolah ini berada dalam filial Sekolah Teknik Padang. Sekolah jarak jauh ini difungsikan untuk menggandeng berdirinya SMPN 8 Padang.
        </p>

        <p class="text-ink leading-relaxed mb-5 text-justify text-[15px] md:text-base">
            Pada awalnya, sekolah dikelola oleh guru-guru dari Sekolah Teknik Padang dan penerimaan siswa dilakukan oleh sekolah teknik tersebut. Proses belajar mengajar ditumpangkan pada SMEA I Padang (SMK 2 sekarang) selama I semester (6 bulan). Pada semester II, siswa kemudian ditempatkan di SDN 23 Marapalam. Kegiatan ini berlangsung selama 1 tahun 10 bulan karena sekolah sedang dalam tahap pembangunan.
        </p>

        <p class="text-ink leading-relaxed mb-5 text-justify text-[15px] md:text-base">
            Peletakan batu pertama dimulainya pembangunan ini tanggal 3 Januari 1977 dan mulai dipakai tanggal 17 Oktober 1978.
        </p>

        <p class="text-ink leading-relaxed mb-5 text-justify text-[15px] md:text-base">
            Dalam 1 tahun perjalanannya, SMPN 8 Padang ini kemudian ditetapkan sebagai <strong>SMP Standar</strong> karena berbagai fasilitas yang memang memenuhi standar pada masa tersebut. Status sebagai SMP standar ini berlangsung sampai beberapa periode dan beberapa kepala sekolah.
        </p>

        <p class="text-ink leading-relaxed mb-8 text-justify text-[15px] md:text-base">
            Pada tahun 2007, SMPN 8 Padang berhasil menjadi <strong>Sekolah Rintisan Bertaraf Internasional (RSBI)</strong> berdasarkan SK Dirjen No.543/C3/KEP/2007 pendidikan dasar dan menengah. Meskipun pada tahun 2013 RSBI dibubarkan berdasarkan putusan MK, SMPN 8 Padang tetap bertekad mempertahankan mutu akademik, non-akademik, serta lingkungan yang tetap asri.
        </p>

        <!-- Highlight Motto -->
        <div class="my-8 p-6 bg-surface-1 rounded-xl border border-border border-l-4 border-l-primary shadow-sm text-center md:text-left">
            <h4 class="font-bold text-ink mb-2">Motto Sekolah</h4>
            <p class="text-primary font-bold text-2xl md:text-3xl italic tracking-wide">"Smart and Good Attitude"</p>
        </div>
    </div>

    <!-- Daftar Kepala Sekolah (Lega, Full Width) -->
    <div class="mt-12 max-w-4xl">
        <h3 class="text-2xl font-bold text-ink mb-6 flex items-center gap-3">
            <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center text-primary shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            Daftar Kepala Sekolah dari Masa ke Masa
        </h3>

        <div class="bg-canvas border border-border rounded-xl shadow-sm overflow-hidden">
            <div class="flex flex-col">
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Drs. Syahrudin</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">1977 – 1978</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Drs. Nurchalis</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">1978 – 1984</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Drs. Syofryan Mansur</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">1985 – 1990</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Drs. Buyung Ketek</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">1990 – 1995</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Drs. Rusdi Aras Jamal</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">1995 – 1998</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Ernawati Syafar, S.Pd.MM</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">1998 – 2011</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Drs. Ahmad Nurben</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">2011 – 2016</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Drs. M.A. Riadi, M.Pd</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">2016 – 2022</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Dwifa Kesuma, S.Pd</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">Maret – Des 2022</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Ratnawati, S.Pd</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">Des 2022 – Nov 2025</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 border-b border-border bg-surface-1 hover:bg-surface-2 transition-colors">
                    <span class="font-medium text-ink">Hasyuni Harti, S.Pd</span>
                    <span class="text-sm font-bold text-ink-muted bg-canvas px-3 py-1 rounded border border-border">Jan – Mar 2026</span>
                </div>
                <div class="flex justify-between items-center p-4 md:px-6 bg-primary/5 hover:bg-primary/10 transition-colors">
                    <span class="font-bold text-primary">Dewi Anggraini, M.Pd</span>
                    <span class="text-sm font-bold text-white bg-primary px-3 py-1 rounded shadow-sm">Maret 2026 - Sekarang</span>
                </div>
            </div>
        </div>
    </div>
@endsection
