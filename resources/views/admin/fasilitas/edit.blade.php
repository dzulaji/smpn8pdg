@extends('layouts.admin')

@section('title', 'Edit Fasilitas')
@section('header_title', 'Edit Fasilitas Sekolah')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.fasilitas.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-4xl">
        <form id="form-fasilitas" action="{{ route('admin.fasilitas.update', $fasilitas->id) }}" method="POST"
            enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Nama Fasilitas <span
                        class="text-red-500">*</span></label>
                <input type="text" name="judul" value="{{ old('judul', $fasilitas->judul) }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                    required>
                @error('judul')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Deskripsi Singkat <span
                        class="text-red-500">*</span></label>
                <input type="text" name="deskripsi_singkat"
                    value="{{ old('deskripsi_singkat', $fasilitas->deskripsi_singkat) }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                    required>
                @error('deskripsi_singkat')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Ubah Foto Utama -->
                <div class="border border-gray-200 p-4 rounded-sm bg-gray-50">
                    <label class="block text-sm font-bold text-gray-700 mb-2">Foto Utama Saat Ini</label>
                    @if ($fasilitas->foto_utama)
                        <img src="{{ asset('storage/' . $fasilitas->foto_utama) }}"
                            class="w-full h-32 object-cover rounded-sm border border-gray-300 mb-3">
                    @endif
                    <label class="block text-sm font-bold text-gray-700 mb-1">Ganti Foto (Opsional)</label>
                    <input type="file" name="foto_utama" accept="image/*"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-1.5 file:px-3 file:rounded-sm file:border-0 file:text-xs file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors border border-gray-300 rounded-sm p-1 bg-white">
                </div>

                <!-- Ubah Galeri Tambahan -->
                <div class="border border-gray-200 p-4 rounded-sm bg-gray-50">
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        Galeri Saat Ini ({{ is_array($fasilitas->galeri) ? count($fasilitas->galeri) : 0 }})
                    </label>

                    @if (is_array($fasilitas->galeri) && count($fasilitas->galeri) > 0)
                        <p class="text-xs text-red-500 mb-3 italic">* Arahkan kursor ke gambar dan centang untuk menghapus
                            foto saat disimpan.</p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-4">
                            @foreach ($fasilitas->galeri as $foto)
                                <div
                                    class="relative group aspect-video rounded-sm border border-gray-300 overflow-hidden bg-white">
                                    <img src="{{ asset('storage/' . $foto) }}" class="w-full h-full object-cover">
                                    <!-- Overlay Centang Hapus -->
                                    <div
                                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <label
                                            class="cursor-pointer flex items-center gap-2 text-white text-xs font-bold bg-red-600 px-2 py-1.5 rounded-sm hover:bg-red-700 shadow-sm">
                                            <input type="checkbox" name="hapus_galeri[]" value="{{ $foto }}"
                                                class="w-4 h-4 text-red-600 rounded-sm focus:ring-red-500 cursor-pointer">
                                            Hapus
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-xs text-gray-500 mb-3 italic">Belum ada galeri tambahan.</p>
                    @endif

                    <label class="block text-sm font-bold text-gray-700 mb-1">Tambah Galeri Baru</label>
                    <input type="file" name="galeri[]" accept="image/*" multiple
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-1.5 file:px-3 file:rounded-sm file:border-0 file:text-xs file:font-bold file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300 transition-colors border border-gray-300 rounded-sm p-1 bg-white">
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Deskripsi Lengkap <span
                        class="text-red-500">*</span></label>
                <input id="deskripsi_lengkap" type="hidden" name="deskripsi_lengkap"
                    value="{{ old('deskripsi_lengkap', $fasilitas->deskripsi_lengkap) }}">
                <trix-editor input="deskripsi_lengkap"
                    class="w-full border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 text-sm prose max-w-none bg-gray-50"></trix-editor>
                @error('deskripsi_lengkap')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmSubmit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    <script>
        function confirmSubmit() {
            Swal.fire({
                title: 'Simpan Perubahan?',
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
