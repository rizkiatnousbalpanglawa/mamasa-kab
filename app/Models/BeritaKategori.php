<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeritaKategori extends Model
{
    protected $guarded = ['id'];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'kategori_id');
    }
}
