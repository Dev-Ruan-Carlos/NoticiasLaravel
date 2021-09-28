<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'index'])->name('welcome');

Route::prefix('cadastro')->group(function() {
    Route::get('/', [CadastroController::class, 'index'])->name('cadastro');
    Route::post('cadastro', [CadastroController::class, 'gravar'])->name('cadastro.gravar');
});