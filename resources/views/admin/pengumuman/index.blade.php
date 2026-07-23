@extends('layouts.admin')

@section('title', 'Data Pengumuman')
@section('header_title', 'Kelola Pengumuman')

@section('content')
    <div class="mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
        <p class="text-gray-600">Daftar pengumuman resmi dan informasi akademik.</p>

        <a href="{{ route('admin.pengumuman.create') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-gray-800 text-white hover:bg-gray-900 font-bold rounded-sm text-sm transition-colors shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Buat Pengumuman Baru
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Judul & No. Surat</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Kategori</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Tanggal</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Lampiran</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($pengumumans as $item)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <p class="text-sm font-bold text-gray-900">{{ $item->judul }}</p>
                                <p class="text-xs text-gray-500">{{ $item->nomor_surat ?? 'Tidak ada no. surat' }}</p>
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    $bgClass = match ($item->kategori) {
                                        'Penting' => 'bg-red-100 text-red-800 border-red-200',
                                        'Akademik' => 'bg-blue-100 text-blue-800 border-blue-200',
                                        default => 'bg-gray-100 text-gray-800 border-gray-200',
                                    };
                                @endphp
                                <span
                                    class="{{ $bgClass }} px-2.5 py-1 rounded-sm text-xs font-bold border">{{ $item->kategori }}</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $item->tanggal->format('d M Y') }}</td>
                            <td class="px-6 py-4">
                                @if ($item->lampiran)
                                    <a href="{{ asset('storage/' . $item->lampiran) }}" target="_blank"
                                        class="inline-flex items-center gap-1 text-xs font-bold text-blue-600 hover:text-blue-800 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                        </svg>
                                        Lihat File
                                    </a>
                                @else
                                    <span class="text-xs text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.pengumuman.edit', $item->id) }}"
                                        class="px-3 py-1.5 text-xs font-bold text-blue-600 bg-blue-50 hover:bg-blue-500 hover:text-white rounded-sm transition-colors">Edit</a>
                                    <button type="button" onclick="confirmDelete({{ $item->id }})"
                                        class="px-3 py-1.5 text-xs font-bold text-red-600 bg-red-50 hover:bg-red-500 hover:text-white rounded-sm transition-colors">Hapus</button>

                                    <form id="delete-form-{{ $item->id }}"
                                        action="{{ route('admin.pengumuman.destroy', $item->id) }}" method="POST"
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
                                pengumuman.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Hapus Pengumuman ini?',
                text: "Data dan file lampiran akan dihapus permanen dari server!",
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
