Sistem Rekrutmen Karyawan Berbasis Web

Sistem Rekrutmen Karyawan adalah aplikasi berbasis web yang dirancang untuk mempermudah proses rekrutmen di sebuah perusahaan. Sistem ini memiliki dua jenis pengguna utama: Admin dan Pelamar.

Fitur Utama

Admin

- Mengelola informasi lowongan pekerjaan (buat, edit, hapus).
- Meninjau dan menyetujui/menolak aplikasi pelamar.
- Mengatur jadwal wawancara dan memberikan notifikasi kepada pelamar.
- Melihat laporan dan statistik pelamar.

Pelamar

- Mendaftar dan mengelola akun.
- Melihat daftar lowongan pekerjaan yang tersedia.
- Mengirimkan lamaran dan melampirkan dokumen pendukung.
- Memantau status lamaran secara real-time.

Tata Cara Instalasi
Persyaratan Sistem
Server: XAMPP
Bahasa Pemrograman: HTML, CSS, JavaScript
Database: MariaDB

Langkah-Langkah Instalasi
Clone Repository

git clone https://github.com/anggaprmn/rekrutmen-karyawan.git
cd sistem-rekrutmen-karyawan  
Install Dependencies
Pastikan composer telah terinstal di sistem Anda, lalu jalankan:


composer install  
npm install && npm run dev  
Setup Environment
Duplikasi file .env.example menjadi .env dan sesuaikan konfigurasi database:

plaintext
Copy code
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=nama_database  
DB_USERNAME=root  
DB_PASSWORD=password  
Migrasi Database
Jalankan migrasi database untuk membuat tabel:


php artisan migrate --seed  
Menjalankan Server
Jalankan aplikasi di local server:

php artisan serve  
Akses aplikasi melalui browser di http://localhost:8000.

Tata Cara Penggunaan

Admin

- Login menggunakan akun admin yang dibuat saat seeding data.
- Kelola lowongan, tinjau pelamar, dan atur proses rekrutmen.
Pelamar

- Registrasi akun baru.
- Login dan unggah dokumen lamaran.
- Pantau status lamaran dan terima notifikasi dari admin.
