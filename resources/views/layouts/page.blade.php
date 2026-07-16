@extends('layouts.app')

@section('content')
    <!-- Page Header/Breadcrumb Area -->
    <div class="bg-surface-1 border-b border-border py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-ink">@yield('title')</h1>
            <!-- Breadcrumbs -->
            <div class="mt-2 text-sm text-ink-muted flex items-center gap-2">
                <a href="/" class="hover:text-primary transition-colors">Beranda</a>
                <span>/</span>

                <!-- Cek apakah halaman ini punya parent (induk) -->
                @hasSection('parent_breadcrumb')
                    @yield('parent_breadcrumb')
                    <span>/</span>
                @endif

                <span class="text-ink font-medium">@yield('title')</span>
            </div>
        </div>
    </div>

    <!-- Main Content & Sidebar Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-10">

            <!-- KIRI: Main Content -->
            <div class="lg:w-2/3">
                <div class="bg-canvas border border-border rounded-xl p-8 shadow-sm">
                    @yield('page_content')
                </div>
            </div>

            <!-- KANAN: Sidebar -->
            <aside class="lg:w-1/3 space-y-8">

                <!-- Widget 1: Berita Populer -->
                <div class="bg-canvas border border-border rounded-xl p-6 shadow-sm">
                    <h3 class="font-bold text-lg text-ink border-b-2 border-primary pb-2 mb-4 inline-block">Terpopuler</h3>
                    <div class="space-y-4">
                        <!-- Item Sidebar -->
                        <a href="#" class="flex gap-4 group">
                            <div
                                class="w-20 h-20 bg-surface-2 rounded-md flex-shrink-0 flex items-center justify-center border border-border overflow-hidden">
                                <span class="text-[10px] text-ink-muted">Foto</span>
                            </div>
                            <div>
                                <h4
                                    class="text-sm font-bold text-ink group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                                    Jadwal Ujian Akhir Semester Genap 2026</h4>
                                <div class="flex items-center gap-2 mt-2 text-xs text-ink-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    10 Mei 2026
                                </div>
                            </div>
                        </a>
                        <!-- Item Sidebar -->
                        <a href="#" class="flex gap-4 group">
                            <div
                                class="w-20 h-20 bg-surface-2 rounded-md flex-shrink-0 flex items-center justify-center border border-border overflow-hidden">
                                <span class="text-[10px] text-ink-muted">Foto</span>
                            </div>
                            <div>
                                <h4
                                    class="text-sm font-bold text-ink group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                                    INFORMASI KELULUSAN SISWA KELAS IX</h4>
                                <div class="flex items-center gap-2 mt-2 text-xs text-ink-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    02 Juni 2026
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Widget 2: Pengumuman Cepat -->
                <div class="bg-surface-1 border border-border rounded-xl p-6 shadow-sm">
                    <h3 class="font-bold text-lg text-ink mb-3">Pengumuman</h3>
                    <div class="p-4 bg-canvas border border-primary/30 rounded-lg border-l-4 border-l-primary">
                        <p class="text-sm text-ink leading-relaxed">Libur Hari Raya Idul Adha 1447 H ditetapkan mulai
                            tanggal 25 - 28 Juni 2026. Siswa kembali masuk tanggal 29 Juni 2026.</p>
                    </div>
                </div>

            </aside>
        </div>
    </div>
@endsection
