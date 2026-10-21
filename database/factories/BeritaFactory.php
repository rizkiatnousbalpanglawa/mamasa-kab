<?php

namespace Database\Factories;

use App\Models\Berita;
use App\Models\BeritaKategori;
use App\Models\Penulis;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    protected $model = Berita::class;

    public function definition(): array
    {
        $topik = [
            'Pemkab Mamasa Gelar Musrenbang %s Tahun %s',
            'Bupati Mamasa Resmikan %s di Kecamatan %s',
            'Dinas %s Salurkan Bantuan untuk Warga %s',
            'Pemkab Mamasa Tingkatkan Layanan %s bagi Masyarakat',
            'Warga %s Antusias Ikuti %s yang Digelar Pemkab',
            'Pemkab Mamasa Bangun %s untuk Dukung %s',
            'Pelatihan %s Digelar untuk Pemuda di %s',
            'Pemerintah Salurkan %s kepada Masyarakat %s',
            'Festival %s di Mamasa Meriahkan %s',
            'Rakor %s Digelar untuk Percepat %s di Mamasa',
        ];

        $objek = ['Jalan Tani', 'Irigasi', 'Puskesmas Pembantu', 'Gedung Sekolah', 'Jembatan Gantung', 'Pasar Rakyat', 'Balai Desa', 'Sarana Air Bersih', 'Gedung Serbaguna', 'Posyandu'];
        $kecamatan = ['Mamasa', 'Sumarorong', 'Tabulahan', 'Pana', 'Nosu', 'Tandukalua', 'Sesenapadang', 'Balla', 'Bambang', 'Aralle', 'Tabang', 'Mambi', 'Bambang', 'Rantebulahan Timur', 'Meh ala'];
        $dinas = ['Pertanian', 'Pendidikan', 'Kesehatan', 'PUPR', 'Sosial', 'Kominfo', 'Pariwisata', 'Koperasi dan UMKM', 'Ketahanan Pangan', 'Lingkungan Hidup'];
        $acara = ['Pelatihan UMKM', 'Sunatan Massal', 'Pemeriksaan Kesehatan Gratis', 'Festival Budaya', 'Lomba Kebersihan Desa', 'Gerakan Tanam Pohon', 'Pasar Murah', 'Musyawarah Desa', 'Pentas Seni', 'Bakti Sosial'];

        $judul = sprintf(
            $this->faker->randomElement($topik),
            $this->faker->randomElement([...$objek, ...$dinas, ...$acara]),
            $this->faker->randomElement($kecamatan)
        );

        $paragraf = [];
        $jumlahParagraf = $this->faker->numberBetween(4, 7);
        for ($i = 0; $i < $jumlahParagraf; $i++) {
            $paragraf[] = '<p>'.$this->faker->paragraph($this->faker->numberBetween(4, 8)).'</p>';
        }

        return [
            'judul' => $judul,
            'slug' => Str::slug($judul).'-'.$this->faker->unique()->numberBetween(1000, 99999),
            'konten' => implode("\n", $paragraf),
            'gambar' => null,
            'kategori_id' => BeritaKategori::inRandomOrder()->first()?->id ?? BeritaKategori::factory(),
            'penulis_id' => Penulis::inRandomOrder()->first()?->id ?? Penulis::factory(),
            'tanggal' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'views' => $this->faker->numberBetween(0, 5000),
        ];
    }
}
