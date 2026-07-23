@extends('layouts.admin')

@section('title', 'Tambah Galeri')
@section('header_title', 'Tambah Media Galeri')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.galeri.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-xl">
        <form id="form-galeri" action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Pilih Tipe Media <span
                        class="text-red-500">*</span></label>
                <select id="tipe-selector" name="tipe"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                    required>
                    <option value="Foto" {{ old('tipe') == 'Foto' ? 'selected' : '' }}>📸 Foto (Upload File)</option>
                    <option value="Video" {{ old('tipe') == 'Video' ? 'selected' : '' }}>🎥 Video (Link YouTube)</option>
                </select>
            </div>

            <!-- Input Khusus Foto -->
            <div id="input-foto" class="{{ old('tipe', 'Foto') == 'Foto' ? 'block' : 'hidden' }}">
                <label class="block text-sm font-bold text-gray-700 mb-1">Upload File Foto <span
                        class="text-red-500">*</span></label>
                <div
                    class="w-40 h-40 bg-gray-100 border border-dashed border-gray-400 rounded-sm flex items-center justify-center overflow-hidden mb-3">
                    <img id="image-preview" src="#" alt="Preview" class="w-full h-full object-cover hidden">
                    <span id="placeholder-icon" class="text-xs text-gray-400 font-medium">Preview Foto</span>
                </div>
                <input type="file" id="foto" name="foto" accept="image/jpeg, image/png, image/jpg, image/webp"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-bold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 transition-colors border border-gray-300 rounded-sm p-1 cursor-pointer">
                @error('foto')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input Khusus Video -->
            <div id="input-video" class="{{ old('tipe') == 'Video' ? 'block' : 'hidden' }}">
                <label class="block text-sm font-bold text-gray-700 mb-1">Masukkan Link YouTube <span
                        class="text-red-500">*</span></label>
                <input type="text" name="video_url" value="{{ old('video_url') }}"
                    class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                    placeholder="Contoh: https://www.youtube.com/watch?v=XXXXXXX">
                @error('video_url')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmSubmit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Simpan ke Galeri
                </button>
            </div>
        </form>
    </div>

    <script>
        // Logika Switch Tipe Media
        document.getElementById('tipe-selector').addEventListener('change', function() {
            if (this.value === 'Foto') {
                document.getElementById('input-foto').classList.remove('hidden');
                document.getElementById('input-video').classList.add('hidden');
            } else {
                document.getElementById('input-foto').classList.add('hidden');
                document.getElementById('input-video').classList.remove('hidden');
            }
        });

        // Live Preview Gambar
        document.getElementById('foto').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.addEventListener('load', function() {
                    const img = document.getElementById('image-preview');
                    img.setAttribute('src', this.result);
                    img.classList.remove('hidden');
                    document.getElementById('placeholder-icon').classList.add('hidden');
                });
                reader.readAsDataURL(file);
            }
        });

        function confirmSubmit() {
            Swal.fire({
                title: 'Simpan Media?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                confirmButtonText: 'Ya, Simpan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-galeri').submit();
                }
            })
        }
    </script>
@endsection
