<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Format;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::latest()->get();
        return view('admin.guru.index', compact('gurus'));
    }

    // Menampilkan halaman form tambah
    public function create()
    {
        return view('admin.guru.create');
    }

    // Memproses data yang dikirim dari form
    public function store(Request $request)
    {
        // 1. Robust Business Logic Validation
        $validated = $request->validate([
            'nama'    => 'required|string|max:100',
            'jabatan' => 'required|string|max:100',
            // Validasi file: wajib gambar, format tertentu, maksimal 1MB (1024 KB)
            'foto'    => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
        ], [
            // Custom pesan error biar lebih ramah dibaca admin
            'foto.max'   => 'Ukuran foto tidak boleh lebih dari 1MB.',
            'foto.image' => 'File yang diunggah harus berupa gambar.',
        ]);

        $fotoPath = null;

        // 2. Proses Kompresi & Konversi ke WebP (Khusus Versi 4)
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');

            // Inisialisasi Manager menggunakan class Driver
            $manager = new ImageManager(new Driver());

            // Membaca file gambar (Versi 4 menggunakan metode 'decode')
            $image = $manager->decode($file->getPathname());

            // Mengecilkan ukuran (maksimal lebar 800px, otomatis menjaga proporsi/aspek rasio)
            $image->scaleDown(width: 800);

            // Mengubah format ke WebP dengan kualitas 80% menggunakan Enum Format
            $encoded = $image->encodeUsingFormat(Format::WEBP, quality: 80);

            // Buat nama file unik
            $filename = 'guru/' . uniqid() . '-' . time() . '.webp';

            // Simpan gambar ke storage (harus di-casting ke (string) agar binary-nya tersimpan)
            Storage::disk('public')->put($filename, (string) $encoded);

            $fotoPath = $filename;
        }

        // 3. Simpan ke Database
        Guru::create([
            'nama'    => $validated['nama'],
            'jabatan' => $validated['jabatan'],
            'foto'    => $fotoPath,
        ]);

        // 4. Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil ditambahkan!');
    }

    // Menampilkan halaman edit
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
    }

    // Memproses update data
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $validated = $request->validate([
            'nama'    => 'required|string|max:100',
            'jabatan' => 'required|string|max:100',
            'foto'    => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
        ], [
            'foto.max'   => 'Ukuran foto tidak boleh lebih dari 1MB.',
            'foto.image' => 'File yang diunggah harus berupa gambar.',
        ]);

        // Cek apakah admin mengupload foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($guru->foto && Storage::disk('public')->exists($guru->foto)) {
                Storage::disk('public')->delete($guru->foto);
            }

            // Proses kompresi foto baru (Intervention Image v4)
            $file = $request->file('foto');
            $manager = new ImageManager(new Driver());
            $image = $manager->decode($file->getPathname());
            $image->scaleDown(width: 800);
            $encoded = $image->encodeUsingFormat(Format::WEBP, quality: 80);

            $filename = 'guru/' . uniqid() . '-' . time() . '.webp';
            Storage::disk('public')->put($filename, (string) $encoded);

            $guru->foto = $filename; // Update field foto
        }

        $guru->nama = $validated['nama'];
        $guru->jabatan = $validated['jabatan'];
        $guru->save();

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui!');
    }

    // Memproses hapus data
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        // Hapus file fisik dari storage jika ada
        if ($guru->foto && Storage::disk('public')->exists($guru->foto)) {
            Storage::disk('public')->delete($guru->foto);
        }

        // Hapus data dari database
        $guru->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil dihapus!');
    }
}
