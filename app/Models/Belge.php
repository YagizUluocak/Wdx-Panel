<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Belge extends Model
{
    use HasFactory;

    protected $fillable = [
        'baslik',
        'belge',
        'durum',
    ];
}
