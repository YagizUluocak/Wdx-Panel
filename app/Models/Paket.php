<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'baslik',
        'fiyat',
        'periyod',
        'durum',
        'spot_metni',
        'icerik',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function($paket){
            $paket->slug = Str::slug($paket->baslik);
        });
    }

}

