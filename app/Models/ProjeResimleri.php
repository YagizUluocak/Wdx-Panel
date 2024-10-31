<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjeResimleri extends Model
{
    use HasFactory;

    protected $fillable = [
        'proje_id',
        'resim_adi',
    ];

    public function proje()
    {
        return $this->belongsTo(Proje::class, 'proje_id');
    }
}
