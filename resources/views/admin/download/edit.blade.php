@extends('layouts.admin')

@section('title', 'Edit Dokumen')
@section('header_title', 'Edit Dokumen Unduhan')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.download.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-2xl">
        <form id="form-edit-download" action="{{ route('admin.download.update', $download->id) }}" method="POST"
            enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Nama Dokumen <span
                        class="text-red-500">*</span></label>
                <input type="text" name="nama_dokumen" value="{{ old('nama_dokumen', $download->nama_dokumen) }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                    required>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Kategori <span
                        class="text-red-500">*</span></label>
                <select name="kategori"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                    required>
                    <option value="Akademik" {{ old('kategori', $download->kategori) == 'Akademik' ? 'selected' : '' }}>
                        Akademik</option>
                    <option value="Edaran Resmi"
                        {{ old('kategori', $download->kategori) == 'Edaran Resmi' ? 'selected' : '' }}>Edaran Resmi
                    </option>
                    <option value="Formulir" {{ old('kategori', $download->kategori) == 'Formulir' ? 'selected' : '' }}>
                        Formulir</option>
                    <option value="Lainnya" {{ old('kategori', $download->kategori) == 'Lainnya' ? 'selected' : '' }}>
                        Lainnya</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Ganti File <span
                        class="text-xs text-gray-500 font-normal">(Opsional)</span></label>

                <div class="mb-3 p-3 bg-blue-50 border border-blue-100 rounded-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-bold text-blue-900">File Saat Ini:</p>
                        <p class="text-xs text-blue-700">{{ $download->tipe_file }} - {{ $download->ukuran_file }}</p>
                    </div>
                    <a href="{{ asset('storage/' . $download->file_path) }}" target="_blank"
                        class="text-xs font-bold text-blue-600 hover:underline">Lihat File</a>
                </div>

                <p class="text-xs text-gray-500 mb-2">Pilih file baru jika ingin mengganti dokumen lama. Tipe dan ukuran
                    file akan otomatis diperbarui.</p>
                <input type="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.zip,.rar"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors border border-gray-300 rounded-sm p-1 cursor-pointer">
                @error('file')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmEdit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Update Dokumen
                </button>
            </div>
        </form>
    </div>

    <script>
        function confirmEdit() {
            Swal.fire({
                title: 'Update Dokumen?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                confirmButtonText: 'Ya, Update!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-edit-download').submit();
                }
            })
        }
    </script>
@endsection
