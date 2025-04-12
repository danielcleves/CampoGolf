@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4 max-w-3xl">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Agregar Nuevo Jugador</h2>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('jugadores.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required
                       class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('nombre') border-red-500 @enderror"
                       placeholder="Ingrese el nombre del jugador">
                @error('nombre')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="apellido" class="block text-sm font-medium text-gray-700 mb-1">Apellido</label>
                <input type="text" id="apellido" name="apellido" value="{{ old('apellido') }}" required
                       class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('apellido') border-red-500 @enderror"
                       placeholder="Ingrese el apellido del jugador">
                @error('apellido')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
                <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" required
                       class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('telefono') border-red-500 @enderror"
                       placeholder="Ingrese el número de teléfono">
                @error('telefono')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                       class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror"
                       placeholder="Ingrese el correo electrónico">
                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-sm font-medium text-gray-700 mb-1">Dirección</label>
                <input type="text" id="direccion" name="direccion" value="{{ old('direccion') }}" required
                       class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('direccion') border-red-500 @enderror"
                       placeholder="Ingrese la dirección del jugador">
                @error('direccion')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="handicap" class="block text-sm font-medium text-gray-700 mb-1">Handicap</label>
                <input type="number" step="0.01" id="handicap" name="handicap" value="{{ old('handicap') }}" required
                       class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('handicap') border-red-500 @enderror"
                       placeholder="Ingrese el handicap">
                @error('handicap')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between mt-6">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition">
                    Guardar
                </button>
                <a href="{{ route('jugadores.index') }}"
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded-md transition">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
