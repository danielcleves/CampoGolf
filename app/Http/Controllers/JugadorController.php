<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadores = DB::table('jugadores')
        ->select(
            'id',
            'nombre',
            'apellido',
            'telefono',
            'email',
            'direccion',
            'handicap',
            'created_at',
            'updated_at'
        )
        ->get();

    return view('jugadores.index', ['jugadores' => $jugadores]);
    }
}
