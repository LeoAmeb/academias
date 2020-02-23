<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    //
    protected $table='alumnos';
    protected $primaryKey='id_alumno';
    
    protected $fillable=[
    	'id_alumno','nombre','apellidomat','apellidopat','grado','gpo'
    ];
}
