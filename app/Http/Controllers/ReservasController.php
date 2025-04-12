<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function index()
    {
        $reservas = DB::table('reservas')
            ->join('campos', 'reservas.campo_id', '=', 'campos.id')
            ->join('jugadores', 'reservas.jugador_id', '=', 'jugadores.id')
            ->select(
                'reservas.id',
                'campos.nombre as campo_nombre',
                DB::raw("CONCAT(jugadores.nombre, ' ', jugadores.apellido) as jugador_nombre"),
                'reservas.fecha_reserva',
                'reservas.hora_inicio',
                'reservas.duracion',
                'reservas.numero_jugadores',
                'reservas.created_at',
                'reservas.updated_at'
            )
            ->orderBy('reservas.fecha_reserva', 'desc')
            ->get();

        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $campos = DB::table('campos')->select('id', 'nombre')->get();
        $jugadores = DB::table('jugadores')->select('id', 'nombre', 'apellido')->get();

        return view('reservas.new', compact('campos', 'jugadores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'campo_id' => 'required|exists:campos,id',
            'jugador_id' => 'required|exists:jugadores,id',
            'fecha_reserva' => 'required|date',
            'hora_inicio' => 'required',
            'duracion' => 'required|integer|min:1',
            'numero_jugadores' => 'required|integer|min:1|max:4'
        ]);

        DB::table('reservas')->insert([
            'campo_id' => $request->campo_id,
            'jugador_id' => $request->jugador_id,
            'fecha_reserva' => $request->fecha_reserva,
            'hora_inicio' => $request->hora_inicio,
            'duracion' => $request->duracion,
            'numero_jugadores' => $request->numero_jugadores,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('reservas.index')->with('success', 'Reserva creada con éxito.');
    }

    public function edit($id)
    {
        $reserva = DB::table('reservas')->where('id', $id)->first();
        $campos = DB::table('campos')->select('id', 'nombre')->get();
        $jugadores = DB::table('jugadores')->select('id', 'nombre', 'apellido')->get();

        if (!$reserva) {
            return redirect()->route('reservas.index')->with('error', 'Reserva no encontrada.');
        }

        return view('reservas.edit', compact('reserva', 'campos', 'jugadores'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'campo_id' => 'required|exists:campos,id',
            'jugador_id' => 'required|exists:jugadores,id',
            'fecha_reserva' => 'required|date',
            'hora_inicio' => 'required',
            'duracion' => 'required|integer|min:1',
            'numero_jugadores' => 'required|integer|min:1|max:4'
        ]);

        DB::table('reservas')
            ->where('id', $id)
            ->update([
                'campo_id' => $request->campo_id,
                'jugador_id' => $request->jugador_id,
                'fecha_reserva' => $request->fecha_reserva,
                'hora_inicio' => $request->hora_inicio,
                'duracion' => $request->duracion,
                'numero_jugadores' => $request->numero_jugadores,
                'updated_at' => now()
            ]);

        return redirect()->route('reservas.index')->with('success', 'Reserva actualizada con éxito.');
    }

    public function destroy($id)
    {
        DB::table('reservas')->where('id', $id)->delete();

        return redirect()->route('reservas.index')->with('success', 'Reserva eliminada con éxito.');
    }
}
