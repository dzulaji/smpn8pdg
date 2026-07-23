@extends('layouts.app')

@section('content')
    <!-- 1. Hero Section -->
    <section class="relative py-20 lg:py-32 overflow-hidden bg-surface-2">

        <!-- Background Slider Container -->
        <div id="hero-slider" class="absolute inset-0 z-0">
            <!-- Gambar 1 (Aktif pertama kali) -->
            <img src="{{ asset('images/hero-smpn8.webp') }}"
                class="slide-item absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out opacity-100"
                alt="Hero 1">
            <!-- Gambar 2 -->
            <img src="{{ asset('images/halaman-depan.webp') }}"
                class="slide-item absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out opacity-0"
                alt="Hero 2">
            <!-- Gambar 3 -->
            <img src="{{ asset('images/gedung-kantin.webp') }}"
                class="slide-item absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out opacity-0"
                alt="Hero 3">
            <!-- Gambar 4 -->
            <img src="{{ asset('images/gedung-baru.webp') }}"
                class="slide-item absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out opacity-0"
                alt="Hero 4">
        </div>

        <!-- Overlay Hitam (Sedikit digelapin jadi bg-black/40 biar teks putihnya selalu kebaca di foto apapun) -->
        <div class="absolute inset-0 bg-black/40 z-0"></div>

        <!-- Konten Teks -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" data-aos="fade-up" data-aos-duration="800">
            <div class="text-center max-w-3xl mx-auto">
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-white leading-tight mb-6 drop-shadow-md">
                    Smart and <span class="text-primary relative whitespace-nowrap">Good Attitude</span>
                </h1>
                <p class="text-lg md:text-xl text-white/90 mb-10 leading-relaxed drop-shadow-sm">
                    Mewujudkan generasi berkarakter, berprestasi, dan berdaya saing tinggi. Selamat datang di portal resmi
                    SMP Negeri 8 Kota Padang.
                </p>
                <span
                    class="inline-block py-1 px-3 rounded-pill bg-primary text-white text-sm font-semibold tracking-wide mb-4 shadow-sm">
                    Akreditasi A
                </span>
            </div>
        </div>
    </section>

    <!-- 2. Quick Stats Section -->
    <section class="py-12 bg-canvas border-b border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div data-aos="fade-up" data-aos-delay="100">
                    <p class="text-4xl font-bold text-ink mb-1">840</p>
                    <p class="text-sm font-medium text-ink-muted uppercase tracking-wide">Total Siswa</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <p class="text-4xl font-bold text-ink mb-1">54</p>
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

                <!-- Foto Kepala Sekolah -->
                <div
                    class="md:w-1/3 bg-surface-2 min-h-[300px] flex items-center justify-center border-r border-border relative">
                    <img src="{{ asset('images/kepsek.webp') }}" alt="Foto Kepala Sekolah Dewi Anggraini"
                        class="w-full h-full object-cover">
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-primary"></div>
                </div>

                <!-- Teks Sambutan -->
                <div class="md:w-2/3 p-8 md:p-12 flex flex-col justify-center">
                    <h2 class="text-2xl font-bold text-ink mb-2">Sambutan Kepala Sekolah</h2>
                    <p class="text-primary font-bold mb-6">Dewi Anggraini, M.Pd</p>

                    <div class="text-ink">
                        <p class="mb-4 leading-relaxed text-justify">
                            Puji syukur senantiasa kita panjatkan kehadirat Allah SWT, yang telah melimpahkan rahmat,
                            taufik, dan hidayah-Nya kepada kita semua. Selamat datang di website resmi SMP Negeri 8 Padang.
                        </p>
                        <p class="leading-relaxed text-justify line-clamp-3">
                            Di era digital dan kemajuan teknologi informasi yang begitu pesat saat ini, kehadiran sebuah
                            website sekolah tidak lagi sekadar fasilitas tambahan, melainkan sebuah kebutuhan esensial.
                            Website ini kami dedikasikan sebagai pusat informasi, komunikasi, dan transparansi antara pihak
                            sekolah, siswa, orang tua/wali murid, alumni, dan masyarakat luas.
                        </p>
                    </div>

                    <!-- Tombol Selengkapnya -->
                    <div class="mt-8">
                        <a href="{{ url('profil/kepala-sekolah') }}"
                            class="text-primary font-medium hover:text-primary-hover transition-colors inline-flex items-center gap-1 group">
                            Baca selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Kabar Terbaru / Sneak Peek Berita -->
    <section class="py-20 bg-canvas">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="flex justify-between items-end mb-10" data-aos="fade-right">
                <div>
                    <h2 class="text-3xl font-bold text-ink tracking-tight">Kabar Terbaru</h2>
                    <p class="text-ink-muted mt-2">Informasi, prestasi, dan kegiatan seputar SMPN 8 Padang.</p>
                </div>
                <a href="{{ url('/informasi/berita') }}"
                    class="hidden md:inline-flex items-center text-ink font-medium hover:text-primary transition-colors group">
                    Lihat Semua Berita
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Grid Berita Dinamis -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse ($beritaTerbaru as $berita)
                    <!-- Card Berita -->
                    <a href="{{ url('/informasi/berita/' . $berita->slug) }}"
                        class="group border border-border rounded-lg overflow-hidden bg-canvas hover:shadow-ghost-elevated transition-shadow duration-200 cursor-pointer flex flex-col h-full"
                        data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">

                        <!-- Cover/Thumbnail Area -->
                        <div class="h-48 bg-surface-2 relative overflow-hidden">
                            <!-- Badge Kategori -->
                            <span
                                class="absolute top-3 left-3 bg-primary text-white text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded shadow-sm z-10">
                                {{ $berita->kategori }}
                            </span>

                            <!-- Gambar -->
                            @if ($berita->thumbnail)
                                <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="absolute inset-0 flex items-center justify-center text-ink-muted text-sm">Tidak
                                    Ada Gambar</div>
                            @endif
                            <div class="absolute inset-0 bg-ink/5 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>

                        <!-- Content Area -->
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-sm text-ink-muted mb-2">
                                {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}</p>
                            <h3
                                class="text-lg font-bold text-ink mb-3 group-hover:text-primary transition-colors leading-snug">
                                {{ $berita->judul }}
                            </h3>
                            <p class="text-ink-muted text-sm line-clamp-3 mb-4 flex-grow">
                                {{ Str::limit(strip_tags($berita->isi_berita), 120) }}
                            </p>
                        </div>
                    </a>
                @empty
                    <!-- Fallback kalau data berita kosong -->
                    <div class="col-span-full py-12 text-center border border-dashed border-border rounded-xl bg-surface-1"
                        data-aos="fade-up">
                        <p class="text-ink-muted text-sm">Belum ada kabar atau berita terbaru.</p>
                    </div>
                @endforelse
            </div>

            <!-- Tombol Mobile (Muncul cuma di HP) -->
            <div class="mt-8 text-center md:hidden" data-aos="fade-up">
                <a href="{{ url('/informasi/berita') }}"
                    class="inline-block px-6 py-3 bg-surface-1 border border-border rounded-lg text-ink font-medium hover:text-primary transition-colors">
                    Lihat Semua Berita
                </a>
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

            <!-- Grid 4 Kolom Dinamis -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                @forelse ($guruDepan as $guru)
                    <!-- Card Guru -->
                    <div class="bg-canvas border border-border rounded-xl shadow-ghost-card hover:shadow-ghost-elevated transition-all duration-300 overflow-hidden text-center group"
                        data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">

                        <!-- Image Area (Aspek rasio potret 3:4) -->
                        <div
                            class="aspect-[3/4] bg-surface-1 relative overflow-hidden flex items-center justify-center border-b border-border">
                            @if ($guru->foto)
                                <img src="{{ asset('storage/' . $guru->foto) }}" alt="{{ $guru->nama }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <span class="text-ink-muted text-sm">Foto Belum Tersedia</span>
                            @endif
                        </div>

                        <!-- Info Area -->
                        <div class="p-5 flex flex-col items-center">
                            <h3 class="font-bold text-ink text-sm mb-2 line-clamp-1" title="{{ $guru->nama }}">
                                {{ $guru->nama }}</h3>
                            <span
                                class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-pill line-clamp-1">
                                {{ $guru->jabatan }}
                            </span>
                        </div>
                    </div>
                @empty
                    <!-- Fallback jika belum ada data guru -->
                    <div class="col-span-full py-12 text-center border border-dashed border-border rounded-xl bg-canvas"
                        data-aos="fade-up">
                        <p class="text-ink-muted text-sm">Data tenaga pendidik belum tersedia.</p>
                    </div>
                @endforelse
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
                    <h4 class="font-bold text-ink mb-1">Juara 1 Walikota Padang Cilik</h4>
                    <p class="text-sm text-ink-muted">Tingkat Kota Padang</p>
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
                    <h4 class="font-bold text-ink mb-1">Internasional Pencak Silat Indonesia</h4>
                    <p class="text-sm text-ink-muted">Juara 2 Tingkat Kota Nasional</p>
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
                    <h4 class="font-bold text-ink mb-1">MSQ SMP</h4>
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
            <!-- Header Galeri -->
            <div class="flex justify-between items-end mb-8" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-ink tracking-tight">Galeri Kegiatan</h2>
                <a href="{{ url('/galeri') }}"
                    class="hidden md:inline-flex items-center text-ink font-medium hover:text-primary transition-colors group">
                    Lihat Semua
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Grid Galeri Dinamis -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @forelse ($galeriDepan as $item)
                    @if ($item->tipe == 'Foto')
                        <!-- Item Foto -->
                        <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank"
                            class="aspect-square bg-surface-2 rounded-lg border border-border flex items-center justify-center relative overflow-hidden group cursor-pointer shadow-sm"
                            data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}">
                            <img src="{{ asset('storage/' . $item->file_path) }}" alt="Galeri"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-ink/20 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </a>
                    @else
                        <!-- Item Video (Ekstrak Thumbnail YouTube) -->
                        @php
                            preg_match(
                                '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i',
                                $item->file_path,
                                $match,
                            );
                            $youtube_id = $match[1] ?? null;
                            $thumbnail_url = $youtube_id
                                ? "https://img.youtube.com/vi/{$youtube_id}/maxresdefault.jpg"
                                : '';
                        @endphp
                        <a href="{{ $item->file_path }}" target="_blank"
                            class="aspect-square bg-surface-2 rounded-lg border border-border flex items-center justify-center relative overflow-hidden group cursor-pointer shadow-sm"
                            data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}">
                            @if ($youtube_id)
                                <img src="{{ $thumbnail_url }}" alt="Video"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            @else
                                <span class="text-ink-muted text-sm">Video</span>
                            @endif
                            <!-- Ikon Play Overlay -->
                            <div
                                class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-black/40 transition-colors">
                                <div
                                    class="w-10 h-10 bg-red-600/90 backdrop-blur-sm rounded-full flex items-center justify-center text-white shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @endif
                @empty
                    <!-- Fallback kalau data kosong -->
                    <div class="col-span-full py-12 text-center border border-dashed border-border rounded-xl bg-canvas"
                        data-aos="zoom-in">
                        <p class="text-ink-muted text-sm">Belum ada foto atau video terbaru.</p>
                    </div>
                @endforelse
            </div>

            <!-- Tombol Lihat Semua versi Mobile (Muncul di HP aja) -->
            <div class="mt-8 text-center md:hidden" data-aos="fade-up">
                <a href="{{ url('/galeri') }}"
                    class="inline-block px-6 py-3 bg-surface-2 border border-border rounded-lg text-ink font-medium hover:text-primary transition-colors">
                    Lihat Semua Galeri
                </a>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slides = document.querySelectorAll('.slide-item');
        let currentSlide = 0;

        // Fungsi untuk mengganti background setiap 4 detik
        setInterval(() => {
            // Sembunyikan gambar saat ini (fade out)
            slides[currentSlide].classList.remove('opacity-100');
            slides[currentSlide].classList.add('opacity-0');

            // Hitung index gambar berikutnya
            currentSlide = (currentSlide + 1) % slides.length;

            // Tampilkan gambar berikutnya (fade in)
            slides[currentSlide].classList.remove('opacity-0');
            slides[currentSlide].classList.add('opacity-100');
        }, 4000); // 4000ms = 4 detik
    });
</script>
