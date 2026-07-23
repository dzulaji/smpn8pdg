@extends('layouts.page')

@section('title', 'Profil Kepala Sekolah')

@section('page_content')
    <div class="flex flex-col md:flex-row gap-8 items-start">

        <!-- Foto & Info -->
        <div class="w-full md:w-1/3 bg-surface-1 rounded-xl border border-border p-4 text-center top-24">
            <div
                class="aspect-[3/4] bg-surface-2 rounded-lg mb-4 flex items-center justify-center border border-border overflow-hidden">
                <img src="{{ asset('images/kepsek.webp') }}" alt="Foto Resmi Kepsek" class="w-full h-full object-cover">
            </div>
            <h3 class="font-bold text-ink text-lg">Dewi Anggraini, M.Pd</h3>
            <span class="inline-block mt-1 px-3 py-1 bg-primary/10 text-primary text-xs font-semibold rounded-pill">Kepala
                SMPN 8 Padang</span>
        </div>

        <!-- Sambutan Full -->
        <div class="w-full md:w-2/3 prose prose-ink max-w-none">
            <h2 class="text-2xl font-bold text-ink mb-4">Sambutan Kepala Sekolah</h2>

            <p class="text-ink leading-relaxed mb-5 text-justify text-[15px] md:text-base">
                <em>Assalamu'alaikum Warahmatullahi Wabarakatuh,</em>
            </p>

            <p class="text-ink leading-relaxed mb-5 text-justify text-[15px] md:text-base">
                Puji syukur senantiasa kita panjatkan kehadirat Allah SWT, yang telah melimpahkan rahmat, taufik, dan
                hidayah-Nya kepada kita semua. Selawat serta salam tak lupa kita sanjungkan kepada junjungan kita Nabi
                Muhammad SAW.
            </p>

            <p class="text-ink leading-relaxed mb-5 text-justify text-[15px] md:text-base">
                Selamat datang di website resmi SMP Negeri 8 Padang. Di era digital dan kemajuan teknologi informasi yang
                begitu pesat saat ini, kehadiran sebuah website sekolah tidak lagi sekadar fasilitas tambahan, melainkan
                sebuah kebutuhan esensial. Website ini kami dedikasikan sebagai pusat informasi, komunikasi, dan
                transparansi antara pihak sekolah, siswa, orang tua/wali murid, alumni, dan masyarakat luas.
            </p>

            <p class="text-ink leading-relaxed mb-5 text-justify text-[15px] md:text-base">
                SMP Negeri 8 Padang terus berkomitmen untuk mewujudkan visi sekolah dengan mencetak generasi yang
                <strong>Smart and Good Attitude</strong>. Kami menyadari bahwa kecerdasan intelektual (Smart) harus selalu
                diimbangi dengan karakter dan budi pekerti yang baik (Good Attitude) agar kelak anak-anak kita mampu
                bersaing di kancah global dengan tetap menjunjung tinggi nilai-nilai agama dan budaya bangsa.
            </p>

            <p class="text-ink leading-relaxed mb-5 text-justify text-[15px] md:text-base">
                Mari bersama-sama kita dukung program-program sekolah demi kemajuan dan masa depan putra-putri kita
                tercinta. Semoga website ini memberikan manfaat yang sebesar-besarnya.
            </p>

            <p class="text-ink leading-relaxed mb-5 text-justify text-[15px] md:text-base">
                <em>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</em><br><br>
                <strong>Dewi Anggraini, M.Pd</strong>
            </p>
        </div>

    </div>
@endsection
