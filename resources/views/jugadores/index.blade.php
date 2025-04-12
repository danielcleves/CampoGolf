@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <div class="bg-white shadow-md rounded-lg p-6 max-w-7xl mx-auto">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
            <h1 class="text-2xl text-blue-700 font-semibold mb-4 sm:mb-0">Lista de Jugadores</h1>
            <a href="{{ route('jugadores.create') }}" class="bg-blue-700 hover:bg-blue-800 text-white font-medium py-2 px-4 rounded-md transition">
                + Nuevo Jugador
            </a>
        </div>

        <div class="overflow-x-auto">
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
                        <th class="px-4 py-2 text-center">Acciones</th>
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
                            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($jugador->created_at)->format('Y-m-d') }}</td>
                            <td class="px-4 py-2 text-center">
                                <div class="flex justify-center gap-2">
                                    <!-- Editar -->
                                    <a href="{{ route('jugadores.edit', ['jugador' => $jugador->id]) }}" class="bg-blue-700 text-white py-1 px-3 rounded-md hover:bg-blue-800" title="Editar">
                                        <i class="bi bi-pencil"></i> Editar
                                    </a>

                                    <!-- Eliminar -->
                                    <form action="{{ route('jugadores.destroy', ['jugador' => $jugador->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este jugador?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-700" title="Eliminar">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
