<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'slug', 'deskripsi_singkat', 'deskripsi_lengkap', 'foto_utama', 'galeri'
    ];

    // Otomatis convert JSON ke Array saat ditarik dari database
    protected $casts = [
        'galeri' => 'array',
    ];
}
