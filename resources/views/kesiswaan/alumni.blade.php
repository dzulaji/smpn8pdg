@extends('layouts.page')

@section('title', 'Alumni SMPN 8 Padang')

@section('page_content')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <div class="mb-10 text-center md:text-left">
        <h2 class="text-2xl font-bold text-ink mb-2">Jejak Langkah Alumni</h2>
        {{-- <p class="text-ink-muted">Kisah sukses dan inspirasi dari lulusan SMP Negeri 8 Padang yang kini telah berkiprah di
            berbagai bidang.</p> --}}
    </div>

    {{-- <!-- 1. Alumni Spotlight -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
        <div class="bg-surface-1 border border-border rounded-xl p-6 shadow-sm relative overflow-hidden group">
            <div
                class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-bl-full -z-10 transition-transform group-hover:scale-110">
            </div>
            <div class="flex items-center gap-4 mb-4">
                <div
                    class="w-16 h-16 bg-surface-2 rounded-full border-2 border-primary/20 flex items-center justify-center overflow-hidden flex-shrink-0">
                    <span class="text-[10px] text-ink-muted">Foto 1</span>
                </div>
                <div>
                    <h3 class="font-bold text-ink text-lg">Dr. Budi Santoso</h3>
                    <p class="text-sm text-primary font-medium">Dokter Spesialis Bedah</p>
                    <span class="text-xs text-ink-muted">Alumni Angkatan 1995</span>
                </div>
            </div>
            <p class="text-sm text-ink-muted italic leading-relaxed">"Kedisiplinan dan karakter Good Attitude yang
                ditanamkan guru-guru SMPN 8 menjadi pondasi terkuat saya dalam menyelesaikan pendidikan kedokteran yang
                berat."</p>
        </div>

        <div class="bg-surface-1 border border-border rounded-xl p-6 shadow-sm relative overflow-hidden group">
            <div
                class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-bl-full -z-10 transition-transform group-hover:scale-110">
            </div>
            <div class="flex items-center gap-4 mb-4">
                <div
                    class="w-16 h-16 bg-surface-2 rounded-full border-2 border-primary/20 flex items-center justify-center overflow-hidden flex-shrink-0">
                    <span class="text-[10px] text-ink-muted">Foto 2</span>
                </div>
                <div>
                    <h3 class="font-bold text-ink text-lg">Sari Wahyuni, S.E.</h3>
                    <p class="text-sm text-primary font-medium">CEO StartUp Edutech</p>
                    <span class="text-xs text-ink-muted">Alumni Angkatan 2008</span>
                </div>
            </div>
            <p class="text-sm text-ink-muted italic leading-relaxed">"Ekstrakurikuler English Club dan OSIS di SMPN 8
                benar-benar mengasah kemampuan leadership dan public speaking saya sejak dini."</p>
        </div>
    </div>

    <!-- 2. Galeri Kenangan & Nostalgia (Slider Swiper) -->
    <div class="mb-14 relative">
        <h3 class="text-xl font-bold text-ink mb-6 border-b border-border pb-2">Galeri Kenangan Lintas Angkatan</h3>

        <!-- Swiper Container -->
        <div class="swiper alumniSwiper rounded-xl overflow-hidden shadow-sm">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div
                    class="swiper-slide aspect-video bg-surface-2 border border-border flex items-center justify-center relative cursor-grab">
                    <span class="text-xl font-bold text-ink-muted">Foto Reuni Angkatan 1995</span>
                </div>
                <!-- Slide 2 -->
                <div
                    class="swiper-slide aspect-video bg-surface-2 border border-border flex items-center justify-center relative cursor-grab">
                    <span class="text-xl font-bold text-ink-muted">Perpisahan Kelas IX Tahun 2010</span>
                </div>
                <!-- Slide 3 -->
                <div
                    class="swiper-slide aspect-video bg-surface-2 border border-border flex items-center justify-center relative cursor-grab">
                    <span class="text-xl font-bold text-ink-muted">Kegiatan Lomba Antar Kelas 2015</span>
                </div>
                <!-- Slide 4 -->
                <div
                    class="swiper-slide aspect-video bg-surface-2 border border-border flex items-center justify-center relative cursor-grab">
                    <span class="text-xl font-bold text-ink-muted">Reuni Akbar 2023</span>
                </div>
            </div>

            <!-- Pagination (Dots) -->
            <div class="swiper-pagination !bottom-4"></div>
            <!-- Navigation (Arrows) -->
            <div
                class="swiper-button-next !text-primary !w-10 !h-10 bg-canvas/80 rounded-full backdrop-blur-sm after:!text-lg mr-2">
            </div>
            <div
                class="swiper-button-prev !text-primary !w-10 !h-10 bg-canvas/80 rounded-full backdrop-blur-sm after:!text-lg ml-2">
            </div>
        </div>
    </div> --}}

    <!-- 3. Pendataan Alumni (CTA Google Form) -->
    <div class="bg-ink rounded-xl border border-border p-8 text-center shadow-ghost-elevated relative overflow-hidden">
        <div class="absolute -top-10 -left-10 w-32 h-32 bg-primary/20 rounded-full blur-2xl"></div>
        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-primary/20 rounded-full blur-2xl"></div>

        <div class="relative z-10">
            <h3 class="text-2xl font-bold text-canvas mb-3">Mari Terhubung Kembali!</h3>
            <p class="text-ink-muted text-sm max-w-lg mx-auto mb-6 leading-relaxed text-canvas/80">
                Kami sangat bangga dengan pencapaian para alumni. Bantu kami memperbarui pangkalan data ikatan alumni dengan
                mengisi formulir singkat di bawah ini.
            </p>
            <a href="https://forms.gle/65dSMPGao9DgrDBaA" target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center gap-2 bg-primary hover:bg-primary-hover text-white px-8 py-3 rounded-md font-bold text-sm transition-colors shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Isi Data Alumni Sekarang
            </a>
        </div>
    </div>

    <!-- Swiper JS Init -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper(".alumniSwiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                // Responsive: Di desktop tampilin 2 slide berjejer biar elegan
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    }
                }
            });
        });
    </script>
@endsection
