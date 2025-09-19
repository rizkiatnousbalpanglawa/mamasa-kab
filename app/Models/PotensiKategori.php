<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PotensiKategori extends Model
{
    protected $guarded = ['id'];

    public function potensi()
    {
        return $this->hasMany(Potensi::class, 'kategori_id');
    }
}
