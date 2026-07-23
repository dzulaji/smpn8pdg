<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'penulis',
        'tanggal',
        'thumbnail',
        'isi_berita',
    ];

    // Casting tanggal agar otomatis menjadi instance Carbon (mudah diformat di Blade nantinya)
    protected $casts = [
        'tanggal' => 'date',
    ];
}
