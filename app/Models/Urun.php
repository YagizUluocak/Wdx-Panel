<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'urun_kodu',
        'icerik',
        'fiyat',
        'stok',
        'spot_metni',
        'kategori_id',
        'durum',
        'keywords',
        'description',
        'resim',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function resimler()
    {
        return $this->hasMany(Urun_Resimleri::class, 'urun_id');
    }
}
