<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Satgas',
            'email' => 'admin@satgas.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Warga Peduli',
            'email' => 'warga@satgas.com',
            'password' => bcrypt('password'),
            'role' => 'warga',
        ]);

        $this->call([
            BeritaSeeder::class,
        ]);
        
        \App\Models\Kategori::create(['nama_kategori' => 'Bantuan Medis']);
        \App\Models\Kategori::create(['nama_kategori' => 'Masker N95']);
        \App\Models\Kategori::create(['nama_kategori' => 'Evakuasi']);
    }
}
