@extends('layouts.admin')

@section('title', 'Edit Data Guru')
@section('header_title', 'Edit Data Guru')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <p class="text-gray-600">Perbarui informasi tenaga pendidik.</p>
        <a href="{{ route('admin.guru.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-3xl">
        <!-- Gunakan @method('PUT') untuk update data -->
        <form id="form-edit-guru" action="{{ route('admin.guru.update', $guru->id) }}" method="POST"
            enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="nama" class="block text-sm font-bold text-gray-700 mb-1">Nama Lengkap <span
                        class="text-red-500">*</span></label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $guru->nama) }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors text-sm"
                    required>
            </div>

            <div>
                <label for="jabatan" class="block text-sm font-bold text-gray-700 mb-1">Jabatan <span
                        class="text-red-500">*</span></label>
                <input type="text" id="jabatan" name="jabatan" value="{{ old('jabatan', $guru->jabatan) }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors text-sm"
                    required>
            </div>

            <div>
                <label for="foto" class="block text-sm font-bold text-gray-700 mb-1">Foto Profile (Biarkan kosong jika
                    tidak ingin mengubah foto)</label>
                <p class="text-xs text-gray-500 mb-3">Format: JPG, JPEG, PNG. Maks: 1MB.</p>

                <div class="flex items-start gap-6">
                    <div
                        class="w-24 h-24 shrink-0 bg-gray-100 border border-gray-300 rounded-sm flex items-center justify-center overflow-hidden">
                        <!-- Tampilkan foto lama jika ada -->
                        @if ($guru->foto)
                            <img id="image-preview" src="{{ asset('storage/' . $guru->foto) }}" alt="Preview"
                                class="w-full h-full object-cover">
                            <svg id="placeholder-icon" xmlns="http://www.w3.org/2000/svg"
                                class="h-8 w-8 text-gray-400 hidden" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        @else
                            <img id="image-preview" src="#" alt="Preview" class="w-full h-full object-cover hidden">
                            <svg id="placeholder-icon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        @endif
                    </div>

                    <div class="flex-1">
                        <input type="file" id="foto" name="foto"
                            accept="image/jpeg, image/png, image/jpg, image/webp"
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors cursor-pointer border border-gray-300 rounded-sm p-1">
                    </div>
                </div>
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmEdit()"
                    class="inline-flex items-center gap-2 px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Update Data Guru
                </button>
            </div>
        </form>
    </div>

    <!-- Script Live Preview & SweetAlert Konfirmasi -->
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
            }
        });

        function confirmEdit() {
            Swal.fire({
                title: 'Update Data Guru?',
                text: "Perubahan akan disimpan ke sistem.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, Update!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-edit-guru').submit();
                }
            })
        }
    </script>
@endsection
