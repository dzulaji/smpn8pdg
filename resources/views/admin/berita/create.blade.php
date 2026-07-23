@extends('layouts.admin')

@section('title', 'Tulis Berita')
@section('header_title', 'Tulis Berita Baru')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.berita.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-4xl">
        <form id="form-berita" action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-1">Judul Berita <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="judul" value="{{ old('judul') }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Kategori <span
                            class="text-red-500">*</span></label>
                    <select name="kategori"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Liputan">Liputan</option>
                        <option value="Kegiatan">Kegiatan</option>
                        <option value="Akademik">Akademik</option>
                        <option value="Umum">Umum</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal Publikasi <span
                            class="text-red-500">*</span></label>
                    <input type="date" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Thumbnail Berita (Opsional)</label>
                <input type="file" name="thumbnail" accept="image/*"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors border border-gray-300 rounded-sm p-1">
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Isi Berita <span
                        class="text-red-500">*</span></label>
                <!-- Input hidden yang akan dikirim ke server -->
                <input id="isi_berita" type="hidden" name="isi_berita" value="{{ old('isi_berita') }}">
                <!-- Elemen Trix Editor -->
                <trix-editor input="isi_berita"
                    class="w-full border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 text-sm prose max-w-none"></trix-editor>

                @error('isi_berita')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmSubmit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Terbitkan Berita
                </button>
            </div>
        </form>
    </div>

    <script>
        function confirmSubmit() {
            Swal.fire({
                title: 'Terbitkan Berita?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                confirmButtonText: 'Ya, Terbitkan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-berita').submit();
                }
            })
        }
    </script>
@endsection
