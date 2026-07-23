@extends('layouts.admin')

@section('title', 'Tambah Data Guru')
@section('header_title', 'Tambah Data Guru')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <p class="text-gray-600">Masukkan informasi detail untuk tenaga pendidik baru.</p>
        <a href="{{ route('admin.guru.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Kembali
        </a>
    </div>

    <!-- Card Form -->
    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-3xl">

        <!-- PENTING: enctype multipart/form-data wajib ada untuk upload file -->
        <form id="form-tambah-guru" action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf

            <!-- Input Nama -->
            <div>
                <label for="nama" class="block text-sm font-bold text-gray-700 mb-1">Nama Lengkap <span
                        class="text-red-500">*</span></label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors text-sm"
                    placeholder="Misal: Budi Santoso, S.Pd" required>
                @error('nama')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input Jabatan -->
            <div>
                <label for="jabatan" class="block text-sm font-bold text-gray-700 mb-1">Jabatan <span
                        class="text-red-500">*</span></label>
                <input type="text" id="jabatan" name="jabatan" value="{{ old('jabatan') }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors text-sm"
                    placeholder="Misal: Guru Matematika" required>
                @error('jabatan')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input Foto & Preview -->
            <div>
                <label for="foto" class="block text-sm font-bold text-gray-700 mb-1">Foto Profile</label>
                <p class="text-xs text-gray-500 mb-3">Format yang didukung: JPG, JPEG, PNG. Ukuran maksimal: 1MB. (Sistem
                    akan otomatis mengkompresi ke WebP).</p>

                <div class="flex items-start gap-6">
                    <!-- Area Preview -->
                    <div
                        class="w-24 h-24 shrink-0 bg-gray-100 border border-gray-300 rounded-sm flex items-center justify-center overflow-hidden">
                        <img id="image-preview" src="#" alt="Preview" class="w-full h-full object-cover hidden">
                        <svg id="placeholder-icon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>

                    <!-- Input File -->
                    <div class="flex-1">
                        <input type="file" id="foto" name="foto"
                            accept="image/jpeg, image/png, image/jpg, image/webp"
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors cursor-pointer border border-gray-300 rounded-sm p-1">
                        @error('foto')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Tombol Submit -->
            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmSubmit()"
                    class="inline-flex items-center gap-2 px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                    </svg>
                    Simpan Data Guru
                </button>
            </div>

        </form>
    </div>

    <!-- Script Live Preview Image -->
    <script>
        const fotoInput = document.getElementById('foto');
        const imagePreview = document.getElementById('image-preview');
        const placeholderIcon = document.getElementById('placeholder-icon');

        fotoInput.addEventListener('change', function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', function() {
                    imagePreview.setAttribute('src', this.result);
                    imagePreview.classList.remove('hidden');
                    placeholderIcon.classList.add('hidden');
                });

                reader.readAsDataURL(file);
            } else {
                imagePreview.setAttribute('src', '#');
                imagePreview.classList.add('hidden');
                placeholderIcon.classList.remove('hidden');
            }
        });
    </script>
    <!-- Script Konfirmasi SweetAlert sebelum Submit -->
    <script>
        function confirmSubmit() {
            Swal.fire({
                title: 'Simpan Data Guru?',
                text: "Pastikan nama, jabatan, dan foto sudah sesuai.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308', // Warna kuning primary lu
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, Simpan!',
                cancelButtonText: 'Periksa Lagi'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika di-klik "Ya", eksekusi submit form secara manual via Javascript
                    document.getElementById('form-tambah-guru').submit();
                }
            })
        }
    </script>
@endsection
