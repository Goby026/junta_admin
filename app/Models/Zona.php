<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;

    protected $primaryKey = 'itzonas';
    public $timestamps = false;

    protected $table = "tbzonas";

    protected $fillable = [
        'detazona'
    ];

    // usar carbon el campos de fechas
    // protected $dates = ['nombre_campo_bd'];
}
