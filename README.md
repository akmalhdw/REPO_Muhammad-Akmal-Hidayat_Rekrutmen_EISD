# 🔥 Portal Mitigasi Karhutla (Kebakaran Hutan dan Lahan)

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

**Portal Mitigasi Karhutla** adalah sebuah platform berbasis web yang dirancang untuk memberikan informasi terkini, edukasi pencegahan, dan pemantauan kualitas udara terkait insiden Kebakaran Hutan dan Lahan (Karhutla) di Indonesia. Aplikasi ini dibuat khusus untuk mempermudah masyarakat dalam memantau kondisi lapangan, melapor insiden, dan memahami bahaya kabut asap.

Proyek ini dibangun sebagai bentuk kepedulian terhadap isu lingkungan serta ditujukan sebagai pemenuhan tugas akademik.

---

## ✨ Fitur Utama

1. **Dashboard Informatif & Profesional**
   - Pemantauan Kualitas Udara (PM2.5) secara *Real-Time*.
   - Statistik luas lahan terbakar, jumlah penanganan, dan lokasi terdampak.
   - Grafik tren insiden kebakaran hutan yang membandingkan data dari tahun ke tahun.
   - Daftar Insiden terbaru (Data terkini pelaporan titik api).

2. **Rekapitulasi Data Insiden**
   - Daftar lengkap histori laporan kejadian kebakaran yang masuk ke sistem.
   - Fitur melihat **Detail Laporan** yang menampilkan kronologi, tingkat bahaya, dan respons dari tim SATGAS.

3. **Portal Berita & Pengumuman SATGAS**
   - Menampilkan pengumuman resmi pemerintah dan informasi terkini dari Satuan Tugas Penanggulangan Karhutla.

4. **Edukasi & Tips Mitigasi**
   - Pusat informasi tentang bahaya kabut asap bagi kesehatan.
   - Tips perlindungan diri (seperti penggunaan masker N95, Air Purifier, dll).
   - Video animasi edukasi kebencanaan terintegrasi.

5. **Pelaporan Insiden (Formulir Pengaduan)**
   - Fitur bagi masyarakat untuk membuat laporan penemuan titik api baru dengan lampiran foto bukti kejadian.

---

## 🛠️ Teknologi yang Digunakan

Aplikasi ini dikembangkan menggunakan *tech stack* modern:
*   **Framework Backend:** [Laravel 11.x](https://laravel.com/) (PHP)
*   **Styling & UI:** [Tailwind CSS 3.x](https://tailwindcss.com/)
*   **Database:** MySQL
*   **Grafik:** [Chart.js](https://www.chartjs.org/)
*   **Ikon:** Heroicons & SVG UI

---

## 🚀 Panduan Instalasi (Local Development)

Jika Anda ingin menjalankan aplikasi ini di komputer lokal (localhost), ikuti langkah-langkah berikut:

### Prasyarat
- PHP >= 8.2
- Composer
- MySQL / MariaDB
- Node.js & NPM

### Langkah-langkah

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/repo-mitigasi-karhutla.git
   cd repo-mitigasi-karhutla
   ```

2. **Install Dependensi PHP**
   ```bash
   composer install
   ```

3. **Install Dependensi Node.js (Tailwind)**
   ```bash
   npm install
   npm run build
   ```

4. **Konfigurasi Environment**
   Salin file `.env.example` menjadi `.env`.
   ```bash
   cp .env.example .env
   ```
   Buka file `.env` dan atur konfigurasi database Anda:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_anda
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate Application Key & Migrasi Database**
   ```bash
   php artisan key:generate
   php artisan migrate
   ```

6. **Jalankan Server Lokal**
   ```bash
   php artisan serve
   ```
   Aplikasi dapat diakses di: `http://localhost:8000`

