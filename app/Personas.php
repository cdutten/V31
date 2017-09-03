<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
	//---------------------------------//
    // Atributos que se pueden cambiar //
    //---------------------------------//
    
    protected $fillable = ['id','nombre', 'dni', 'edad' , 'telefono', 'trabajo', 'descripcionProblema'];
    
}
