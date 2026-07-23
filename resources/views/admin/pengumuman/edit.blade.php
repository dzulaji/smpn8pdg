@extends('layouts.admin')

@section('title', 'Edit Pengumuman')
@section('header_title', 'Edit Pengumuman')

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
        <form id="form-edit-pengumuman" action="{{ route('admin.pengumuman.update', $pengumuman->id) }}" method="POST"
            enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Judul -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-1">Judul Pengumuman <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="judul" value="{{ old('judul', $pengumuman->judul) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>

                <!-- Nomor Surat -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Nomor Surat <span
                            class="text-xs font-normal text-gray-500">(Opsional)</span></label>
                    <input type="text" name="nomor_surat" value="{{ old('nomor_surat', $pengumuman->nomor_surat) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm">
                </div>

                <!-- Tanggal -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal <span
                            class="text-red-500">*</span></label>
                    <input type="date" name="tanggal" value="{{ old('tanggal', $pengumuman->tanggal->format('Y-m-d')) }}"
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
                        <option value="Umum" {{ old('kategori', $pengumuman->kategori) == 'Umum' ? 'selected' : '' }}>
                            Umum</option>
                        <option value="Akademik"
                            {{ old('kategori', $pengumuman->kategori) == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                        <option value="Penting"
                            {{ old('kategori', $pengumuman->kategori) == 'Penting' ? 'selected' : '' }}>Penting</option>
                    </select>
                </div>

                <!-- Lampiran File -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Lampiran Dokumen <span
                            class="text-xs font-normal text-gray-500">(Opsional)</span></label>

                    @if ($pengumuman->lampiran)
                        <div
                            class="mb-2 p-2 bg-blue-50 border border-blue-200 rounded-sm flex items-center justify-between">
                            <span class="text-xs text-blue-700 font-medium truncate pr-4">Ada file lampiran
                                tersimpan.</span>
                            <a href="{{ asset('storage/' . $pengumuman->lampiran) }}" target="_blank"
                                class="text-xs font-bold text-blue-600 hover:underline shrink-0">Lihat File</a>
                        </div>
                    @endif

                    <p class="text-xs text-gray-500 mb-2">Upload file baru untuk mengganti lampiran lama (PDF, DOCX. Maks
                        5MB).</p>
                    <input type="file" name="lampiran" accept=".pdf,.doc,.docx"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors border border-gray-300 rounded-sm p-1 cursor-pointer">
                </div>
            </div>

            <!-- Isi Pengumuman (Trix Editor) -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Isi Pengumuman <span
                        class="text-red-500">*</span></label>
                <input id="isi_pengumuman" type="hidden" name="isi_pengumuman"
                    value="{{ old('isi_pengumuman', $pengumuman->isi_pengumuman) }}">
                <trix-editor input="isi_pengumuman"
                    class="w-full border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 text-sm prose max-w-none"></trix-editor>
                @error('isi_pengumuman')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmEdit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Update Pengumuman
                </button>
            </div>
        </form>
    </div>

    <script>
        function confirmEdit() {
            Swal.fire({
                title: 'Update Pengumuman?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, Update!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-edit-pengumuman').submit();
                }
            })
        }
    </script>
@endsection
