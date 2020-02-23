<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $consulta_pagos = \DB::table('pagos')->sum('monto');
        $consulta_gastos = \DB::table('gastos')->sum('monto');
        return view('dashboard',compact('consulta_pagos'),compact('consulta_gastos'),compact('balance'));
    }
}
