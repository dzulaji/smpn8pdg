@extends('layouts.page')

@section('title', 'Hubungi Kami')

@section('page_content')
    <div class="mb-10 text-center md:text-left">
        <h2 class="text-2xl font-bold text-ink mb-2">Informasi Kontak & Lokasi</h2>
        <p class="text-ink-muted">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan seputar pendaftaran,
            fasilitas, atau informasi sekolah lainnya.</p>
    </div>

    <div class="flex flex-col gap-10">

        <!-- ATAS: Info Kontak (Grid 3 Kolom) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Card Alamat -->
            <div
                class="bg-canvas border border-border rounded-xl p-6 shadow-sm flex flex-col items-center text-center hover:shadow-ghost-elevated transition-shadow">
                <div class="w-14 h-14 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h4 class="font-bold text-ink mb-2">Alamat Lengkap</h4>
                <p class="text-sm text-ink-muted leading-relaxed">Jl. Dr. Sutomo No.8, Kubu Marapalam, Kec. Padang Timur,
                    Kota Padang, Sumatera Barat 25126</p>
            </div>

            <!-- Card Telepon -->
            <div
                class="bg-canvas border border-border rounded-xl p-6 shadow-sm flex flex-col items-center text-center hover:shadow-ghost-elevated transition-shadow">
                <div class="w-14 h-14 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <h4 class="font-bold text-ink mb-2">Telepon</h4>
                <p class="text-sm text-ink-muted mb-1">(0751) 123456</p>
                <p class="text-xs text-ink-muted font-medium bg-surface-2 px-2 py-1 rounded">Senin - Jumat, 07:30 - 15:00
                </p>
            </div>

            <!-- Card Email -->
            <div
                class="bg-canvas border border-border rounded-xl p-6 shadow-sm flex flex-col items-center text-center hover:shadow-ghost-elevated transition-shadow">
                <div class="w-14 h-14 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h4 class="font-bold text-ink mb-2">Email</h4>
                <a href="mailto:info@smpn8padang.sch.id"
                    class="text-sm text-primary hover:text-primary-hover transition-colors font-medium">info@smpn8padang.sch.id</a>
            </div>

        </div>

        <!-- BAWAH: Google Maps Full Width -->
        <div
            class="w-full h-[400px] md:h-[450px] rounded-xl overflow-hidden border border-border shadow-sm relative bg-surface-2 group">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2692635340454!2d100.38064647583334!3d-0.9505493990402651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b949c9741c0b%3A0x559f9dcc6ad94a4e!2sSMP%20Negeri%208%20Padang!5e0!3m2!1sid!2sid!4v1784133345643!5m2!1sid!2sid"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>

    </div>
@endsection
