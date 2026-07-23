@extends('layouts.admin')

@section('title', 'Data Agenda')
@section('header_title', 'Kelola Agenda Kegiatan')

@section('content')
    <div class="mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
        <p class="text-gray-600">Jadwal kegiatan dan acara sekolah.</p>
        <a href="{{ route('admin.agenda.create') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-gray-800 text-white hover:bg-gray-900 font-bold rounded-sm text-sm transition-colors shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Tambah Agenda
        </a>
    </div>

    <div class="bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Kegiatan</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Pelaksanaan</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase">Lokasi</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($agendas as $item)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <p class="text-sm font-bold text-gray-900">{{ $item->judul }}</p>
                                <span
                                    class="inline-block mt-1 bg-yellow-100 text-yellow-800 px-2 py-0.5 rounded-sm text-xs font-bold border border-yellow-200">{{ $item->kategori }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-sm text-gray-800 font-medium">
                                    {{ $item->tanggal_mulai->format('d M Y') }}
                                    @if ($item->tanggal_selesai && $item->tanggal_mulai != $item->tanggal_selesai)
                                        - {{ $item->tanggal_selesai->format('d M Y') }}
                                    @endif
                                </p>
                                <p class="text-xs text-gray-500 mt-1">Pukul: {{ $item->waktu }}</p>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $item->lokasi }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.agenda.edit', $item->id) }}"
                                        class="px-3 py-1.5 text-xs font-bold text-blue-600 bg-blue-50 hover:bg-blue-500 hover:text-white rounded-sm transition-colors">Edit</a>
                                    <button type="button" onclick="confirmDelete({{ $item->id }})"
                                        class="px-3 py-1.5 text-xs font-bold text-red-600 bg-red-50 hover:bg-red-500 hover:text-white rounded-sm transition-colors">Hapus</button>

                                    <form id="delete-form-{{ $item->id }}"
                                        action="{{ route('admin.agenda.destroy', $item->id) }}" method="POST"
                                        class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-gray-500 text-sm">Belum ada agenda
                                kegiatan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Hapus Agenda?',
                text: "Data agenda akan dihapus permanen!",
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
