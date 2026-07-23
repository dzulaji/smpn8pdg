@extends('layouts.admin')

@section('title', 'Tambah Fasilitas')
@section('header_title', 'Tambah Fasilitas Baru')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.fasilitas.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-4xl">
        <form id="form-fasilitas" action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Nama Fasilitas <span
                        class="text-red-500">*</span></label>
                <input type="text" name="judul" value="{{ old('judul') }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                    placeholder="Contoh: Laboratorium Komputer" required>
                @error('judul')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Deskripsi Singkat <span
                        class="text-red-500">*</span></label>
                <input type="text" name="deskripsi_singkat" value="{{ old('deskripsi_singkat') }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                    placeholder="Ditampilkan di halaman index fasilitas (Max 255 karakter)" required>
                @error('deskripsi_singkat')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Foto Utama / Thumbnail <span
                            class="text-red-500">*</span></label>
                    <input type="file" name="foto_utama" accept="image/*" required
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors border border-gray-300 rounded-sm p-1">
                    @error('foto_utama')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Galeri Tambahan (Bisa Pilih Banyak Foto
                        Sekaligus)</label>
                    <input type="file" name="galeri[]" accept="image/*" multiple
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 transition-colors border border-gray-300 rounded-sm p-1">
                    @error('galeri.*')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Deskripsi Lengkap <span
                        class="text-red-500">*</span></label>
                <input id="deskripsi_lengkap" type="hidden" name="deskripsi_lengkap"
                    value="{{ old('deskripsi_lengkap') }}">
                <trix-editor input="deskripsi_lengkap"
                    class="w-full border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 text-sm prose max-w-none bg-gray-50"></trix-editor>
                @error('deskripsi_lengkap')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmSubmit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Simpan Fasilitas
                </button>
            </div>
        </form>
    </div>

    <script>
        function confirmSubmit() {
            Swal.fire({
                title: 'Simpan Fasilitas?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, Simpan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-fasilitas').submit();
                }
            })
        }
    </script>
@endsection
