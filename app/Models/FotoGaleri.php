<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoGaleri extends Model
{
    use HasFactory;

    protected $fillable = [
        'baslik',
        'durum'
    ];

    public function resimler()
    {
        return $this->hasMany(Galeri_Resimleri::class, 'galeri_id');
    }

}
