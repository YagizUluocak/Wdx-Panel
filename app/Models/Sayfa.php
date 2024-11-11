<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sayfa extends Model
{
    use HasFactory;

    protected $fillable = [
        'baslik',
        'durum',
        'resim',
        'icerik',
        'description',
        'keywords',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function($sayfa){
            $sayfa->slug = Str::slug($sayfa->baslik);
        });
    }
}
