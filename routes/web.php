<?php

use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use App\Http\Controllers\OpiniaoController;
use App\Models\Opiniao;
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

Route::get('/', [UsuarioController::class, 'index'])->name('usuarios.index');

//Usuarios
Route::get('/usuarios/novo', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/store', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuario/{ usuario }/show', [UsuarioController::class, 'show'])->name('usuario.show');
Route::get('/usuario/{ usuario }/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{ usuario }', [UsuarioController::class, 'update'])->name('usuarios.update');

//Opinião
