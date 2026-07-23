<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokumen', 255);

            // Kategori sesuai desain: Akademik, Edaran Resmi, Formulir
            $table->enum('kategori', ['Akademik', 'Edaran Resmi', 'Formulir', 'Lainnya'])->default('Lainnya');

            $table->string('file_path'); // Path penyimpanan file di server

            // Kolom pendukung UI agar tidak perlu kalkulasi ulang
            $table->string('tipe_file', 10); // misal: 'PDF', 'DOCX'
            $table->string('ukuran_file', 50); // misal: '1.2 MB', '850 KB'

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('downloads');
    }
};
