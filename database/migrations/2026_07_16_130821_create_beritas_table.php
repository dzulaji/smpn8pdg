<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('slug')->unique(); // Untuk URL SEO friendly (misal: kunjungan-dinas)

            // Menggunakan Enum untuk membatasi input kategori agar tidak melenceng
            $table->enum('kategori', ['Liputan', 'Kegiatan', 'Akademik', 'Umum'])->default('Umum');

            $table->string('penulis', 100)->default('Admin Sekolah');
            $table->date('tanggal');
            $table->string('thumbnail')->nullable();
            $table->longText('isi_berita');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
