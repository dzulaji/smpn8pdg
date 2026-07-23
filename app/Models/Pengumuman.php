<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumans';

    // Proteksi data yang boleh diisi melalui form
    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'tanggal',
        'nomor_surat',
        'isi_pengumuman',
        'lampiran',
    ];

    // Otomatis mengubah format tanggal MySQL menjadi objek Carbon
    protected $casts = [
        'tanggal' => 'date',
    ];
}
