<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - SMPN 8 Padang</title>
    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="{{ asset('images/logo.webp') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.webp') }}">
    @vite('resources/css/app.css')
    <!-- Trix Editor CDN -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <!-- Custom CSS untuk Trix agar matching dengan Tailwind kita -->
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        trix-editor:focus-within {
            border-color: #FF9400 !important;
            /* Pakai warna primary lu */
            outline: none !important;
            box-shadow: 0 0 0 1px #FF9400 !important;
        }

        /* Beri tinggi minimal */
        trix-editor {
            min-height: 250px;
            background-color: #F9FAFB;
            /* Pakai warna surface-1 lu */
        }

        trix-editor ul {
            list-style-type: disc !important;
            margin-left: 1.5rem !important;
        }

        trix-editor ol {
            list-style-type: decimal !important;
            margin-left: 1.5rem !important;
        }

        trix-editor li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans text-gray-800 flex h-screen overflow-hidden">

    <!-- SIDEBAR KIRI -->
    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col h-full shadow-sm z-10">
        <!-- Logo / Title -->
        <div class="h-16 flex items-center justify-center border-b border-gray-200 px-4">
            <span class="text-lg font-bold text-gray-800 uppercase tracking-widest">Admin Panel</span>
        </div>

        <!-- Menu Navigasi -->
        <nav class="flex-1 overflow-y-auto p-4 space-y-1">

            <!-- Menu Dashboard -->
            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm transition-colors text-sm {{ request()->routeIs('admin.dashboard') ? 'bg-yellow-400 text-gray-900 font-bold shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                Dashboard
            </a>

            <!-- Kategori Data Master -->
            <div class="pt-5 pb-2">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider px-3">Kelola Data</p>
            </div>

            <!-- Menu Data Guru -->
            <!-- Perhatikan kita pakai routeIs('admin.guru.*') dengan tanda bintang agar tetap kuning saat masuk ke halaman Edit/Tambah -->
            <a href="{{ route('admin.guru.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm transition-colors text-sm {{ request()->routeIs('admin.guru.*') ? 'bg-yellow-400 text-gray-900 font-bold shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Data Guru
            </a>

            <a href="{{ route('admin.fasilitas.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm transition-colors text-sm {{ request()->routeIs('admin.fasilitas.*') ? 'bg-yellow-400 text-gray-900 font-bold shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                Fasilitas Sekolah
            </a>

            <!-- Menu Berita & Artikel (Contoh disiapkan) -->
            <a href="{{ route('admin.berita.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm transition-colors text-sm {{ request()->routeIs('admin.berita.*') ? 'bg-yellow-400 text-gray-900 font-bold shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                Berita & Artikel
            </a>

            <a href="{{ route('admin.pengumuman.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm transition-colors text-sm {{ request()->routeIs('admin.pengumuman.*') ? 'bg-yellow-400 text-gray-900 font-bold shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                </svg>
                Pengumuman
            </a>

            <a href="{{ route('admin.agenda.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm transition-colors text-sm {{ request()->routeIs('admin.agenda.*') ? 'bg-yellow-400 text-gray-900 font-bold shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Agenda Kegiatan
            </a>

            <a href="{{ route('admin.download.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm transition-colors text-sm {{ request()->routeIs('admin.download.*') ? 'bg-yellow-400 text-gray-900 font-bold shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                Pusat Unduhan
            </a>

            <a href="{{ route('admin.prestasi.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm transition-colors text-sm {{ request()->routeIs('admin.prestasi.*') ? 'bg-yellow-400 text-gray-900 font-bold shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
                Data Prestasi
            </a>

            <a href="{{ route('admin.ekstrakurikuler.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm transition-colors text-sm {{ request()->routeIs('admin.ekstrakurikuler.*') ? 'bg-yellow-400 text-gray-900 font-bold shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                Ekstrakurikuler
            </a>

            <a href="{{ route('admin.galeri.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-sm transition-colors text-sm {{ request()->routeIs('admin.galeri.*') ? 'bg-yellow-400 text-gray-900 font-bold shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900 font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Galeri Foto & Video
            </a>

        </nav>
    </aside>

    <!-- AREA KONTEN KANAN -->
    <div class="flex-1 flex flex-col h-full overflow-hidden">

        <!-- HEADER ATAS -->
        <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6 shadow-sm z-0">
            <h1 class="text-xl font-bold text-gray-800">@yield('header_title', 'Dashboard')</h1>

            <div class="flex items-center gap-5">
                <span class="text-sm font-medium text-gray-600">
                    Halo, <span class="font-bold text-gray-900">{{ Auth::user()->name }}</span>
                </span>

                <!-- Form Logout menggunakan POST + CSRF untuk mencegah serangan CSRF -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="button" onclick="confirmLogout()"
                        class="inline-flex items-center gap-2 px-3 py-1.5 text-sm bg-red-50 text-red-600 hover:bg-red-100 hover:text-red-700 rounded-sm font-bold transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </header>

        <!-- KONTEN DINAMIS -->
        <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
            @yield('content')
        </main>

    </div>


    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Yakin ingin keluar?',
                text: "Anda harus login kembali untuk masuk ke panel ini.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#eab308', // Warna kuning Tailwind
                cancelButtonColor: '#ef4444', // Warna merah Tailwind
                confirmButtonText: 'Ya, Keluar!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            })
        }

        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2500, // Hilang otomatis dalam 2.5 detik
                timerProgressBar: true
            });
        @endif

        // 2. Menangkap Session Error (Validasi dari Backend)
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Oops... Validasi Gagal!',
                // Menampilkan semua pesan error dalam bentuk list HTML
                html: '<ul class="text-left text-sm text-red-500 mt-2 list-disc list-inside">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                confirmButtonColor: '#ef4444' // Warna merah
            });
        @endif
    </script>
</body>

</html>
