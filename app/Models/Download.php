<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_dokumen',
        'kategori',
        'file_path',
        'tipe_file',
        'ukuran_file',
    ];
}
