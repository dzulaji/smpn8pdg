<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengumumans', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('slug')->unique();

            // Kategori sesuai desain UI (Penting, Akademik, Umum)
            $table->enum('kategori', ['Penting', 'Akademik', 'Umum'])->default('Umum');

            $table->date('tanggal');

            // Nomor Surat dibuat opsional (nullable)
            $table->string('nomor_surat', 100)->nullable();

            // Isi dibuat longText untuk nampung paragraf teks biasa
            $table->longText('isi_pengumuman');

            // Lampiran file (PDF/Docx) dibuat opsional (nullable)
            $table->string('lampiran')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengumumans');
    }
};
