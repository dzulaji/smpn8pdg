# Portal Informasi & Manajemen SMP Negeri 8 Padang

Sebuah sistem informasi berbasis web yang dikembangkan untuk mengelola profil, kesiswaan, informasi, dan galeri di SMP Negeri 8 Padang. Aplikasi ini menyediakan antarmuka publik bagi siswa, orang tua, dan masyarakat umum, serta portal admin untuk pengelolaan konten secara dinamis.

## 🎯 Tujuan Aplikasi
Aplikasi ini bertujuan untuk:
1. **Digitalisasi Informasi Sekolah**: Menyediakan sarana penyampaian informasi yang cepat, akurat, dan mudah diakses oleh publik (pengumuman, berita, agenda).
2. **Branding dan Profil Sekolah**: Memperkenalkan visi-misi, sejarah, fasilitas, dan prestasi sekolah kepada masyarakat luas.
3. **Kemudahan Akses Dokumen**: Memfasilitasi siswa dan guru dalam mendownload dokumen atau formulir penting melalui menu download.
4. **Manajemen Data Terpadu**: Memberikan kemudahan bagi pihak sekolah (admin) untuk memperbarui konten website tanpa harus mengerti kode pemrograman (CMS).

## 🔄 Alur Bisnis (Business Flow)

Aplikasi ini dibagi menjadi dua bagian utama: **Portal Publik (Frontend)** dan **Portal Admin (Backend/CMS)**.

### 1. Portal Publik (Pengunjung/User Umum)
Pengunjung dapat mengakses berbagai informasi sekolah tanpa perlu login, dengan alur sebagai berikut:
- **Beranda (Home)**: Menampilkan sorotan berita terbaru, guru, dan galeri terbaru.
- **Profil Sekolah**: Pengunjung dapat melihat sejarah, visi-misi, profil kepala sekolah, daftar guru, struktur organisasi, dan detail fasilitas sekolah.
- **Kesiswaan**: Pengunjung dapat menelusuri kegiatan ekstrakurikuler, daftar prestasi siswa, dan informasi alumni.
- **Informasi**:
  - **Berita & Pengumuman**: Membaca artikel atau informasi terbaru dari sekolah dengan fitur filter kategori.
  - **Agenda**: Melihat jadwal kegiatan sekolah yang disajikan dalam bentuk kalender interaktif.
  - **Download**: Mengunduh berbagai dokumen atau berkas penting publik.
- **Galeri**: Melihat dokumentasi kegiatan sekolah dalam format foto dan video.

### 2. Portal Admin (Manajemen Konten)
Admin sekolah harus melakukan **Login** (otentikasi) melalui `/portal-admin` untuk dapat mengelola konten. Alur manajemennya:
- **Dashboard**: Melihat ringkasan data (jumlah guru, berita, pengumuman, agenda, prestasi, dll).
- **CRUD (Create, Read, Update, Delete)**:
  - **Master Data**: Mengelola data Guru, Fasilitas, dan Ekstrakurikuler.
  - **Konten Informasi**: Menulis dan menerbitkan Berita, Pengumuman, Agenda Kegiatan, dan Prestasi Siswa.
  - **Media & Berkas**: Mengunggah foto/video ke Galeri dan mengelola file-file di menu Download.
- Setiap perubahan yang dilakukan di Portal Admin akan langsung diperbarui (real-time) dan dapat dilihat di Portal Publik.

## 💻 Teknologi yang Dipakai

Proyek ini dibangun menggunakan tumpukan teknologi (Tech Stack) modern, yaitu:

- **Framework Backend**: [Laravel 12](https://laravel.com/) (PHP ^8.2) - Menangani logika server-side, routing, ORM (Eloquent), dan otentikasi.
- **Frontend / Styling**: 
  - [Tailwind CSS v4](https://tailwindcss.com/) - Utility-first CSS framework untuk mendesain antarmuka yang responsif dan modern.
  - [Tailwind Typography](https://github.com/tailwindlabs/tailwindcss-typography) - Untuk memformat konten artikel (Rich Text).
- **Asset Bundler**: [Vite](https://vitejs.dev/) - Untuk kompilasi aset (CSS/JS) dengan cepat dan efisien.
- **Database**: MySQL / SQLite (menggunakan migrasi Laravel yang fleksibel).
- **Package Manager**: Composer (PHP) dan NPM (Node.js).

## 🚀 Pengembangan Kedepan (Future Possibilities)

Beberapa fitur yang memungkinkan untuk ditambahkan pada rilis berikutnya:
1. **Sistem Penerimaan Peserta Didik Baru (PPDB) Online**: Modul khusus untuk pendaftaran, seleksi, dan pengumuman hasil seleksi siswa baru.
2. **E-Learning / Portal Tugas**: Integrasi sistem manajemen pembelajaran ringan (LMS) di mana guru dapat mengunggah materi dan siswa dapat mengumpulkan tugas.
3. **Sistem Informasi Akademik (SIAKAD) Mini**:
   - Portal siswa/orang tua untuk melihat rapor digital dan absensi.
   - Manajemen jadwal mata pelajaran kelas.
4. **Multi-Role Authentication**: Membagi hak akses admin, misalnya: Admin Web, Admin Kesiswaan, dan Admin Kurikulum, agar pengelolaan lebih terstruktur.
5. **Integrasi Notifikasi WhatsApp/Email**: Mengirim notifikasi otomatis ke siswa/guru ketika ada pengumuman mendesak atau perubahan jadwal.
6. **Buku Tamu / Helpdesk Digital**: Fitur interaktif agar wali murid dapat mengirim pertanyaan atau masukan langsung ke pihak sekolah dan dilacak statusnya.

---
*Dibuat untuk memajukan pendidikan dan teknologi di SMP Negeri 8 Padang.*
