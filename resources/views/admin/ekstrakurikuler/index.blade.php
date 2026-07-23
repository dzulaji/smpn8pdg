@extends('layouts.admin')

@section('title', 'Ekstrakurikuler Sekolah')
@section('header_title', 'Kelola Ekstrakurikuler')

@section('content')
    <div class="mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
        <p class="text-gray-600">Daftar kegiatan ekstrakurikuler siswa di sekolah.</p>

        <a href="{{ route('admin.ekstrakurikuler.create') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-gray-800 text-white hover:bg-gray-900 font-bold rounded-sm text-sm transition-colors shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Tambah Ekstrakurikuler
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase w-24">Foto Utama</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Nama Ekstrakurikuler</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Deskripsi Singkat</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Galeri</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($ekstrakurikuler as $item)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                @if ($item->foto_utama)
                                    <img src="{{ asset('storage/' . $item->foto_utama) }}"
                                        class="w-16 h-10 object-cover rounded-sm border border-gray-200">
                                @else
                                    <div
                                        class="w-16 h-10 bg-gray-200 rounded-sm flex items-center justify-center text-gray-400 text-xs">
                                        No Img</div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-sm font-bold text-gray-900 line-clamp-1">{{ $item->judul }}</p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-xs text-gray-500 line-clamp-2 max-w-xs">{{ $item->deskripsi_singkat }}</p>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="bg-yellow-100 text-yellow-800 px-2.5 py-1 rounded-sm text-xs font-bold border border-yellow-200">
                                    {{ is_array($item->galeri) ? count($item->galeri) : 0 }} Foto
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.ekstrakurikuler.edit', $item->id) }}"
                                        class="px-3 py-1.5 text-xs font-bold text-blue-600 bg-blue-50 hover:bg-blue-500 hover:text-white rounded-sm transition-colors">Edit</a>

                                    <button type="button" onclick="confirmDelete({{ $item->id }})"
                                        class="px-3 py-1.5 text-xs font-bold text-red-600 bg-red-50 hover:bg-red-500 hover:text-white rounded-sm transition-colors">Hapus</button>

                                    <form id="delete-form-{{ $item->id }}"
                                        action="{{ route('admin.ekstrakurikuler.destroy', $item->id) }}" method="POST"
                                        class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500 text-sm">Belum ada data
                                ekstrakurikuler.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Hapus Ekstrakurikuler ini?',
                text: "Data dan seluruh foto akan dihapus permanen dari server!",
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endsection
