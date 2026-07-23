<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    // Supaya Laravel ngga bingung sama nama tabel (karena kata bahasa Indonesia)
    protected $table = 'ekstrakurikulers';

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'foto_utama',
        'galeri'
    ];

    // Otomatis convert JSON ke Array saat ditarik dari database
    protected $casts = [
        'galeri' => 'array',
    ];
}
