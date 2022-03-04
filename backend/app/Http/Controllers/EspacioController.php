<?php

namespace App\Http\Controllers;

use App\Models\Espacio;
use Illuminate\Http\Request;

class EspacioController extends Controller
{

    /**
     * @param int $idEspacio
     * @return array
     */
    public function mostrarDisponible($idEspacio):array{
        return $this->select('*')
        ->join('horario', 'espacio.idEspacio', '=', 'horario.idEspacio')
        ->where('espacio.idEspacio', $idEspacio)
        ->where('horario.estado', '=', 'Disponible')
        ->get()
        ->toArray();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function show(Espacio $espacio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function edit(Espacio $espacio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Espacio $espacio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Espacio  $espacio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Espacio $espacio)
    {
        //
    }
}
