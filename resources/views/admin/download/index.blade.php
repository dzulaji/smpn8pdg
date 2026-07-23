@extends('layouts.admin')

@section('title', 'Pusat Unduhan')
@section('header_title', 'Kelola Dokumen Unduhan')

@section('content')
    <div class="mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
        <p class="text-gray-600">Manajemen file dan dokumen publik untuk pengunjung.</p>
        <a href="{{ route('admin.download.create') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-gray-800 text-white hover:bg-gray-900 font-bold rounded-sm text-sm transition-colors shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
            Upload Dokumen
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Nama Dokumen</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Kategori</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Detail File</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($downloads as $item)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <p class="text-sm font-bold text-gray-900">{{ $item->nama_dokumen }}</p>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="bg-yellow-100 text-yellow-800 px-2 py-0.5 rounded-sm text-xs font-bold border border-yellow-200">{{ $item->kategori }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span
                                        class="bg-gray-200 text-gray-700 px-2 py-1 rounded-sm text-[10px] font-bold">{{ $item->tipe_file }}</span>
                                    <span class="text-xs text-gray-500">{{ $item->ukuran_file }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank"
                                        class="px-3 py-1.5 text-xs font-bold text-green-600 bg-green-50 hover:bg-green-500 hover:text-white rounded-sm transition-colors">Lihat</a>
                                    <a href="{{ route('admin.download.edit', $item->id) }}"
                                        class="px-3 py-1.5 text-xs font-bold text-blue-600 bg-blue-50 hover:bg-blue-500 hover:text-white rounded-sm transition-colors">Edit</a>
                                    <button type="button" onclick="confirmDelete({{ $item->id }})"
                                        class="px-3 py-1.5 text-xs font-bold text-red-600 bg-red-50 hover:bg-red-500 hover:text-white rounded-sm transition-colors">Hapus</button>

                                    <form id="delete-form-{{ $item->id }}"
                                        action="{{ route('admin.download.destroy', $item->id) }}" method="POST"
                                        class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-gray-500 text-sm">Belum ada dokumen yang
                                diunggah.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Hapus Dokumen ini?',
                text: "File fisik dokumen akan dihapus permanen dari server!",
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
