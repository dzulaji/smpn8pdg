@extends('layouts.admin')

@section('title', 'Edit Prestasi')
@section('header_title', 'Edit Data Prestasi')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.prestasi.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-4xl">
        <form id="form-edit-prestasi" action="{{ route('admin.prestasi.update', $prestasi->id) }}" method="POST"
            enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-1">Judul Prestasi / Lomba <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="judul" value="{{ old('judul', $prestasi->judul) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Predikat Juara <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="juara" value="{{ old('juara', $prestasi->juara) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Tingkat <span
                            class="text-red-500">*</span></label>
                    <select name="tingkat"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                        <option value="Sekolah" {{ old('tingkat', $prestasi->tingkat) == 'Sekolah' ? 'selected' : '' }}>
                            Sekolah</option>
                        <option value="Kota" {{ old('tingkat', $prestasi->tingkat) == 'Kota' ? 'selected' : '' }}>Kota /
                            Kabupaten</option>
                        <option value="Provinsi" {{ old('tingkat', $prestasi->tingkat) == 'Provinsi' ? 'selected' : '' }}>
                            Provinsi</option>
                        <option value="Nasional" {{ old('tingkat', $prestasi->tingkat) == 'Nasional' ? 'selected' : '' }}>
                            Nasional</option>
                        <option value="Internasional"
                            {{ old('tingkat', $prestasi->tingkat) == 'Internasional' ? 'selected' : '' }}>Internasional
                        </option>
                    </select>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal Diraih <span
                            class="text-red-500">*</span></label>
                    <input type="date" name="tanggal" value="{{ old('tanggal', $prestasi->tanggal->format('Y-m-d')) }}"
                        class="w-full md:w-1/2 bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Ganti Foto Prestasi (Opsional)</label>
                <div class="flex items-start gap-6 mt-2">
                    <div
                        class="w-32 h-32 shrink-0 bg-gray-100 border border-gray-300 rounded-sm flex items-center justify-center overflow-hidden">
                        @if ($prestasi->foto)
                            <img id="image-preview" src="{{ asset('storage/' . $prestasi->foto) }}" alt="Preview"
                                class="w-full h-full object-cover">
                            <svg id="placeholder-icon" xmlns="http://www.w3.org/2000/svg"
                                class="h-8 w-8 text-gray-400 hidden" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        @else
                            <img id="image-preview" src="#" alt="Preview" class="w-full h-full object-cover hidden">
                            <svg id="placeholder-icon" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        @endif
                    </div>
                    <div class="flex-1">
                        <p class="text-xs text-gray-500 mb-2">Pilih foto baru untuk menimpa foto lama. Maksimal ukuran: 1MB.
                        </p>
                        <input type="file" id="foto" name="foto"
                            accept="image/jpeg, image/png, image/jpg, image/webp"
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors border border-gray-300 rounded-sm p-1 cursor-pointer">
                    </div>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Deskripsi & Cerita Prestasi <span
                        class="text-red-500">*</span></label>
                <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $prestasi->deskripsi) }}">
                <trix-editor input="deskripsi"
                    class="w-full border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 text-sm prose max-w-none"></trix-editor>
                @error('deskripsi')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmEdit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Update Prestasi
                </button>
            </div>
        </form>
    </div>

    <!-- Script Live Preview & SweetAlert -->
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
                title: 'Update Data Prestasi?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                confirmButtonText: 'Ya, Update!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-edit-prestasi').submit();
                }
            })
        }
    </script>
@endsection
