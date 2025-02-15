# Manajemen Sparepart

Ini adalah aplikasi web yang dibangun dengan Laravel untuk mengelola data sparepart. Aplikasi ini memungkinkan admin untuk melakukan CRUD data sparepart dan pengguna untuk melihat serta melakukan pembelian sparepart.

## Fitur

- Manajemen data sparepart (CRUD)
- Pembelian sparepart dengan nomor faktur dan tanggal otomatis
- Dashboard dengan informasi jumlah barang, jumlah penjualan, dan statistik lainnya
- dsb.

## Prerequisites

Sebelum memulai, pastikan Anda telah menginstal hal-hal berikut:

- [PHP](https://www.php.net/downloads) (versi 8.0 atau lebih baru)
- [Composer](https://getcomposer.org/download/)
- [Laravel](https://laravel.com/docs/) (versi yang sesuai dengan proyek ini)
- [Database](https://www.mysql.com/downloads/) (MySQL atau PostgreSQL)

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini di lingkungan lokal Anda:

1. **Clone repositori ini:**
   ```bash
   https://github.com/rannx0/sparepart-management-laravel10.git
   ```

2. **Masuk ke direktori proyek:**
   ```bash
   cd sparepart-management-laravel10
   ```

3. **Install dependensi dengan Composer:**
   ```bash
   composer install
   ```

4. **Buat file `.env` dan konfigurasikan database:**
   ```bash
   cp .env.example .env
   ```
   Sesuaikan konfigurasi database di dalam file `.env`.

5. **Generate key aplikasi:**
   ```bash
   php artisan key:generate
   ```

6. **Jalankan migrasi :**
   ```bash
   php artisan migrate
   ```

7. **Jalankan seeder untuk data awal:**
   ```bash
   php artisan db:seed
   ```

8. **Jalankan server Laravel:**
   ```bash
   php artisan serve
   ```
   Akses aplikasi melalui `http://127.0.0.1:8000`


## Akses halaman backend untuk mengelola data melalui `http://127.0.0.1:8000/login`
## Akun Default

| Role     | Email            | Password |
|----------|-----------------|----------|
| Admin    | admin@gmail.com | password123 |

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

