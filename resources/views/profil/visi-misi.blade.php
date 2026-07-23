@extends('layouts.page')

@section('title', 'Visi & Misi')

@section('page_content')
    <div class="max-w-none">

        <!-- Visi -->
        <div
            class="mb-10 py-8 px-6 bg-surface-1 rounded-xl border border-border text-center shadow-sm flex flex-col items-center">
            <span
                class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-pill uppercase tracking-widest mb-3">Visi
                Utama</span>
            <h2 class="text-2xl md:text-3xl font-bold text-black leading-snug m-0">
                "Terwujudnya Insan Cerdas yang Bertaqwa, Cinta Lingkungan serta Mampu Bersaing di Era Globalisasi"
            </h2>
        </div>

        <!-- Indikator Visi -->
        <h3 class="text-xl font-bold text-black mb-4 border-b border-border pb-2">Indikator Visi</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-10">
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Cerdas bidang akademik dan non akademik</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Terampil dalam penggunaan dan pemanfaatan teknologi informasi dan
                    komunikasi</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Unggul dalam memperoleh nilai ujian sekolah dan ujian nasional</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Berperilaku baik dan santun yang didasarkan atas norma agama</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Melaksanakan ajaran agama sesuai dengan syariat</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Pembiasaan membaca Al-Qur'an (Tadarus) bagi yang beragama Islam</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Peningkatan hubungan silaturrahim antar warga sekolah</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Pembiasaan pemeliharaan sarana dan prasarana sekolah untuk hidup
                    hemat</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Pembiasaan memelihara kebersihan dan kelestarian lingkungan sekolah</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Membekali siswa dengan pengetahuan kecakapan hidup (life Skill)</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Mengikutsertakan siswa dan guru pada berbagai bidang kompetisi akademik
                    dan non akademik</span>
            </div>
            <div class="flex items-start gap-3 p-3 bg-canvas border border-border rounded-lg shadow-sm">
                <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm text-black">Menerapkan sistem pengelolaan manajemen yang bermutu, terukur, akurat,
                    komprehensif dan partisipatif berbasis e-manajemen</span>
            </div>
        </div>

        <!-- Misi -->
        <h3 class="text-xl font-bold text-black mb-4 border-b border-border pb-2">Misi Sekolah</h3>
        <ul class="list-disc pl-5 space-y-3 text-black mb-10 text-base leading-relaxed">
            <li>Menciptakan proses pembelajaran yang efektif, kreatif, inovatif, serta memiliki kecerdasan intelektual,
                emosional, spiritual, kinestetik dan religius serta cinta lingkungan.</li>
            <li>Meningkatkan kompetensi tenaga pendidik, tenaga kependidikan dan siswa dalam pemanfaatan teknologi informasi
                dan komunikasi.</li>
            <li>Menumbuh kembangkan pengamalan nilai-nilai religius dalam kehidupan sehari-hari.</li>
            <li>Mewujudkan sekolah sehat yang bernuansa lingkungan.</li>
            <li>Membekali siswa dengan pengetahuan kecakapan hidup (life Skill)</li>
            <li>Mewujudkan sistem pengelolaan manajemen yang bermutu, terukur, akuntabel, transparan, komprehensif, berbasis
                partisipatif dari semua pihak.</li>
        </ul>

        <!-- Tujuan -->
        <h3 class="text-xl font-bold text-black mb-4 border-b border-border pb-2">Tujuan Sekolah</h3>
        <ul class="list-decimal pl-5 space-y-3 text-black mb-10 text-base leading-relaxed">
            <li>Peningkatan Rapaor Pendidikan setiap tahun</li>
            <li>Menjadi juara OSN, tingkat kota Padang, Provinsi Sumbar, dan Nasional.</li>
            <li>Menjadi juara O2SN, FL2SN, dan lomba lainnya di tingkat kota Padang, Provinsi Sumbar, dan Nasional.</li>
            <li>Diterimanya lulusan di berbagai sekolah unggulan dalam dan luar Kota Padang</li>
            <li>Peningkatan keterampilan Teknologi Infomasi dan Komunikasi</li>
            <li>Peningkatan pelaksanaan kegiatan religius seperti; sholat Dhuha, Dzuhur berjama'ah, tausiah dan tadarus di
                hari Jumat, infak peduli.</li>
            <li>Membiasakan pola 5S (Senyum, Sapa, Salam, Sopan, Santun)</li>
            <li>Menjalankan pola hidup bersih, sehat dan hemat</li>
            <li>Mengimplementasikan program cinta bersih lingkungan dengan motto
                “Sajadah Bersih”, “Sapu Putih”, dan “Sapa Berlian”</li>
            <li>Mempertahankan Akreditasi Sekolah yang Amat Baik (A)</li>
        </ul>

    </div>
@endsection
