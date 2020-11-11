<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Piezas;

class PiezasController extends Controller
{
    public function agregaPiezas()
    {
        $Pieza = Piezas::all();
        return view('CreacionPiezas')->with('Piezas',$Pieza);
    }

    public function muestraDatos()
    {
        $Pieza = Piezas::all();
        return view('muestraDatos')->with('Piezas',$Pieza);
        
    }

    public function ListaDatos(Request $request)
    {
        $Pieza = Piezas::all();
        $nuevaPieza = new Piezas;
        $nuevaPieza->Nombre = $request->Nombre;
        $nuevaPieza->Descripcion = $request->Descripcion;
        $nuevaPieza->NumeroPiezas = $request->NumeroPiezas;
        $nuevaPieza->Costo = $request->Costo;
        $nuevaPieza->save();

        //return view('muestraDatos')->with('Piezas',$Pieza);
        return  redirect('/muestraDatos');
    }

    public function index()
    {
        $Piezas = Piezas::all();
        return ($Piezas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
