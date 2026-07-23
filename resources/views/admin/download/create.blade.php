@extends('layouts.admin')

@section('title', 'Upload Dokumen')
@section('header_title', 'Upload Dokumen Baru')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.download.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-2xl">
        <form id="form-download" action="{{ route('admin.download.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Nama Dokumen <span
                        class="text-red-500">*</span></label>
                <input type="text" name="nama_dokumen" value="{{ old('nama_dokumen') }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                    placeholder="Contoh: Formulir PPDB 2026" required>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Kategori <span
                        class="text-red-500">*</span></label>
                <select name="kategori"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                    required>
                    <option value="Akademik" {{ old('kategori') == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                    <option value="Edaran Resmi" {{ old('kategori') == 'Edaran Resmi' ? 'selected' : '' }}>Edaran Resmi
                    </option>
                    <option value="Formulir" {{ old('kategori') == 'Formulir' ? 'selected' : '' }}>Formulir</option>
                    <option value="Lainnya" {{ old('kategori') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Pilih File <span
                        class="text-red-500">*</span></label>
                <p class="text-xs text-gray-500 mb-2">Format didukung: PDF, DOCX, XLSX, PPTX, ZIP. Maksimal ukuran: 10MB.
                </p>
                <input type="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.zip,.rar"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors border border-gray-300 rounded-sm p-1 cursor-pointer"
                    required>
                @error('file')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmSubmit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Upload Dokumen
                </button>
            </div>
        </form>
    </div>

    <script>
        function confirmSubmit() {
            Swal.fire({
                title: 'Upload Dokumen?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                confirmButtonText: 'Ya, Upload!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-download').submit();
                }
            })
        }
    </script>
@endsection
