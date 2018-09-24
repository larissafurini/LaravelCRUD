<?php



Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'auth'], function(){Route::get('/atividades', 'AtividadeController@index');
Route::get('/atividades/create', 'AtividadeController@create');
Route::post('/atividades', 'AtividadeController@store');
Route::get('/atividades/{id}', 'AtividadeController@show');
Route::get('/atividades/{id}/edit', 'AtividadeController@edit');
Route::put('/atividades/{id}', 'AtividadeController@update');
Route::get('/atividades/{id}/delete', 'AtividadeController@delete');
Route::delete('/atividades/{id}', 'AtividadeController@destroy');
});

Route::get('/atividades','AtividadeController@index');
Route::get('/mensagens','MensagemController@index');


Route::get('/mensagens', 'MensagemController@index');
Route::get('/mensagens/{id}', 'MensagemController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
