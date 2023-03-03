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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['middleware' => 'auth'], function () {

    //ALUNOS
    Route::get('/alunos', 'AlunoController@index');
    Route::get('/alunos/create', 'AlunoController@create');
    Route::post('/alunos', 'AlunoController@store');
    Route::get('/alunos/{aluno}', 'AlunoController@show');
    Route::get('/alunos/{aluno}/edit', 'AlunoController@edit');
    Route::put('/alunos/{aluno}', 'AlunoController@update');
    Route::delete('/alunos/{aluno}', 'AlunoController@destroy');


    //TURMAS
    Route::get('/turmas', 'TurmaController@index');
    Route::get('/turmas/create', 'TurmaController@create');
    Route::post('/turmas', 'TurmaController@store');
    Route::get('/turmas/{turma}', 'TurmaController@show');
    Route::get('/turmas/{turma}/edit', 'TurmaController@edit');
    Route::put('/turmas/{turma}', 'TurmaController@update');
    Route::delete('/turmas/{turma}', 'TurmaController@destroy');

});




