<?php

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

Route::get('/','HomeController');

Route::prefix('/tarefas')->group(function(){

    Route::get('/','TarefasController@list')->name('tarefas.list'); //Tela com a lista de tarefas

    Route::get('add','TarefasController@add')->name('tarefas.add'); //Tela de adicionar tarefas
    Route::post('add','TarefasController@addAction'); //Ação de adicionar

    Route::get('edit/{id}','TarefasController@edit')->name('tarefas.edit'); //Tela de editar
    Route::post('edit/{id}','TarefasController@editAction'); //Ação editar

    Route::get('delete/{id}','TarefasController@del')->name('tarefas.del'); //Ação deletar

    Route::get('marcar/{id}','TarefasController@done')->name('tarefas.done'); //Ação marcar/desmarcar
});
