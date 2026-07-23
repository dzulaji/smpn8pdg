@extends('layouts.admin')

@section('title', 'Edit Berita')
@section('header_title', 'Edit Berita & Artikel')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.berita.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-4xl">
        <form id="form-edit-berita" action="{{ route('admin.berita.update', $berita->id) }}" method="POST"
            enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-1">Judul Berita <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="judul" value="{{ old('judul', $berita->judul) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Kategori <span
                            class="text-red-500">*</span></label>
                    <select name="kategori"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                        <option value="Liputan" {{ old('kategori', $berita->kategori) == 'Liputan' ? 'selected' : '' }}>
                            Liputan</option>
                        <option value="Kegiatan" {{ old('kategori', $berita->kategori) == 'Kegiatan' ? 'selected' : '' }}>
                            Kegiatan</option>
                        <option value="Akademik" {{ old('kategori', $berita->kategori) == 'Akademik' ? 'selected' : '' }}>
                            Akademik</option>
                        <option value="Umum" {{ old('kategori', $berita->kategori) == 'Umum' ? 'selected' : '' }}>Umum
                        </option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal Publikasi <span
                            class="text-red-500">*</span></label>
                    <!-- Asumsi kolom tanggal di-cast sebagai date di Model Berita -->
                    <input type="date" name="tanggal" value="{{ old('tanggal', $berita->tanggal->format('Y-m-d')) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Thumbnail Berita (Biarkan kosong jika tidak ingin
                    diubah)</label>
                <div class="flex items-start gap-6 mt-2">
                    <div
                        class="w-32 h-20 shrink-0 bg-gray-100 border border-gray-300 rounded-sm flex items-center justify-center overflow-hidden">
                        @if ($berita->thumbnail)
                            <img id="image-preview" src="{{ asset('storage/' . $berita->thumbnail) }}" alt="Preview"
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
                        <input type="file" id="thumbnail" name="thumbnail"
                            accept="image/jpeg, image/png, image/jpg, image/webp"
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors border border-gray-300 rounded-sm p-1 cursor-pointer">
                    </div>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Isi Berita <span
                        class="text-red-500">*</span></label>
                <!-- Input hidden yang akan dikirim ke server (ambil value dari database) -->
                <input id="isi_berita" type="hidden" name="isi_berita"
                    value="{{ old('isi_berita', $berita->isi_berita) }}">
                <!-- Elemen Trix Editor -->
                <trix-editor input="isi_berita"
                    class="w-full border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 text-sm prose max-w-none"></trix-editor>

                @error('isi_berita')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmEdit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Update Berita
                </button>
            </div>
        </form>
    </div>

    <!-- Script Live Preview & SweetAlert Konfirmasi -->
    <script>
        const thumbnailInput = document.getElementById('thumbnail');
        const imagePreview = document.getElementById('image-preview');
        const placeholderIcon = document.getElementById('placeholder-icon');

        thumbnailInput.addEventListener('change', function() {
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
                title: 'Update Berita?',
                text: "Perubahan akan langsung terlihat di website publik.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, Update!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-edit-berita').submit();
                }
            })
        }
    </script>
@endsection
