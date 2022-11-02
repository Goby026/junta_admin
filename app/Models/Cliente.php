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
        'num_instalaciones',
        'nombres',
        'ape_paterno',
        'ape_materno',
        'direccion',
        'num_familias',
        'exo_p',
        'exo_a',
        'exo_f',
        'fec_nac',
        'fec_ing',
        'baja',
        'fec_baja',
        'idtipocliente',
        'idtbzonas'
    ];

    public function toSearchableArray()
    {
        // Customize the data array...

        return [
            'dni' => $this->dni,
            'nombres'=> $this->nombres,
            'ape_paterno'=> $this->ape_paterno,
            'ape_materno'=> $this->ape_materno,
            'direccion'=> $this->direccion
        ];
    }
}
