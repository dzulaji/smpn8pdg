@extends('layouts.admin')

@section('title', 'Edit Agenda')
@section('header_title', 'Edit Agenda Kegiatan')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.agenda.index') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-bold rounded-sm text-sm transition-colors shadow-sm">
            Kembali
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm p-6 max-w-4xl">
        <form id="form-edit-agenda" action="{{ route('admin.agenda.update', $agenda->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-1">Judul Agenda <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="judul" value="{{ old('judul', $agenda->judul) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Kategori <span
                            class="text-red-500">*</span></label>
                    <select name="kategori"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                        <option value="Pertemuan" {{ old('kategori', $agenda->kategori) == 'Pertemuan' ? 'selected' : '' }}>
                            Pertemuan</option>
                        <option value="Kegiatan Siswa"
                            {{ old('kategori', $agenda->kategori) == 'Kegiatan Siswa' ? 'selected' : '' }}>Kegiatan Siswa
                        </option>
                        <option value="Upacara" {{ old('kategori', $agenda->kategori) == 'Upacara' ? 'selected' : '' }}>
                            Upacara</option>
                        <option value="Lainnya" {{ old('kategori', $agenda->kategori) == 'Lainnya' ? 'selected' : '' }}>
                            Lainnya</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Lokasi <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="lokasi" value="{{ old('lokasi', $agenda->lokasi) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal Mulai <span
                            class="text-red-500">*</span></label>
                    <input type="date" name="tanggal_mulai"
                        value="{{ old('tanggal_mulai', $agenda->tanggal_mulai->format('Y-m-d')) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal Selesai <span
                            class="text-xs font-normal text-gray-500">(Opsional jika 1 hari)</span></label>
                    <!-- Cek null sebelum format -->
                    <input type="date" name="tanggal_selesai"
                        value="{{ old('tanggal_selesai', $agenda->tanggal_selesai ? $agenda->tanggal_selesai->format('Y-m-d') : '') }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-gray-700 mb-1">Waktu Pelaksanaan <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="waktu" value="{{ old('waktu', $agenda->waktu) }}"
                        class="w-full bg-gray-50 border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 text-sm"
                        required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Deskripsi Kegiatan <span
                        class="text-red-500">*</span></label>
                <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $agenda->deskripsi) }}">
                <trix-editor input="deskripsi"
                    class="w-full border border-gray-300 rounded-sm px-4 py-2.5 text-gray-800 text-sm prose max-w-none"></trix-editor>
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button type="button" onclick="confirmEdit()"
                    class="px-6 py-2.5 bg-yellow-400 text-gray-900 hover:bg-yellow-500 font-bold rounded-sm text-sm transition-colors shadow-sm">
                    Update Agenda
                </button>
            </div>
        </form>
    </div>

    <script>
        function confirmEdit() {
            Swal.fire({
                title: 'Update Agenda?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#eab308',
                confirmButtonText: 'Ya, Update!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-edit-agenda').submit();
                }
            })
        }
    </script>
@endsection
