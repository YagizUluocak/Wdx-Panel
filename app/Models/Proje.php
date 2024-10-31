<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Proje extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'resim', 
        'durum', 
        'spot_metni', 
        'icerik', 
        'description', 
        'keywords', 
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function($proje){
            $proje->slug = Str::slug($proje->name);
        });
    }

    public function resimler()
    {
        return $this->hasMany(ProjeResimleri::class, 'proje_id');
    }
}
