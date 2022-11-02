<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deuda extends Model
{
    use HasFactory;

    protected $primaryKey = 'idtbdeudas';
    public $timestamps = false;

    protected $table = "tbdeudas";

    protected $fillable = [
        'usuario',
        'codigo',
        'iddeudadescripcion',
        'periodo',
        'total',
        'saldo',
        'vencimiento'
    ];
}
