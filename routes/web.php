<?php

use App\Http\Controllers\CampoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Rutas para jugadores
    Route::get('/jugadores', [JugadorController::class, 'index'])->name('jugadores.index');
    Route::post('/jugadores', [JugadorController::class, 'store'])->name('jugadores.store');
    Route::get('/jugadores/create', [JugadorController::class, 'create'])->name('jugadores.create');
    Route::delete('/jugadores/{jugador}', [JugadorController::class, 'destroy'])->name('jugadores.destroy');
    Route::put('/jugadores/{jugador}', [JugadorController::class, 'update'])->name('jugadores.update');
    Route::get('/jugadores/{jugador}/edit', [JugadorController::class, 'edit'])->name('jugadores.edit');

    //Rutas para campos
    Route::get('/campos', [CampoController::class, 'index'])->name('campos.index');
    Route::post('/campos', [CampoController::class, 'store'])->name('campos.store');
    Route::get('/campos/create', [CampoController::class, 'create'])->name('campos.create');
    Route::delete('/campos/{campo}', [CampoController::class, 'destroy'])->name('campos.destroy');
    Route::put('/campos/{campo}', [CampoController::class, 'update'])->name('campos.update');
    Route::get('/campos/{campo}/edit', [CampoController::class, 'edit'])->name('campos.edit');
});

require __DIR__ . '/auth.php';
