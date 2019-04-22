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

Route::get('/', 'MainController@index');

Route::get('/tvonline', 'MainController@indexMyTv')->name('tv');

Route::get('/tvonline/espn', 'MainController@canalESPN')->name('canalespn');

Route::get('/tvonline/foxsports', 'MainController@canalFOXSPORTS')->name('canalfoxsports');

Route::get('/ebooks', 'MainController@indexProdutos')->name('ebooks');

Route::get('/receitas', 'MainController@indexReceitas')->name('receitas');

Route::get('/artigo/{artigo}', 'MainController@indexArtigo');

Route::get('/dieta/{dieta}', 'MainController@indexDieta');

Route::get('/suplemento/{suplemento}', 'MainController@indexSuplemento');

Route::get('/treino/{treino}', 'MainController@indexTreino');

Route::get('/painel/artigo/add', 'MainController@indexAdmin')->name('adicionarArtigo');


Route::get('/painel/artigos', 'MainController@indexArtigos')->name('artigos');

Route::get('/painel/artigo/{artigo}/edit', 'MainController@indexEditArtigo')->name('editarArtigo');

Route::get('/painel/dieta/{dieta}/edit', 'MainController@indexEditDieta')->name('editarDieta');

Route::get('/painel/suplemento/{suplemento}/edit', 'MainController@indexEditSuplemento')->name('editarSuplemento');

Route::get('/painel/exercicio/{exercicio}/edit', 'MainController@indexEditExercicio')->name('editarExercicio');

Route::get('/painel/artigo/{artigo}/del', 'MainController@delArtigo')->name('deletarArtigo');

Route::get('/painel/dieta/{dieta}/del', 'MainController@delDieta')->name('deletarDieta');

Route::get('/painel/suplemento/{suplemento}/del', 'MainController@delSuplemento')->name('deletarSuplemento');

Route::get('/painel/exercicio/{exercicio}/del', 'MainController@delExercicio')->name('deletarExercicio');

Auth::routes();

Route::get('/painel', 'HomeController@index')->name('painel');



// POST

Route::post('/painel/artigo/addArtigo', 'MainController@addArtigo')->name('addArtigo');

Route::post('/painel/artigo/editArtigo', 'MainController@editArtigo')->name('editArtigo');

Route::post('/painel/dieta/editDieta', 'MainController@editDieta')->name('editDieta');

Route::post('/painel/suplemento/editSuplemento', 'MainController@editSuplemento')->name('editSuplemento');

Route::post('/painel/exercicio/editExercicio', 'MainController@editExercicio')->name('editExercicio');
