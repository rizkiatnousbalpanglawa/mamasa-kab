<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Potensi extends Model
{
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(PotensiKategori::class, 'kategori_id');
    }
}
