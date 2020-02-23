<?php

namespace App\Http\Controllers;

use App\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Exception;


class AlumnosController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Alumnos  $model
     * @return \Illuminate\View\View
     */
    public function index(Alumnos $model)
    {
    	$info=$model->paginate(15);
        return view('alumnos.index', ['alumnos' => $info]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store( Alumnos $model)
    {
    	$arrayName = array("nombre" => $_POST['name'] , "apellidomat" =>$_POST['ape2'], "apellidopat" => $_POST['ape1'],
    		"grado" =>$_POST['grado'] , "gpo" =>$_POST['gpo']  );
        $model->create($arrayName);

        return redirect()->route('alumnos.index')->withStatus(__('Alumno registrado.'));
    }

     /** 
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(Alumnos $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
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
