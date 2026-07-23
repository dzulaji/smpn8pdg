@extends('layouts.admin')

@section('title', 'Galeri')
@section('header_title', 'Kelola Galeri')

@section('content')
    <div class="mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
        <p class="text-gray-600">Dokumentasi foto dan video kegiatan sekolah.</p>
        <a href="{{ route('admin.galeri.create') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-gray-800 text-white hover:bg-gray-900 font-bold rounded-sm text-sm transition-colors shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Tambah Media
        </a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse ($galeris as $item)
            <div class="relative bg-gray-100 rounded-md overflow-hidden aspect-square group shadow-sm">
                @if ($item->tipe == 'Foto')
                    <img src="{{ asset('storage/' . $item->file_path) }}" class="w-full h-full object-cover">
                    <span
                        class="absolute top-2 left-2 bg-black/60 text-white px-2 py-1 text-[10px] font-bold rounded-sm backdrop-blur-sm">FOTO</span>
                @else
                    <div class="w-full h-full flex flex-col items-center justify-center bg-gray-900 text-white">
                        <!-- Ikon Play Video -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-500 opacity-90"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span
                        class="absolute top-2 left-2 bg-red-600 text-white px-2 py-1 text-[10px] font-bold rounded-sm shadow-sm">VIDEO</span>
                @endif

                <!-- Aksi Edit & Hapus (Muncul saat di-hover) -->
                <div
                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3 backdrop-blur-sm">
                    <a href="{{ route('admin.galeri.edit', $item->id) }}"
                        class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded-full transition-colors" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </a>
                    <button type="button" onclick="confirmDelete({{ $item->id }})"
                        class="p-2 bg-red-500 hover:bg-red-600 text-white rounded-full transition-colors" title="Hapus">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                    <form id="delete-form-{{ $item->id }}" action="{{ route('admin.galeri.destroy', $item->id) }}"
                        method="POST" class="hidden">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-full py-16 text-center text-gray-500 text-sm bg-white border border-gray-200 rounded-sm">
                Galeri masih kosong. Mulai upload foto atau tambahkan video!
            </div>
        @endforelse
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Hapus Media ini?',
                icon: 'warning',
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
