@extends('layouts.admin')

@section('title', 'Buat Pengumuman')
@section('header_title', 'Buat Pengumuman Baru')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.pengumuman.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-4xl">
        <form id="form-pengumuman" action="{{ route('admin.pengumuman.store') }}" method="POST"
            enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Judul -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-1">Judul Pengumuman <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="judul" value="{{ old('judul') }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>

                <!-- Nomor Surat -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Nomor Surat <span
                            class="text-xs font-normal text-gray-500">(Opsional)</span></label>
                    <input type="text" name="nomor_surat" value="{{ old('nomor_surat') }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        placeholder="Contoh: 421.2/001/SMP.8/2026">
                </div>

                <!-- Tanggal -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal <span
                            class="text-red-500">*</span></label>
                    <input type="date" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>

                <!-- Kategori -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Kategori <span
                            class="text-red-500">*</span></label>
                    <select name="kategori"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                        <option value="Umum" {{ old('kategori') == 'Umum' ? 'selected' : '' }}>Umum</option>
                        <option value="Akademik" {{ old('kategori') == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                        <option value="Penting" {{ old('kategori') == 'Penting' ? 'selected' : '' }}>Penting</option>
                    </select>
                </div>

                <!-- Lampiran File -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Lampiran Dokumen <span
                            class="text-xs font-normal text-gray-500">(Opsional)</span></label>
                    <p class="text-xs text-gray-500 mb-2">Format: PDF, DOC, DOCX. Maks: 5MB.</p>
                    <input type="file" name="lampiran" accept=".pdf,.doc,.docx"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors border border-gray-300 rounded-sm p-1 cursor-pointer">
                </div>
            </div>

            <!-- Isi Pengumuman (Trix Editor) -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Isi Pengumuman <span
                        class="text-red-500">*</span></label>
                <input id="isi_pengumuman" type="hidden" name="isi_pengumuman" value="{{ old('isi_pengumuman') }}">
                <trix-editor input="isi_pengumuman"
                    class="w-full border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 text-sm prose max-w-none"></trix-editor>
                @error('isi_pengumuman')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmSubmit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Terbitkan Pengumuman
                </button>
            </div>
        </form>
    </div>

    <script>
        function confirmSubmit() {
            Swal.fire({
                title: 'Terbitkan Pengumuman?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, Terbitkan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-pengumuman').submit();
                }
            })
        }
    </script>
@endsection
