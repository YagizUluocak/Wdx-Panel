<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun_Resimleri extends Model
{
    use HasFactory;

   protected $table = 'urun_resimleris';
    protected $fillable = [
        'urun_id',
        'resim_adi',
    ];

    public function urun()
    {
        return $this->belongsTo(Urun::class, 'urun_id');
    }
}
