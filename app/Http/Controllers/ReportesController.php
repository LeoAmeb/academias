<?php

namespace App\Http\Controllers;

use App\Pagos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Exception;

class ReportesController extends Controller
{
    //
    public function index()
    {
        return view('reportes.create');
    }
     /**
     * Store a newly created user in storage
     *
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Pagos $model)
    {
    	$inicio=$_POST['fecha_min'];
    	$fin=$_POST['fecha_max'];
    	$pagos= Pagos::join("alumnos","pagos.fk_id_alumno","=","alumnos.id_alumno")->whereBetween('pagos.created_at', [$inicio, $fin])->get();
        return view('reportes.index', ['pagos' => $pagos],['inicio' => $inicio." y ".$fin]);
    }

}
