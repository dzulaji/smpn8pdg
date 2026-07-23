<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::orderBy('tanggal_mulai', 'desc')->get();
        return view('admin.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'           => 'required|string|max:255',
            // Sesuaikan dengan ENUM di database
            'kategori'        => 'required|in:Pertemuan,Kegiatan Siswa,Upacara,Lainnya',
            'tanggal_mulai'   => 'required|date',
            // Boleh kosong (nullable), tapi kalau diisi harus >= tanggal mulai
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'waktu'           => 'required|string|max:100', // Sesuaikan varchar 100
            'lokasi'          => 'required|string|max:255',
            'deskripsi'       => 'required|string',
        ]);

        Agenda::create([
            'judul'           => $validated['judul'],
            'slug'            => Str::slug($validated['judul']) . '-' . Str::random(4),
            'kategori'        => $validated['kategori'],
            'tanggal_mulai'   => $validated['tanggal_mulai'],
            'tanggal_selesai' => $validated['tanggal_selesai'],
            'waktu'           => $validated['waktu'],
            'lokasi'          => $validated['lokasi'],
            'deskripsi'       => $validated['deskripsi'],
        ]);

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('admin.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, $id)
    {
        $agenda = Agenda::findOrFail($id);

        $validated = $request->validate([
            'judul'           => 'required|string|max:255',
            'kategori'        => 'required|in:Pertemuan,Kegiatan Siswa,Upacara,Lainnya',
            'tanggal_mulai'   => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'waktu'           => 'required|string|max:100',
            'lokasi'          => 'required|string|max:255',
            'deskripsi'       => 'required|string',
        ]);

        $agenda->update([
            'judul'           => $validated['judul'],
            'slug'            => Str::slug($validated['judul']) . '-' . Str::random(4),
            'kategori'        => $validated['kategori'],
            'tanggal_mulai'   => $validated['tanggal_mulai'],
            'tanggal_selesai' => $validated['tanggal_selesai'],
            'waktu'           => $validated['waktu'],
            'lokasi'          => $validated['lokasi'],
            'deskripsi'       => $validated['deskripsi'],
        ]);

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        return redirect()->route('admin.agenda.index')->with('success', 'Agenda berhasil dihapus!');
    }
}
