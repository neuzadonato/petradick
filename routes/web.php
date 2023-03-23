<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetsController;

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
Route::get('/', function () {
    return view('welcome');
});

// Rotas para o CRUD de pets

// Rota para a listagem de pets
Route::get('/pets', [PetsController::class, 'index'])->name('pets.index');

// Rota para o formulário de criação de gatos
Route::get('/pets/create', [PetsController::class, 'create'])->name('pets.create');

// Rota para o mostrar um gato específico
Route::get('/pets/{id}', [PetsController::class, 'show'])->name('Pets.show');

// Rota para o formulário de edição de gatos
Route::get('/pets/{id}/edit', [PetsController::class, 'edit'])->name('pets.edit');

// Rota que armazena um novo gato no banco de dados
Route::post('/pets', [PetsController::class, 'store'])->name('pets.store');

// Rota que atualiza um gato específico no banco de dados
Route::put('/pets/{id}', [PetsController::class, 'update'])->name('pets.update');

// Rota que remove um gato específico do banco de dados
Route::delete('/pets/{id}', [PetsController::class, 'destroy'])->name('pets.destroy');
