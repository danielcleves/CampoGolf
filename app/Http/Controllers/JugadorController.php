<?php

namespace App\Http\Controllers;

use App\Models\jugadores;
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
    public function create()
    {
        return view('jugadores.new');
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|unique:jugadores,email',
            'direccion' => 'required|string|max:255',
            'handicap' => 'required|numeric|min:0',
        ]);


        $jugador = new jugadores();
        $jugador->nombre = $validatedData['nombre'];
        $jugador->apellido = $validatedData['apellido'];
        $jugador->telefono = $validatedData['telefono'];
        $jugador->email = $validatedData['email'];
        $jugador->direccion = $validatedData['direccion'];
        $jugador->handicap = $validatedData['handicap'];
        $jugador->save();


        return redirect()->route('jugadores.index')->with('success', 'Jugador creado correctamente');
    }
    public function edit($id)
    {
        $jugador = jugadores::find($id);

        return view('jugadores.edit', ['jugador' => $jugador]);
    }
    public function update(Request $request, $id)
    {
        $jugador = Jugadores::find($id);

        $jugador->nombre = $request->nombre;
        $jugador->apellido = $request->apellido;
        $jugador->telefono = $request->telefono;
        $jugador->email = $request->email;
        $jugador->direccion = $request->direccion;
        $jugador->handicap = $request->handicap;
        $jugador->save();

        $jugadores = DB::table('jugadores')
            ->select('id', 'nombre', 'apellido', 'telefono', 'email', 'direccion', 'handicap', 'created_at', 'updated_at')
            ->get();

        return view('jugadores.index', ['jugadores' => $jugadores]);
    }
    public function destroy($id)
    {
        $jugador = jugadores::find($id);
        $jugador->delete();

        return redirect()->route('jugadores.index')->with('success', 'Jugador eliminado correctamente');
    }
}
