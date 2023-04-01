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
Route::get('/usuario/{usuario}/show', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('/usuario/{usuario}/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::post('/usuario/store', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/list', [UsuarioController::class, 'list'])->name('usuarios.list');
Route::put('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::get('/usuarios/{usuario}/destroy', [UsuarioController::class, 'destroy'])->name('usuario.destroy');

//Opinião
Route::get('/opiniao/novo', [OpiniaoController::class, 'create'])->name('opiniao.create');
Route::post('/opiniao/store', [OpiniaoController::class, 'store'])->name('opiniao.store');
Route::get('/opiniao/show', [OpiniaoController::class, 'show'])->name('opiniao.show');