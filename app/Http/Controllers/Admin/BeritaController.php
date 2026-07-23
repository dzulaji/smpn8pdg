<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; // Untuk bikin slug otomatis
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Format;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'      => 'required|string|max:255',
            'kategori'   => 'required|in:Liputan,Kegiatan,Akademik,Umum',
            'tanggal'    => 'required|date',
            'isi_berita' => 'required',
            'thumbnail'  => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
        ], [
            'thumbnail.max' => 'Ukuran thumbnail tidak boleh lebih dari 1MB.',
        ]);

        $thumbnailPath = null;

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $manager = new ImageManager(new Driver());
            $image = $manager->decode($file->getPathname());

            // Thumbnail berita biasanya lebih lebar, kita set max width 1200px
            $image->scaleDown(width: 1200);
            $encoded = $image->encodeUsingFormat(Format::WEBP, quality: 80);

            $filename = 'berita/' . uniqid() . '-' . time() . '.webp';
            Storage::disk('public')->put($filename, (string) $encoded);
            $thumbnailPath = $filename;
        }

        Berita::create([
            'judul'      => $validated['judul'],
            'slug'       => Str::slug($validated['judul']), 
            'kategori'   => $validated['kategori'],
            'tanggal'    => $validated['tanggal'],
            'isi_berita' => $validated['isi_berita'],
            'thumbnail'  => $thumbnailPath,
            'penulis'    => Auth::user()->name,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diterbitkan!');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $validated = $request->validate([
            'judul'      => 'required|string|max:255',
            'kategori'   => 'required|in:Liputan,Kegiatan,Akademik,Umum',
            'tanggal'    => 'required|date',
            'isi_berita' => 'required',
            'thumbnail'  => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1024',
        ]);

        if ($request->hasFile('thumbnail')) {
            // Hapus thumbnail lama dari server
            if ($berita->thumbnail && Storage::disk('public')->exists($berita->thumbnail)) {
                Storage::disk('public')->delete($berita->thumbnail);
            }

            $file = $request->file('thumbnail');
            $manager = new ImageManager(new Driver());
            $image = $manager->decode($file->getPathname());
            $image->scaleDown(width: 1200);
            $encoded = $image->encodeUsingFormat(Format::WEBP, quality: 80);

            $filename = 'berita/' . uniqid() . '-' . time() . '.webp';
            Storage::disk('public')->put($filename, (string) $encoded);

            $berita->thumbnail = $filename;
        }

        $berita->judul      = $validated['judul'];
        $berita->slug       = Str::slug($validated['judul']);
        $berita->kategori   = $validated['kategori'];
        $berita->tanggal    = $validated['tanggal'];
        $berita->isi_berita = $validated['isi_berita'];

        $berita->save();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus fisik thumbnail dari server
        if ($berita->thumbnail && Storage::disk('public')->exists($berita->thumbnail)) {
            Storage::disk('public')->delete($berita->thumbnail);
        }

        $berita->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus permanen!');
    }
}
