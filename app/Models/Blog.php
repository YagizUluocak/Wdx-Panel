<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'baslik',
        'resim',
        'durum',
        'icerik',
        'description',
        'keywords',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function($blog){
            $blog->slug = Str::slug($blog->baslik);
        });
    }
}
