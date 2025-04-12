@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <div class="bg-white shadow-md rounded-lg p-6 max-w-xl mx-auto">
        <h1 class="text-2xl text-blue-700 font-semibold mb-6">Editar Jugador</h1>

        <form method="POST" action="{{ route('jugadores.update', ['jugador' => $jugador->id]) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="id" class="block text-sm font-medium text-gray-700 mb-1">ID</label>
                <input type="text" id="id" class="w-full border-gray-300 rounded-md shadow-sm bg-gray-100 text-gray-600" value="{{ $jugador->id }}" disabled>
                <p class="text-sm text-gray-500 mt-1">ID del jugador</p>
            </div>

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $jugador->nombre) }}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="apellido" class="block text-sm font-medium text-gray-700 mb-1">Apellido</label>
                <input type="text" name="apellido" id="apellido" value="{{ old('apellido', $jugador->apellido) }}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
                <input type="text" name="telefono" id="telefono" value="{{ old('telefono', $jugador->telefono) }}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $jugador->email) }}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-sm font-medium text-gray-700 mb-1">Dirección</label>
                <input type="text" name="direccion" id="direccion" value="{{ old('direccion', $jugador->direccion) }}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2">
            </div>

            <div class="mb-6">
                <label for="handicap" class="block text-sm font-medium text-gray-700 mb-1">Handicap</label>
                <input type="number" step="0.01" name="handicap" id="handicap" value="{{ old('handicap', $jugador->handicap) }}" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2">
            </div>

            <div class="flex justify-between">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Actualizar
                </button>

                <a href="{{ route('jugadores.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                    Cancelar
                </a>
            </div>

        </form>
    </div>
</div>
@endsection