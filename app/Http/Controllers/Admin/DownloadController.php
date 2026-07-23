<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    // Fungsi bantuan untuk menghitung ukuran file (Bytes to KB/MB)
    private function formatSizeUnits($bytes)
    {
        if ($bytes >= 1048576) {
            return number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            return number_format($bytes / 1024, 2) . ' KB';
        } else {
            return $bytes . ' Bytes';
        }
    }

    public function index()
    {
        $downloads = Download::latest()->get();
        return view('admin.download.index', compact('downloads'));
    }

    public function create()
    {
        return view('admin.download.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_dokumen' => 'required|string|max:255',
            'kategori'     => 'required|in:Akademik,Edaran Resmi,Formulir,Lainnya',
            // File maksimal 10MB (10240 KB), proteksi XSS dengan pembatasan MIME type
            'file'         => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip,rar|max:10240',
        ]);

        $file = $request->file('file');

        // Simpan file
        $filename = 'downloads/' . uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->put($filename, file_get_contents($file));

        // Kalkulasi Tipe dan Ukuran otomatis dari Backend
        $tipeFile = strtoupper($file->getClientOriginalExtension());
        $ukuranFile = $this->formatSizeUnits($file->getSize());

        Download::create([
            'nama_dokumen' => $validated['nama_dokumen'],
            'kategori'     => $validated['kategori'],
            'file_path'    => $filename,
            'tipe_file'    => $tipeFile,
            'ukuran_file'  => $ukuranFile,
        ]);

        return redirect()->route('admin.download.index')->with('success', 'Dokumen berhasil diunggah!');
    }

    public function edit($id)
    {
        $download = Download::findOrFail($id);
        return view('admin.download.edit', compact('download'));
    }

    public function update(Request $request, $id)
    {
        $download = Download::findOrFail($id);

        $validated = $request->validate([
            'nama_dokumen' => 'required|string|max:255',
            'kategori'     => 'required|in:Akademik,Edaran Resmi,Formulir,Lainnya',
            'file'         => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip,rar|max:10240',
        ]);

        $download->nama_dokumen = $validated['nama_dokumen'];
        $download->kategori     = $validated['kategori'];

        // Jika ada upload file baru, ganti yang lama dan kalkulasi ulang ukurannya
        if ($request->hasFile('file')) {
            if ($download->file_path && Storage::disk('public')->exists($download->file_path)) {
                Storage::disk('public')->delete($download->file_path);
            }

            $file = $request->file('file');
            $filename = 'downloads/' . uniqid() . '-' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put($filename, file_get_contents($file));

            $download->file_path   = $filename;
            $download->tipe_file   = strtoupper($file->getClientOriginalExtension());
            $download->ukuran_file = $this->formatSizeUnits($file->getSize());
        }

        $download->save();

        return redirect()->route('admin.download.index')->with('success', 'Dokumen berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $download = Download::findOrFail($id);

        if ($download->file_path && Storage::disk('public')->exists($download->file_path)) {
            Storage::disk('public')->delete($download->file_path);
        }

        $download->delete();

        return redirect()->route('admin.download.index')->with('success', 'Dokumen berhasil dihapus dari sistem!');
    }
}
