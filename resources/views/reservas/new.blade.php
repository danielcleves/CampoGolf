@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4 max-w-3xl">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Agregar Nueva Reserva</h2>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('reservas.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="campo_id" class="block text-sm font-medium text-gray-700 mb-1">Campo</label>
                <select id="campo_id" name="campo_id" required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('campo_id') border-red-500 @enderror">
                    <option value="">Seleccione un campo</option>
                    @foreach ($campos as $campo)
                        <option value="{{ $campo->id }}" {{ old('campo_id') == $campo->id ? 'selected' : '' }}>
                            {{ $campo->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('campo_id')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="jugador_id" class="block text-sm font-medium text-gray-700 mb-1">Jugador</label>
                <select id="jugador_id" name="jugador_id" required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('jugador_id') border-red-500 @enderror">
                    <option value="">Seleccione un jugador</option>
                    @foreach ($jugadores as $jugador)
                        <option value="{{ $jugador->id }}" {{ old('jugador_id') == $jugador->id ? 'selected' : '' }}>
                            {{ $jugador->nombre }} {{ $jugador->apellido }}
                        </option>
                    @endforeach
                </select>
                @error('jugador_id')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="fecha_reserva" class="block text-sm font-medium text-gray-700 mb-1">Fecha de Reserva</label>
                <input type="date" id="fecha_reserva" name="fecha_reserva" value="{{ old('fecha_reserva') }}" required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('fecha_reserva') border-red-500 @enderror">
                @error('fecha_reserva')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="hora_inicio" class="block text-sm font-medium text-gray-700 mb-1">Hora de Inicio</label>
                <input type="time" id="hora_inicio" name="hora_inicio" value="{{ old('hora_inicio') }}" required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('hora_inicio') border-red-500 @enderror">
                @error('hora_inicio')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="duracion" class="block text-sm font-medium text-gray-700 mb-1">Duración (en minutos)</label>
                <input type="number" id="duracion" name="duracion" value="{{ old('duracion') }}" required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('duracion') border-red-500 @enderror">
                @error('duracion')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="numero_jugadores" class="block text-sm font-medium text-gray-700 mb-1">Número de Jugadores</label>
                <input type="number" id="numero_jugadores" name="numero_jugadores" value="{{ old('numero_jugadores') }}" required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('numero_jugadores') border-red-500 @enderror">
                @error('numero_jugadores')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between mt-6">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition">
                    Guardar
                </button>
                <a href="{{ route('reservas.index') }}"
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded-md transition">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
