<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    //
    protected $table='gastos';
    protected $primaryKey='id_gasto';
    
    protected $fillable=[
    	'id_alumno','descripcion','monto'
    ];
}
