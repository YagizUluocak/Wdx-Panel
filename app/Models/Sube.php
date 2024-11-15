<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sube extends Model
{
    use HasFactory;

    protected $fillable = [
        'firma',
        'adres',
        'telefon',
        'gsm',
        'mail',
        'sehir',
        'ilce',
        'durum'
    ];
}
