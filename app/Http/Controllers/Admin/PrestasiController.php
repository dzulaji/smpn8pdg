<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Format;
use Illuminate\Support\Facades\Auth;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::latest('tanggal')->get();
        return view('admin.prestasi.index', compact('prestasis'));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'     => 'required|string|max:255',
            'tingkat'   => 'required|in:Sekolah,Kota,Provinsi,Nasional,Internasional',
            'juara'     => 'required|string|max:100',
            'tanggal'   => 'required|date',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
            'deskripsi' => 'required|string',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $manager = new ImageManager(new Driver());
            $image = $manager->decode($file->getPathname());
            $image->scaleDown(width: 800); // Resize untuk thumbnail yang ringan
            $encoded = $image->encodeUsingFormat(Format::WEBP, quality: 80);

            $filename = 'prestasi/' . uniqid() . '-' . time() . '.webp';
            Storage::disk('public')->put($filename, (string) $encoded);
            $fotoPath = $filename;
        }

        Prestasi::create([
            'judul'     => $validated['judul'],
            'slug'      => Str::slug($validated['judul']) . '-' . Str::random(4),
            'tingkat'   => $validated['tingkat'],
            'juara'     => $validated['juara'],
            'tanggal'   => $validated['tanggal'],
            'foto'      => $fotoPath,
            'deskripsi' => $validated['deskripsi'],
            'penulis'   => Auth::user()->name,
        ]);

        return redirect()->route('admin.prestasi.index')->with('success', 'Data prestasi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $validated = $request->validate([
            'judul'     => 'required|string|max:255',
            'tingkat'   => 'required|in:Sekolah,Kota,Provinsi,Nasional,Internasional',
            'juara'     => 'required|string|max:100',
            'tanggal'   => 'required|date',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            if ($prestasi->foto && Storage::disk('public')->exists($prestasi->foto)) {
                Storage::disk('public')->delete($prestasi->foto);
            }

            $file = $request->file('foto');
            $manager = new ImageManager(new Driver());
            $image = $manager->decode($file->getPathname());
            $image->scaleDown(width: 800);
            $encoded = $image->encodeUsingFormat(Format::WEBP, quality: 80);

            $filename = 'prestasi/' . uniqid() . '-' . time() . '.webp';
            Storage::disk('public')->put($filename, (string) $encoded);
            $prestasi->foto = $filename;
        }

        $prestasi->judul     = $validated['judul'];
        $prestasi->slug      = Str::slug($validated['judul']) . '-' . Str::random(4);
        $prestasi->tingkat   = $validated['tingkat'];
        $prestasi->juara     = $validated['juara'];
        $prestasi->tanggal   = $validated['tanggal'];
        $prestasi->deskripsi = $validated['deskripsi'];

        $prestasi->save();

        return redirect()->route('admin.prestasi.index')->with('success', 'Data prestasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        if ($prestasi->foto && Storage::disk('public')->exists($prestasi->foto)) {
            Storage::disk('public')->delete($prestasi->foto);
        }

        $prestasi->delete();
        return redirect()->route('admin.prestasi.index')->with('success', 'Data prestasi berhasil dihapus!');
    }
}
