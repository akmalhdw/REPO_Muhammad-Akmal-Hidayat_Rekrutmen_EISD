<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritas = [
            [
                'judul' => 'Titik Api Baru Ditemukan di Area Timur Kota',
                'kategori_berita' => 'Update Karhutla',
                'konten_lengkap' => 'Tim pemadam kebakaran dari SATGAS Karhutla sedang meluncur ke lokasi sektor timur. Api diperkirakan membakar sekitar 2 hektar lahan gambut kering. Warga di sekitar sektor timur diminta untuk menutup rapat ventilasi rumah, menyalakan air purifier, dan menghindari aktivitas di luar ruangan hingga ada pemberitahuan lebih lanjut.',
                'created_at' => now()->subHours(2),
            ],
            [
                'judul' => 'Distribusi Masker N95 Gratis di Balai Kota',
                'kategori_berita' => 'Bantuan Warga',
                'konten_lengkap' => 'Pemerintah kota melalui posko SATGAS mulai membagikan masker N95 secara gratis dan menyediakan tabung oksigen portabel. Prioritas diberikan untuk warga yang rentan seperti lansia, ibu hamil, dan balita. Silakan datang langsung membawa KTP ke halaman depan Balai Kota mulai pukul 08:00 hingga 15:00 WIB.',
                'created_at' => now()->subHours(5),
            ],
            [
                'judul' => 'Status Udara Meningkat ke Level Berbahaya',
                'kategori_berita' => 'Peringatan Dini',
                'konten_lengkap' => 'Indeks Standar Pencemar Udara (ISPU) pagi ini menyentuh angka 185 (Sangat Tidak Sehat hingga Berbahaya). Jarak pandang menurun drastis menjadi kurang dari 50 meter di jalan protokol. Seluruh sekolah diliburkan, dan perkantoran dihimbau menerapkan WFH (Work From Home) demi keselamatan pekerja.',
                'created_at' => now()->subDays(1),
            ],
            [
                'judul' => 'Jadwal Pemadaman Listrik Bergilir Area Terdampak',
                'kategori_berita' => 'Informasi Publik',
                'konten_lengkap' => 'Karena jarak pandang yang buruk dan abu yang menutupi sejumlah gardu induk PLN, akan diberlakukan pemadaman listrik darurat sementara di Area Barat dan Utara. Pemadaman diperkirakan berlangsung selama 3 jam untuk proses pembersihan isolator jaringan. Harap maklum.',
                'created_at' => now()->subDays(2),
            ],
            [
                'judul' => 'Penyaluran Bantuan Sembako ke Desa Terisolir',
                'kategori_berita' => 'Bantuan Warga',
                'konten_lengkap' => 'Tim SAR gabungan telah berhasil membuka jalur darat menuju Desa Sukamaju yang terisolir akibat kabut asap tebal selama dua hari terakhir. Bantuan berupa beras, air bersih kemasan, dan obat-obatan ISPA telah diserahkan langsung kepada kepala desa setempat.',
                'created_at' => now()->subDays(3),
            ]
        ];

        foreach ($beritas as $berita) {
            \App\Models\Berita::create($berita);
        }
    }
}
