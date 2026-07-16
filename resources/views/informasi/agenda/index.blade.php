@extends('layouts.page')

@section('title', 'Agenda Kegiatan')

@section('page_content')
    <div class="mb-8 border-b border-border pb-6">
        <h2 class="text-2xl font-bold text-ink mb-2">Kalender Akademik & Kegiatan</h2>
        <p class="text-ink-muted">Jadwal lengkap kegiatan belajar mengajar, ujian, dan acara sekolah SMP Negeri 8 Padang.</p>
    </div>

    <!-- Bagian 1: UI Kalender Bulanan (Tailwind Grid) -->
    <div class="bg-surface-1 border border-border rounded-xl p-5 md:p-8 mb-10 shadow-sm">

        <!-- Header Kalender -->
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-ink">Juli 2026</h3>
            <div class="flex gap-2">
                <button class="p-2 bg-canvas border border-border rounded hover:bg-surface-2 transition-colors text-ink">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button class="px-3 py-1.5 text-sm font-medium bg-canvas border border-border rounded hover:bg-surface-2 transition-colors text-ink">Bulan Ini</button>
                <button class="p-2 bg-canvas border border-border rounded hover:bg-surface-2 transition-colors text-ink">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
        </div>

        <!-- Nama Hari -->
        <div class="grid grid-cols-7 gap-1 md:gap-2 mb-2 text-center text-xs font-bold text-ink-muted uppercase tracking-wider">
            <div class="text-red-500">Min</div>
            <div>Sen</div>
            <div>Sel</div>
            <div>Rab</div>
            <div>Kam</div>
            <div>Jum</div>
            <div>Sab</div>
        </div>

        <!-- Grid Tanggal -->
        <!-- Dummy Tanggal Juli 2026 (Mulai hari Rabu) -->
        <div class="grid grid-cols-7 gap-1 md:gap-2 text-center text-sm">

            <!-- Tanggal Bulan Sebelumnya -->
            <div class="aspect-square flex flex-col items-center justify-center p-1 text-border">28</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 text-border">29</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 text-border">30</div>

            <!-- Tanggal Bulan Ini (Juli) -->
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">1</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">2</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">3</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">4</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-red-500">5</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">6</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">7</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">8</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">9</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">10</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">11</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-red-500">12</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">13</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">14</div>

            <!-- Tanggal Hari Ini (Current Date: 15 Juli) -->
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg bg-primary text-white font-bold cursor-pointer shadow-sm relative group">
                15
                <!-- Tooltip event -->
                <div class="absolute bottom-full mb-2 hidden group-hover:block w-32 bg-ink text-canvas text-xs p-2 rounded shadow-ghost-elevated z-10">Hari ini</div>
            </div>

            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">16</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">17</div>

            <!-- Tanggal Ada Event (18 Juli) -->
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg border-2 border-primary text-primary font-bold bg-primary/5 cursor-pointer relative group">
                18
                <span class="w-1.5 h-1.5 bg-primary rounded-full absolute bottom-1.5 md:bottom-2"></span>
                <div class="absolute bottom-full mb-2 hidden group-hover:block w-40 bg-ink text-canvas text-xs p-2 rounded shadow-ghost-elevated z-10 text-left">
                    <span class="block font-bold">Rapat Komite & Rapor</span>
                    <span class="text-canvas/70">08:00 - Selesai</span>
                </div>
            </div>

            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-red-500">19</div>

            <!-- Tanggal Ada Event Rentang (20-22 Juli MPLS) -->
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg bg-blue-100 text-blue-700 font-bold cursor-pointer relative group rounded-r-none border-r-0">
                20
                <span class="w-1.5 h-1.5 bg-blue-500 rounded-full absolute bottom-1.5 md:bottom-2"></span>
            </div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 bg-blue-100 text-blue-700 font-bold cursor-pointer relative group rounded-none border-x-0">
                21
                <span class="w-1.5 h-1.5 bg-blue-500 rounded-full absolute bottom-1.5 md:bottom-2"></span>
                <div class="absolute bottom-full mb-2 hidden group-hover:block w-40 bg-ink text-canvas text-xs p-2 rounded shadow-ghost-elevated z-10 text-left -ml-16">
                    <span class="block font-bold">Masa Pengenalan Lingkungan Sekolah (MPLS)</span>
                </div>
            </div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg bg-blue-100 text-blue-700 font-bold cursor-pointer relative group rounded-l-none border-l-0">
                22
                <span class="w-1.5 h-1.5 bg-blue-500 rounded-full absolute bottom-1.5 md:bottom-2"></span>
            </div>

            <!-- Sisa Hari Juli -->
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">23</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">24</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">25</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-red-500">26</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">27</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">28</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">29</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">30</div>
            <div class="aspect-square flex flex-col items-center justify-center p-1 rounded-lg hover:bg-surface-2 cursor-pointer transition-colors text-ink">31</div>

            <!-- Bulan Selanjutnya -->
            <div class="aspect-square flex flex-col items-center justify-center p-1 text-border">1</div>
        </div>
    </div>

    <!-- Bagian 2: Timeline Agenda Terdekat -->
    <div>
        <h3 class="text-xl font-bold text-ink mb-6 border-b border-border pb-2">Agenda Terdekat</h3>

        <div class="space-y-6">

            <!-- Item Agenda 1 -->
            <div class="flex gap-4 md:gap-6 group">
                <!-- Sisi Tanggal -->
                <div class="flex flex-col items-center min-w-[3rem] md:min-w-[4rem]">
                    <span class="text-sm font-bold text-primary uppercase">Jul</span>
                    <span class="text-2xl md:text-3xl font-bold text-ink leading-none mt-1">18</span>
                    <!-- Garis Timeline -->
                    <div class="w-px h-full bg-border mt-3 group-hover:bg-primary/30 transition-colors"></div>
                </div>
                <!-- Sisi Konten -->
                <div class="bg-canvas border border-border rounded-xl p-5 md:p-6 flex-grow shadow-sm hover:shadow-ghost-elevated transition-shadow pb-6 mb-2">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="px-2 py-0.5 bg-primary/10 text-primary text-[10px] font-bold rounded uppercase tracking-wider">Pertemuan</span>
                    </div>
                    <h4 class="font-bold text-lg text-ink mb-2">Rapat Komite & Pembagian Rapor Genap</h4>
                    <ul class="text-sm text-ink-muted space-y-1 mb-3">
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            08:00 WIB - Selesai
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Ruang Kelas Masing-masing
                        </li>
                    </ul>
                    <p class="text-sm text-ink-muted line-clamp-2">Wajib dihadiri oleh seluruh orang tua/wali murid untuk mengambil hasil evaluasi belajar siswa semester genap.</p>
                </div>
            </div>

            <!-- Item Agenda 2 -->
            <div class="flex gap-4 md:gap-6 group">
                <div class="flex flex-col items-center min-w-[3rem] md:min-w-[4rem]">
                    <span class="text-sm font-bold text-ink-muted uppercase">Jul</span>
                    <span class="text-2xl md:text-3xl font-bold text-ink-muted leading-none mt-1 text-center">20-22</span>
                    <div class="w-px h-full bg-border mt-3 group-hover:bg-primary/30 transition-colors"></div>
                </div>
                <div class="bg-canvas border border-border rounded-xl p-5 md:p-6 flex-grow shadow-sm hover:shadow-ghost-elevated transition-shadow pb-6 mb-2 opacity-80 hover:opacity-100">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="px-2 py-0.5 bg-blue-100 text-blue-700 text-[10px] font-bold rounded uppercase tracking-wider">Kegiatan Siswa</span>
                    </div>
                    <h4 class="font-bold text-lg text-ink mb-2">Masa Pengenalan Lingkungan Sekolah (MPLS)</h4>
                    <ul class="text-sm text-ink-muted space-y-1 mb-3">
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            07:15 WIB - 14:00 WIB
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Lingkungan SMPN 8 Padang
                        </li>
                    </ul>
                    <p class="text-sm text-ink-muted line-clamp-2">Kegiatan orientasi bagi siswa-siswi baru kelas VII tahun ajaran 2026/2027.</p>
                </div>
            </div>

            <!-- Item Agenda 3 -->
            <div class="flex gap-4 md:gap-6 group">
                <div class="flex flex-col items-center min-w-[3rem] md:min-w-[4rem]">
                    <span class="text-sm font-bold text-ink-muted uppercase">Ags</span>
                    <span class="text-2xl md:text-3xl font-bold text-ink-muted leading-none mt-1">17</span>
                    <!-- Hapus div garis vertikal di item terakhir biar rapi -->
                </div>
                <div class="bg-canvas border border-border rounded-xl p-5 md:p-6 flex-grow shadow-sm hover:shadow-ghost-elevated transition-shadow mb-2 opacity-80 hover:opacity-100">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="px-2 py-0.5 bg-red-100 text-red-600 border border-red-200 text-[10px] font-bold rounded uppercase tracking-wider">Upacara</span>
                    </div>
                    <h4 class="font-bold text-lg text-ink mb-2">Upacara HUT Kemerdekaan RI ke-81</h4>
                    <ul class="text-sm text-ink-muted space-y-1 mb-3">
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            07:00 WIB - Selesai
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Lapangan Utama SMPN 8 Padang
                        </li>
                    </ul>
                    <p class="text-sm text-ink-muted line-clamp-2">Diikuti oleh seluruh siswa, guru, dan tenaga kependidikan menggunakan seragam yang telah ditentukan.</p>
                </div>
            </div>

        </div>
    </div>
@endsection
