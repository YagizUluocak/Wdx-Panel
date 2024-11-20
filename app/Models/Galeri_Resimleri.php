<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri_Resimleri extends Model
{
    use HasFactory;

    protected $table = 'galeri_resimleris';

    protected $fillabele = [
        'galeri_id',
        'resim_adi',
    ];

    public function galeri()
    {
        return $this->belongsTo(FotoGaleri::class, 'galeri_id');
    }
}
