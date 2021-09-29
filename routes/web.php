<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CadastroUserController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoticiasController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::prefix('registre')->group(function() {
    Route::get('/', [CadastroUserController::class, 'index'])->name('registre');
    Route::post('gravar', [CadastroUserController::class, 'gravar'])->name('registre.gravar');
});

Route::prefix('noticias')->group(function() {
    Route::get('/', [LoginController::class, 'index'])->name('welcome');
});

Route::prefix('cadastro')->group(function() {
    Route::get('/', [CadastroController::class, 'index'])->name('cadastro');
    Route::post('cadastro', [CadastroController::class, 'gravar'])->name('cadastro.gravar');
    Route::get('buscar', [LoginController::class, 'buscar'])->name('cadastro.buscar');
});

Route::prefix('vernoticia')->group(function() {
    Route::get('noticias', [NoticiasController::class, 'noticias'])->name('noticias');
    Route::get('noticias/{id}', [NoticiasController::class, 'detalhes'])->name('noticias.detalhes');
    Route::delete('noticias/remover', [NoticiasController::class, 'excluir'])->name('noticias.excluir');
});