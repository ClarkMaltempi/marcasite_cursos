<?php

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

Route::get(uri:'/', action:'App\Http\Controllers\main@principal');
Route::get(uri:'/usuarios', action:'App\Http\Controllers\usuarios@users')->name('site.cadastroUser');
Route::post(uri:'/usuarios', action:'App\Http\Controllers\usuarios@salvar')->name('site.cadastroUser');

Route::get(uri:'/cursos', action:'App\Http\Controllers\cursos@castroCursos')->name('site.cadastroCourses');
Route::post(uri:'/cursos', action:'App\Http\Controllers\cursos@salvarCadastro')->name('site.cadastroCourses');

Route::get(uri:'/inscricoes', action:'App\Http\Controllers\inscricoes@inscricoesAluno')->name('site.inscricoes');
Route::get(uri:'/inscricoes', action:'App\Http\Controllers\inscricoes@recuperaCursos')->name('site.inscricoes');
Route::post(uri:'/inscricoes', action:'App\Http\Controllers\inscricoes@inscricoes')->name('site.inscricoes');

Route::get(uri:'/listCourses', action:'App\Http\Controllers\listCourses@listCursos')->name('site.ListaCourses');
Route::get(uri:'/listCourses', action:'App\Http\Controllers\listCourses@listarCourses')->name('site.ListaCourses');

Route::get(uri:'/listInscricoes', action:'App\Http\Controllers\listInscricoes@listInscrito')->name('site.ListaInscricoes');
Route::get(uri:'/listInscricoes', action:'App\Http\Controllers\listInscricoes@recuperaInscritos')->name('site.ListaInscricoes');

Route::post(uri:'/listInscricoes', action:'App\Http\Controllers\listInscricoes@atualizar')->name('site.ListaInscricoes');
Route::delete('/inscrito/excluir/{id}', action:'App\Http\Controllers\listInscricoes@excluir')->name('site.ListaInscricoes.excluir');

