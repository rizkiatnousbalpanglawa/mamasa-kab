<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Buat 100 data dummy berita.
     */
    public function run(): void
    {
        Berita::factory()->count(100)->create();
    }
}
