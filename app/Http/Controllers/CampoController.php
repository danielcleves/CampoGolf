<?php

namespace App\Http\Controllers;

use App\Models\Campo;
use Illuminate\Http\Request;

class CampoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campos = Campo::all();
        return view('campos.index', compact('campos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('campos.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campo = new Campo();
        $campo->nombre = $request->nombre;
        $campo->ubicacion = $request->ubicacion;
        $campo->numero_hoyos = $request->numero_hoyos;
        $campo->tipo = $request->tipo;
        $campo->tarifa = $request->tarifa;
        $campo->save();
        return redirect()->route('campos.index')->with('success', 'Campo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $campo = Campo::find($id);
        return view('campos.edit', compact('campo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $campo = Campo::find($id);
        $campo->nombre = $request->nombre;
        $campo->ubicacion = $request->ubicacion;
        $campo->numero_hoyos = $request->numero_hoyos;
        $campo->tipo = $request->tipo;
        $campo->tarifa = $request->tarifa;
        $campo->save();
        return redirect()->route('campos.index')->with('success', 'Campo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $campo = Campo::find($id);
        $campo->delete();
        return redirect()->route('campos.index')->with('success', 'Campo eliminado exitosamente.');
    }
}
