<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CadastroUserController;
use App\Http\Controllers\ControleUserController;
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
    Route::post('/', [InicioController::class, 'index'])->name('inicio2');

Route::prefix('entrada')->group(function() {
    Route::post('entrar', [InicioController::class, 'entrar'])->name('entrada.entrar');
});

Route::prefix('registre')->group(function() {
    Route::get('/', [CadastroUserController::class, 'index'])->name('registre');
    Route::post('gravar', [CadastroUserController::class, 'gravar'])->name('registre.gravar');
});

Route::prefix('noticias')->group(function() {
    Route::post('/', [LoginController::class, 'index'])->name('welcome');
    Route::get('/', [LoginController::class, 'index'])->name('welcome2');
    Route::post('buscar', [LoginController::class, 'buscar'])->name('noticia.buscar');
    Route::get('vermais/{id}', [LoginController::class, 'vermais'])->name('noticia.vermais');
});

Route::prefix('cadastro')->group(function() {
    Route::get('/', [CadastroController::class, 'index'])->name('cadastro');
    Route::post('cadastro', [CadastroController::class, 'gravar'])->name('cadastro.gravar');
});

Route::prefix('vernoticia')->group(function() {
    Route::get('noticias', [NoticiasController::class, 'noticias'])->name('noticias');
    Route::get('noticias/{id}', [NoticiasController::class, 'detalhes'])->name('noticias.detalhes');
    Route::delete('noticias/remover', [NoticiasController::class, 'excluir'])->name('noticias.excluir');
});

Route::prefix('controleuser')->group(function() {
    Route::get('listagem', [ControleUserController::class, 'usuarios'])->name('controleuser.listagem');
    Route::post('listagem', [ControleUserController::class, 'usuarios'])->name('controleuser.listagem2');
    Route::get('edicao/{id}', [ControleUserController::class, 'edicao'])->name('controleuser.listagem.edicao');
});