<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class VideoGaleri extends Model
{
    use HasFactory;

    protected $fillable = [
        'baslik',
        'url',
        'thumbnail',
        'durum',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function($video){
            $video->slug = Str::slug($video->baslik);
        });
    }
}
