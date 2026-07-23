<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::latest('tanggal')->get();
        return view('admin.pengumuman.index', compact('pengumumans'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'          => 'required|string|max:255',
            'kategori'       => 'required|in:Penting,Akademik,Umum',
            'tanggal'        => 'required|date',
            'nomor_surat'    => 'nullable|string|max:100',
            'isi_pengumuman' => 'required|string',
            // Proteksi file: Wajib PDF/Word, Maks 5MB (5120 KB)
            'lampiran'       => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ], [
            'lampiran.mimes' => 'Lampiran harus berupa file PDF atau Word (doc/docx).',
            'lampiran.max'   => 'Ukuran lampiran tidak boleh lebih dari 5MB.',
        ]);

        $lampiranPath = null;
        if ($request->hasFile('lampiran')) {
            $file = $request->file('lampiran');
            // Generate nama unik dan simpan ke folder public/pengumuman
            $filename = 'pengumuman/' . uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put($filename, file_get_contents($file));
            $lampiranPath = $filename;
        }

        Pengumuman::create([
            'judul'          => $validated['judul'],
            'slug'           => Str::slug($validated['judul']) . '-' . Str::random(5), // Tambah random string cegah duplikat slug
            'kategori'       => $validated['kategori'],
            'tanggal'        => $validated['tanggal'],
            'nomor_surat'    => $validated['nomor_surat'],
            'isi_pengumuman' => $validated['isi_pengumuman'],
            'lampiran'       => $lampiranPath,
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diterbitkan!');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $validated = $request->validate([
            'judul'          => 'required|string|max:255',
            'kategori'       => 'required|in:Penting,Akademik,Umum',
            'tanggal'        => 'required|date',
            'nomor_surat'    => 'nullable|string|max:100',
            'isi_pengumuman' => 'required|string',
            'lampiran'       => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        if ($request->hasFile('lampiran')) {
            // Hapus file lampiran lama dari server jika ada
            if ($pengumuman->lampiran && Storage::disk('public')->exists($pengumuman->lampiran)) {
                Storage::disk('public')->delete($pengumuman->lampiran);
            }

            $file = $request->file('lampiran');
            $filename = 'pengumuman/' . uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put($filename, file_get_contents($file));
            $pengumuman->lampiran = $filename;
        }

        $pengumuman->judul          = $validated['judul'];
        $pengumuman->slug           = Str::slug($validated['judul']) . '-' . Str::random(5);
        $pengumuman->kategori       = $validated['kategori'];
        $pengumuman->tanggal        = $validated['tanggal'];
        $pengumuman->nomor_surat    = $validated['nomor_surat'];
        $pengumuman->isi_pengumuman = $validated['isi_pengumuman'];

        $pengumuman->save();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        // Hapus fisik file lampiran dari server
        if ($pengumuman->lampiran && Storage::disk('public')->exists($pengumuman->lampiran)) {
            Storage::disk('public')->delete($pengumuman->lampiran);
        }

        $pengumuman->delete();
        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil dihapus!');
    }
}
