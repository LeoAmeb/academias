<?php

namespace App\Http\Controllers;

use App\Gastos;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class GastosController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Alumnos  $model
     * @return \Illuminate\View\View
     */
    public function index(Gastos $model)
    {
        return view('pagos.index', ['gastos' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create(Gastos $model)
    {
        return view('gastos.create', ['gastos' => Gastos::count()+1]);
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Gastos $model)
    {
    	$arrayName = array("descripcion" => $_POST['descripcion'] , "monto" =>$_POST['monto']);
        $model->create($arrayName);

        return redirect()->route('gastos.create')->withStatus(__('Gasto registrado.'));
    }

     /** 
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(Gasto $alumno)
    {
        if ($alumno->id == 1) {
            return redirect()->route('alumnos.index');
        }

        return view('gastos.edit', compact('alumno'));
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update( Alumnos  $alumno)
    {
        $alumno->update(
            $arrayName = array("nombre" => $_POST['name'] , "apellidomat" =>$_POST['ape2'], "apellidopat" => $_POST['ape1'],
    		"grado" =>$_POST['grado'], "gpo" =>$_POST['gpo'])
        );

        return redirect()->route('alumnos.index')->withStatus(__('Actualizado correctamente.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Alumnos $alumno)
    {
        
        $alumno->delete();

        return redirect()->route('alumnos.index')->withStatus(__('Eliminado correctamente.'));
    }
}
