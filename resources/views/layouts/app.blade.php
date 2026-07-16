<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 8 Padang | Smart and Good Attitude</title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Memanggil Tailwind CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased selection:bg-primary selection:text-white flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-canvas/90 backdrop-blur-md border-b border-border transition-all duration-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center"> <!-- Sedikit ditinggikan jadi h-20 biar lega -->

                <!-- Logo -->
                <a href="/" class="flex-shrink-0 flex items-center gap-3 cursor-pointer">
                    <img src="{{ asset('images/logo.webp') }}" alt="Logo SMPN 8 Padang"
                        class="w-12 h-12 object-contain">
                    <div class="hidden sm:flex flex-col">
                        <span class="font-bold text-lg tracking-tight text-ink leading-none mb-1">SMPN 8 Padang</span>
                        <span class="text-[10px] text-ink-muted uppercase tracking-wider font-semibold">Smart & Good
                            Attitude</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/"
                        class="text-ink font-medium hover:text-primary transition-colors duration-200 text-sm">Beranda</a>

                    <!-- Dropdown Profil -->
                    <div class="relative group h-full">
                        <button
                            class="flex items-center gap-1 text-ink-muted font-medium group-hover:text-primary transition-colors duration-200 py-8 text-sm">
                            Profil
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="absolute top-full left-0 w-56 bg-canvas border border-border shadow-ghost-elevated rounded-b-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 translate-y-2 group-hover:translate-y-0 overflow-hidden">
                            <a href="/profil/sejarah"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Sejarah</a>
                            <a href="/profil/visi-misi"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Visi
                                & Misi</a>
                            <a href="/profil/kepala-sekolah"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Kepala
                                Sekolah</a>
                            <a href="/profil/guru"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Guru
                                & Staff</a>
                            <a href="/profil/struktur-organisasi"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Struktur
                                Organisasi</a>
                            <a href="/profil/fasilitas"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary">Fasilitas</a>
                        </div>
                    </div>

                    <!-- Dropdown Akademik -->
                    {{-- <div class="relative group h-full">
                        <button
                            class="flex items-center gap-1 text-ink-muted font-medium group-hover:text-primary transition-colors duration-200 py-8 text-sm">
                            Akademik
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="absolute top-full left-0 w-48 bg-canvas border border-border shadow-ghost-elevated rounded-b-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 translate-y-2 group-hover:translate-y-0 overflow-hidden">
                            <a href="#"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Kurikulum</a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Kalender
                                Akademik</a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Jadwal</a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary">Program
                                Unggulan</a>
                        </div>
                    </div> --}}

                    <!-- Dropdown Kesiswaan -->
                    <div class="relative group h-full">
                        <button
                            class="flex items-center gap-1 text-ink-muted font-medium group-hover:text-primary transition-colors duration-200 py-8 text-sm">
                            Kesiswaan
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="absolute top-full left-0 w-48 bg-canvas border border-border shadow-ghost-elevated rounded-b-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 translate-y-2 group-hover:translate-y-0 overflow-hidden">
                            <a href="/kesiswaan/ekstrakurikuler"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Ekstrakurikuler</a>
                            <a href="/kesiswaan/prestasi"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Prestasi</a>
                            <a href="/kesiswaan/alumni"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary">Alumni</a>
                        </div>
                    </div>

                    <!-- Dropdown Informasi -->
                    <div class="relative group h-full">
                        <button
                            class="flex items-center gap-1 text-ink-muted font-medium group-hover:text-primary transition-colors duration-200 py-8 text-sm">
                            Informasi
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="absolute top-full left-0 w-48 bg-canvas border border-border shadow-ghost-elevated rounded-b-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 translate-y-2 group-hover:translate-y-0 overflow-hidden">
                            <a href="/informasi/berita"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Berita</a>
                            <a href="/informasi/pengumuman"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Pengumuman</a>
                            <a href="/informasi/agenda"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary border-b border-border/50">Agenda</a>
                            <a href="/informasi/download"
                                class="block px-4 py-3 text-sm text-ink hover:bg-surface-1 hover:text-primary">Download</a>
                        </div>
                    </div>

                    <a href="/galeri"
                        class="text-ink-muted font-medium hover:text-primary transition-colors duration-200 text-sm">Galeri</a>
                    <a href="/kontak"
                        class="text-ink-muted font-medium hover:text-primary transition-colors duration-200 text-sm">Kontak</a>
                </div>

                <!-- CTA Button PPDB (Link Eksternal) -->
                <div class="hidden lg:flex items-center">
                    <a href="https://psb.diknaspadang.id/home/smp" target="_blank" rel="noopener noreferrer"
                        class="bg-primary hover:bg-primary-hover text-white px-5 py-2.5 rounded-md font-medium text-sm transition-colors duration-200 shadow-sm flex items-center gap-2">
                        Portal PPDB
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-ink hover:text-primary focus:outline-none p-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path id="menu-icon-bars" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu"
            class="hidden md:hidden border-t border-border bg-canvas absolute w-full left-0 top-20 shadow-ghost-elevated pb-4 max-h-[80vh] overflow-y-auto">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <a href="/"
                    class="block px-3 py-2 rounded-md text-base font-medium text-ink hover:text-primary hover:bg-surface-1">Beranda</a>

                <!-- Mobile Dropdown Profil -->
                <div>
                    <button onclick="toggleMobileSub('sub-profil')"
                        class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-ink hover:text-primary hover:bg-surface-1 focus:outline-none">
                        Profil
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="sub-profil" class="hidden pl-6 pr-3 py-2 space-y-2 bg-surface-1/50 rounded-md mt-1">
                        <a href="/profil/sejarah" class="block text-sm text-ink-muted hover:text-primary">Sejarah</a>
                        <a href="/profil/visi-misi" class="block text-sm text-ink-muted hover:text-primary">Visi &
                            Misi</a>
                        <a href="/profil/kepala-sekolah"
                            class="block text-sm text-ink-muted hover:text-primary">Kepala Sekolah & Jajarannya</a>
                        <a href="/profil/guru" class="block text-sm text-ink-muted hover:text-primary">Guru &
                            Staff</a>
                        <a href="/profil/struktur-organisasi"
                            class="block text-sm text-ink-muted hover:text-primary">Struktur Organisasi</a>
                        <a href="/profil/fasilitas"
                            class="block text-sm text-ink-muted hover:text-primary">Fasilitas</a>
                    </div>
                </div>

                <!-- Mobile Dropdown Akademik -->
                {{-- <div>
                    <button onclick="toggleMobileSub('sub-akademik')"
                        class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-ink hover:text-primary hover:bg-surface-1 focus:outline-none">
                        Akademik
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="sub-akademik" class="hidden pl-6 pr-3 py-2 space-y-2 bg-surface-1/50 rounded-md mt-1">
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Kurikulum</a>
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Kalender
                            Akademik</a>
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Jadwal</a>
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Program Unggulan</a>
                    </div>
                </div> --}}

                <!-- Mobile Dropdown Kesiswaan -->
                <div>
                    <button onclick="toggleMobileSub('sub-kesiswaan')"
                        class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-ink hover:text-primary hover:bg-surface-1 focus:outline-none">
                        Kesiswaan
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="sub-kesiswaan" class="hidden pl-6 pr-3 py-2 space-y-2 bg-surface-1/50 rounded-md mt-1">
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Ekstrakurikuler</a>
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Prestasi</a>
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Alumni</a>
                    </div>
                </div>

                <!-- Mobile Dropdown Informasi -->
                <div>
                    <button onclick="toggleMobileSub('sub-informasi')"
                        class="w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-ink hover:text-primary hover:bg-surface-1 focus:outline-none">
                        Informasi
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="sub-informasi" class="hidden pl-6 pr-3 py-2 space-y-2 bg-surface-1/50 rounded-md mt-1">
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Berita</a>
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Pengumuman</a>
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Agenda</a>
                        <a href="#" class="block text-sm text-ink-muted hover:text-primary">Download</a>
                    </div>
                </div>

                <a href="https://psb.diknaspadang.id/home/smp" target="_blank"
                    class="block mt-4 text-center bg-primary hover:bg-primary-hover text-white px-5 py-2.5 rounded-md font-medium text-sm w-full transition-colors shadow-sm">Portal
                    PPDB</a>
            </div>
        </div>
    </nav>

    <!-- Konten Utama Dinamis -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-ink text-canvas pt-16 pb-8 border-t-[4px] border-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo SMPN 8 Padang"
                            class="w-10 h-10 object-contain">
                        <span class="font-bold text-xl tracking-tight text-white">SMPN 8 Padang</span>
                    </div>
                    <p class="text-ink-muted text-sm mb-6 leading-relaxed max-w-sm">
                        Smart and Good Attitude. Mewujudkan generasi berkarakter, berprestasi, dan berdaya saing global
                        sejak tahun 1977.
                    </p>
                    <div class="flex space-x-4">
                        <!-- Social Icons -->
                        <a href="https://youtube.com/@SPENDELTV" target="_blank"
                            class="text-ink-muted hover:text-primary transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com/kaba_spendel/" target="_blank"
                            class="text-ink-muted hover:text-primary transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                            </svg>
                        </a>
                        <a href="https://facebook.com/smpnegeri8padang" target="_blank"
                            class="text-ink-muted hover:text-primary transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-sm text-ink-muted">
                        <li><a href="#" class="hover:text-primary transition-colors">Profil Sekolah</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Visi & Misi</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Data Guru & Staf</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Kalender Akademik</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Kontak Kami</h4>
                    <ul class="space-y-3 text-sm text-ink-muted">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 text-primary"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Jl. Dr. Sutomo, Padang Timur, Padang, Sumbar</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 text-primary"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>0751-31764</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-gray-800 text-sm text-ink-muted text-center">
                <p>&copy; {{ date('Y') }} SMP Negeri 8 Padang. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 50,
            duration: 600,
            easing: 'ease-out-cubic'
        });

        // Script Utama Burger Menu
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconBars = document.getElementById('menu-icon-bars');
        const iconClose = document.getElementById('menu-icon-close');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            iconBars.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });

        // Script Sub-menu Accordion Mobile
        function toggleMobileSub(id) {
            const subMenu = document.getElementById(id);
            subMenu.classList.toggle('hidden');
        }
    </script>
</body>

</html>
