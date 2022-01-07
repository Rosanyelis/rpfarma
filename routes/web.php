<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index')->middleware(['auth']);
Route::get('/usuarios/crear-usuario', [UsuariosController::class, 'create'])->name('usuarios.create')->middleware(['auth']);
Route::post('/usuarios/guardar-usuario', [UsuariosController::class, 'store'])->name('usuarios.store')->middleware(['auth']);
Route::get('/usuarios/{id}/editar-usuario', [UsuariosController::class, 'edit'])->name('usuarios.edit')->middleware(['auth']);
Route::post('/usuarios/{id}/actualizar-usuario', [UsuariosController::class, 'update'])->name('usuarios.update')->middleware(['auth']);
Route::delete('/usuarios/{id}/eliminar-usuario', [UsuariosController::class, 'destroy'])->name('usuarios.destroy')->middleware(['auth']);
