<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $table = 'empresa';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nit',
        'nombre',
        'direccion',
        'telefono',
        'email'
    ];
}
