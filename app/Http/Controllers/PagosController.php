<?php

namespace App\Http\Controllers;

use App\Pagos;
use App\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Exception;

class PagosController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Alumnos  $model
     * @return \Illuminate\View\View
     */
    public function index(Pagos $model)
    {
    	$pagos= Pagos::join("alumnos","pagos.fk_id_alumno","=","alumnos.id_alumno")->get();

        return view('pagos.index', ['pagos' => $pagos]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
    	$alumnos = Alumnos::all();
        return view('pagos.create', compact('alumnos'));
    }
    /**
     * Store a newly created user in storage
     *
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Pagos $model)
    {
    	$arrayPago = array( "descripcion" => $_POST['descripcion_pago'], "monto" =>$_POST['monto'], "fk_id_alumno" => $_POST['id_alumno'] );
        $model->create($arrayPago);
        return redirect()->route('pagos.create')->withStatus(__('Pago exitoso.'));
    }

     /** 
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(Pagos $pago)
    {
        return view('pagos.edit', compact('pago'));
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update( Pagos  $pago)
    {
        $alumno->update(
            $arrayName = array("nombre" => $_POST['name'] , "apellidomat" =>$_POST['ape2'], "apellidopat" => $_POST['ape1'],
    		"grado" =>$_POST['grado'], "gpo" =>$_POST['gpo'])
        );

        return redirect()->route('pagos.index')->withStatus(__('Actualizado correctamente.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Pagos $pago)
    {
        
        $pago->delete();

        return redirect()->route('pagos.index')->withStatus(__('Eliminado correctamente.'));
    }
}
