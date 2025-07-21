<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user admin
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        $user->assignRole('super_admin');

        // Tambahkan kategori barang
        $this->call([
            KategoriBarangSeeder::class,
        ]);
    }
}

