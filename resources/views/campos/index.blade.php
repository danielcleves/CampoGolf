@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Lista de campos</h1>
        <a href="{{ route('campos.create') }}" class="bg-blue-700 hover:bg-blue-800 text-white font-medium py-2 px-4 rounded-md transition">+ Nuevo campo</a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4 overflow-x-auto">
            <table class="min-w-full table-auto text-sm text-left text-gray-700">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Ubicacion</th>
                        <th class="px-4 py-2">Número hoyos</th>
                        <th class="px-4 py-2">Tipo</th>
                        <th class="px-4 py-2">Tarifa</th>
                        <th class="px-4 py-2">Registrado</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($campos as $campo)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $campo->id }}</td>
                        <td class="px-4 py-2">{{ $campo->nombre }}</td>
                        <td class="px-4 py-2">{{ $campo->ubicacion }}</td>
                        <td class="px-4 py-2">{{ $campo->numero_hoyos }}</td>
                        <td class="px-4 py-2">{{ $campo->tipo }}</td>
                        <td class="px-4 py-2">{{ $campo->tarifa }}</td>
                        <td class="px-4 py-2">{{ $campo->created_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="flex gap-2">
                                <a href="{{ route('campos.edit', ['campo' => $campo->id]) }}"
                                    class="bg-blue-700 hover:bg-blue-800 text-white text-sm px-3 py-1 rounded-md transition">
                                    Editar
                                </a>
                                <form action="{{ route('campos.destroy', ['campo' => $campo->id]) }}"
                                    method="POST" class="inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white text-sm px-3 py-1 rounded-md transition">
                                        Eliminar
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
