<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Katalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'baslik',
        'resim',
        'dosya',
        'durum',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function($katalog){
            $katalog->slug = Str::slug($katalog->baslik);
        });
    }

}
