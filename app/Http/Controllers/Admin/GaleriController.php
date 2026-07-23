<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Format;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tipe'      => 'required|in:Foto,Video',
            'foto'      => 'nullable|required_if:tipe,Foto|image|mimes:jpeg,png,jpg,webp|max:2048',
            'video_url' => 'nullable|required_if:tipe,Video|string|max:255',
        ]);

        $filePath = '';

        if ($validated['tipe'] == 'Foto' && $request->hasFile('foto')) {
            $file = $request->file('foto');
            $manager = new ImageManager(new Driver());
            $image = $manager->decode($file->getPathname());

            $image->scaleDown(width: 1200);
            $encoded = $image->encodeUsingFormat(Format::WEBP, quality: 80);

            $filename = 'galeri/' . uniqid() . '-' . time() . '.webp';
            Storage::disk('public')->put($filename, (string) $encoded);

            $filePath = $filename;
        } elseif ($validated['tipe'] == 'Video') {
            $filePath = $validated['video_url'];
        }

        Galeri::create([
            'tipe'      => $validated['tipe'],
            'file_path' => $filePath,
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Media berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $validated = $request->validate([
            'tipe'      => 'required|in:Foto,Video',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'video_url' => 'nullable|string|max:255',
        ]);

        $filePath = $galeri->file_path;

        if ($validated['tipe'] == 'Foto') {
            if ($request->hasFile('foto')) {
                if ($galeri->tipe == 'Foto' && Storage::disk('public')->exists($galeri->file_path)) {
                    Storage::disk('public')->delete($galeri->file_path);
                }

                $file = $request->file('foto');
                $manager = new ImageManager(new Driver());
                $image = $manager->decode($file->getPathname());
                $image->scaleDown(width: 1200);
                $encoded = $image->encodeUsingFormat(Format::WEBP, quality: 80);

                $filename = 'galeri/' . uniqid() . '-' . time() . '.webp';
                Storage::disk('public')->put($filename, (string) $encoded);

                $filePath = $filename;
            }
        } elseif ($validated['tipe'] == 'Video') {
            if ($galeri->tipe == 'Foto' && Storage::disk('public')->exists($galeri->file_path)) {
                Storage::disk('public')->delete($galeri->file_path);
            }
            $filePath = $validated['video_url'];
        }

        $galeri->update([
            'tipe'      => $validated['tipe'],
            'file_path' => $filePath,
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Media berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->tipe == 'Foto' && Storage::disk('public')->exists($galeri->file_path)) {
            Storage::disk('public')->delete($galeri->file_path);
        }

        $galeri->delete();
        return redirect()->route('admin.galeri.index')->with('success', 'Media berhasil dihapus!');
    }
}
