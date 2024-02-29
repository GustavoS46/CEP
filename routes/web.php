<?php

use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: 'EnderecoController@index')->name( 'nome');

Route::get(uri: '/adicionar', action: 'EnderecoController@adicionar')->name( 'adicionar');

Route::get(uri: '/buscar', action: 'EnderecoController@buscar')->name(name: 'buscar');

Route::post(uri: '/salvar', action: 'EnderecoController@buscar')->name(name: 'salvar');
