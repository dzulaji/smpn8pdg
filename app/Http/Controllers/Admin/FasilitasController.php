<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::latest()->get();
        // Return ke view admin lu (silakan buat sendiri view CRUD adminnya)
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'             => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:255',
            'deskripsi_lengkap' => 'required|string',
            'foto_utama'        => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'galeri'            => 'nullable|array',
            'galeri.*'          => 'image|mimes:jpeg,png,jpg,webp|max:2048', // Validasi tiap file di dalam array
        ]);

        $fotoUtamaPath = null;
        if ($request->hasFile('foto_utama')) {
            $file = $request->file('foto_utama');
            $fotoUtamaPath = $file->storeAs('fasilitas', uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension(), 'public');
        }

        $galeriPaths = [];
        if ($request->hasFile('galeri')) {
            foreach ($request->file('galeri') as $file) {
                $galeriPaths[] = $file->storeAs('fasilitas/galeri', uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension(), 'public');
            }
        }

        Fasilitas::create([
            'judul'             => $validated['judul'],
            'slug'              => Str::slug($validated['judul']) . '-' . Str::random(4),
            'deskripsi_singkat' => $validated['deskripsi_singkat'],
            'deskripsi_lengkap' => $validated['deskripsi_lengkap'],
            'foto_utama'        => $fotoUtamaPath,
            'galeri'            => !empty($galeriPaths) ? $galeriPaths : null,
        ]);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $validated = $request->validate([
            'judul'             => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:255',
            'deskripsi_lengkap' => 'required|string',
            'foto_utama'        => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'galeri'            => 'nullable|array',
            'galeri.*'          => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Update Foto Utama jika ada upload baru
        if ($request->hasFile('foto_utama')) {
            if ($fasilitas->foto_utama && Storage::disk('public')->exists($fasilitas->foto_utama)) {
                Storage::disk('public')->delete($fasilitas->foto_utama);
            }
            $file = $request->file('foto_utama');
            $fasilitas->foto_utama = $file->storeAs('fasilitas', uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension(), 'public');
        }

        $existingGaleri = is_array($fasilitas->galeri) ? $fasilitas->galeri : [];

        // PROSES HAPUS FOTO GALERI (Jika ada yang dicentang untuk dihapus)
        if ($request->has('hapus_galeri')) {
            foreach ($request->hapus_galeri as $hapusFoto) {
                // Cek apakah foto benar-benar ada di database
                if (in_array($hapusFoto, $existingGaleri)) {
                    // Hapus nama file dari array
                    $existingGaleri = array_diff($existingGaleri, [$hapusFoto]);
                    // Hapus fisik file dari server
                    if (Storage::disk('public')->exists($hapusFoto)) {
                        Storage::disk('public')->delete($hapusFoto);
                    }
                }
            }
            // Re-index array biar angkanya berurutan lagi
            $existingGaleri = array_values($existingGaleri);
        }

        // TAMBAH FOTO GALERI BARU (Jika ada upload baru)
        if ($request->hasFile('galeri')) {
            foreach ($request->file('galeri') as $file) {
                $existingGaleri[] = $file->storeAs('fasilitas/galeri', uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension(), 'public');
            }
        }

        // Simpan kembali ke database
        $fasilitas->galeri = !empty($existingGaleri) ? $existingGaleri : null;

        $fasilitas->judul             = $validated['judul'];
        $fasilitas->slug              = Str::slug($validated['judul']) . '-' . Str::random(4);
        $fasilitas->deskripsi_singkat = $validated['deskripsi_singkat'];
        $fasilitas->deskripsi_lengkap = $validated['deskripsi_lengkap'];

        $fasilitas->save();

        return redirect()->route('admin.fasilitas.index')->with('success', 'Data fasilitas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        // Hapus fisik foto utama
        if ($fasilitas->foto_utama && Storage::disk('public')->exists($fasilitas->foto_utama)) {
            Storage::disk('public')->delete($fasilitas->foto_utama);
        }

        // Hapus fisik semua foto di dalam array galeri
        if (is_array($fasilitas->galeri)) {
            foreach ($fasilitas->galeri as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }
        }

        $fasilitas->delete();
        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas beserta semua medianya berhasil dihapus!');
    }
}
