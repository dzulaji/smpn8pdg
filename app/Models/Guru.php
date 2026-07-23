<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    // Proteksi Mass Assignment, hanya kolom ini yang boleh diisi via form
    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
    ];
}
