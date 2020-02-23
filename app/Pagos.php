<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    //
    protected $table='pagos';
    protected $primaryKey='id_pago';
    
    protected $fillable=[
    	'id_alumno','descripcion','monto', 'fk_id_alumno'
    ];
}
