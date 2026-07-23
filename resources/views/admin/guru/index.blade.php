@extends('layouts.admin')

@section('title', 'Data Guru')
@section('header_title', 'Kelola Data Guru')

@section('content')
    <div class="mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
        <p class="text-gray-600">Daftar tenaga pendidik dan kependidikan SMP Negeri 8 Padang.</p>

        <!-- Tombol Tambah -->
        <a href="{{ route('admin.guru.create') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-gray-800 text-white hover:bg-gray-900 font-bold rounded-sm text-sm transition-colors shadow-sm shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Tambah Guru Baru
        </a>
    </div>

    <!-- Tabel Data -->
    <div class="bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider w-16">No</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider w-24">Foto</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Nama Lengkap</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Jabatan</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">

                    @forelse ($gurus as $index => $guru)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $index + 1 }}</td>
                            <td class="px-6 py-4">
                                @if ($guru->foto)
                                    <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto {{ $guru->nama }}"
                                        class="w-10 h-10 rounded-full object-cover border border-gray-200">
                                @else
                                    <div
                                        class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 font-bold text-xs">
                                        {{ substr($guru->nama, 0, 2) }}
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm font-bold text-gray-900">{{ $guru->nama }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                <span
                                    class="bg-gray-100 text-gray-700 px-2.5 py-1 rounded-sm text-xs font-medium border border-gray-200">
                                    {{ $guru->jabatan }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.guru.edit', $guru->id) }}"
                                        class="px-3 py-1.5 text-xs font-bold text-blue-600 hover:text-white bg-blue-50 hover:bg-blue-500 rounded-sm transition-colors">Edit</a>

                                    <button type="button" onclick="confirmDelete({{ $guru->id }})"
                                        class="px-3 py-1.5 text-xs font-bold text-red-600 hover:text-white bg-red-50 hover:bg-red-500 rounded-sm transition-colors">Hapus</button>

                                    <form id="delete-form-{{ $guru->id }}"
                                        action="{{ route('admin.guru.destroy', $guru->id) }}" method="POST"
                                        class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500 text-sm">
                                Belum ada data guru. Silakan tambahkan data baru.
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>

    <!-- Script SweetAlert Khusus Hapus Data -->
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Hapus Data Guru?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Action formnya masih '#' karena rute delete belum dibuat
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endsection
