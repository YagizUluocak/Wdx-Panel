<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ekip extends Model
{
    use HasFactory;

    protected $fillable = [
        'adsoyad',
        'gorev',
        'resim',
        'linkedin',
        'facebook',
        'twitter',
        'instagram',
        'durum'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function($ekip){
            $ekip->slug = Str::slug($ekip->adsoyad);
        });
    }

}
