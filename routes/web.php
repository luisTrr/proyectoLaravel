<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
});

require __DIR__.'/auth.php';
<<<<<<< HEAD
=======

// Rutas para Usuarios
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

// Rutas para Tipos de Alquiler
Route::get('/tipos-alquiler', [TipoAlquilerController::class, 'index'])->name('tipos-alquiler.index');
Route::get('/tipos-alquiler/create', [TipoAlquilerController::class, 'create'])->name('tipos-alquiler.create');

// Rutas para Recursos de Alquiler
Route::get('/recursos-alquiler', [RecursoAlquilerController::class, 'index'])->name('recursos-alquiler.index');

// Rutas para Alquileres
Route::get('/alquileres', [AlquilerController::class, 'index'])->name('alquileres.index');
>>>>>>> 878eb9080c4d40950e4539b4646f02df1ac5d1f1
