@extends('layouts.page')

@section('title', $ekstrakurikuler->judul)

@section('parent_breadcrumb')
    <a href="/kesiswaan/ekstrakurikuler" class="hover:text-primary transition-colors">Ekstrakurikuler</a>
@endsection

@section('page_content')
    <!-- Header Gambar Utama -->
    <div class="aspect-[21/9] w-full bg-surface-2 rounded-xl border border-border mb-8 overflow-hidden shadow-sm">
        @if ($ekstrakurikuler->foto_utama)
            <img src="{{ asset('storage/' . $ekstrakurikuler->foto_utama) }}" alt="{{ $ekstrakurikuler->judul }}"
                class="w-full h-full object-cover">
        @endif
    </div>

    <!-- Konten Teks -->
    <div class="prose prose-ink max-w-none mb-12 leading-relaxed text-justify">
        <h2 class="text-2xl font-bold text-ink mb-4">Tentang {{ $ekstrakurikuler->judul }}</h2>
        {!! $ekstrakurikuler->deskripsi_lengkap !!}
    </div>

    <!-- Galeri Carousel Multi-Item + Lightbox -->
    @if (is_array($ekstrakurikuler->galeri) && count($ekstrakurikuler->galeri) > 0)
        <h3 class="text-xl font-bold text-ink mb-4 border-b border-border pb-2">Galeri {{ $ekstrakurikuler->judul }}</h3>

        <div class="relative group">
            <!-- Container Slider (Menampilkan 2 di HP, 3 di Desktop) -->
            <div id="gallery-carousel"
                class="flex gap-4 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar pb-2">
                @foreach ($ekstrakurikuler->galeri as $foto)
                    <!-- Item Kotak Kecil -->
                    <div class="shrink-0 w-[calc(50%-0.5rem)] md:w-[calc(33.333%-0.66rem)] snap-start aspect-square bg-surface-1 border border-border rounded-lg overflow-hidden cursor-pointer hover:shadow-md transition-shadow"
                        onclick="openLightbox('{{ asset('storage/' . $foto) }}')">
                        <img src="{{ asset('storage/' . $foto) }}"
                            class="w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                            alt="Galeri">
                    </div>
                @endforeach
            </div>

            <!-- Tombol Navigasi Manual (Muncul kalau foto > 3) -->
            @if (count($ekstrakurikuler->galeri) > 3)
                <button onclick="scrollPrev()"
                    class="absolute -left-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white border border-border text-ink rounded-full flex items-center justify-center shadow-lg transition-all opacity-0 group-hover:opacity-100 hover:bg-surface-2 hover:text-primary z-10 hidden md:flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button onclick="scrollNext()"
                    class="absolute -right-4 top-1/2 -translate-y-1/2 w-10 h-10 bg-white border border-border text-ink rounded-full flex items-center justify-center shadow-lg transition-all opacity-0 group-hover:opacity-100 hover:bg-surface-2 hover:text-primary z-10 hidden md:flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            @endif
        </div>
    @endif

    <!-- Pop-up Lightbox (Modal) -->
    <div id="lightbox"
        class="fixed inset-0 z-50 bg-black/90 hidden flex items-center justify-center opacity-0 transition-opacity duration-300"
        onclick="closeLightbox()">
        <!-- Tombol Close -->
        <button class="absolute top-6 right-6 text-white hover:text-red-500 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <!-- Gambar Perbesar -->
        <img id="lightbox-img" src=""
            class="max-w-[95%] max-h-[90vh] object-contain rounded-lg shadow-2xl scale-95 transition-transform duration-300"
            onclick="event.stopPropagation()">
    </div>

    <!-- CSS Tambahan untuk menyembunyikan scrollbar bawaan browser -->
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <!-- Script Carousel & Lightbox -->
    <script>
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');

        function openLightbox(imageSrc) {
            lightboxImg.src = imageSrc;
            lightbox.classList.remove('hidden');
            setTimeout(() => {
                lightbox.classList.remove('opacity-0');
                lightboxImg.classList.remove('scale-95');
                lightboxImg.classList.add('scale-100');
            }, 10);
        }

        function closeLightbox() {
            lightbox.classList.add('opacity-0');
            lightboxImg.classList.remove('scale-100');
            lightboxImg.classList.add('scale-95');
            setTimeout(() => {
                lightbox.classList.add('hidden');
            }, 300);
        }

        // Logika Carousel Kotak-Kotak
        const container = document.getElementById('gallery-carousel');

        if (container) {
            function scrollNext() {
                const maxScroll = container.scrollWidth - container.clientWidth;
                if (container.scrollLeft >= maxScroll - 10) {
                    container.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                } else {
                    const itemWidth = container.querySelector('div').clientWidth + 16;
                    container.scrollBy({
                        left: itemWidth,
                        behavior: 'smooth'
                    });
                }
            }

            function scrollPrev() {
                const itemWidth = container.querySelector('div').clientWidth + 16;
                container.scrollBy({
                    left: -itemWidth,
                    behavior: 'smooth'
                });
            }

            let autoScroll = setInterval(scrollNext, 3000);

            container.parentElement.addEventListener('mouseenter', () => clearInterval(autoScroll));
            container.parentElement.addEventListener('mouseleave', () => {
                autoScroll = setInterval(scrollNext, 3000);
            });
        }
    </script>
@endsection
