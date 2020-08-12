<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    protected $table='directorios';//es la tabla

    protected $fillable=[
        "nombre",
        "direccion",
        "telefono"

    ];
}
