<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casas extends Model
{
    //---------------------------------//
    // Atributos que se pueden cambiar //
    //---------------------------------//
    
    protected $fillable = ['id','direccion', 'descripción', 'lat', 'long'];
}
