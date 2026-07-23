<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('penulis')->nullable();
            $table->string('slug')->unique();

            // Atribut khusus prestasi
            $table->enum('tingkat', ['Sekolah', 'Kota', 'Provinsi', 'Nasional', 'Internasional'])->default('Kota');
            $table->string('juara', 100); // Contoh: "Juara 1", "Medali Emas"

            $table->date('tanggal'); // Kapan diraihnya
            $table->string('foto')->nullable(); // Foto penyerahan piala (simpan WebP)
            $table->longText('deskripsi'); // Cerita di balik kemenangan

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};
