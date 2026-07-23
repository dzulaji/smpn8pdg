<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();
        return view('admin.ekstrakurikuler.index', compact('ekstrakurikuler'));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'             => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:255',
            'deskripsi_lengkap' => 'required|string',
            'foto_utama'        => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'galeri'            => 'nullable|array',
            'galeri.*'          => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $fotoUtamaPath = null;
        if ($request->hasFile('foto_utama')) {
            $file = $request->file('foto_utama');
            $fotoUtamaPath = $file->storeAs('ekstrakurikuler', uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension(), 'public');
        }

        $galeriPaths = [];
        if ($request->hasFile('galeri')) {
            foreach ($request->file('galeri') as $file) {
                $galeriPaths[] = $file->storeAs('ekstrakurikuler/galeri', uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension(), 'public');
            }
        }

        Ekstrakurikuler::create([
            'judul'             => $validated['judul'],
            'slug'              => Str::slug($validated['judul']) . '-' . Str::random(4),
            'deskripsi_singkat' => $validated['deskripsi_singkat'],
            'deskripsi_lengkap' => $validated['deskripsi_lengkap'],
            'foto_utama'        => $fotoUtamaPath,
            'galeri'            => !empty($galeriPaths) ? $galeriPaths : null,
        ]);

        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        return view('admin.ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    public function update(Request $request, $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        $validated = $request->validate([
            'judul'             => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:255',
            'deskripsi_lengkap' => 'required|string',
            'foto_utama'        => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'galeri'            => 'nullable|array',
            'galeri.*'          => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Update Foto Utama jika ada
        if ($request->hasFile('foto_utama')) {
            if ($ekstrakurikuler->foto_utama && Storage::disk('public')->exists($ekstrakurikuler->foto_utama)) {
                Storage::disk('public')->delete($ekstrakurikuler->foto_utama);
            }
            $file = $request->file('foto_utama');
            $ekstrakurikuler->foto_utama = $file->storeAs('ekstrakurikuler', uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension(), 'public');
        }

        // AMBIL ARRAY GALERI SAAT INI
        $existingGaleri = is_array($ekstrakurikuler->galeri) ? $ekstrakurikuler->galeri : [];

        // PROSES HAPUS FOTO GALERI (Checkbox)
        if ($request->has('hapus_galeri')) {
            foreach ($request->hapus_galeri as $hapusFoto) {
                if (in_array($hapusFoto, $existingGaleri)) {
                    $existingGaleri = array_diff($existingGaleri, [$hapusFoto]);
                    if (Storage::disk('public')->exists($hapusFoto)) {
                        Storage::disk('public')->delete($hapusFoto);
                    }
                }
            }
            $existingGaleri = array_values($existingGaleri); // Re-index array
        }

        // TAMBAH FOTO GALERI BARU
        if ($request->hasFile('galeri')) {
            foreach ($request->file('galeri') as $file) {
                $existingGaleri[] = $file->storeAs('ekstrakurikuler/galeri', uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension(), 'public');
            }
        }

        $ekstrakurikuler->galeri = !empty($existingGaleri) ? $existingGaleri : null;
        $ekstrakurikuler->judul             = $validated['judul'];
        $ekstrakurikuler->slug              = Str::slug($validated['judul']) . '-' . Str::random(4);
        $ekstrakurikuler->deskripsi_singkat = $validated['deskripsi_singkat'];
        $ekstrakurikuler->deskripsi_lengkap = $validated['deskripsi_lengkap'];

        $ekstrakurikuler->save();

        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Data ekstrakurikuler berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        if ($ekstrakurikuler->foto_utama && Storage::disk('public')->exists($ekstrakurikuler->foto_utama)) {
            Storage::disk('public')->delete($ekstrakurikuler->foto_utama);
        }

        if (is_array($ekstrakurikuler->galeri)) {
            foreach ($ekstrakurikuler->galeri as $foto) {
                if (Storage::disk('public')->exists($foto)) {
                    Storage::disk('public')->delete($foto);
                }
            }
        }

        $ekstrakurikuler->delete();
        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Data ekstrakurikuler beserta medianya berhasil dihapus!');
    }
}
