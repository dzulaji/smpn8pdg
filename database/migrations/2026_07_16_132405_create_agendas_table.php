<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('slug')->unique();

            // Kategori sesuai desain: Pertemuan, Kegiatan Siswa, Upacara
            $table->enum('kategori', ['Pertemuan', 'Kegiatan Siswa', 'Upacara', 'Lainnya'])->default('Lainnya');

            // Tanggal & Waktu
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable(); // Null jika cuma 1 hari
            $table->string('waktu', 100); // Teks bebas, misal: "08:00 WIB - Selesai"

            $table->string('lokasi', 255);
            $table->text('deskripsi'); // Teks biasa buat ringkasan agenda

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
