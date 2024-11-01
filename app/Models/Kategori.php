<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'durum',
    ];

    public function urun()
    {
        return $this->hasMany(Urun::class);
    }
}
