@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <div class="bg-white shadow-md rounded-lg p-6 max-w-xl mx-auto">
        <h1 class="text-2xl text-blue-700 font-semibold mb-6">Editar Campo</h1>

        <form method="POST" action="{{ route('campos.update', ['campo' => $campo->id]) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="id" class="block text-sm font-medium text-gray-700 mb-1">ID</label>
                <input type="text" id="id" class="w-full border-gray-300 rounded-md shadow-sm bg-gray-100 text-gray-600" value="{{ $campo->id }}" disabled>
                <p class="text-sm text-gray-500 mt-1">ID del campo</p>
            </div>

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ $campo->nombre }}" required placeholder="Ingrese el nombre" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="ubicacion" class="block text-sm font-medium text-gray-700 mb-1">Ubicación</label>
                <input type="text" id="ubicacion" name="ubicacion" value="{{ $campo->ubicacion }}" required placeholder="Ingrese la ubicación" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="numero_hoyos" class="block text-sm font-medium text-gray-700 mb-1">Número de hoyos</label>
                <input type="number" min="1" id="numero_hoyos" name="numero_hoyos" value="{{ $campo->numero_hoyos }}" required placeholder="Ingrese el número de hoyos" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="tipo" class="block text-sm font-medium text-gray-700 mb-1">Tipo de campo</label>
                <select id="tipo" name="tipo" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2">
                    <option selected disabled value="">Seleccione una opción...</option>
                    <option value="público" {{ $campo->tipo = 'público' ? 'selected' : '' }}>Público</option>
                    <option value="privado" {{ $campo->tipo = 'privado' ? 'selected' : '' }}>Privado</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="tarifa" class="block text-sm font-medium text-gray-700 mb-1">Tarifa</label>
                <input
                    type="number"
                    id="tarifa"
                    name="tarifa"
                    value="{{ $campo->numero_hoyos }}"
                    min="0.01"
                    step="0.01"
                    required
                    placeholder="Ingrese la tarifa"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 px-3 py-2">
            </div>

            <div class="flex justify-between">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Actualizar
                </button>

                <a href="{{ route('campos.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                    Cancelar
                </a>
            </div>

        </form>
    </div>
</div>
@endsection
