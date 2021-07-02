<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\FlorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::redirect('/', '/admin/flores');



Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('flores', [FlorController::class, 'flores'])->name('flores.listar');
    Route::get('flores/salvar', [FlorController::class, 'formAdicionar'])->name('flores.form');
    Route::post('flores/salvar', [FlorController::class, 'adicionar'])->name('flores.adicionar');
    Route::delete('flores/{id}', [FlorController::class, 'deletar'])->name('flores.deletar');
    Route::get('flores/{id}',  [FlorController::class, 'formEditar'])->name('flores.formEditar');
    Route::put('flores/{id}',  [FlorController::class, 'editar'])->name('flores.editar');
});

Route::get('/sobre', function () {
    return '<h1>Sobre<h1>';
});
