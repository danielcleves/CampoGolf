@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Crear campo</h1>
    </div>

    <div class="bg-white shadow-md rounded-lg flex justify-center p-4 max-w-xl mx-auto">
        <form method="POST" action="{{ route('campos.store') }}" class="w-full">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Ingrese el nombre" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="ubicacion" class="block text-sm font-medium text-gray-700 mb-1">Ubicación</label>
                <input type="text" id="ubicacion" name="ubicacion" required placeholder="Ingrese la ubicación" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="numero_hoyos" class="block text-sm font-medium text-gray-700 mb-1">Número de hoyos</label>
                <input type="number" min="1" id="numero_hoyos" name="numero_hoyos" required placeholder="Ingrese el número de hoyos" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="tipo" class="block text-sm font-medium text-gray-700 mb-1">Tipo de campo</label>
                <select id="tipo" name="tipo" class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2">
                    <option selected disabled value="">Seleccione una opción...</option>
                    <option value="público">Público</option>
                    <option value="privado">Privado</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="tarifa" class="block text-sm font-medium text-gray-700 mb-1">Tarifa</label>
                <input
                    type="number"
                    id="tarifa"
                    name="tarifa"
                    min="0.01"
                    step="0.01"
                    required
                    placeholder="Ingrese la tarifa"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 px-3 py-2">
            </div>


            <div class="flex justify-between mt-6">
                <button type="submit" class="bg-blue-600 text-white font-medium py-2 px-4 rounded-lg shadow">
                    Guardar
                </button>
                <a href="{{ route('campos.index') }}" class="bg-red-600 text-white font-medium py-2 px-4 rounded-lg shadow">
                    Cancelar
                </a>
            </div>
        </form>
    </div>

</div>
@endsection
