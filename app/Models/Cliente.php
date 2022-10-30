<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Cliente extends Model
{
    use HasFactory, Searchable;

    protected $primaryKey = 'idclientes';
    public $timestamps = false;
    protected $table = 'tbclientes';

    protected $fillable = [
        'dni',
        'apellidos',
        'nombres'
    ];

    public function toSearchableArray()
    {
        // Customize the data array...

        return [
            'dni' => $this->dni,
            'apellidos' => $this->apellidos,
            'nombres' => $this->nombres,
        ];
    }
}
