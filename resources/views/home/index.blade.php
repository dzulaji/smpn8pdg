@extends('layouts.app')

@section('content')
    <!-- 1. Hero Section -->
    <section class="relative py-20 lg:py-32 overflow-hidden bg-cover bg-center"
        style="background-image: url('{{ asset('images/hero-smpn8.webp') }}');">
        <div class="absolute inset-0 bg-black/20 z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" data-aos="fade-up" data-aos-duration="800">
            <div class="text-center max-w-3xl mx-auto">
                <span
                    class="inline-block py-1 px-3 rounded-pill bg-primary text-white text-sm font-semibold tracking-wide mb-4 shadow-sm">
                    Akreditasi A
                </span>
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-white leading-tight mb-6 drop-shadow-md">
                    Smart and <span class="text-primary relative whitespace-nowrap">Good Attitude</span>
                </h1>
                <p class="text-lg md:text-xl text-white/90 mb-10 leading-relaxed drop-shadow-sm">
                    Mewujudkan generasi berkarakter, berprestasi, dan berdaya saing tinggi. Selamat datang di portal resmi
                    SMP Negeri 8 Kota Padang.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#"
                        class="bg-primary hover:bg-primary-hover text-white px-8 py-3 rounded-md font-medium text-base transition-colors duration-200 shadow-ghost-elevated">
                        Informasi Pendaftaran
                    </a>
                    <a href="#"
                        class="bg-white/10 backdrop-blur-sm border border-white/30 hover:bg-white/20 text-white px-8 py-3 rounded-md font-medium text-base transition-colors duration-200">
                        Jelajahi Profil
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Quick Stats Section -->
    <section class="py-12 bg-canvas border-b border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div data-aos="fade-up" data-aos-delay="100">
                    <p class="text-4xl font-bold text-ink mb-1">841</p>
                    <p class="text-sm font-medium text-ink-muted uppercase tracking-wide">Total Siswa</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <p class="text-4xl font-bold text-ink mb-1">46</p>
                    <p class="text-sm font-medium text-ink-muted uppercase tracking-wide">Tenaga Pendidik</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <p class="text-4xl font-bold text-ink mb-1">27</p>
                    <p class="text-sm font-medium text-ink-muted uppercase tracking-wide">Ruang Kelas</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <p class="text-4xl font-bold text-ink mb-1">1977</p>
                    <p class="text-sm font-medium text-ink-muted uppercase tracking-wide">Tahun Berdiri</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Sambutan Kepala Sekolah -->
    <section class="py-20 bg-surface-1">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-canvas rounded-xl shadow-ghost-elevated overflow-hidden flex flex-col md:flex-row"
                data-aos="fade-up">
                <div
                    class="md:w-1/3 bg-surface-2 min-h-[300px] flex items-center justify-center border-r border-border relative">
                    <span class="text-ink-muted font-medium text-sm">Foto Kepala Sekolah</span>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-primary"></div>
                </div>
                <div class="md:w-2/3 p-8 md:p-12 flex flex-col justify-center">
                    <h2 class="text-2xl font-bold text-ink mb-2">Sambutan Kepala Sekolah</h2>
                    <p class="text-primary font-medium mb-6">Ratnawati, S.Pd</p>
                    <div class="text-ink-muted">
                        <p class="mb-4 leading-relaxed">
                            Puji syukur kita panjatkan kehadirat Allah SWT, yang telah melimpahkan rahmat dan hidayah-Nya.
                            Di era digital saat ini, kehadiran website sekolah sangatlah penting sebagai pusat informasi dan
                            komunikasi antara pihak sekolah dengan siswa, orang tua, dan masyarakat luas.
                        </p>
                        <p class="leading-relaxed">
                            Melalui portal ini, kami berkomitmen untuk terus meningkatkan transparansi akademik dan
                            memberikan pelayanan pendidikan terbaik demi mewujudkan siswa-siswi yang cerdas secara
                            intelektual dan memiliki akhlak yang mulia sesuai dengan motto kita.
                        </p>
                    </div>
                    <div class="mt-8">
                        <a href="profil/kepala-sekolah" class="text-primary font-medium hover:text-primary-hover transition-colors inline-flex items-center gap-1">
                            Baca selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Kabar Terbaru / Sneak Peek Berita -->
    <section class="py-20 bg-canvas">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4" data-aos="fade-right">
                <div>
                    <h2 class="text-3xl font-bold text-ink tracking-tight">Kabar Terbaru</h2>
                    <p class="text-ink-muted mt-2">Informasi, prestasi, dan kegiatan seputar SMPN 8 Padang.</p>
                </div>
                <a href="/informasi/berita"
                    class="inline-flex items-center text-ink font-medium hover:text-primary transition-colors group">
                    Lihat Semua Berita
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card Berita 1 -->
                <div class="group border border-border rounded-lg bg-surface-1 hover:shadow-ghost-elevated transition-all duration-200 cursor-pointer overflow-hidden flex flex-col"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="p-6 flex-grow">
                        <span
                            class="inline-block py-1 px-2 rounded bg-primary text-white text-xs font-bold mb-4 shadow-sm">Prestasi</span>
                        <p class="text-sm text-ink-muted mb-2">12 Juli 2026</p>
                        <h3 class="text-lg font-bold text-ink mb-3 group-hover:text-primary transition-colors leading-snug">
                            Siswa SMPN 8 Raih Juara 1 Olimpiade Sains Nasional Tingkat Kota</h3>
                        <p class="text-ink-muted text-sm line-clamp-3">Prestasi membanggakan kembali ditorehkan oleh
                            siswa-siswi kita dalam ajang kompetisi bergengsi tahun ini...</p>
                    </div>
                </div>
                <!-- Card Berita 2 -->
                <div class="group border border-border rounded-lg bg-surface-1 hover:shadow-ghost-elevated transition-all duration-200 cursor-pointer overflow-hidden flex flex-col"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="p-6 flex-grow">
                        <span
                            class="inline-block py-1 px-2 rounded bg-ink text-white text-xs font-bold mb-4 shadow-sm">Pengumuman</span>
                        <p class="text-sm text-ink-muted mb-2">08 Juli 2026</p>
                        <h3 class="text-lg font-bold text-ink mb-3 group-hover:text-primary transition-colors leading-snug">
                            Jadwal Pelaksanaan Masa Pengenalan Lingkungan Sekolah (MPLS)</h3>
                        <p class="text-ink-muted text-sm line-clamp-3">Diberitahukan kepada seluruh calon peserta didik baru
                            tahun ajaran 2026/2027 terkait pelaksanaan kegiatan awal...</p>
                    </div>
                </div>
                <!-- Card Berita 3 -->
                <div class="group border border-border rounded-lg bg-surface-1 hover:shadow-ghost-elevated transition-all duration-200 cursor-pointer overflow-hidden flex flex-col"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="p-6 flex-grow">
                        <span
                            class="inline-block py-1 px-2 rounded bg-ink-muted text-white text-xs font-bold mb-4 shadow-sm">Kegiatan</span>
                        <p class="text-sm text-ink-muted mb-2">01 Juli 2026</p>
                        <h3 class="text-lg font-bold text-ink mb-3 group-hover:text-primary transition-colors leading-snug">
                            Kegiatan Pramuka: Kemah Bakti Akhir Semester</h3>
                        <p class="text-ink-muted text-sm line-clamp-3">Membangun kemandirian dan solidaritas melalui
                            kegiatan perkemahan yang diikuti oleh seluruh siswa kelas VIII...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Daftar Guru Sneak Peek (Menggantikan Agenda) -->
    <section class="py-20 bg-surface-2 border-y border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-ink tracking-tight">Tenaga Pendidik</h2>
                <p class="text-ink-muted mt-2 max-w-2xl mx-auto">Mengenal sebagian sosok pendidik yang berdedikasi
                    membimbing dan membentuk karakter siswa-siswi SMPN 8 Padang.</p>
            </div>

            <!-- Grid 4 Kolom sesuai desain -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                <!-- Guru 1 -->
                <div class="bg-canvas border border-border rounded-xl shadow-ghost-card hover:shadow-ghost-elevated transition-all duration-300 overflow-hidden text-center group"
                    data-aos="fade-up" data-aos-delay="100">
                    <!-- Image Area (Aspek rasio potret 3:4) -->
                    <div
                        class="aspect-[3/4] bg-surface-1 relative overflow-hidden flex items-center justify-center border-b border-border">
                        <span class="text-ink-muted text-sm">Foto Guru</span>
                    </div>
                    <!-- Info Area -->
                    <div class="p-5">
                        <h3 class="font-bold text-ink mb-2">Mahmuda Hayati, S.Pd</h3>
                        <span
                            class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-pill">Wakil
                            Kurikulum</span>
                    </div>
                </div>

                <!-- Guru 2 -->
                <div class="bg-canvas border border-border rounded-xl shadow-ghost-card hover:shadow-ghost-elevated transition-all duration-300 overflow-hidden text-center group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="aspect-[3/4] bg-surface-1 relative overflow-hidden flex items-center justify-center border-b border-border">
                        <span class="text-ink-muted text-sm">Foto Guru</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-ink mb-2">Hartina Tri Yuni, M.Pd</h3>
                        <span
                            class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-pill">Wakil
                            Kesiswaan</span>
                    </div>
                </div>

                <!-- Guru 3 -->
                <div class="bg-canvas border border-border rounded-xl shadow-ghost-card hover:shadow-ghost-elevated transition-all duration-300 overflow-hidden text-center group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="aspect-[3/4] bg-surface-1 relative overflow-hidden flex items-center justify-center border-b border-border">
                        <span class="text-ink-muted text-sm">Foto Guru</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-ink mb-2">Afrizal, S.Pd</h3>
                        <span
                            class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-pill">Wakil
                            Humas</span>
                    </div>
                </div>

                <!-- Guru 4 -->
                <div class="bg-canvas border border-border rounded-xl shadow-ghost-card hover:shadow-ghost-elevated transition-all duration-300 overflow-hidden text-center group"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="aspect-[3/4] bg-surface-1 relative overflow-hidden flex items-center justify-center border-b border-border">
                        <span class="text-ink-muted text-sm">Foto Guru</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-ink mb-2">Nini Nelzani, S.Si, M.Pd</h3>
                        <span
                            class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-pill">Wakil
                            Sarpras</span>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center" data-aos="zoom-in" data-aos-delay="500">
                <a href="/profil/guru"
                    class="inline-flex items-center text-primary font-medium hover:text-primary-hover transition-colors group">
                    Lihat Semua Tenaga Pendidik
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. Prestasi -->
    <section class="py-20 bg-canvas">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div data-aos="fade-up">
                <h2 class="text-3xl font-bold text-ink tracking-tight mb-2">Pencapaian Prestasi</h2>
                <p class="text-ink-muted mb-12">Deretan prestasi membanggakan dari siswa dan tenaga pendidik.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                <!-- Prestasi 1 -->
                <div data-aos="fade-up" data-aos-delay="100"
                    class="p-6 border border-border rounded-lg bg-surface-1 hover:-translate-y-1 transition-transform duration-200">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-ink mb-1">Juara 1 Robotik</h4>
                    <p class="text-sm text-ink-muted">Tingkat Provinsi 2025</p>
                </div>

                <!-- Prestasi 2 -->
                <div data-aos="fade-up" data-aos-delay="200"
                    class="p-6 border border-border rounded-lg bg-surface-1 hover:-translate-y-1 transition-transform duration-200">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-ink mb-1">Olimpiade Sains</h4>
                    <p class="text-sm text-ink-muted">Medali Emas Nasional</p>
                </div>

                <!-- Prestasi 3 -->
                <div data-aos="fade-up" data-aos-delay="300"
                    class="p-6 border border-border rounded-lg bg-surface-1 hover:-translate-y-1 transition-transform duration-200">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-ink mb-1">Story Telling</h4>
                    <p class="text-sm text-ink-muted">Tingkat Kota Padang</p>
                </div>

                <!-- Prestasi 4 -->
                <div data-aos="fade-up" data-aos-delay="400"
                    class="p-6 border border-border rounded-lg bg-surface-1 hover:-translate-y-1 transition-transform duration-200">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="font-bold text-ink mb-1">Sekolah Adiwiyata</h4>
                    <p class="text-sm text-ink-muted">Tingkat Nasional</p>
                </div>
            </div>

            <div data-aos="zoom-in" data-aos-delay="500">
                <a href="/kesiswaan/prestasi"
                    class="text-primary font-medium hover:text-primary-hover transition-colors inline-flex items-center gap-1 group">
                    Lihat Semua Prestasi
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 7. Galeri Sneak Peek -->
    <section class="py-20 bg-surface-1 border-t border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-8" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-ink tracking-tight">Galeri Kegiatan</h2>
                <a href="/galeri"
                    class="hidden md:inline-flex text-ink font-medium hover:text-primary transition-colors">Lihat Semua</a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square bg-surface-2 rounded-lg border border-border flex items-center justify-center relative overflow-hidden group cursor-pointer"
                    data-aos="zoom-in" data-aos-delay="100">
                    <span class="text-ink-muted text-sm z-10 group-hover:scale-110 transition-transform">Foto MPLS</span>
                </div>
                <div class="aspect-square bg-surface-2 rounded-lg border border-border flex items-center justify-center relative overflow-hidden group cursor-pointer"
                    data-aos="zoom-in" data-aos-delay="200">
                    <span class="text-ink-muted text-sm z-10 group-hover:scale-110 transition-transform">Foto Wisuda</span>
                </div>
                <div class="aspect-square bg-surface-2 rounded-lg border border-border flex items-center justify-center relative overflow-hidden group cursor-pointer md:col-span-2 md:aspect-auto"
                    data-aos="zoom-in" data-aos-delay="300">
                    <!-- Simulasi Video -->
                    <span class="text-ink-muted text-sm absolute bottom-4 left-4 z-10">Video Profil Sekolah</span>
                </div>
            </div>
        </div>
    </section>
@endsection
