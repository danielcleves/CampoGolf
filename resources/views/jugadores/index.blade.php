@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Lista de Jugadores</h1>
        <a href="{{ route('jugadores.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition">+ Nuevo Jugador</a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4 overflow-x-auto">
            <table class="min-w-full table-auto text-sm text-left text-gray-700">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Apellido</th>
                        <th class="px-4 py-2">Teléfono</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Dirección</th>
                        <th class="px-4 py-2">Handicap</th>
                        <th class="px-4 py-2">Registrado</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($jugadores as $jugador)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2">{{ $jugador->id }}</td>
                            <td class="px-4 py-2">{{ $jugador->nombre }}</td>
                            <td class="px-4 py-2">{{ $jugador->apellido }}</td>
                            <td class="px-4 py-2">{{ $jugador->telefono }}</td>
                            <td class="px-4 py-2">{{ $jugador->email }}</td>
                            <td class="px-4 py-2">{{ $jugador->direccion }}</td>
                            <td class="px-4 py-2">{{ $jugador->handicap }}</td>
                            <td class="px-4 py-2">{{ $jugador->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
