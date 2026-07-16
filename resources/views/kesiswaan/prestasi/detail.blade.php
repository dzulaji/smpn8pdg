@extends('layouts.page')

@section('title', 'Detail Prestasi')

@section('parent_breadcrumb')
    <a href="/kesiswaan/prestasi" class="hover:text-primary transition-colors">Prestasi</a>
@endsection

@section('page_content')
    <!-- Meta Info & Badge -->
    <div class="mb-6">
        <div class="flex flex-wrap items-center gap-3 mb-4">
            <span
                class="inline-flex items-center gap-1 px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-pill uppercase tracking-wider">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
                Juara 1
            </span>
            <span
                class="inline-flex items-center px-3 py-1 bg-surface-2 text-ink text-xs font-bold rounded-pill uppercase tracking-wider border border-border">
                Tingkat Provinsi
            </span>
            <span class="text-sm text-ink-muted flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                12 Mei 2026
            </span>
        </div>

        <!-- Judul Dinamis dari Slug -->
        <h1 class="text-3xl md:text-4xl font-bold text-ink leading-tight mb-4">
            {{ Str::title(str_replace('-', ' ', $slug)) }}
        </h1>

        <div class="flex items-center gap-3 text-sm text-ink-muted border-y border-border py-3">
            <div class="w-8 h-8 rounded-full bg-surface-2 border border-border flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
            <span>Ditulis oleh <strong>Admin Kesiswaan</strong></span>
        </div>
    </div>

    <!-- Gambar Utama -->
    <div
        class="aspect-video w-full bg-surface-2 rounded-xl border border-border mb-8 flex items-center justify-center overflow-hidden relative shadow-sm">
        <span class="text-ink-muted">Foto Serah Terima Piala / Penghargaan</span>
        <div
            class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-ink/60 to-transparent p-4 text-white text-xs text-center">
            Dokumentasi: Kepala Sekolah beserta tim yang meraih juara.
        </div>
    </div>

    <!-- Konten Artikel -->
    <div class="prose prose-ink max-w-none mb-10">
        <p class="lead text-lg text-ink-muted font-medium mb-6">
            Kabar gembira kembali menyelimuti keluarga besar SMP Negeri 8 Padang. Prestasi membanggakan berhasil ditorehkan
            oleh siswa-siswi kita dalam ajang kompetisi bergengsi yang diselenggarakan pada pekan lalu.
        </p>

        <p class="leading-relaxed mb-4">
            Ini adalah teks dummy untuk artikel <strong>{{ Str::title(str_replace('-', ' ', $slug)) }}</strong>. Berkat
            kerja keras, disiplin, serta bimbingan intensif dari guru pembina, tim perwakilan sekolah berhasil menyisihkan
            puluhan peserta lain dari berbagai daerah.
        </p>

        <p class="leading-relaxed mb-4">
            Kepala Sekolah SMPN 8 Padang menyampaikan apresiasi setinggi-tingginya atas pencapaian ini. "Prestasi ini adalah
            bukti nyata dari komitmen kita mewujudkan visi sekolah, yakni Smart and Good Attitude. Kami berharap pencapaian
            ini bisa menjadi motivasi bagi siswa lain untuk terus menggali potensi dan berani berkompetisi," ujarnya.
        </p>

        <div class="bg-surface-1 border-l-4 border-primary p-5 my-8 rounded-r-lg">
            <h4 class="font-bold text-ink mb-2">Daftar Nama Siswa Berprestasi:</h4>
            <ul class="list-disc pl-5 text-ink-muted space-y-1">
                <li>Ahmad Fikri (Kelas VIII.1)</li>
                <li>Siti Aminah (Kelas VIII.3)</li>
                <li>Budi Santoso (Kelas VII.2)</li>
            </ul>
        </div>

        <p class="leading-relaxed">
            Semoga dengan diraihnya prestasi ini, SMP Negeri 8 Padang dapat terus mencetak generasi penerus bangsa yang
            unggul, berkarakter, dan siap bersaing di masa depan. Maju terus SMPN 8!
        </p>
    </div>

    <!-- Share / Aksi (Visual Only) -->
    <div class="border-t border-border pt-6 mt-10 flex items-center justify-between">
        <span class="text-sm font-bold text-ink">Bagikan Prestasi Ini:</span>
        <div class="flex gap-2">
            <button
                class="w-10 h-10 rounded-full bg-surface-1 border border-border flex items-center justify-center text-ink hover:text-white hover:bg-[#1877F2] transition-colors"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                </svg></button>
            <button
                class="w-10 h-10 rounded-full bg-surface-1 border border-border flex items-center justify-center text-ink hover:text-white hover:bg-[#25D366] transition-colors"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z" />
                </svg></button>
        </div>
    </div>
@endsection
