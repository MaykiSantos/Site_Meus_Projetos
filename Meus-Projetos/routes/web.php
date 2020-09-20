<?php

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
    return view('meus-projetos');
});

Route::get('/controle-de-gastos', function () {
    return view('controle-de-gastos');
});

Route::get('/controle-de-gastos/doc', function () {
    return view('documentacao.doc-controle-de-gastos');
});

Route::get('/desenvolvimento-escolar', function () {
    return view('desenvolvimento-escolar');
});

Route::get('/desenvolvimento-escolar/doc', function () {
    return view('documentacao.doc-desenvolvimento-escolar');
});

Route::get('/preenchimento-automatico', function () {
    return view('preenchimento-automatico');
});

Route::get('/preenchimento-automatico/doc', function () {
    return view('documentacao.doc-preenchimento-automatico');
});

Route::get('/livraria-traca-de-livros', function () {
    return view('livraria-traca-de-livros');
});

Route::get('/livraria-traca-de-livros/doc', function () {
    return view('documentacao.doc-livraria-traca-de-livros');
});
