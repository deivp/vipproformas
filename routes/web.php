<?php

Route::get('/', 'publicPagesController@index')->name('public.home');

//PUBLICS PAGES
Route::get('proformas-construccion','publicPagesController@ultimas_proformas')
	->name('public.proformas');

Route::post('buscar-proformas', 'publicPagesController@buscar_proformas')
	->name('public.buscar_proformas');

Route::get('anuncios_categoria', 'publicPagesController@buscar_anuncio_categoria')
	->name('public.buscar_anuncio_categoria');

Route::get('proforma/{ad}/{title}', 'publicPagesController@ver_proforma')
	->name('public.ver_proforma');




Route::get('privacidad-seguridad', function(){
	return "Privacidad y Seguridad";
})->name('public.seguridad');

Route::get('como-funciona-vipproformas', function(){
	return "Como Funciona?";
})->name('public.about');

Route::get('contactos-vipproformas', function(){
	return "Contactanos";
})->name('public.contactos');


//PANEL PAGES
Route::get('nueva-proforma','Panel\proformsController@create')
		->name('panel.nueva_proforma')
		->middleware('auth');

Route::get('panel','Panel\proformsController@index')
		->name('panel.mis_proformas')
		->middleware('auth');

Route::get('verProforma/{ads}','Panel\proformsController@show')
		->name('panel.ver_proforma');

Route::get('create','Panel\proformsController@create')
		->name('panel.create')
		->middleware('auth');

Route::post('store','Panel\proformsController@store')
		->name('panel.store');

Route::put('update/{ad}','Panel\proformsController@update')->name('panel.update');

Route::delete('delete/{ad}','Panel\proformsController@destroy')
		->name('panel.destroy');



Route::post('acceder', 'Auth\LoginController@login')->name('user_login');
Route::post('salir', 'Auth\LoginController@logout')
		->name('logout');



